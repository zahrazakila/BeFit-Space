{{-- File: resources/views/checkout.blade.php --}}
<x-guest-layout>
    <div
        class="relative isolate bg-gradient-to-b from-[#023047] to-gray-100 dark:from-gray-900 dark:to-gray-800 px-6 py-16 sm:py-24 lg:px-8"">
        <!-- Main Content -->
        <div class="px-6 py-12 lg:px-8">
            <!-- Registration Badge -->
            <div class="flex justify-center mb-8">
                <div
                    class="bg-yellow-400 text-slate-800 px-6 py-2 rounded-full font-semibold flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Pendaftaran Member</span>
                </div>
            </div>

            <!-- Hero Text -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                    Langkah Terakhir Menuju
                    <span class="text-yellow-400 block">Kebugaran!</span>
                </h1>
                <p class="text-slate-300 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                    Harap lengkapi data diri Anda untuk menyelesaikan pendaftaran dan
                    memulai perjalanan fitness Anda bersama <span class="text-yellow-400 font-semibold">BeFit
                        Space</span>.
                </p>
            </div>

            <!-- Main Cards Container -->
            <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-8">
                <!-- Package Selection Card -->
                <div class="rounded-2xl p-8 border"
                    style="background-color: rgba(2, 48, 71, 0.7); border-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                    <div class="mb-6">
                        <p class="text-yellow-400 font-semibold mb-2">Paket Pilihan Anda:</p>
                        <h2 class="text-3xl font-bold text-white mb-4">Paket 3 Bulan</h2>
                        <div
                            class="inline-flex items-center bg-yellow-400 text-slate-800 px-4 py-2 rounded-full font-semibold">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            Paket Terpilih
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b"
                            style="border-color: rgba(255, 255, 255, 0.2);">
                            <span class="text-slate-300">Durasi Paket:</span>
                            <span class="text-yellow-400 font-bold text-xl">90 Hari</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b"
                            style="border-color: rgba(255, 255, 255, 0.2);">
                            <span class="text-slate-300">Order ID:</span>
                            <span class="text-white font-mono text-sm">{{ $payment->order_id }}</span>
                        </div>
                        <div class="flex justify-between items-center py-4">
                            <span class="text-slate-300 text-lg">Total Pembayaran:</span>
                            <span class="text-white font-bold text-3xl">
                                Rp {{ number_format($payment->amount, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Payment Information Card -->
                <div class="bg-white rounded-2xl p-8 shadow-2xl">
                    <div class="mb-6">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-slate-800" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold" style="color: #023047;">Informasi Pembayaran</h3>
                        </div>
                        <p class="text-slate-600">Klik tombol di bawah untuk menyelesaikan pembayaran Anda.</p>
                    </div>

                    <div class="space-y-6">
                        <!-- Payment Summary -->
                        <div class="bg-slate-50 rounded-xl p-6">
                            <h4 class="font-semibold mb-4" style="color: #023047;">Ringkasan Pembayaran</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-slate-600">Paket Membership</span>
                                    <span class="font-semibold">3 Bulan</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-slate-600">Durasi Akses</span>
                                    <span class="font-semibold">90 Hari</span>
                                </div>
                                <div class="border-t pt-3 flex justify-between">
                                    <span class="font-semibold" style="color: #023047;">Total</span>
                                    <span class="font-bold text-xl" style="color: #023047;">
                                        Rp {{ number_format($payment->amount, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Button -->
                        <button id="pay-button"
                            class="w-full text-white font-bold py-4 px-6 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center space-x-3"
                            style="background: linear-gradient(135deg,#FFB703 0%, #FFB703 100%);"
                            onmouseover="this.style.background='linear-gradient(135deg,#FFB703 0%, #FFB703 100%)'"
                            onmouseout="this.style.background='linear-gradient(135deg, #FFB703 0%, #FFB703 100%)'">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <span>BAYAR SEKARANG</span>
                        </button>

                        <!-- Security Notice -->
                        <div class="flex items-center justify-center space-x-2 text-sm text-slate-500">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Pembayaran aman dengan enkripsi SSL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Script Penting untuk memanggil Midtrans Snap --}}
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ $clientKey }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').addEventListener('click', function() {
            // Add loading state
            const button = this;
            const originalText = button.innerHTML;
            button.innerHTML = `
                <svg class="animate-spin w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Memproses...
            `;
            button.disabled = true;

            // Memanggil pop-up pembayaran Midtrans dengan token dari controller
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    alert(
                        "🎉 Pembayaran berhasil! Selamat datang di BeFit Space! Akun Anda akan segera dibuat. Silakan cek email Anda untuk detail login."
                    );
                    window.location.href = '/';
                },
                onPending: function(result) {
                    alert(
                        "⏳ Menunggu pembayaran Anda. Silakan selesaikan transaksi untuk mengaktifkan membership."
                    );
                    button.innerHTML = originalText;
                    button.disabled = false;
                },
                onError: function(result) {
                    alert("❌ Pembayaran gagal! Silakan coba lagi atau hubungi customer service kami.");
                    button.innerHTML = originalText;
                    button.disabled = false;
                },
                onClose: function() {
                    alert(
                        '💪 Jangan menyerah! Tutup jendela pembayaran terdeteksi. Silakan coba lagi untuk memulai journey fitness Anda!'
                    );
                    button.innerHTML = originalText;
                    button.disabled = false;
                }
            });
        });
    </script>
</x-guest-layout>
