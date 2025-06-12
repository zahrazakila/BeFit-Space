<x-app-layout>
    <div class="py-12 bg-gradient-to-b from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Quick Stats Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                {{-- Membership Status Card --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-l-4 border-[#FFB703] transform hover:scale-105 transition-all duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 bg-gradient-to-br from-[#FFB703] to-[#FFB703]/80 rounded-lg p-3 shadow-md">
                                <svg class="h-7 w-7 text-gray-900" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 9a2 2 0 00-2 2v2m0 0V9a2 2 0 012-2m0 2a2 2 0 012-2h2a2 2 0 012 2m0 0a2 2 0 012-2v2a2 2 0 01-2 2m0 0a2 2 0 002 2v2a2 2 0 01-2 2" />
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-sm font-semibold text-gray-600">Status Membership</p>
                                @if ($activeMembership)
                                    <p class="text-2xl font-bold text-[#023047]">Aktif</p>
                                    <p class="text-xs text-green-600">{{ $activeMembership->membershipPackage->name }}
                                    </p>
                                @else
                                    <p class="text-2xl font-bold text-red-500">Tidak Aktif</p>
                                    <p class="text-xs text-gray-500">Belum ada paket</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Days Remaining Card --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-l-4 border-green-500 transform hover:scale-105 transition-all duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 bg-gradient-to-br from-green-500 to-green-600 rounded-lg p-3 shadow-md">
                                <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-sm font-semibold text-gray-600">Sisa Hari</p>
                                @if ($activeMembership)
                                    @php
                                        $endDate = \Carbon\Carbon::parse($activeMembership->end_date)->endOfDay();
                                        $remainingDays = now()->diffInDays($endDate, false);
                                    @endphp
                                    @if ($remainingDays >= 0)
                                        <p class="text-2xl font-bold text-[#023047]">{{ round($remainingDays) }}</p>
                                        <p class="text-xs text-green-600">Hari tersisa</p>
                                    @else
                                        <p class="text-2xl font-bold text-red-500">Expired</p>
                                        <p class="text-xs text-red-500">Membership berakhir</p>
                                    @endif
                                @else
                                    <p class="text-2xl font-bold text-gray-400">-</p>
                                    <p class="text-xs text-gray-500">Tidak ada data</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Member Since Card --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-l-4 border-[#023047] transform hover:scale-105 transition-all duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 bg-gradient-to-br from-[#023047] to-[#034263] rounded-lg p-3 shadow-md">
                                <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-sm font-semibold text-gray-600">Member Sejak</p>
                                <p class="text-2xl font-bold text-[#023047]">{{ $user->created_at->format('M Y') }}</p>
                                <p class="text-xs text-blue-600">{{ $user->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Main Membership Status Section --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#FFB703] mb-8">
                <div class="bg-gradient-to-r from-[#FFB703] to-[#FFB703]/80 px-6 py-4">
                    <h3 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" />
                        </svg>
                        Detail Membership Anda
                    </h3>
                    <p class="text-gray-700 text-sm mt-1">Informasi lengkap tentang status dan masa berlaku membership
                    </p>
                </div>

                <div class="p-6">
                    @if ($activeMembership)
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 border border-green-200 rounded-xl p-6 shadow-inner">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-6">
                                <div>
                                    <h4 class="text-3xl font-bold text-green-700 mb-2">
                                        {{ $activeMembership->membershipPackage->name }}
                                    </h4>
                                    <span
                                        class="inline-flex items-center px-3 py-1 text-sm font-semibold text-green-800 bg-green-200 rounded-full">
                                        <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        STATUS: {{ strtoupper($activeMembership->status) }}
                                    </span>
                                </div>
                                <div class="mt-4 lg:mt-0">
                                    <div class="text-right">
                                        <p class="text-sm text-gray-600">ID Membership</p>
                                        <p class="text-lg font-mono font-bold text-gray-800">
                                            #{{ str_pad($activeMembership->id, 6, '0', STR_PAD_LEFT) }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                            <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <h5 class="font-semibold text-gray-800">Tanggal Mulai</h5>
                                    </div>
                                    <p class="text-lg font-bold text-gray-700">
                                        {{ \Carbon\Carbon::parse($activeMembership->start_date)->isoFormat('dddd, D MMMM YYYY') }}
                                    </p>
                                </div>

                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                                            <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <h5 class="font-semibold text-gray-800">Tanggal Berakhir</h5>
                                    </div>
                                    <p class="text-lg font-bold text-gray-700">
                                        {{ \Carbon\Carbon::parse($activeMembership->end_date)->isoFormat('dddd, D MMMM YYYY') }}
                                    </p>
                                </div>
                            </div>

                            {{-- Progress Bar --}}
                            @php
                                $endDate = \Carbon\Carbon::parse($activeMembership->end_date)->endOfDay();
                                $startDate = \Carbon\Carbon::parse($activeMembership->start_date);
                                $remainingDays = now()->diffInDays($endDate, false);
                                $totalDuration = $startDate->diffInDays($endDate);
                                $elapsedDuration = $startDate->diffInDays(now());
                                $progressPercentage =
                                    $totalDuration > 0 ? ($elapsedDuration / $totalDuration) * 100 : 0;
                                $progressPercentage = max(0, min(100, $progressPercentage));
                            @endphp

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <div class="flex justify-between items-center mb-3">
                                    <h5 class="font-semibold text-gray-800">Progress Membership</h5>
                                    @if ($remainingDays >= 0)
                                        <span class="text-sm font-medium text-green-600">{{ round($remainingDays) }}
                                            hari tersisa</span>
                                    @else
                                        <span class="text-sm font-medium text-red-600">Telah berakhir</span>
                                    @endif
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3 shadow-inner">
                                    <div class="bg-gradient-to-r from-green-500 to-green-600 h-3 rounded-full transition-all duration-500 shadow-sm"
                                        style="width: {{ $progressPercentage }}%"></div>
                                </div>
                                <div class="flex justify-between text-xs text-gray-500 mt-2">
                                    <span>{{ $startDate->format('d M Y') }}</span>
                                    <span>{{ round($progressPercentage) }}% terpakai</span>
                                    <span>{{ $endDate->format('d M Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div
                            class="bg-gradient-to-br from-yellow-50 to-orange-50 border border-yellow-200 rounded-xl p-8 text-center shadow-inner">
                            <div
                                class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-2xl font-bold text-yellow-700 mb-2">Belum Ada Membership Aktif</h4>
                            <p class="text-yellow-600 mb-6 max-w-md mx-auto">
                                Mulai perjalanan fitness Anda dengan memilih paket membership yang sesuai dengan
                                kebutuhan dan target Anda.
                            </p>
                            <a href="{{ route('memberships.index') }}"
                                class="inline-flex items-center justify-center rounded-lg bg-[#FFB703] px-6 py-3 text-base font-bold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus:outline-none focus:ring-2 focus:ring-[#FFB703] focus:ring-offset-2 transition-all duration-200 transform hover:scale-105">
                                <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                Pilih Paket Membership
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            {{-- QR Code Access Section --}}
            @if ($activeMembership)
                <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#023047] mb-8">
                    <div class="bg-gradient-to-r from-[#023047] to-[#034263] px-6 py-4">
                        <h3 class="text-xl font-bold text-white flex items-center gap-2">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h2M4 4h4m0 0V2m0 2h2m0 0h2m0 0v2M4 4v4m0 0h2m0 0h2" />
                            </svg>
                            Akses Masuk Gym
                        </h3>
                        <p class="text-gray-200 text-sm mt-1">Scan QR code ini di pintu masuk gym untuk akses otomatis
                        </p>
                    </div>

                    <div class="p-6">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            {{-- QR Code Display --}}
                            <div class="flex flex-col items-center">
                                <div
                                    class="bg-gradient-to-br from-gray-50 to-gray-100 border-2 border-[#FFB703] rounded-2xl p-8 shadow-inner">
                                    <div class="bg-white p-4 rounded-xl shadow-lg">
                                        {{-- QR Code will be generated here --}}
                                        <div id="qr-code-container" class="flex items-center justify-center">
                                            <div
                                                class="w-48 h-48 bg-gray-100 border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center">
                                                <div class="text-center">
                                                    <svg class="h-12 w-12 text-gray-400 mx-auto mb-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h2M4 4h4m0 0V2m0 2h2m0 0h2m0 0v2M4 4v4m0 0h2m0 0h2" />
                                                    </svg>
                                                    <p class="text-sm text-gray-500">QR Code</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Member ID Display --}}
                                    <div class="mt-4 text-center">
                                        <p class="text-sm font-semibold text-gray-600 mb-1">Member ID</p>
                                        <p
                                            class="text-2xl font-bold font-mono text-[#023047] bg-white px-4 py-2 rounded-lg shadow-sm border">
                                            {{ str_pad($user->id, 8, '0', STR_PAD_LEFT) }}
                                        </p>
                                    </div>
                                </div>

                                {{-- Generate QR Button --}}
                                <button onclick="generateQRCode()"
                                    class="mt-6 inline-flex items-center justify-center rounded-lg bg-[#FFB703] px-6 py-3 text-base font-bold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus:outline-none focus:ring-2 focus:ring-[#FFB703] focus:ring-offset-2 transition-all duration-200 transform hover:scale-105">
                                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    Generate QR Code
                                </button>
                            </div>

                            {{-- Instructions & Info --}}
                            <div class="space-y-6">
                                {{-- How to Use --}}
                                <div
                                    class="bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-200 rounded-xl p-6">
                                    <h4 class="text-lg font-bold text-blue-800 mb-4 flex items-center gap-2">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Cara Menggunakan
                                    </h4>
                                    <ol class="space-y-3 text-sm text-blue-700">
                                        <li class="flex items-start gap-3">
                                            <span
                                                class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-xs font-bold">1</span>
                                            <span>Klik tombol "Generate QR Code" untuk membuat kode akses Anda</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <span
                                                class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-xs font-bold">2</span>
                                            <span>Simpan screenshot QR code di ponsel Anda atau bookmark halaman
                                                ini</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <span
                                                class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-xs font-bold">3</span>
                                            <span>Tunjukkan QR code ke scanner di pintu masuk gym</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <span
                                                class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-xs font-bold">4</span>
                                            <span>Pintu akan terbuka otomatis setelah verifikasi berhasil</span>
                                        </li>
                                    </ol>
                                </div>

                                {{-- Security Info --}}
                                <div
                                    class="bg-gradient-to-br from-green-50 to-green-100 border border-green-200 rounded-xl p-6">
                                    <h4 class="text-lg font-bold text-green-800 mb-4 flex items-center gap-2">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        Keamanan & Privasi
                                    </h4>
                                    <ul class="space-y-2 text-sm text-green-700">
                                        <li class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-green-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            QR code unik untuk setiap member
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-green-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Terenkripsi dan aman
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-green-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Hanya berlaku selama membership aktif
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-green-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Akses tercatat untuk keamanan
                                        </li>
                                    </ul>
                                </div>

                                {{-- Quick Actions --}}
                                <div class="grid grid-cols-2 gap-4">
                                    <button onclick="downloadQRCode()"
                                        class="flex items-center justify-center gap-2 bg-white border-2 border-[#023047] text-[#023047] px-4 py-3 rounded-lg font-semibold hover:bg-[#023047] hover:text-white transition-all duration-200">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        Download
                                    </button>
                                    <button onclick="shareQRCode()"
                                        class="flex items-center justify-center gap-2 bg-white border-2 border-green-500 text-green-600 px-4 py-3 rounded-lg font-semibold hover:bg-green-500 hover:text-white transition-all duration-200">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
                                        </svg>
                                        Share
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Quick Actions Section --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                {{-- Extend Membership --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#023047] hover:shadow-xl transition-all duration-300">
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-[#023047]/10 rounded-lg flex items-center justify-center">
                                <svg class="h-5 w-5 text-[#023047]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold text-[#023047]">Perpanjang Membership</h4>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Perpanjang atau upgrade paket membership Anda untuk
                            melanjutkan perjalanan fitness.</p>
                        <a href="{{ route('memberships.index') }}"
                            class="inline-flex items-center text-[#023047] hover:text-[#034263] font-semibold text-sm transition-colors duration-200">
                            Lihat Paket
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Contact Support --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-green-500 hover:shadow-xl transition-all duration-300">
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-green-500/10 rounded-lg flex items-center justify-center">
                                <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold text-[#023047]">Bantuan & Support</h4>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Butuh bantuan? Tim customer service kami siap membantu
                            Anda 24/7.</p>
                        <a href="{{ route('contact.us') }}"
                            class="inline-flex items-center text-green-600 hover:text-green-700 font-semibold text-sm transition-colors duration-200">
                            Hubungi Kami
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Profile Settings --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-purple-500 hover:shadow-xl transition-all duration-300">
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-purple-500/10 rounded-lg flex items-center justify-center">
                                <svg class="h-5 w-5 text-purple-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold text-[#023047]">Pengaturan Profil</h4>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Kelola informasi pribadi, password, dan preferensi akun
                            Anda.</p>
                        <a href="{{ route('profile.edit') }}"
                            class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold text-sm transition-colors duration-200">
                            Edit Profil
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Upcoming Features Section --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-blue-500">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Fitur Segera Hadir
                    </h3>
                    <p class="text-blue-100 text-sm mt-1">Fitur-fitur menarik yang akan segera tersedia untuk member
                    </p>
                </div>

                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg">
                            <div
                                class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Jadwal Latihan Personal</h4>
                                <p class="text-gray-600 text-sm">Rekomendasi jadwal latihan yang dipersonalisasi
                                    berdasarkan tujuan fitness Anda.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg">
                            <div
                                class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Tracking Progress</h4>
                                <p class="text-gray-600 text-sm">Pantau perkembangan berat badan, massa otot, dan
                                    pencapaian target fitness Anda.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg">
                            <div
                                class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Booking Kelas Grup</h4>
                                <p class="text-gray-600 text-sm">Reservasi tempat untuk kelas grup seperti Yoga, Zumba,
                                    HIIT, dan lainnya.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg">
                            <div
                                class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Reward Points</h4>
                                <p class="text-gray-600 text-sm">Kumpulkan poin dari setiap kunjungan dan tukarkan
                                    dengan benefit menarik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- QR Code JavaScript --}}
    <script>
        function generateQRCode() {
            const memberId = '{{ str_pad($user->id, 8, '0', STR_PAD_LEFT) }}';
            const membershipId = '{{ $activeMembership ? $activeMembership->id : '' }}';
            const qrData = `GYM_ACCESS:${memberId}:${membershipId}:{{ now()->format('Y-m-d') }}`;

            const container = document.getElementById('qr-code-container');
            container.innerHTML = '';

            QRCode.toCanvas(qrData, {
                width: 192,
                height: 192,
                color: {
                    dark: '#023047',
                    light: '#FFFFFF'
                },
                margin: 2,
                errorCorrectionLevel: 'M'
            }, function(error, canvas) {
                if (error) {
                    console.error(error);
                    container.innerHTML = '<p class="text-red-500 text-sm">Error generating QR code</p>';
                    return;
                }

                canvas.className = 'rounded-lg shadow-sm';
                container.appendChild(canvas);
            });
        }

        function downloadQRCode() {
            const canvas = document.querySelector('#qr-code-container canvas');
            if (!canvas) {
                alert('Please generate QR code first!');
                return;
            }

            const link = document.createElement('a');
            link.download = 'gym-access-qr-{{ $user->id }}.png';
            link.href = canvas.toDataURL();
            link.click();
        }

        function shareQRCode() {
            const canvas = document.querySelector('#qr-code-container canvas');
            if (!canvas) {
                alert('Please generate QR code first!');
                return;
            }

            canvas.toBlob(function(blob) {
                if (navigator.share) {
                    const file = new File([blob], 'gym-access-qr.png', {
                        type: 'image/png'
                    });
                    navigator.share({
                        title: 'My Gym Access QR Code',
                        text: 'QR Code untuk akses masuk gym',
                        files: [file]
                    });
                } else {
                    // Fallback for browsers that don't support Web Share API
                    downloadQRCode();
                }
            });
        }
    </script>
</x-app-layout>
