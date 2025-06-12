<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\FreeTrialController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\FreeTrialAdminController;
use App\Http\Controllers\Admin\MembershipAdminController;
use App\Http\Controllers\Admin\MembershipPackageController;
use App\Http\Middleware\VerifyCsrfToken;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================================
// 1. RUTE PUBLIK (DAPAT DIAKSES SEMUA ORANG)
// ==========================================================
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman Statis
Route::get('/tentang', function () {
    return view('about');
})->name('about.us');
Route::get('/kontak', function () {
    return view('contact');
})->name('contact.us');

// Halaman Lokasi
Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/{id}', [LocationController::class, 'show'])->name('locations.show');

// Alur Pembelian & Klaim Trial (Guest)
Route::get('/memberships', [MembershipController::class, 'index'])->name('memberships.index');
Route::get('/memberships/{package_id}/register', [MembershipController::class, 'showRegistrationForm'])->name('memberships.register');
Route::post('/memberships/checkout', [MembershipController::class, 'checkout'])->name('memberships.checkout');
Route::post('/claim-trial', [FreeTrialController::class, 'store'])->name('trial.store');

// Webhook Notifikasi Midtrans (Tanpa CSRF/Web Middleware)


// Route::post('/midtrans/notification', [MidtransController::class, 'notificationHandler'])
//     ->name('midtrans.notification')
//     ->withoutMiddleware([VerifyCsrfToken::class]); // <-- TAMBAHKAN BARIS INI


// ==========================================================
// 2. RUTE OTENTIKASI (LOGIN, REGISTER, DLL)
// ==========================================================
require __DIR__ . '/auth.php';


// ==========================================================
// 3. RUTE UMUM SETELAH LOGIN (UNTUK SEMUA ROLE)
// ==========================================================
Route::middleware('auth')->group(function () {
    // Pengarah Dashboard Utama
    Route::get('/dashboard', function () {
        $user = Auth::user();
        return $user->role === 'admin'
            ? redirect()->route('admin.dashboard')
            : redirect()->route('user.dashboard');
    })->middleware('verified')->name('dashboard');

    // Pengaturan Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ==========================================================
// 4. GRUP RUTE KHUSUS ADMIN (WAJIB LOGIN & ROLE ADMIN)
// ==========================================================
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::get('/memberships', [MembershipAdminController::class, 'index'])->name('memberships.index');

    Route::get('/free-trials', [FreeTrialAdminController::class, 'index'])->name('trials.index');
    Route::patch('/free-trials/{submission}/mark-contacted', [FreeTrialAdminController::class, 'markAsContacted'])->name('trials.markContacted');

    // Resource untuk Kelola Paket (Create, Read, Update, Delete)
    Route::resource('membership-packages', MembershipPackageController::class);
});


// ==========================================================
// 5. GRUP RUTE KHUSUS USER BIASA (WAJIB LOGIN & ROLE USER)
// ==========================================================
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('/training-schedule', [UserDashboardController::class, 'trainingSchedule'])->name('training-schedule');
});
