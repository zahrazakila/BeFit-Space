<?php

namespace App\Http\Controllers;

use App\Models\MembershipPackage;
use App\Models\Payment; // Import model Payment
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import Hash untuk password
use Illuminate\Support\Facades\Log; // Untuk logging
use Illuminate\Validation\Rules\Password; // Import aturan validasi password

class MembershipController extends Controller
{
    /**
     * Menampilkan daftar semua paket membership untuk publik.
     * View 'memberships.index' akan menggunakan data diskon dari model.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua paket, diurutkan berdasarkan harga final (price).
        // Model MembershipPackage diasumsikan memiliki:
        // - `price` (harga final setelah diskon, dihitung saat admin menyimpan paket)
        // - `original_price` (harga asli sebelum diskon)
        // - `discount_percentage`
        // - `is_on_active_discount` (accessor di model untuk mengecek apakah diskon berlaku saat ini)
        $packages = MembershipPackage::orderBy('price', 'asc')->get();
        return view('memberships.index', compact('packages'));
    }

    /**
     * Menampilkan form registrasi untuk paket yang dipilih.
     *
     * @param  int  $package_id
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm($package_id)
    {
        // Mengambil data paket berdasarkan ID, atau gagal (404) jika tidak ditemukan.
        $package = MembershipPackage::findOrFail($package_id);
        // View 'memberships.register' akan menampilkan $package->price sebagai harga yang akan dibayar.
        return view('memberships.register', compact('package'));
    }

    /**
     * Memproses form registrasi, membuat record pembayaran pending,
     * dan mendapatkan token Snap Midtrans untuk proses pembayaran.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function checkout(Request $request)
    {
        // 1. Validasi semua data dari form registrasi
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'], // Pastikan unik di tabel users
            'phone' => ['required', 'string', 'max:20', 'regex:/^[0-9\-\+\s\(\)]*$/'], // Validasi nomor telepon dasar
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()], // Aturan password yang lebih kuat
            'terms' => ['accepted'],
            'package_id' => ['required', 'exists:membership_packages,id'],
        ]);

        // 2. Ambil data paket yang dipilih (gunakan findOrFail untuk keamanan)
        $package = MembershipPackage::findOrFail($validatedData['package_id']);

        // 3. Buat record baru di tabel 'payments'
        //    Order ID unik untuk setiap transaksi.
        $orderId = 'BEFIT-' . strtoupper(uniqid()) . '-' . $package->id; // Format Order ID yang lebih unik

        // Simpan detail pelanggan dan transaksi awal ke tabel payments
        $payment = Payment::create([
            'user_id' => null, // Akan diisi setelah user berhasil dibuat (setelah pembayaran sukses)
            'membership_id' => null, // Akan diisi setelah membership berhasil dibuat
            'order_id' => $orderId,
            'amount' => $package->price, // Gunakan harga FINAL dari paket ($package->price sudah termasuk diskon jika ada)
            'status' => 'pending', // Status awal pembayaran
            'customer_name' => $validatedData['name'],
            'customer_email' => $validatedData['email'],
            'customer_phone' => $validatedData['phone'],
            // 'payment_token', 'payment_method', 'transaction_time', 'fraud_status'
            // akan diisi nanti oleh Midtrans atau notifikasi.
        ]);

        // 4. Konfigurasi Midtrans
        //    Ambil konfigurasi dari file config/midtrans.php (yang merujuk ke .env)
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = config('midtrans.is_sanitized', true); // Default true jika tidak ada di config
        \Midtrans\Config::$is3ds = config('midtrans.is_3ds', true);         // Default true jika tidak ada di config

        Log::info('MembershipController - Data untuk Midtrans:', [
            'order_id' => $orderId,
            'customer_name' => $validatedData['name'],
            'customer_email' => $validatedData['email'],
            'customer_phone' => $validatedData['phone'],
            'package_name' => $package->name,
            'package_price_final' => $package->price, // Harga yang dikirim ke Midtrans
            'package_id_from_request' => $validatedData['package_id'],
            'password_provided_for_logging' => !empty($validatedData['password'])
        ]);

        // 5. Siapkan parameter untuk dikirim ke Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => (int) round($package->price), // Pastikan integer dan dibulatkan jika perlu
            ],
            'customer_details' => [
                'first_name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
            ],
            'item_details' => [[
                'id' => $package->id,
                'price' => (int) round($package->price), // Harga per item juga harga FINAL
                'quantity' => 1,
                'name' => $package->name,
            ]],
            // custom_fields digunakan untuk menyimpan data tambahan yang akan berguna saat notifikasi
            // untuk membuat user dan membership setelah pembayaran berhasil.
            'custom_field1' => $validatedData['package_id'],        // package_id
            'custom_field2' => Hash::make($validatedData['password']), // password yang sudah di-hash
            'custom_field3' => $validatedData['email'],             // email user
        ];

        try {
            // 6. Dapatkan Snap Token dari Midtrans
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            // 7. Simpan Snap Token ke record payment di database
            $payment->payment_token = $snapToken;
            $payment->save();

            // 8. Kirim Snap Token dan Client Key ke view 'checkout'
            //    View 'checkout' akan menggunakan ini untuk menampilkan halaman pembayaran Midtrans.
            $clientKey = config('midtrans.client_key');
            return view('checkout', compact('snapToken', 'clientKey', 'payment'));
        } catch (\Exception $e) {
            // Jika gagal mendapatkan Snap Token, catat error dan kembalikan user ke form sebelumnya
            Log::error('MembershipController - Gagal mendapatkan Snap Token Midtrans: ' . $e->getMessage(), [
                'order_id' => $orderId,
                'params_sent_to_midtrans' => $params, // Log parameter yang dikirim untuk debugging
                'exception_trace' => $e->getTraceAsString() // Untuk debugging lebih detail
            ]);
            // Kembalikan ke halaman sebelumnya dengan pesan error dan input yang sudah diisi
            return back()
                ->withErrors(['error_payment' => 'Terjadi kesalahan saat memproses pembayaran Anda. Silakan coba beberapa saat lagi atau hubungi dukungan pelanggan.'])
                ->withInput(); // Agar form tetap terisi dengan data sebelumnya
        }
    }
}
