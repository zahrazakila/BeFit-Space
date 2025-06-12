<x-guest-layout>
    <main class="bg-gradient-to-b from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
        <!-- Hero Section with Improved Overlay -->
        <div class="relative isolate">
            <div class="absolute inset-0 -z-10">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?q=80&w=1469&auto=format&fit=crop"
                    alt="Orang sedang berlatih di gym Be-Fit Space">
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-[#023047]/95 to-[#023047]/85 -z-10"></div>

            <!-- Decorative elements -->
            <div class="absolute inset-0 -z-5 overflow-hidden">
                <div class="absolute top-20 left-10 w-32 h-32 bg-[#FFB703]/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 right-10 w-40 h-40 bg-[#FFB703]/10 rounded-full blur-3xl"></div>
            </div>

            <div class="mx-auto max-w-4xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="text-center">
                    <div
                        class="inline-flex items-center rounded-full bg-[#FFB703]/20 px-6 py-2 text-sm font-semibold text-[#FFB703] mb-6">
                        <svg class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        Harga Membership
                    </div>

                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Pilih Paket yang Tepat <span class="text-[#FFB703]">Untukmu</span>
                    </h1>

                    <p class="mx-auto mt-6 max-w-2xl text-center text-xl leading-8 text-gray-300">
                        Bergabunglah dengan Be-Fit Space dan nikmati fasilitas terbaik untuk mencapai tujuan kebugaran
                        Anda.
                    </p>
                </div>
            </div>
        </div>

        <!-- Pricing Cards Section -->
        <div class="px-6 pb-24 sm:pb-32 lg:px-8">
            <div
                class="mx-auto -mt-16 grid max-w-lg grid-cols-1 items-stretch gap-y-10 sm:-mt-20 lg:max-w-none lg:grid-cols-2 xl:grid-cols-4 gap-x-8">
                @foreach ($packages as $index => $package)
                    @php
                        $isFeatured = $index == 1 && count($packages) > 1;
                        $isOnDiscount = $package->is_on_active_discount;
                        $months = $package->duration_days > 0 ? round($package->duration_days / 30) : 1;
                        if ($months == 0) {
                            $months = 1;
                        }
                        $pricePerMonth =
                            $package->price > 0 && $months > 0 ? $package->price / $months : $package->price;
                    @endphp

                    <div x-data="{ isHovered: {{ $isFeatured ? 'true' : 'false' }} }" @mouseenter="isHovered = true"
                        @mouseleave="isHovered = {{ $isFeatured ? 'true' : 'false' }}"
                        class="relative flex flex-col rounded-3xl transition-all duration-300 ease-in-out transform {{ $isFeatured ? 'ring-2 ring-[#FFB703]' : 'ring-1 ring-black-200 dark:ring-gray-700' }}"
                        :class="{
                            'scale-105 shadow-xl': isHovered,
                            'scale-100': !isHovered,
                            'bg-gradient-to-b from-[#023047] to-[#034263]': isHovered &&
                                {{ $isFeatured ? 'true' : 'false' }},
                            'bg-gray-50 dark:bg-gray-800': !isHovered || {{ $isFeatured ? 'false' : 'true' }}
                        }">

                        <!-- Featured Badge -->
                        @if ($isFeatured)
                            <div class="absolute -top-5 inset-x-0 flex justify-center">
                                <span
                                    class="inline-flex items-center rounded-full bg-[#FFB703] px-4 py-1.5 text-sm font-semibold text-gray-900 shadow-md">
                                    <svg class="mr-1.5 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 1l2.928 6.377 6.541.95-4.735 4.608 1.12 6.516L10 16.133l-5.853 3.318 1.12-6.516L.53 8.328l6.541-.95L10 1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Paling Populer
                                </span>
                            </div>
                        @endif

                        <!-- Discount Badge -->
                        @if ($isOnDiscount && $package->discount_percentage > 0)
                            <div class="absolute -right-3 top-6">
                                <div
                                    class="bg-red-600 text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg transform rotate-12">
                                    DISKON {{ number_format($package->discount_percentage, 0) }}%
                                </div>
                            </div>
                        @endif

                        <!-- Card Content -->
                        <div class="p-8 flex-grow">
                            <!-- Package Name -->
                            <h3 class="text-xl font-bold leading-7 mb-2"
                                :class="{
                                    'text-white': isHovered &&
                                        {{ $isFeatured ? 'true' : 'false' }},
                                    'text-[#023047] dark:text-white': !
                                        isHovered || {{ $isFeatured ? 'false' : 'true' }}
                                }">
                                {{ $package->name }}
                            </h3>

                            <!-- Duration Badge -->
                            <div class="inline-flex items-center rounded-full bg-gray-100 dark:bg-gray-700 px-2.5 py-0.5 text-xs font-medium mb-4"
                                :class="{ 'bg-[#023047]/30 text-black-200': isHovered && {{ $isFeatured ? 'true' : 'false' }} }">
                                {{ $months }} bulan
                            </div>

                            <!-- Price -->
                            <div class="mt-4 flex items-baseline gap-x-2">
                                @if ($isOnDiscount)
                                    <span class="text-4xl font-bold tracking-tight"
                                        :class="{
                                            'text-[#FFB703]': isHovered &&
                                                {{ $isFeatured ? 'true' : 'false' }},
                                            'text-gray-900 dark:text-white': !
                                                isHovered || {{ $isFeatured ? 'false' : 'true' }}
                                        }">
                                        Rp{{ number_format($pricePerMonth, 0, ',', '.') }}
                                    </span>
                                    <span class="text-base font-semibold line-through text-gray-400 dark:text-gray-500">
                                        Rp{{ number_format($package->original_price / $months, 0, ',', '.') }}
                                    </span>
                                @else
                                    <span class="text-4xl font-bold tracking-tight"
                                        :class="{
                                            'text-[#FFB703]': isHovered &&
                                                {{ $isFeatured ? 'true' : 'false' }},
                                            'text-gray-900 dark:text-white': !
                                                isHovered || {{ $isFeatured ? 'false' : 'true' }}
                                        }">
                                        Rp{{ number_format($pricePerMonth, 0, ',', '.') }}
                                    </span>
                                @endif
                                <span class="text-base font-semibold text-gray-500 dark:text-gray-400">/bulan</span>
                            </div>

                            <!-- Description -->
                            <p class="mt-6 text-base leading-7"
                                :class="{
                                    'text-gray-300': isHovered &&
                                        {{ $isFeatured ? 'true' : 'false' }},
                                    'text-gray-600 dark:text-gray-300': !
                                        isHovered || {{ $isFeatured ? 'false' : 'true' }}
                                }">
                                {{ $package->description ?? 'Akses penuh ke semua fasilitas gym selama periode paket.' }}
                            </p>

                            <!-- Features List -->
                            <ul role="list" class="mt-8 space-y-4 text-sm leading-6"
                                :class="{
                                    'text-gray-300': isHovered &&
                                        {{ $isFeatured ? 'true' : 'false' }},
                                    'text-gray-600 dark:text-gray-300': !
                                        isHovered || {{ $isFeatured ? 'false' : 'true' }}
                                }">
                                <li class="flex gap-x-3 items-center">
                                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true" :class="{ 'text-[#FFB703]': true }">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Akses semua alat gym
                                </li>
                                <li class="flex gap-x-3 items-center">
                                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true" :class="{ 'text-[#FFB703]': true }">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Ruang ganti & Loker
                                </li>
                                <li class="flex gap-x-3 items-center">
                                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true" :class="{ 'text-[#FFB703]': true }">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Akses Wi-Fi gratis
                                </li>

                                @if ($isFeatured || $index > 1)
                                    <li class="flex gap-x-3 items-center">
                                        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" :class="{ 'text-[#FFB703]': true }">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Konsultasi fitness gratis
                                    </li>
                                @endif

                                @if ($index > 1)
                                    <li class="flex gap-x-3 items-center">
                                        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" :class="{ 'text-[#FFB703]': true }">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Akses ke semua kelas grup
                                    </li>
                                @endif
                            </ul>
                        </div>

                        <!-- CTA Button -->
                        <div class="p-8 pt-0">
                            <a href="{{ route('memberships.register', ['package_id' => $package->id]) }}"
                                aria-describedby="tier-{{ Str::slug($package->name) }}"
                                class="block w-full rounded-lg px-4 py-3.5 text-center text-base font-semibold shadow-sm transition-all duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
                                :class="{
                                    'bg-[#FFB703] text-gray-900 hover:bg-[#FFB703]/90 focus-visible:outline-[#FFB703]': isHovered ||
                                        {{ $isFeatured ? 'true' : 'false' }},
                                    'bg-gray-100 text-[#023047] hover:bg-gray-200 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600':
                                        !isHovered && {{ $isFeatured ? 'false' : 'true' }}
                                }">
                                {{ $isFeatured ? 'Pilih Paket Rekomendasi' : 'Pilih Paket Ini' }}
                            </a>
                        </div>

                        <!-- Best Value Tag for Featured -->
                        @if ($isFeatured)
                            <div class="absolute -bottom-3 inset-x-0 flex justify-center">
                                <span
                                    class="inline-flex items-center rounded-full bg-[#023047] px-3 py-1 text-xs font-medium text-white shadow-sm">
                                    Best Value
                                </span>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            <!-- Additional Info Section -->
            <div class="mx-auto max-w-4xl mt-16 text-center">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Keuntungan Member Be-Fit Space</h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm">
                        <div
                            class="w-12 h-12 bg-[#FFB703]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Akses 24/7</h4>
                        <p class="text-gray-600 dark:text-gray-300">Latihan kapan saja sesuai jadwal Anda, tanpa
                            batasan waktu.</p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm">
                        <div
                            class="w-12 h-12 bg-[#FFB703]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Trainer Profesional</h4>
                        <p class="text-gray-600 dark:text-gray-300">Didampingi oleh trainer bersertifikasi dengan
                            pengalaman luas.</p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm">
                        <div
                            class="w-12 h-12 bg-[#FFB703]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Jaminan Kepuasan</h4>
                        <p class="text-gray-600 dark:text-gray-300">Garansi 30 hari uang kembali jika tidak puas dengan
                            layanan kami.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mx-auto max-w-3xl mt-20">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-8">Pertanyaan Umum</h3>

                <div class="space-y-4">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Apakah saya bisa freeze
                            membership?</h4>
                        <p class="text-gray-600 dark:text-gray-300">Ya, Anda dapat membekukan membership hingga 30 hari
                            dalam setahun dengan pemberitahuan minimal 7 hari sebelumnya.</p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Bagaimana cara membatalkan
                            membership?</h4>
                        <p class="text-gray-600 dark:text-gray-300">Pembatalan dapat dilakukan dengan pemberitahuan 30
                            hari sebelumnya. Silakan hubungi customer service kami untuk informasi lebih lanjut.</p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Apakah ada biaya
                            pendaftaran?</h4>
                        <p class="text-gray-600 dark:text-gray-300">Ya, terdapat biaya pendaftaran satu kali sebesar
                            Rp150.000 yang mencakup kartu member dan assessment awal.</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mx-auto max-w-7xl mt-20">
                <div class="bg-gradient-to-r from-[#023047] to-[#034263] rounded-2xl overflow-hidden shadow-xl">
                    <div class="px-6 py-12 sm:px-12 sm:py-16 lg:flex lg:items-center lg:justify-between">
                        <div>
                            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                                Siap untuk memulai?
                                <span class="block text-[#FFB703]">Daftar sekarang dan dapatkan diskon 15%</span>
                            </h2>
                            <p class="mt-4 text-lg text-gray-300">
                                Promo terbatas untuk 50 pendaftar pertama bulan ini.
                            </p>
                        </div>
                        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                            <div class="inline-flex rounded-md shadow">
                                <a href="{{ route('trial.store') }}"
                                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-[#FFB703] px-5 py-3 text-base font-medium text-gray-900 hover:bg-[#FFB703]/90">
                                    Klaim Free Trial
                                </a>
                            </div>
                            <div class="ml-3 inline-flex rounded-md shadow">
                                <a href="{{ route('contact.us') }}"
                                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-[#023047] hover:bg-gray-50">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
