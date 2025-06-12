{{-- File: resources/views/memberships/register.blade.php --}}
<x-guest-layout>
    <div
        class="relative isolate bg-gradient-to-b from-[#023047] to-gray-100 dark:from-gray-900 dark:to-gray-800 px-6 py-16 sm:py-24 lg:px-8">
        {{-- Background decorative elements --}}
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <div class="absolute top-20 left-10 w-32 h-32 bg-[#FFB703]/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
        </div>

        {{-- Hero Section - Updated text colors for dark background --}}
        <div class="mx-auto max-w-3xl text-center mb-16">
            <div
                class="inline-flex items-center rounded-full bg-[#FFB703]/20 backdrop-blur-sm px-6 py-2 text-sm font-semibold text-[#FFB703] mb-6">
                <svg class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                Pendaftaran Member
            </div>

            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Langkah Terakhir Menuju <span class="text-[#FFB703]">Kebugaran!</span>
            </h1>

            <p class="mt-6 text-xl leading-8 text-gray-200 max-w-2xl mx-auto">
                Harap lengkapi data diri Anda untuk menyelesaikan pendaftaran dan memulai perjalanan fitness Anda
                bersama <span class="font-semibold text-[#FFB703]">BeFit Space</span>.
            </p>
        </div>

        {{-- Main Container --}}
        <div class="mx-auto max-w-6xl">
            <div class="bg-white/95 backdrop-blur-sm dark:bg-gray-800 shadow-2xl rounded-3xl overflow-hidden">
                <div class="grid lg:grid-cols-12">

                    {{-- Left Column: Package Details --}}
                    <div class="lg:col-span-5 bg-gradient-to-br from-[#023047] to-[#034263] p-8 lg:p-12 text-white">
                        <div class="sticky top-8">
                            <!-- Package Header -->
                            <div class="mb-8">
                                <h3 class="text-lg font-semibold text-[#FFB703] mb-2">Paket Pilihan Anda:</h3>
                                <p class="text-3xl lg:text-4xl font-bold mb-4">{{ $package->name }}</p>

                                <!-- Package Badge -->
                                <div
                                    class="inline-flex items-center rounded-full bg-[#FFB703]/20 px-4 py-2 text-sm font-medium text-[#FFB703]">
                                    <svg class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    Paket Terpilih
                                </div>
                            </div>

                            <!-- Package Details -->
                            <div class="space-y-4 mb-8">
                                <div
                                    class="flex justify-between items-center p-4 bg-white/10 backdrop-blur-sm rounded-lg">
                                    <span class="text-gray-200">Durasi Paket:</span>
                                    <span class="font-bold text-[#FFB703] text-lg">{{ $package->duration_days }}
                                        Hari</span>
                                </div>

                                <div
                                    class="flex justify-between items-center p-4 bg-white/10 backdrop-blur-sm rounded-lg">
                                    <span class="text-gray-200">Harga Paket:</span>
                                    <span class="font-bold text-white text-lg">Rp
                                        {{ number_format($package->price, 0, ',', '.') }}</span>
                                </div>
                            </div>

                            <!-- Total Payment -->
                            <div
                                class="p-6 bg-[#FFB703]/20 backdrop-blur-sm rounded-xl border border-[#FFB703]/30 mb-8">
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-white">Total Pembayaran:</span>
                                    <span class="text-3xl font-bold text-[#FFB703]">Rp
                                        {{ number_format($package->price, 0, ',', '.') }}</span>
                                </div>
                            </div>

                            <!-- Features List -->
                            <div class="space-y-4 mb-8">
                                <h4 class="text-lg font-semibold text-[#FFB703] mb-4">Yang Anda Dapatkan:</h4>

                                <ul class="space-y-3">
                                    <li class="flex items-center gap-x-3">
                                        <svg class="h-5 w-5 flex-none text-[#FFB703]" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-200">Akses semua alat gym</span>
                                    </li>
                                    <li class="flex items-center gap-x-3">
                                        <svg class="h-5 w-5 flex-none text-[#FFB703]" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-200">Ruang ganti & Loker</span>
                                    </li>
                                    <li class="flex items-center gap-x-3">
                                        <svg class="h-5 w-5 flex-none text-[#FFB703]" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-200">Akses Wi-Fi gratis</span>
                                    </li>
                                    <li class="flex items-center gap-x-3">
                                        <svg class="h-5 w-5 flex-none text-[#FFB703]" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-200">Konsultasi fitness gratis</span>
                                    </li>
                                    <li class="flex items-center gap-x-3">
                                        <svg class="h-5 w-5 flex-none text-[#FFB703]" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-gray-200">Akses mobile app</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Security Notice -->
                            <div class="p-4 bg-white/5 backdrop-blur-sm rounded-lg border border-white/10">
                                <div class="flex items-start gap-3">
                                    <svg class="h-5 w-5 text-[#FFB703] mt-0.5 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div>
                                        <p class="text-sm text-gray-300 leading-relaxed">
                                            Anda akan diarahkan ke halaman pembayaran setelah melengkapi data diri.
                                            Pastikan semua data terisi dengan benar untuk proses yang lancar.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right Column: Registration Form --}}
                    <div class="lg:col-span-7 p-8 lg:p-12">
                        {{-- Error Messages --}}
                        @if ($errors->any())
                            <div
                                class="mb-8 p-6 bg-red-50 border border-red-200 text-red-800 rounded-xl dark:bg-red-900/20 dark:text-red-200 dark:border-red-800/30">
                                <div class="flex items-start gap-3">
                                    <svg class="h-5 w-5 text-red-500 mt-0.5 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div>
                                        <strong class="font-bold">Oops! Ada beberapa kesalahan pada input Anda:</strong>
                                        <ul class="mt-2 list-disc list-inside text-sm space-y-1">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('memberships.checkout') }}" id="registration-form"
                            data-form-type="registration">
                            @csrf
                            <input type="hidden" name="package_id" value="{{ $package->id }}">

                            <div class="space-y-12">
                                <!-- Personal Information Section -->
                                <div class="border-b border-gray-200 dark:border-gray-700 pb-12">
                                    <div class="flex items-center gap-3 mb-6">
                                        <div
                                            class="w-8 h-8 bg-[#FFB703] rounded-full flex items-center justify-center">
                                            <svg class="h-4 w-4 text-gray-900" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="text-2xl font-bold text-[#023047] dark:text-white">Informasi
                                                Pribadi</h2>
                                            <p class="text-gray-600 dark:text-gray-400">Data ini akan digunakan untuk
                                                akun Anda.</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-6">
                                        <div class="sm:col-span-6">
                                            <label for="name"
                                                class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">
                                                Nama Lengkap <span class="text-red-500">*</span>
                                            </label>
                                            <x-text-input id="name" name="name" type="text"
                                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 text-base py-3"
                                                :value="old('name')" required autofocus autocomplete="name"
                                                placeholder="Masukkan nama lengkap sesuai KTP"
                                                data-field-type="fullname" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>

                                        <div class="sm:col-span-4">
                                            <label for="email"
                                                class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">
                                                Alamat Email <span class="text-red-500">*</span>
                                            </label>
                                            <x-text-input id="email" name="email" type="email"
                                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 text-base py-3"
                                                :value="old('email')" required autocomplete="email"
                                                placeholder="nama@email.com" data-field-type="email" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="phone"
                                                class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">
                                                Nomor Telepon <span class="text-red-500">*</span>
                                            </label>
                                            <x-text-input id="phone" name="phone" type="tel"
                                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 text-base py-3"
                                                :value="old('phone')" required placeholder="08123456789"
                                                data-field-type="phone" />
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Account Security Section -->
                                <div class="border-b border-gray-200 dark:border-gray-700 pb-12">
                                    <div class="flex items-center gap-3 mb-6">
                                        <div
                                            class="w-8 h-8 bg-[#FFB703] rounded-full flex items-center justify-center">
                                            <svg class="h-4 w-4 text-gray-900" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="text-2xl font-bold text-[#023047] dark:text-white">Keamanan Akun
                                            </h2>
                                            <p class="text-gray-600 dark:text-gray-400">Buat password yang kuat untuk
                                                akun Anda.</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
                                        <div>
                                            <label for="password"
                                                class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">
                                                Password <span class="text-red-500">*</span>
                                            </label>
                                            <x-text-input id="password" name="password" type="password"
                                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 text-base py-3"
                                                required autocomplete="new-password" data-field-type="password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                                Minimal 8 karakter, kombinasi huruf besar, huruf kecil, angka, dan
                                                simbol.
                                            </p>
                                        </div>

                                        <div>
                                            <label for="password_confirmation"
                                                class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">
                                                Konfirmasi Password <span class="text-red-500">*</span>
                                            </label>
                                            <x-text-input id="password_confirmation" name="password_confirmation"
                                                type="password"
                                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 text-base py-3"
                                                required autocomplete="new-password"
                                                data-field-type="password-confirm" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Terms and Conditions -->
                                <div>
                                    <div class="flex items-center gap-3 mb-6">
                                        <div
                                            class="w-8 h-8 bg-[#FFB703] rounded-full flex items-center justify-center">
                                            <svg class="h-4 w-4 text-gray-900" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm8 0a1 1 0 011-1h6a1 1 0 011 1v2a1 1 0 01-1 1h-6a1 1 0 01-1-1V8zm0 4a1 1 0 011-1h6a1 1 0 011 1v2a1 1 0 01-1 1h-6a1 1 0 01-1-1v-2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="text-2xl font-bold text-[#023047] dark:text-white">Persetujuan
                                            </h2>
                                            <p class="text-gray-600 dark:text-gray-400">Konfirmasi persetujuan Anda.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-6">
                                        <div class="flex gap-4 items-start">
                                            <div class="flex h-6 items-center">
                                                <input id="terms" name="terms" type="checkbox" required
                                                    class="h-5 w-5 rounded border-gray-300 dark:bg-gray-900 dark:border-gray-600 text-[#FFB703] focus:ring-[#FFB703]"
                                                    data-field-type="checkbox">
                                            </div>
                                            <div class="text-sm leading-6">
                                                <label for="terms"
                                                    class="font-semibold text-gray-900 dark:text-gray-200 cursor-pointer">
                                                    Saya menyetujui syarat dan ketentuan
                                                </label>
                                                <p class="text-gray-600 dark:text-gray-400 mt-1">
                                                    Saya telah membaca dan menyetujui
                                                    <a href="#"
                                                        class="font-semibold text-[#FFB703] hover:text-[#FFB703]/80 underline">Syarat
                                                        & Ketentuan</a>
                                                    serta
                                                    <a href="#"
                                                        class="font-semibold text-[#FFB703] hover:text-[#FFB703]/80 underline">Kebijakan
                                                        Privasi</a>
                                                    BeFit Space.
                                                </p>
                                                <x-input-error :messages="$errors->get('terms')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Form Actions -->
                            <div
                                class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-6 pt-8 border-t border-gray-200 dark:border-gray-700">
                                <a href="{{ route('memberships.index') }}"
                                    class="inline-flex items-center text-base font-semibold text-gray-600 dark:text-gray-400 hover:text-[#023047] dark:hover:text-white transition-colors">
                                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 12H5m0 0l7 7m-7-7l7-7" />
                                    </svg>
                                    Kembali ke Pilihan Paket
                                </a>

                                <button type="submit"
                                    class="inline-flex items-center justify-center rounded-lg bg-[#FFB703] px-8 py-4 text-base font-bold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus:outline-none focus:ring-2 focus:ring-[#FFB703] focus:ring-offset-2 transition-all duration-200 transform hover:scale-105">
                                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                    Lanjutkan ke Pembayaran
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="mx-auto max-w-4xl mt-16">
            <div class="bg-white/95 backdrop-blur-sm dark:bg-gray-800 rounded-2xl shadow-lg p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-[#FFB703]/20 rounded-full flex items-center justify-center mb-4">
                            <svg class="h-6 w-6 text-[#FFB703]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Data Aman</h3>
                        <p class="text-gray-600 dark:text-gray-300">Informasi Anda dilindungi dengan enkripsi SSL</p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-[#FFB703]/20 rounded-full flex items-center justify-center mb-4">
                            <svg class="h-6 w-6 text-[#FFB703]" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Support 24/7</h3>
                        <p class="text-gray-600 dark:text-gray-300">Tim customer service siap membantu Anda</p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-[#FFB703]/20 rounded-full flex items-center justify-center mb-4">
                            <svg class="h-6 w-6 text-[#FFB703]" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Terpercaya</h3>
                        <p class="text-gray-600 dark:text-gray-300">Dipercaya oleh 500+ member aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Enhanced JavaScript for form compatibility --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form enhancement for better UX
            const form = document.getElementById('registration-form');
            const inputs = form.querySelectorAll(
                'input[type="text"], input[type="email"], input[type="tel"], input[type="password"]');

            // Add floating label effect
            inputs.forEach(function(input) {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });

                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });

                // Trigger change event for extensions
                input.addEventListener('input', function() {
                    this.dispatchEvent(new Event('change', {
                        bubbles: true
                    }));
                });
            });

            // Password strength indicator
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('password_confirmation');

            if (passwordInput && confirmPasswordInput) {
                confirmPasswordInput.addEventListener('input', function() {
                    if (this.value && passwordInput.value !== this.value) {
                        this.setCustomValidity('Password tidak cocok');
                    } else {
                        this.setCustomValidity('');
                    }
                });
            }

            // Form submission enhancement
            form.addEventListener('submit', function(e) {
                const submitButton = form.querySelector('button[type="submit"]');
                submitButton.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Memproses...
                `;
                submitButton.disabled = true;
            });

            // Extension compatibility
            setTimeout(function() {
                window.addEventListener('error', function(e) {
                    if (e.message && e.message.includes('fillThisForm')) {
                        console.log('Form filler extension error handled');
                        e.preventDefault();
                        return false;
                    }
                });
            }, 1000);
        });
    </script>
</x-guest-layout>
