<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100 dark:bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Be-Fit Space') }}</title>

    @vite('resources/css/app.css')

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 20s linear infinite;
        }
    </style>
</head>

<body class="h-full font-sans antialiased">
    {{-- ======================================================= --}}
    {{-- BAGIAN HEADER / NAVIGASI (AKAN ADA DI SEMUA HALAMAN) --}}
    {{-- ======================================================= --}}
    <div class="bg-black">
        <header {{-- Inisialisasi Alpine.js dengan state baru 'atTop' --}} x-data="{
            isOpen: false,
            atTop: true
        }" {{-- Tambahkan event listener untuk mendeteksi scroll --}}
            @scroll.window="atTop = (window.scrollY < 50)" {{-- Terapkan kelas secara dinamis berdasarkan state 'atTop' --}}
            :class="{
                'bg-transparent': atTop,
                'bg-white dark:bg-gray-900 shadow-lg': !atTop
            }"
            class="fixed inset-x-0 top-0 z-50 transition-all duration-300 ease-in-out">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                        <div class="flex items-center space-x-2">
                            <img class="h-8 w-auto" src="{{ asset('img/logo.png') }}" alt="Logo">
                            {{-- Warna Teks Logo Dibuat Dinamis --}}
                            <span class="text-xl font-bold transition-colors duration-300"
                                :class="{ 'text-[#FFB703]': atTop, 'text-[#023047] dark:text-[#FFB703]': !atTop }">Be-Fit
                                Space</span>
                        </div>
                    </a>
                </div>

                <div class="flex lg:hidden">
                    <button type="button" @click="isOpen = true"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 transition-colors duration-300"
                        :class="{ 'text-gray-400 hover:text-white': atTop, 'text-gray-500 hover:text-gray-800': !atTop }">
                        <span class="sr-only">Open main menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

                {{-- Teks Link Utama Dibuat Dinamis --}}
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="{{ url('/') }}" class="text-sm font-semibold transition-colors duration-300"
                        :class="{ 'text-white hover:text-gray-200': atTop, 'text-gray-700 hover:text-[#023047] dark:text-gray-200 dark:hover:text-white':
                                !atTop }">Home</a>
                    <a href="{{ route('memberships.index') }}"
                        class="text-sm font-semibold transition-colors duration-300"
                        :class="{ 'text-white hover:text-gray-200': atTop, 'text-gray-700 hover:text-[#023047] dark:text-gray-200 dark:hover:text-white':
                                !atTop }">Membership</a>
                    <a href="{{ route('about.us') }}" class="text-sm font-semibold transition-colors duration-300"
                        :class="{ 'text-white hover:text-gray-200': atTop, 'text-gray-700 hover:text-[#023047] dark:text-gray-200 dark:hover:text-white':
                                !atTop }">Tentang</a>
                    <a href="{{ route('contact.us') }}" class="text-sm font-semibold transition-colors duration-300"
                        :class="{ 'text-white hover:text-gray-200': atTop, 'text-gray-700 hover:text-[#023047] dark:text-gray-200 dark:hover:text-white':
                                !atTop }">Contact</a>
                </div>

                {{-- Tombol Login / Dashboard Dibuat Dinamis --}}
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @if (Route::has('login'))
                        <div class="flex items-center gap-4">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="inline-block px-5 py-1.5 rounded-sm text-sm leading-normal transition-all duration-300"
                                    :class="{
                                        'text-white border border-white/30 hover:border-white/60': atTop,
                                        'text-[#023047] border border-[#023047]/30 hover:bg-[#023047] hover:text-white dark:text-white dark:border-white/30 dark:hover:bg-white dark:hover:text-gray-900':
                                            !atTop
                                    }">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="inline-block px-5 py-1.5 text-sm font-semibold leading-normal transition-colors duration-300"
                                    :class="{ 'text-white hover:text-[#FFB703]': atTop, 'text-gray-700 hover:text-[#023047] dark:text-gray-200 dark:hover:text-white':
                                            !atTop }">
                                    Log in
                                </a>
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>

            {{-- Menu Mobile (Flyout) --}}
            <div x-show="isOpen" x-cloak x-transition
                class="lg:hidden fixed inset-0 z-50 bg-white dark:bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 overflow-y-auto">
                {{-- Konten di dalam menu mobile tidak perlu diubah karena sudah memiliki background solid --}}
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <div class="flex items-center space-x-2">
                            <img class="h-8 w-auto" src="{{ asset('img/logo.png') }}" alt="Logo">
                            {{-- Di menu mobile, teksnya selalu gelap --}}
                            <span class="text-xl font-bold text-[#023047] dark:text-white">Be-Fit Space</span>
                        </div>
                    </a>
                    <button @click="isOpen = false" type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-gray-400">
                        <span class="sr-only">Close menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10 dark:divide-gray-700">
                        <div class="space-y-2 py-6">
                            <a href="{{ url('/') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800">Home</a>
                            <a href="{{ route('memberships.index') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800">Membership</a>
                            <a href="{{ route('about.us') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800">Tentang</a>
                            <a href="{{ route('contact.us') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800">Contact</a>
                        </div>
                        <div class="py-6">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800">Log
                                    in</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    {{-- ======================================================= --}}
    {{-- TEMPAT UNTUK KONTEN UNIK SETIAP HALAMAN (SLOT) --}}
    {{-- ======================================================= --}}
    <main>
        {{ $slot }}
    </main>

    {{-- ======================================================= --}}
    {{-- BAGIAN FOOTER (AKAN ADA DI SEMUA HALAMAN) --}}
    {{-- ======================================================= --}}
    <footer class="bg-[#023047] text-gray-300">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-3">

                {{-- Kolom 1: Identitas & Deskripsi --}}
                <div class="sm:col-span-2 lg:col-span-1">
                    <a href="{{ route('home') }}" aria-label="Go home" title="Be-Fit Space"
                        class="inline-flex items-center">
                        <img class="h-8 w-auto" src="{{ asset('img/logo.png') }}" alt="Logo">
                        <span class="ml-3 text-xl font-bold tracking-wide text-white uppercase">Be-Fit
                            Space</span>
                    </a>
                    <div class="mt-6 lg:max-w-sm">
                        <p class="text-sm text-gray-400">
                            Pusat kebugaran modern dengan fasilitas lengkap untuk mendukung setiap langkah perjalanan
                            fitness Anda. Bergabunglah dengan komunitas kami dan capai tujuan kesehatan Anda.
                        </p>
                    </div>
                </div>

                {{-- Kolom 2: Link Navigasi "Jelajahi" --}}
                <div class="space-y-2 text-sm">
                    <p class="text-base font-semibold tracking-wide text-white">Jelajahi</p>
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('home') }}"
                            class="text-gray-300 transition-colors duration-300 hover:text-[#FFB703]">Home</a>
                        <a href="{{ route('about.us') }}"
                            class="text-gray-300 transition-colors duration-300 hover:text-[#FFB703]">Tentang
                            Kami</a>
                        <a href="{{ route('memberships.index') }}"
                            class="text-gray-300 transition-colors duration-300 hover:text-[#FFB703]">Paket
                            Membership</a>
                        <a href="{{ route('locations.index') }}"
                            class="text-gray-300 transition-colors duration-300 hover:text-[#FFB703]">Lokasi
                            Klub</a>
                    </div>
                </div>

                {{-- Kolom 3: Link Navigasi "Dukungan" --}}
                <div class="space-y-2 text-sm">
                    <p class="text-base font-semibold tracking-wide text-white">Dukungan</p>
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('contact.us') }}"
                            class="text-gray-300 transition-colors duration-300 hover:text-[#FFB703]">Kontak
                            Kami</a>
                        <a href="#"
                            class="text-gray-300 transition-colors duration-300 hover:text-[#FFB703]">FAQ</a>
                        <a href="#"
                            class="text-gray-300 transition-colors duration-300 hover:text-[#FFB703]">Kebijakan
                            Privasi</a>
                        <a href="#"
                            class="text-gray-300 transition-colors duration-300 hover:text-[#FFB703]">Syarat
                            & Ketentuan</a>
                    </div>
                </div>

            </div>

            {{-- Bagian Bawah Footer: Copyright & Social Media --}}
            <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t border-white/10 sm:flex-row">
                <p class="text-sm text-gray-400">
                    © Copyright {{ date('Y') }} Be-Fit Space. All rights reserved.
                </p>
                <ul class="flex items-center mb-3 space-x-4 sm:mb-0">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center w-8 h-8 text-gray-400 transition-colors duration-300 hover:text-[#FFB703]">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.155 0 2.748-.012 3.088-.06 4.155-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.155.06-2.748 0-3.088-.012-4.155-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.067-.06-1.407-.06-4.155 0-2.748.012-3.088.06-4.155.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.345 2.52c.636-.247 1.363-.416 2.427-.465C9.784 2.013 10.13 2 12.315 2h.001zm-1.04 2.74a4.425 4.425 0 00-4.425 4.425v5.65A4.425 4.425 0 0011.275 19.2h1.45a4.425 4.425 0 004.425-4.425v-5.65a4.425 4.425 0 00-4.425-4.425h-1.45zM12 7a5 5 0 100 10 5 5 0 000-10z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center w-8 h-8 text-gray-400 transition-colors duration-300 hover:text-[#FFB703]">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center w-8 h-8 text-gray-400 transition-colors duration-300 hover:text-[#FFB703]">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('scripts')
</body>

</html>
