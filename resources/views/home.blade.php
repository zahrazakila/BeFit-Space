<x-guest-layout>
    {{-- Enhanced Hero Section --}}
    <div class="relative isolate overflow-hidden">
        <!-- Background Image with better overlay -->
        <div class="absolute inset-0 -z-20">
            <img src="{{ asset('img/bg-home.jpg') }}" alt="Modern Gym Interior" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 -z-10 bg-gradient-to-br from-[#023047]/95 via-[#023047]/85 to-[#03506b]/90"></div>

        <!-- Decorative elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-20 left-10 w-32 h-32 bg-[#FFB703]/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-40 h-40 bg-[#FFB703]/10 rounded-full blur-3xl"></div>
        </div>

        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
            <div class="mx-auto max-w-4xl text-center">
                <!-- Badge -->
                <div
                    class="mb-8 inline-flex items-center rounded-full bg-[#FFB703]/20 backdrop-blur-sm px-6 py-2 text-sm font-semibold text-[#FFB703] ring-1 ring-[#FFB703]/30">
                    <svg class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    Get Ready With Us!
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl">
                    <span class="block">YOUR FITNESS</span>
                    <span class="block text-[#FFB703]">JOURNEY</span>
                    <span class="block">STARTS HERE</span>
                </h1>

                <!-- Description -->
                <p class="mt-8 text-xl leading-8 text-gray-200 max-w-3xl mx-auto">
                    Perubahan tidak datang dari menunggu. Ia datang dari keberanian untuk memulai dan konsistensi untuk
                    bertahan. <span class="text-[#FFB703] font-semibold">BeFit-Space</span> siap mendampingi setiap
                    perjuanganmu.
                </p>

                <!-- CTA Buttons -->
                <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('memberships.index') }}"
                        class="group inline-flex items-center rounded-lg bg-[#FFB703] px-8 py-4 text-lg font-semibold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#FFB703] transition-all duration-200 transform hover:scale-105">
                        Lihat Paket Membership
                        <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                    <a href="{{ route('about.us') }}"
                        class="group inline-flex items-center text-lg font-semibold text-white hover:text-[#FFB703] transition-colors duration-200">
                        Learn more
                        <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>

                <!-- Stats -->
                <div class="mt-16 grid grid-cols-2 gap-8 sm:grid-cols-4">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#FFB703]">500+</div>
                        <div class="text-sm text-gray-300">Active Members</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#FFB703]">6</div>
                        <div class="text-sm text-gray-300">Locations</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#FFB703]">24/7</div>
                        <div class="text-sm text-gray-300">Access</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#FFB703]">15+</div>
                        <div class="text-sm text-gray-300">Expert Trainers</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Enhanced Features Section --}}
    <section class="bg-gradient-to-br from-white to-yellow-100 py-16">
        <div class="max-w-7xl mx-auto px-2 grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Kiri: Fitur-fitur -->
            <!-- Kiri: Fitur-fitur -->
            <div class="relative lg:w-[600px] lg:h-[700px] grid grid-cols-2 gap-4 lg:block">
                <!-- Gambar kiri atas -->
                <div
                    class="w-full h-[180px] lg:absolute lg:top-0 lg:left-4 lg:w-[270px] lg:h-[280px] rounded-xl overflow-hidden">
                    <img src="/img/foto-1.png" class="w-full h-full object-cover" />
                    <div
                        class="bg-black/50 text-white text-sm px-2 py-1 mt-[-40px] relative z-10 lg:absolute lg:bottom-0 lg:left-0 lg:mt-0 lg:w-full">
                        Peralatan
                        lengkap</div>
                </div>

                <!-- Gambar kanan atas -->
                <div
                    class="w-full h-[180px] lg:absolute lg:top-0 lg:right-4 lg:w-[270px] lg:h-[400px] rounded-xl overflow-hidden">
                    <img src="/img/foto-2.png" class="w-full h-full object-cover" />
                    <div
                        class="bg-black/50 text-white text-sm px-2 py-1 mt-[-40px] relative z-10 lg:absolute lg:bottom-0 lg:left-0 lg:mt-0 lg:w-full">
                        Kelas
                        bervariasi</div>
                </div>

                <!-- Gambar kiri bawah -->
                <div
                    class="w-full h-[180px] lg:absolute lg:bottom-0 lg:left-4 lg:w-[270px] lg:h-[400px] rounded-xl overflow-hidden">
                    <img src="/img/foto-3.png" class="w-full h-full object-cover" />
                    <div
                        class="bg-black/50 text-white text-sm px-2 py-1 mt-[-40px] relative z-10 lg:absolute lg:bottom-0 lg:left-0 lg:mt-0 lg:w-full">
                        Trainer
                        bersertifikat</div>
                </div>

                <!-- Gambar kanan bawah -->
                <div
                    class="w-full h-[180px] lg:absolute lg:bottom-0 lg:right-4 lg:w-[270px] lg:h-[280px] rounded-xl overflow-hidden">
                    <img src="/img/foto-4.png" class="w-full h-full object-cover" />
                    <div
                        class="bg-black/50 text-white text-sm px-2 py-1 mt-[-40px] relative z-10 lg:absolute lg:bottom-0 lg:left-0 lg:mt-0 lg:w-full">
                        Akses
                        mudah via app</div>
                </div>
            </div>


            <!-- Kanan: Deskripsi membership -->
            <div class="flex flex-col justify-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4 leading-tight">Membership mulai dari
                    <br><span class="text-4xl sm:text-5xl">Rp229.000/bulan</span>
                </h2>
                <p class="text-gray-700 text-lg mb-6 max-w-md">Bebas olahraga menggunakan semua fasilitas kapan
                    saja dan akses semua kelas Be-Fit Space sepuasnya</p>
                <button
                    class="inline-flex items-center px-6 py-3 text-sm font-semibold text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg transition duration-300">
                    Lihat Paket Membership
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    {{-- Enhanced Locations Section --}}
    <section class="bg-[#023047] py-24 sm:py-32" x-data="{
        selectedCity: 'Semua Lokasi',
        locations: [
            { city: 'Bantul', name: 'Be-Fit Banguntapan', image: 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1470&auto=format&fit=crop', address: 'Jl. Kebugaran No. 123' },
            { city: 'Yogyakarta', name: 'Be-Fit Malioboro', image: 'https://images.unsplash.com/photo-1581009137042-c552e485697a?q=80&w=1470&auto=format&fit=crop', address: 'Jl. Malioboro No. 45' },
            { city: 'Sleman', name: 'Be-Fit Seturan', image: 'https://images.unsplash.com/photo-1594882645126-14020914d58d?q=80&w=1485&auto=format&fit=crop', address: 'Jl. Seturan Raya No. 67' },
            { city: 'Bantul', name: 'Be-Fit Kasihan', image: 'https://images.unsplash.com/photo-1605296867304-46d5465a13f1?q=80&w=1470&auto=format&fit=crop', address: 'Jl. Kasihan No. 89' },
            { city: 'Sleman', name: 'Be-Fit Condongcatur', image: 'https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?q=80&w=1471&auto=format&fit=crop', address: 'Jl. Condongcatur No. 12' },
            { city: 'Yogyakarta', name: 'Be-Fit Pusat Kota', image: 'https://images.unsplash.com/photo-1558611848-73f7eb4001a1?q=80&w=1471&auto=format&fit=crop', address: 'Jl. Sudirman No. 34' }
        ],
        get filteredLocations() {
            if (this.selectedCity === 'Semua Lokasi') {
                return this.locations;
            }
            return this.locations.filter(loc => loc.city === this.selectedCity);
        }
    }">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                    1 Membership untuk Akses
                    <span class="text-[#FFB703]">Semua Klub</span>
                </h2>
                <p class="mt-6 text-xl leading-8 text-gray-300">
                    Temukan lokasi Be-Fit Space terdekat di kota Anda dan nikmati fleksibilitas berlatih di mana saja.
                </p>
            </div>

            <!-- Filter Dropdown -->
            <div class="mt-12 flex justify-center">
                <div class="w-full max-w-sm">
                    <label for="location" class="block text-sm font-medium leading-6 text-gray-200 mb-2">Pilih
                        Kota</label>
                    <select id="location" name="location" x-model="selectedCity"
                        class="block w-full rounded-lg border-0 py-3 px-4 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-[#FFB703] bg-white/95 backdrop-blur-sm text-base">
                        <option>Semua Lokasi</option>
                        <template x-for="city in [...new Set(locations.map(loc => loc.city))]">
                            <option :value="city" x-text="city"></option>
                        </template>
                    </select>
                </div>
            </div>

            <!-- Locations Grid -->
            <div
                class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <template x-for="location in filteredLocations" :key="location.name">
                    <a href="{{ route('locations.index') }}"
                        class="group relative block overflow-hidden rounded-2xl shadow-xl transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                        <img class="aspect-[4/3] w-full object-cover transition-transform duration-500 group-hover:scale-110"
                            :src="location.image" :alt="'Gym di ' + location.city">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="h-4 w-4 text-[#FFB703]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-sm font-medium text-[#FFB703]" x-text="location.city"></p>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-1" x-text="location.name"></h3>
                            <p class="text-gray-300 text-sm" x-text="location.address"></p>
                            <div
                                class="mt-3 inline-flex items-center text-sm font-medium text-[#FFB703] group-hover:text-white transition-colors">
                                Lihat Detail
                                <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-1"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </template>
            </div>

            <div class="mt-16 text-center">
                <a href="{{ route('locations.index') }}"
                    class="inline-flex items-center rounded-lg bg-[#FFB703] px-8 py-4 text-lg font-semibold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#FFB703] transition-all duration-200 transform hover:scale-105">
                    Lihat Semua Lokasi
                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Updated Discount Section (15% Only) --}}
    <section id="klaim-trial" class="bg-gradient-to-br from-gray-50 to-yellow-50 py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-3xl bg-white shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-2">

                    {{-- Enhanced Promotion Banner --}}
                    <div
                        class="relative flex flex-col items-center justify-center bg-gradient-to-br from-[#FFB703] to-[#FFB703]/80 p-12 text-center">
                        <!-- Decorative elements -->
                        <div class="absolute top-6 left-6 w-16 h-16 bg-white/20 rounded-full blur-xl"></div>
                        <div class="absolute bottom-6 right-6 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>

                        <div class="relative z-10 space-y-8">
                            <div>
                                <p class="text-lg font-semibold text-gray-800 mb-2">Coba gratis dan</p>
                                <h2 class="text-4xl font-bold tracking-tight text-[#023047] sm:text-5xl leading-tight">
                                    dapatkan penawaran menarik
                                    <span class="inline-block animate-bounce">⚡</span>
                                </h2>
                                <p class="mt-3 text-sm text-yellow-800 font-medium">*Syarat & Ketentuan Berlaku</p>
                            </div>

                            <!-- Updated Discount Display -->
                            <div class="relative">
                                <div
                                    class="rounded-2xl border-4 border-dashed border-gray-900 bg-gradient-to-br from-yellow-400 to-yellow-500 p-8 shadow-lg">
                                    <p class="text-2xl font-bold text-gray-900 mb-4">SPESIAL MEMBER BARU</p>

                                    <!-- Main Discount -->
                                    <div class="bg-gray-900 rounded-xl p-6 mb-4 transform rotate-1">
                                        <p class="text-sm font-bold text-white mb-2">DISKON HINGGA</p>
                                        <div class="flex items-center justify-center">
                                            <span class="text-6xl font-extrabold text-[#FFB703]">15</span>
                                            <span class="text-4xl font-bold text-[#FFB703] ml-1">%</span>
                                        </div>
                                        <p class="text-sm font-bold text-white mt-2">UNTUK MEMBERSHIP PERTAMA</p>
                                    </div>

                                    <!-- Additional Benefits -->
                                    <div class="space-y-2 text-gray-900">
                                        <div class="flex items-center justify-center gap-2">
                                            <svg class="h-5 w-5 text-green-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="font-semibold">Free Trial 3 Hari</span>
                                        </div>
                                        <div class="flex items-center justify-center gap-2">
                                            <svg class="h-5 w-5 text-green-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="font-semibold">Konsultasi Fitness Gratis</span>
                                        </div>
                                        <div class="flex items-center justify-center gap-2">
                                            <svg class="h-5 w-5 text-green-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="font-semibold">Akses Semua Fasilitas</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Urgency Badge -->
                                <div
                                    class="absolute -top-3 -right-3 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold animate-pulse">
                                    Terbatas!
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Enhanced Form Section --}}
                    <div class="p-8 sm:p-12">
                        <div class="mb-8">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">Klaim Free Trial</h3>
                            <p class="text-gray-600">Isi form di bawah untuk mendapatkan akses trial gratis dan diskon
                                spesial.</p>
                        </div>

                        @if (session('success'))
                            <div id="notif-sukses" class="mb-6 rounded-lg bg-green-50 p-4 border border-green-200">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.06 0l4.001-5.492z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('trial.store') }}" method="POST" class="space-y-6">
                            @csrf

                            <!-- City and Club Selection -->
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2" x-data="{
                                selectedCity: '',
                                selectedClub: '',
                                allClubs: {
                                    'Yogyakarta': ['Be-Fit Malioboro', 'Be-Fit Pusat Kota'],
                                    'Sleman': ['Be-Fit Seturan', 'Be-Fit Condongcatur'],
                                    'Bantul': ['Be-Fit Banguntapan', 'Be-Fit Kasihan']
                                },
                                get availableClubs() {
                                    return this.allClubs[this.selectedCity] || [];
                                }
                            }">
                                <div>
                                    <label for="city"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Kota</label>
                                    <select id="city" name="city" x-model="selectedCity"
                                        @change="selectedClub = ''"
                                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3">
                                        <option value="">Pilih Kota</option>
                                        <template x-for="city in Object.keys(allClubs)">
                                            <option :value="city" x-text="city"></option>
                                        </template>
                                    </select>
                                    @error('city')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="club"
                                        class="block text-sm font-semibold text-gray-700 mb-2">Preferensi Klub</label>
                                    <select id="club" name="club" x-model="selectedClub"
                                        :disabled="!selectedCity"
                                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] disabled:bg-gray-100 text-base py-3">
                                        <option value="">Pilih Klub</option>
                                        <template x-for="club in availableClubs">
                                            <option :value="club" x-text="club"></option>
                                        </template>
                                    </select>
                                    @error('club')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama
                                    Lengkap</label>
                                <input type="text" name="name" id="name"
                                    placeholder="Isi nama sesuai KTP" value="{{ old('name') }}"
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3 @error('name') border-red-500 @enderror">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Nomor
                                    Handphone</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <span class="text-gray-500 text-base">+62</span>
                                    </div>
                                    <input type="tel" name="phone" id="phone" placeholder="81234567890"
                                        value="{{ old('phone') }}"
                                        class="block w-full rounded-lg border-gray-300 pl-12 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3 @error('phone') border-red-500 @enderror">
                                </div>
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone Confirmation -->
                            <div>
                                <label for="phone_confirmation"
                                    class="block text-sm font-semibold text-gray-700 mb-2">Konfirmasi Nomor
                                    Handphone</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <span class="text-gray-500 text-base">+62</span>
                                    </div>
                                    <input type="tel" name="phone_confirmation" id="phone_confirmation"
                                        placeholder="Isi no. handphone kembali disini"
                                        class="block w-full rounded-lg border-gray-300 pl-12 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3">
                                </div>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email"
                                    class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                                <input type="email" name="email" id="email" placeholder="user@mail.com"
                                    value="{{ old('email') }}"
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3 @error('email') border-red-500 @enderror">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Contact Time -->
                            <div>
                                <label for="contact_time"
                                    class="block text-sm font-semibold text-gray-700 mb-2">Preferensi Waktu
                                    Kontak</label>
                                <select id="contact_time" name="contact_time"
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3">
                                    <option>Kapan Saja</option>
                                    <option>Pagi (08:00 - 12:00)</option>
                                    <option>Siang (12:00 - 17:00)</option>
                                    <option>Malam (17:00 - 21:00)</option>
                                </select>
                            </div>

                            <!-- Referral -->
                            <div>
                                <label for="referral" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Kode Referral <span class="text-gray-500 font-normal">(Optional)</span>
                                </label>
                                <input type="text" name="referral" id="referral"
                                    placeholder="Masukkan kode referral dari teman"
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3">
                            </div>

                            <!-- Checkboxes -->
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="newsletter" name="newsletter" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-[#FFB703] focus:ring-[#FFB703]">
                                    </div>
                                    <div class="ml-3">
                                        <label for="newsletter" class="text-sm font-medium text-gray-700">
                                            Berlangganan newsletter untuk tips fitness dan promo terbaru
                                        </label>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="agreement" name="agreement" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-[#FFB703] focus:ring-[#FFB703]">
                                    </div>
                                    <div class="ml-3">
                                        <label for="agreement" class="text-sm font-medium text-gray-700">
                                            Saya sudah baca dan setuju dengan
                                            <a href="#"
                                                class="text-[#FFB703] hover:text-yellow-600 underline">kebijakan data
                                                privasi</a>.
                                        </label>
                                    </div>
                                </div>
                                @error('agreement')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-4">
                                <button type="submit"
                                    class="w-full flex justify-center items-center gap-3 rounded-lg bg-[#FFB703] px-6 py-4 text-lg font-bold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus:outline-none focus:ring-2 focus:ring-[#FFB703] focus:ring-offset-2 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>
                                    Klaim Diskon 15% Sekarang
                                </button>
                            </div>
                        </form>

                        <!-- Trust Indicators -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-center gap-6 text-sm text-gray-500">
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Data Aman</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    <span>Respon 24 Jam</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span>Trusted by 500+ Members</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const successAlert = document.getElementById('notif-sukses');
                if (successAlert) {
                    successAlert.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            });
        </script>
    @endpush
</x-guest-layout>
