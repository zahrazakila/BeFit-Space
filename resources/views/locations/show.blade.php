{{-- File: resources/views/locations/show.blade.php --}}
<x-guest-layout>
    {{-- Ambil nama lokasi untuk judul halaman --}}
    <x-slot name="title">{{ $location['name'] }} - Be-Fit Space</x-slot>

    <div class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12 sm:py-16">

            <!-- Judul dan Alamat -->
            <div class="mb-12 text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-5xl">
                    {{ $location['name'] }}</h1>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">{{ $location['address'] }}</p>
            </div>

            <!-- Galeri Foto -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 mb-12 h-96">
                <!-- Gambar Utama -->
                <div class="col-span-2 row-span-2 rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ $location['image'] }}" alt="Foto utama {{ $location['name'] }}"
                        class="h-full w-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/800x600/334155/FFFFFF?text=Be-Fit';">
                </div>
                <!-- Gambar Kecil -->
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1574680096145-d05b474e2155?q=80&w=1469&auto=format&fit=crop"
                        alt="Foto fasilitas {{ $location['name'] }} 1" class="h-full w-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/400x300/334155/FFFFFF?text=Gym';">
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1540496905036-5937c10647cc?q=80&w=1374&auto=format&fit=crop"
                        alt="Foto fasilitas {{ $location['name'] }} 2" class="h-full w-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/400x300/334155/FFFFFF?text=Kelas';">
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?q=80&w=1469&auto=format&fit=crop"
                        alt="Foto fasilitas {{ $location['name'] }} 3" class="h-full w-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/400x300/334155/FFFFFF?text=Trainer';">
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?q=80&w=1471&auto=format&fit=crop"
                        alt="Foto fasilitas {{ $location['name'] }} 4" class="h-full w-full object-cover"
                        onerror="this.onerror=null;this.src='https://placehold.co/400x300/334155/FFFFFF?text=Santai';">
                </div>
            </div>

            <!-- Detail Lokasi: Jam Operasional, Kelas, Fasilitas -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-800 dark:text-gray-200">

                <!-- Jam Operasional -->
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold mb-4 border-b border-gray-200 dark:border-gray-700 pb-2">Jam
                        Operasional</h3>
                    <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                        <li class="flex justify-between"><span>Senin - Jumat</span> <span class="font-medium">06:00 -
                                22:00</span></li>
                        <li class="flex justify-between"><span>Sabtu</span> <span class="font-medium">06:00 -
                                21:00</span></li>
                        <li class="flex justify-between"><span>Minggu & Hari Libur</span> <span
                                class="font-medium">08:00 - 20:00</span></li>
                    </ul>
                    <a href="https://maps.google.com/?q={{ urlencode($location['address']) }}" target="_blank"
                        class="mt-6 inline-block w-full text-center rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Lihat di Google Maps
                    </a>
                </div>

                <!-- Kelas Tersedia -->
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold mb-4 border-b border-gray-200 dark:border-gray-700 pb-2">Kelas
                        Tersedia</h3>
                    <div class="grid grid-cols-2 gap-2 text-sm text-gray-700 dark:text-gray-300">
                        <span class="bg-gray-200 dark:bg-gray-700 p-2 rounded-md text-center">Yoga</span>
                        <span class="bg-gray-200 dark:bg-gray-700 p-2 rounded-md text-center">Zumba</span>
                        <span class="bg-gray-200 dark:bg-gray-700 p-2 rounded-md text-center">HIIT</span>
                        <span class="bg-gray-200 dark:bg-gray-700 p-2 rounded-md text-center">Body Combat</span>
                        <span class="bg-gray-200 dark:bg-gray-700 p-2 rounded-md text-center">Pilates</span>
                        <span class="bg-gray-200 dark:bg-gray-700 p-2 rounded-md text-center">Muay Thai</span>
                    </div>
                </div>

                <!-- Fasilitas Klub -->
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold mb-4 border-b border-gray-200 dark:border-gray-700 pb-2">Fasilitas
                        Klub</h3>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-2 text-sm text-gray-700 dark:text-gray-300">
                        <span>Loker</span>
                        <span>Ruang Ganti</span>
                        <span>Area Parkir</span>
                        <span>Wi-Fi</span>
                        <span>Kamar Mandi</span>
                        <span>Vending Machine</span>
                        <span>Area Fungsional</span>
                        <span>Area Kardio</span>
                    </div>
                </div>
            </div>

            <!-- Tombol CTA -->
            <div class="mt-16 text-center">
                <a href="{{ route('memberships.index') }}"
                    class="rounded-md bg-[#FFB703] px-5 py-3 text-base font-semibold text-gray-900 shadow-sm hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#FFB703] transition-colors duration-200">
                    Jadi Member Sekarang!
                </a>
            </div>

        </div>
    </div>
</x-guest-layout>
