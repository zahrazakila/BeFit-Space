<x-app-layout>

    <div class="py-12 bg-gradient-to-b from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- Profile Information Section --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#FFB703]">
                <div class="bg-gradient-to-r from-[#FFB703] to-[#FFB703]/80 px-6 py-4">
                    <h3 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                clip-rule="evenodd" />
                        </svg>
                        Informasi Profil
                    </h3>
                    <p class="text-gray-700 text-sm mt-1">Perbarui informasi profil dan alamat email akun Anda</p>
                </div>
                <div class="p-6 sm:p-8">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            {{-- Password Update Section --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#023047]">
                <div class="bg-gradient-to-r from-[#023047] to-[#034263] px-6 py-4">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        Keamanan Password
                    </h3>
                    <p class="text-gray-200 text-sm mt-1">Pastikan akun Anda menggunakan password yang kuat dan aman</p>
                </div>
                <div class="p-6 sm:p-8">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            {{-- Account Deletion Section --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-red-500">
                <div class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                        </svg>
                        Zona Berbahaya
                    </h3>
                    <p class="text-red-100 text-sm mt-1">Tindakan ini akan menghapus akun Anda secara permanen</p>
                </div>
                <div class="p-6 sm:p-8">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

            {{-- Additional Info Section --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-blue-500">
                <div class="p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#023047]">Tips Keamanan Akun</h3>
                            <p class="text-gray-600 text-sm">Panduan untuk menjaga keamanan akun Anda</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900">Password Kuat</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Gunakan kombinasi huruf besar, kecil, angka, dan simbol
                                minimal 8 karakter.</p>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900">Email Terverifikasi</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Pastikan email Anda terverifikasi untuk keamanan dan
                                pemulihan akun.</p>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900">Logout Aman</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Selalu logout dari akun Anda setelah selesai, terutama di
                                perangkat umum.</p>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900">Update Berkala</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Perbarui informasi profil dan password secara berkala untuk
                                keamanan optimal.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Contact Support Section --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#FFB703]">
                <div class="p-6 sm:p-8">
                    <div class="text-center">
                        <div
                            class="w-12 h-12 bg-[#FFB703]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-[#023047] mb-2">Butuh Bantuan?</h3>
                        <p class="text-gray-600 mb-6">Tim customer service kami siap membantu Anda 24/7</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('contact.us') }}"
                                class="inline-flex items-center justify-center rounded-lg bg-[#023047] px-6 py-3 text-base font-semibold text-white shadow-lg hover:bg-[#034263] transition-all duration-200">
                                <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Hubungi Kami
                            </a>
                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="inline-flex items-center justify-center rounded-lg bg-green-500 px-6 py-3 text-base font-semibold text-white shadow-lg hover:bg-green-600 transition-all duration-200">
                                <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
