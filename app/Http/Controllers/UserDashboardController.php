<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Membership;
use Illuminate\Support\Facades\Log;

class UserDashboardController extends Controller
{
	public function index()
	{
		// dd('UserDashboardController@index DIJALANKAN!'); // <-- TAMBAHKAN INI DI PALING ATAS METHOD

		// Kode Anda yang lain dalhamdi bawah ini untuk sementara tidak akan dijalankan
		$user = Auth::user();

		if (!$user) {
			Log::error('UserDashboardController: Auth::user() mengembalikan null padahal ada middleware auth.');
			return redirect()->route('login')->with('error', 'Sesi Anda mungkin berakhir, silakan login kembali.');
		}

		$activeMembership = Membership::where('user_id', $user->id)
			->where('status', 'active')
			->where('end_date', '>=', now())
			->with('membershipPackage')
			->orderBy('end_date', 'desc')
			->first();

		return view('user.dashboard', compact('user', 'activeMembership'));
	}
	/**
	 * Display the training schedule page.
	 *
	 * @return \Illuminate\View\View
	 */
	public function trainingSchedule() // <-- METHOD BARU
	{
		return view('user.training_schedule'); // Kita akan buat view ini
	}
}
