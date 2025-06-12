<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Payment;
use App\Models\User;
use App\Models\MembershipPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class MidtransController extends Controller
{
    public function notificationHandler(Request $request)
    {
        Log::info('MidtransController: notificationHandler method CALLED (via Log::info)');

        $rawNotificationInput = file_get_contents('php://input');
        Log::debug('MidtransController: Raw content from php://input: ' . $rawNotificationInput);
        $decodedForDebug = json_decode($rawNotificationInput, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            Log::debug('MidtransController: Successfully decoded php://input for debug: ', $decodedForDebug);
        } else {
            Log::error('MidtransController: Failed to decode php://input as JSON. Error: ' . json_last_error_msg());
        }

        Log::debug('==================== RAW MIDTRANS NOTIFICATION START (from $request->all()) ====================');
        Log::debug($request->all()); // Ini dari Laravel yang sudah mem-parse, mungkin berbeda dari php://input
        Log::debug('====================  RAW MIDTRANS NOTIFICATION END (from $request->all())  ====================');

        // Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');

        // Set opsi cURL, termasuk untuk SSL handling
        // Ambil konfigurasi dari .env, dengan default yang aman
        $sslVerify = env('MIDTRANS_SSL_VERIFY', true); // Defaultnya verifikasi SSL aktif
        $caPath = env('MIDTRANS_CA_PATH', storage_path('app/certs/cacert.pem')); // Default path cacert.pem di storage

        \Midtrans\Config::$curlOptions = [
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
            ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 60, // Timeout request
            CURLOPT_CONNECTTIMEOUT => 30, // Timeout koneksi
            CURLOPT_FOLLOWLOCATION => true, // Ikuti redirect
            CURLOPT_MAXREDIRS => 3, // Maksimum redirect
            // Konfigurasi SSL
            CURLOPT_SSL_VERIFYPEER => $sslVerify,
            CURLOPT_SSL_VERIFYHOST => $sslVerify ? 2 : 0, // 2 untuk cek hostname, 0 untuk tidak cek jika verifikasi peer false
            CURLOPT_CAINFO => $sslVerify ? $caPath : null, // Hanya set CAINFO jika verifikasi aktif dan path ada
            CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2, // Paksa TLS 1.2 jika perlu
        ];

        // Jika file CA tidak ada saat verifikasi SSL aktif, log error dan jangan set CAINFO
        if ($sslVerify && !file_exists($caPath)) {
            Log::error("MidtransController: File CA bundle tidak ditemukan di path yang dikonfigurasi untuk CURLOPT_CAINFO: {$caPath}. Verifikasi SSL mungkin gagal.");
            // Anda bisa memutuskan untuk tidak men-set CURLOPT_CAINFO jika file tidak ada
            // atau biarkan cURL mencoba default sistem (yang mungkin menyebabkan error SSL jika tidak dikonfigurasi)
            unset(\Midtrans\Config::$curlOptions[CURLOPT_CAINFO]); // Contoh: hapus jika tidak ada
        }


        // Untuk development/sandbox - Anda bisa uncomment ini JIKA SSL MASIH GAGAL dan Anda paham risikonya
        // Ini akan menimpa setting $sslVerify di atas jika !config('midtrans.is_production')
        if (!config('midtrans.is_production')) {
            Log::warning('MidtransController: Menggunakan pengaturan SSL yang lebih longgar untuk lingkungan sandbox (verifikasi SSL dinonaktifkan). JANGAN GUNAKAN DI PRODUKSI!');
            \Midtrans\Config::$curlOptions[CURLOPT_SSL_VERIFYPEER] = false;
            \Midtrans\Config::$curlOptions[CURLOPT_SSL_VERIFYHOST] = 0;
            // Tidak perlu set CURLOPT_CAINFO jika verifikasi dinonaktifkan
            if (isset(\Midtrans\Config::$curlOptions[CURLOPT_CAINFO])) {
                unset(\Midtrans\Config::$curlOptions[CURLOPT_CAINFO]);
            }
        }

        $notification = null;
        try {
            // Coba buat instance notifikasi Midtrans (ini akan memicu cURL internal untuk verifikasi)
            $notification = new \Midtrans\Notification();
            Log::info('MidtransController: Berhasil membuat instance Midtrans\Notification via SDK.');
        } catch (\Exception $e) {
            Log::error('Midtrans Notification - FATAL: Gagal membuat instance Midtrans\Notification via SDK: ' . $e->getMessage(), [
                'exception_class' => get_class($e),
                'error_code' => $e->getCode(), // Berguna jika Exception dari Midtrans\Exception
                'request_body_from_php_input' => $rawNotificationInput
            ]);

            // Fallback: Proses notifikasi secara manual jika SDK gagal
            Log::info('MidtransController: Mencoba memproses notifikasi secara manual sebagai fallback.');
            return $this->handleNotificationManually($request, $rawNotificationInput);
        }

        // Reset opsi cURL ke default setelah digunakan agar tidak mempengaruhi request lain
        \Midtrans\Config::$curlOptions = [];

        return $this->processNotification($notification, $request, $rawNotificationInput);
    }

    private function handleNotificationManually(Request $request, $rawInput)
    {
        try {
            $notificationData = json_decode($rawInput, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                // Jika json_decode gagal, coba ambil dari $request->all()
                // Ini berguna jika Content-Type bukan application/json murni atau sudah di-parse Laravel
                Log::warning('MidtransController: Gagal json_decode rawInput di handleNotificationManually, mencoba $request->all(). Error JSON: ' . json_last_error_msg());
                $notificationData = $request->all();
                if (empty($notificationData)) {
                    Log::error('MidtransController: Data notifikasi manual kosong setelah mencoba rawInput dan $request->all().');
                    return response()->json(['message' => 'Invalid notification data for manual processing.'], 400);
                }
            }

            Log::info('MidtransController: Memproses notifikasi secara manual dengan data:', $notificationData);

            // Verifikasi signature secara manual
            if (!$this->verifySignatureManually($notificationData)) {
                Log::error('MidtransController: Verifikasi signature manual GAGAL.');
                return response()->json(['message' => 'Invalid signature (manual verification).'], 403); // 403 Forbidden
            }
            Log::info('MidtransController: Verifikasi signature manual BERHASIL.');

            // Buat objek notifikasi tiruan (mock) dari data array
            $mockNotification = (object) $notificationData;

            return $this->processNotification($mockNotification, $request, $rawInput);
        } catch (\Exception $e) {
            Log::error('MidtransController: Pemrosesan notifikasi manual GAGAL', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'raw_input' => $rawInput
            ]);
            return response()->json(['message' => 'Gagal memproses notifikasi secara manual.'], 500);
        }
    }

    private function verifySignatureManually($data)
    {
        $serverKey = config('midtrans.server_key');
        // Pastikan field yang dibutuhkan ada di $data
        $orderId = $data['order_id'] ?? null;
        $statusCode = $data['status_code'] ?? null;
        $grossAmount = $data['gross_amount'] ?? null;
        $signatureKeyFromNotification = $data['signature_key'] ?? null;

        if (is_null($orderId) || is_null($statusCode) || is_null($grossAmount) || is_null($signatureKeyFromNotification)) {
            Log::warning('MidtransController: Data tidak lengkap untuk verifikasi signature manual.', $data);
            return false;
        }

        // Pastikan gross_amount memiliki format yang benar (misal: "10000.00")
        $grossAmountFormatted = number_format((float)$grossAmount, 2, '.', '');

        $stringToHash = $orderId . $statusCode . $grossAmountFormatted . $serverKey;
        $expectedSignature = hash('sha512', $stringToHash);

        $isValid = hash_equals($expectedSignature, $signatureKeyFromNotification);

        if (!$isValid) {
            Log::error('MidtransController: Verifikasi signature manual GAGAL.', [
                'string_to_hash' => $stringToHash,
                'expected_signature' => $expectedSignature,
                'received_signature' => $signatureKeyFromNotification,
                'order_id' => $orderId
            ]);
        }

        return $isValid;
    }

    private function processNotification($notification, Request $request, $rawNotificationInputForErrorLogging)
    {
        // Akses properti objek $notification dengan aman
        $transactionStatus = $notification->transaction_status ?? null;
        $paymentType = $notification->payment_type ?? null;
        $orderId = $notification->order_id ?? null;
        $fraudStatus = $notification->fraud_status ?? null;
        $statusCode = $notification->status_code ?? null;
        $transactionIdMidtrans = $notification->transaction_id ?? null;
        $transactionTime = $notification->transaction_time ?? null;
        $settlementTime = $notification->settlement_time ?? null;

        if (is_null($orderId) || is_null($transactionStatus)) {
            Log::error("Midtrans Notification - Data notifikasi tidak lengkap (order_id atau transaction_status kosong).", (array) $notification);
            return response()->json(['message' => 'Invalid notification data.'], 400);
        }

        Log::info("Midtrans Notification - Order ID: {$orderId}, Transaction Status: {$transactionStatus}, Payment Type: {$paymentType}, Fraud Status: {$fraudStatus}, Status Code: {$statusCode}");

        $payment = Payment::where('order_id', $orderId)->first();

        if (!$payment) {
            Log::error("Midtrans Notification - Payment not found for Order ID: {$orderId}");
            return response()->json(['message' => 'Payment not found.'], 404);
        }

        if ($payment->status !== 'pending') {
            Log::info("Midtrans Notification - Payment for Order ID: {$orderId} already processed or not pending. Current status: {$payment->status}");
            return response()->json(['message' => 'Payment already processed or not pending.'], 200);
        }

        DB::beginTransaction();
        try {
            if ($transactionStatus == 'capture') {
                if ($fraudStatus == 'challenge') {
                    $payment->status = 'challenge';
                    Log::info("Midtrans Notification - Order ID: {$orderId} - Payment CHALLENGE.");
                } else if ($fraudStatus == 'accept') {
                    $this->handleSuccessfulPayment($notification, $payment);
                }
            } else if ($transactionStatus == 'settlement') {
                $this->handleSuccessfulPayment($notification, $payment);
            } else if ($transactionStatus == 'pending') {
                Log::info("Midtrans Notification - Order ID: {$orderId} - Payment PENDING (notification received).");
            } else if ($transactionStatus == 'deny') {
                $payment->status = 'denied';
                Log::warning("Midtrans Notification - Order ID: {$orderId} - Payment DENIED.");
            } else if ($transactionStatus == 'expire') {
                $payment->status = 'expired';
                Log::warning("Midtrans Notification - Order ID: {$orderId} - Payment EXPIRED.");
            } else if ($transactionStatus == 'cancel') {
                $payment->status = 'cancelled';
                Log::warning("Midtrans Notification - Order ID: {$orderId} - Payment CANCELLED.");
            }

            $payment->payment_method = $paymentType;
            $payment->transaction_id_midtrans = $transactionIdMidtrans;
            $payment->transaction_time = $transactionTime;
            $payment->fraud_status = $fraudStatus;
            if ($settlementTime) {
                $payment->settlement_time = $settlementTime;
            }

            $payment->save();
            DB::commit();
            Log::info("Midtrans Notification - Order ID: {$orderId} - Successfully processed and database updated. New status: {$payment->status}");
            return response()->json(['message' => 'Notification processed successfully.'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            $notificationPayload = $notification ? (array) $notification : null;
            Log::critical("Midtrans Notification - CRITICAL ERROR while processing Order ID: {$orderId} - " . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'notification_payload' => $notificationPayload,
                'raw_input_during_processing_error' => $rawNotificationInputForErrorLogging // Menggunakan variabel yang di-pass
            ]);
            return response()->json(['message' => 'Internal server error while processing notification.'], 500);
        }
    }

    protected function handleSuccessfulPayment($notification, Payment $payment)
    {
        $payment->status = 'success';
        Log::info("Midtrans Notification - Order ID: {$payment->order_id} - Payment SUCCESS (settlement/capture).");

        // Akses custom fields dengan aman menggunakan null coalescing
        $packageId = $notification->custom_field1 ?? null;
        $hashedPassword = $notification->custom_field2 ?? null;
        $customerEmail = $notification->custom_field3 ?? $payment->customer_email; // Fallback ke email dari payment jika custom field tidak ada

        // Pastikan data penting ada sebelum melanjutkan
        if (is_null($packageId) || is_null($hashedPassword) || is_null($customerEmail)) {
            Log::error("Midtrans Notification - Data custom field tidak lengkap untuk Order ID: {$payment->order_id}", [
                'custom_field1' => $packageId,
                'custom_field2_exists' => !is_null($hashedPassword),
                'custom_field3' => $customerEmail,
            ]);
            throw new \Exception("Custom field data is incomplete for Order ID: {$payment->order_id}");
        }

        $customerName = $payment->customer_name;
        $customerPhone = $payment->customer_phone;

        $user = User::firstOrCreate(
            ['email' => $customerEmail],
            [
                'name' => $customerName,
                'password' => $hashedPassword, // Password sudah di-hash
                'phone' => $customerPhone,
                'role' => 'user',
                'email_verified_at' => now(),
            ]
        );

        if ($user->wasRecentlyCreated) {
            Log::info("Midtrans Notification - User created for Order ID: {$payment->order_id}, User ID: {$user->id}");
        } else {
            Log::info("Midtrans Notification - User already exists for Order ID: {$payment->order_id}, User ID: {$user->id}");
        }

        $package = MembershipPackage::find($packageId);
        if (!$package) {
            Log::error("Midtrans Notification - MembershipPackage not found for ID: {$packageId} (from custom_field1), Order ID: {$payment->order_id}");
            throw new \Exception("MembershipPackage not found for ID: {$packageId}");
        }

        $startDate = now();
        $endDate = $startDate->copy()->addDays($package->duration_days);

        $membership = Membership::create([
            'user_id' => $user->id,
            'membership_package_id' => $package->id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'status' => 'active',
            'payment_id' => $payment->id,
        ]);
        Log::info("Midtrans Notification - Membership created for Order ID: {$payment->order_id}, Membership ID: {$membership->id}, User ID: {$user->id}");

        $payment->user_id = $user->id;
        $payment->membership_id = $membership->id;
        // Status $payment->status sudah di-set 'success' di awal method ini.
        // $payment->save() akan dipanggil di method processNotification setelah ini.
    }
}
