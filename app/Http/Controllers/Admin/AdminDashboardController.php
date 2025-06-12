<?php

namespace App\Http\Controllers\Admin; // Pastikan namespace ini benar jika Anda meletakkannya di subfolder Admin

use App\Http\Controllers\Controller; // Tambahkan ini jika controller Anda extends base Controller
use Illuminate\Http\Request;
use App\Models\Membership;
use App\Models\Payment;
use App\Models\User;
use App\Models\FreeTrialSubmission;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminDashboardController extends Controller // Pastikan extends Controller jika belum
{
    /**
     * Display a listing of all memberships and dashboard statistics.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        // // --- Bagian Pencarian Membership (tetap sama) ---
        // $searchKeyword = $request->input('search');
        // $query = Membership::with(['user', 'membershipPackage']);

        // if ($searchKeyword) {
        //     $query->whereHas('user', function ($q) use ($searchKeyword) {
        //         $q->where('name', 'like', "%{$searchKeyword}%")
        //             ->orWhere('email', 'like', "%{$searchKeyword}%");
        //     })
        //         ->orWhereHas('membershipPackage', function ($q) use ($searchKeyword) {
        //             $q->where('name', 'like', "%{$searchKeyword}%");
        //         })
        //         ->orWhere('status', 'like', "%{$searchKeyword}%");
        // }
        // $memberships = $query->latest()->paginate(10)->withQueryString();

        $latestMemberships = Membership::with(['user', 'membershipPackage'])
            ->latest()
            ->limit(5)
            ->get();

        // --- Perhitungan Statistik untuk Dashboard (tetap sama) ---
        $totalRevenue = Payment::where('status', 'success')->sum('amount');

        $activeMembersCount = Membership::where('status', 'active')
            ->where('end_date', '>=', now())
            ->distinct('user_id')
            ->count();

        $totalUsersCount = User::where('role', 'user')->count();

        $newMembersThisMonth = User::where('role', 'user')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        // --- Logika untuk Data Grafik Pendaftaran Member Baru ---
        $range = $request->query('range', '6m'); // Default ke 6 bulan
        $chartLabels = [];
        $chartData = [];
        $endDate = Carbon::parse(now()->endOfDay()); // Gunakan Carbon untuk konsistensi dan endOfDay()

        switch ($range) {
            case '1m': // Data harian selama 30 hari terakhir
                $startDate = Carbon::parse(now()->subDays(29)->startOfDay());
                $userRegistrationChartData = User::select(
                    DB::raw("COUNT(*) as count"),
                    DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') as day_date")
                )
                    ->where('role', 'user')
                    ->whereBetween('created_at', [$startDate, $endDate])
                    ->groupBy('day_date')
                    ->orderBy('day_date', 'asc')
                    ->get();

                $period = $startDate->copy(); // Gunakan copy() agar tidak mengubah $startDate
                while ($period <= $endDate) {
                    $formattedDate = $period->format('Y-m-d');
                    $chartLabels[] = $period->format('d M');
                    $dataPoint = $userRegistrationChartData->firstWhere('day_date', $formattedDate);
                    $chartData[] = $dataPoint ? (int)$dataPoint->count : 0;
                    $period->addDay();
                }
                break;

            case '3m': // Data mingguan selama 3 bulan terakhir
                $startDate = Carbon::parse(now()->subMonths(2)->startOfWeek(Carbon::MONDAY)); // Minggu dimulai Senin
                $userRegistrationChartData = User::select(
                    DB::raw("COUNT(*) as count"),
                    DB::raw("YEAR(created_at) as year"),
                    // Menggunakan mode 3 untuk WEEK() agar konsisten dengan ISO-8601 (Minggu dimulai Senin, minggu 1-53)
                    DB::raw("WEEK(created_at, 3) as week")
                )
                    ->where('role', 'user')
                    ->where('created_at', '>=', $startDate)
                    ->where('created_at', '<=', $endDate) // Tambahkan kondisi akhir
                    ->groupBy('year', 'week')
                    ->orderBy('year', 'asc')
                    ->orderBy('week', 'asc')
                    ->get();

                $period = $startDate->copy();
                while ($period <= $endDate) {
                    $year = $period->year;
                    $week = $period->weekOfYear; // Carbon's weekOfYear adalah ISO-8601

                    $chartLabels[] = "W" . $week . " '" . $period->format('y');
                    // Perbaikan cara mencari dataPoint
                    $dataPoint = $userRegistrationChartData->first(function ($item) use ($year, $week) {
                        return $item->year == $year && $item->week == $week;
                    });
                    $chartData[] = $dataPoint ? (int)$dataPoint->count : 0;
                    $period->addWeek();
                }
                break;

            case '6m':
            default:
                $startDate = Carbon::parse(now()->subMonths(5)->startOfMonth());
                $userRegistrationChartData = User::select(
                    DB::raw("COUNT(*) as count"),
                    DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month_year")
                )
                    ->where('role', 'user')
                    ->where('created_at', '>=', $startDate)
                    ->where('created_at', '<=', $endDate) // Tambahkan kondisi akhir
                    ->groupBy('month_year')
                    ->orderBy('month_year', 'asc')
                    ->get();

                $period = $startDate->copy();
                while ($period <= $endDate) {
                    $formattedMonthYear = $period->format('Y-m');
                    $chartLabels[] = $period->format('M Y');
                    $dataPoint = $userRegistrationChartData->firstWhere('month_year', $formattedMonthYear);
                    $chartData[] = $dataPoint ? (int)$dataPoint->count : 0;
                    $period->addMonth();
                }
                break;
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'labels' => $chartLabels,
                'data' => $chartData,
            ]);
        }
        // Ambil data pendaftar trial yang belum ditandai sudah dihubungi
        $trialSubmissions = FreeTrialSubmission::whereNull('contacted_at')
            ->latest()
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact(
            // 'memberships',
            // 'searchKeyword',
            'latestMemberships',
            'totalRevenue',
            'activeMembersCount',
            'totalUsersCount',
            'newMembersThisMonth',
            'chartLabels',
            'chartData',
            'trialSubmissions'
        ));
    }
}
