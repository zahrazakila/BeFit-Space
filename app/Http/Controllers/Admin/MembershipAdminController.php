<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Membership; // Pastikan use statement ini ada
use Illuminate\Http\Request;

class MembershipAdminController extends Controller
{
    public function index(Request $request)
    {
        // PINDAHKAN SEMUA LOGIKA PENCARIAN & PAGINATION MEMBERSHIP KE SINI
        $searchKeyword = $request->input('search');
        $query = Membership::with(['user', 'membershipPackage']);

        if ($searchKeyword) {
            $query->whereHas('user', function ($q) use ($searchKeyword) {
                $q->where('name', 'like', "%{$searchKeyword}%")
                    ->orWhere('email', 'like', "%{$searchKeyword}%");
            })
                ->orWhereHas('membershipPackage', function ($q) use ($searchKeyword) {
                    $q->where('name', 'like', "%{$searchKeyword}%");
                })
                ->orWhere('status', 'like', "%{$searchKeyword}%");
        }

        // Di sini kita gunakan paginate, bukan limit
        $memberships = $query->latest()->paginate(15)->withQueryString();

        return view('admin.memberships.index', compact('memberships', 'searchKeyword'));
    }
}
