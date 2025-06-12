<x-guest-layout>
    {{-- Konten utama halaman dimulai di sini. --}}
    <main class="isolate bg-white dark:bg-gray-900">

        <div class="relative">
            <div class="absolute inset-0 -z-10">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1470&auto=format&fit=crop"
                    alt="Tim Be-Fit Space">
            </div>
            <div class="absolute inset-0 bg-[#023047] opacity-80 -z-10"></div>
            <div class="mx-auto max-w-4xl px-6 py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                        Misi Kami: <span class="text-[#FFB703]">Membangun Komunitas</span> Sehat & Kuat.
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300">
                        Di Be-Fit Space, kami percaya bahwa kebugaran bukan hanya tentang mengangkat beban, tetapi
                        tentang membangun kekuatan dari dalam, menemukan potensi diri, dan menjadi bagian dari komunitas
                        yang saling mendukung.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ route('locations.index') }}"
                            class="rounded-md bg-[#FFB703] px-5 py-3 text-base font-semibold text-gray-900 shadow-lg hover:bg-opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#FFB703] transition-colors transform hover:scale-105">
                            Jelajahi Klub Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <section class="bg-gradient-to-br from-white to-yellow-100 py-16 dark:bg-gray-800/50 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Be-Fit
                            Space dalam Angka</h2>
                        <p class="mt-4 text-lg leading-8 text-gray-600 dark:text-gray-400">Kami bangga dengan pencapaian
                            dan pertumbuhan komunitas kami.</p>
                    </div>
                    <dl
                        class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                        <div class="flex flex-col bg-gray-600/5 dark:bg-white/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-600 dark:text-gray-300">Anggota Bahagia
                            </dt>
                            <dd
                                class="order-first text-3xl font-semibold tracking-tight text-[#023047] dark:text-[#FFB703]">
                                1,500+</dd>
                        </div>
                        <div class="flex flex-col bg-gray-600/5 dark:bg-white/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-600 dark:text-gray-300">Kelas Setiap
                                Minggu</dt>
                            <dd
                                class="order-first text-3xl font-semibold tracking-tight text-[#023047] dark:text-[#FFB703]">
                                50+</dd>
                        </div>
                        <div class="flex flex-col bg-gray-600/5 dark:bg-white/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-600 dark:text-gray-300">Pelatih
                                Bersertifikat</dt>
                            <dd
                                class="order-first text-3xl font-semibold tracking-tight text-[#023047] dark:text-[#FFB703]">
                                15</dd>
                        </div>
                        <div class="flex flex-col bg-gray-600/5 dark:bg-white/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-600 dark:text-gray-300">Tahun Berdiri
                            </dt>
                            <dd
                                class="order-first text-3xl font-semibold tracking-tight text-[#023047] dark:text-[#FFB703]">
                                2020</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>



        <section class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
            <div class="relative isolate overflow-hidden bg-[#023047] px-6 py-24 text-center shadow-2xl rounded-3xl">
                <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Siap Memulai Transformasi Anda?
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">
                    Bergabunglah dengan komunitas kami hari ini dan ambil langkah pertama menuju versi diri Anda yang
                    lebih sehat, lebih kuat, dan lebih percaya diri.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('memberships.index') }}"
                        class="rounded-md bg-[#FFB703] px-3.5 py-2.5 text-sm font-bold text-gray-900 shadow-sm hover:bg-opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Lihat
                        Paket Membership</a>
                    <a href="{{ route('contact.us') }}" class="text-sm font-semibold leading-6 text-white">Hubungi Kami
                        <span aria-hidden="true">→</span></a>
                </div>
                <svg viewBox="0 0 1024 1024"
                    class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]"
                    aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="url(#gradient-yellow-blue)" fill-opacity="0.7">
                    </circle>
                    <defs>
                        <radialGradient id="gradient-yellow-blue">
                            <stop stop-color="#FFB703"></stop>
                            <stop offset="1" stop-color="#023047"></stop>
                        </radialGradient>
                    </defs>
                </svg>
            </div>
        </section>

    </main>
</x-guest-layout>
