<x-guest-layout>
    {{-- 
        PERUBAHAN 1: 
        Data 'locations' sekarang diinisialisasi dari variabel $locations yang dikirim oleh Controller.
        Data statis sebelumnya dihapus. Sintaks {{ Illuminate\Support\Js::from($locations) }} akan mengubah
        array PHP menjadi array JSON yang aman untuk dibaca oleh JavaScript/Alpine.js.
    --}}
    <div x-data="{
        locations: {{ Illuminate\Support\Js::from($locations) }},
        search: '',
        selectedProvince: 'Semua Provinsi',
        selectedCity: 'Semua Kota',
        get uniqueProvinces() {
            return ['Semua Provinsi', ...new Set(this.locations.map(loc => loc.province))]
        },
        get uniqueCities() {
            let cities = this.selectedProvince === 'Semua Provinsi' ?
                this.locations :
                this.locations.filter(loc => loc.province === this.selectedProvince);
            return ['Semua Kota', ...new Set(cities.map(loc => loc.city))];
        },
        get filteredLocations() {
            return this.locations.filter(loc => {
                const searchMatch = loc.name.toLowerCase().includes(this.search.toLowerCase()) || loc.address.toLowerCase().includes(this.search.toLowerCase());
                const provinceMatch = this.selectedProvince === 'Semua Provinsi' || loc.province === this.selectedProvince;
                const cityMatch = this.selectedCity === 'Semua Kota' || loc.city === this.selectedCity;
                return searchMatch && provinceMatch && cityMatch;
            });
        }
    }">
        <div class="bg-gray-100 dark:bg-gray-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-5xl">Temukan Klub
                        Kami</h1>
                    <p class="mt-4 text-xl text-gray-600 dark:text-gray-300">Pilih lokasi gym Be-Fit Space yang terdekat
                        dan paling nyaman untuk Anda.</p>
                </div>

                <div class="sticky top-0 z-10 bg-gray-100 dark:bg-gray-900 py-6 mb-8 shadow-sm">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-4xl mx-auto">
                        <div>
                            <label for="province"
                                class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Provinsi</label>
                            <select id="province" name="province" x-model="selectedProvince"
                                @change="selectedCity = 'Semua Kota'"
                                class="mt-1 block w-full rounded-md border-0 py-2 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 dark:bg-gray-800 dark:text-white dark:ring-gray-600">
                                <template x-for="province in uniqueProvinces" :key="province">
                                    <option :value="province" x-text="province"></option>
                                </template>
                            </select>
                        </div>
                        <div>
                            <label for="city"
                                class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Kota/Kabupaten</label>
                            <select id="city" name="city" x-model="selectedCity"
                                class="mt-1 block w-full rounded-md border-0 py-2 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6 dark:bg-gray-800 dark:text-white dark:ring-gray-600">
                                <template x-for="city in uniqueCities" :key="city">
                                    <option :value="city" x-text="city"></option>
                                </template>
                            </select>
                        </div>
                        <div>
                            <label for="search"
                                class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Cari
                                Klub</label>
                            <input type="text" name="search" id="search" x-model="search"
                                placeholder="Contoh: Malioboro"
                                class="mt-1 block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 dark:bg-gray-800 dark:text-white dark:ring-gray-600">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <template x-for="location in filteredLocations" :key="location.name">
                        <div
                            class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 shadow-md hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-h-4 aspect-w-3 bg-gray-200 dark:bg-gray-700 sm:aspect-none sm:h-48">
                                <img :src="location.image" :alt="'Gambar ' + location.name"
                                    class="h-full w-full object-cover object-center sm:h-full sm:w-full"
                                    onerror="this.onerror=null;this.src='https://placehold.co/400x300/334155/FFFFFF?text=Be-Fit';">
                            </div>
                            <div class="flex flex-1 flex-col space-y-2 p-4">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                                    {{-- 
                                        PERUBAHAN 2: 
                                        Menggunakan x-bind:href (disingkat :href) dari Alpine.js untuk membuat URL dinamis.
                                        Ini akan membuat URL yang benar seperti /locations/1, /locations/2, dst.
                                        berdasarkan 'id' dari setiap lokasi.
                                    --}}
                                    <a :href="`/locations/${location.id}`">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        <span x-text="location.name"></span>
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400" x-text="location.address"></p>
                            </div>
                        </div>
                    </template>
                    <template x-if="filteredLocations.length === 0">
                        <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-12">
                            <p class="text-lg text-gray-500 dark:text-gray-400">Tidak ada lokasi yang cocok dengan
                                filter Anda.</p>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
