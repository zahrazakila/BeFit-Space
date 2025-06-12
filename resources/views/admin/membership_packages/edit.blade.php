<x-app-layout>

    <div class="py-12 bg-gradient-to-b from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#FFB703]">
                <div class="p-6 md:p-8">
                    <form method="POST" action="{{ route('admin.membership-packages.update', $membershipPackage->id) }}">
                        @csrf
                        @method('PUT')

                        {{-- Basic Information Section --}}
                        <div class="mb-8">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-8 h-8 bg-[#FFB703] rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-gray-900" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-[#023047]">Informasi Dasar</h3>
                                    <p class="text-gray-600 text-sm">Atur nama dan durasi paket membership</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                {{-- NAMA PAKET --}}
                                <div class="sm:col-span-2">
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nama Paket <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="name" id="name"
                                        value="{{ old('name', $membershipPackage->name) }}" required
                                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3">
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- DURASI PAKET --}}
                                <div class="sm:col-span-2">
                                    <label for="duration_days" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Durasi (Hari) <span class="text-red-500">*</span>
                                    </label>
                                    <input type="number" name="duration_days" id="duration_days"
                                        value="{{ old('duration_days', $membershipPackage->duration_days) }}" required
                                        min="1"
                                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3">
                                    <p class="mt-1 text-xs text-gray-500">Masukkan jumlah hari untuk durasi paket</p>
                                    @error('duration_days')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Pricing & Discount Section --}}
                        <div class="border-t border-gray-200 pt-8">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-8 h-8 bg-[#FFB703] rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-gray-900" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-[#023047]">Pengaturan Harga dan Diskon</h3>
                                    <p class="text-gray-600 text-sm">Atur harga normal dan detail diskon untuk paket ini
                                    </p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                {{-- Input untuk HARGA ASLI --}}
                                <div>
                                    <label for="original_price" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Harga Asli (Rp) <span class="text-red-500">*</span>
                                    </label>
                                    <input type="number" name="original_price" id="original_price"
                                        value="{{ old('original_price', $membershipPackage->original_price) }}"
                                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3"
                                        required>
                                    <p class="mt-1 text-xs text-gray-500">Harga normal paket sebelum ada diskon</p>
                                    @error('original_price')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Input untuk PERSENTASE DISKON --}}
                                <div>
                                    <label for="discount_percentage"
                                        class="block text-sm font-semibold text-gray-700 mb-2">
                                        Persentase Diskon (%)
                                    </label>
                                    <input type="number" step="0.01" min="0" max="100"
                                        name="discount_percentage" id="discount_percentage"
                                        value="{{ old('discount_percentage', $membershipPackage->discount_percentage) }}"
                                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3">
                                    <p class="mt-1 text-xs text-gray-500">Isi 0 jika tidak ada diskon</p>
                                    @error('discount_percentage')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- HARGA FINAL (Display Only) --}}
                                <div>
                                    <label for="calculated_price"
                                        class="block text-sm font-semibold text-gray-700 mb-2">
                                        Harga Final (Setelah Diskon)
                                    </label>
                                    <input type="text" id="calculated_price"
                                        value="Rp {{ number_format($membershipPackage->price, 0, ',', '.') }}"
                                        class="block w-full rounded-lg border-gray-300 bg-gray-100 text-gray-700 text-base py-3"
                                        disabled readonly>
                                    <p class="mt-1 text-xs text-gray-500">Harga yang akan dibayar pelanggan (dihitung
                                        otomatis)</p>
                                </div>

                                {{-- Checkbox untuk AKTIFKAN DISKON --}}
                                <div>
                                    <div class="bg-gray-50 rounded-lg p-4 h-fit">
                                        <div class="flex items-start gap-3">
                                            <div class="flex h-6 items-center">
                                                <input id="is_discount_active" name="is_discount_active" type="checkbox"
                                                    value="1"
                                                    {{ old('is_discount_active', $membershipPackage->is_discount_active) ? 'checked' : '' }}
                                                    class="h-5 w-5 rounded border-gray-300 text-[#FFB703] focus:ring-[#FFB703]">
                                            </div>
                                            <div>
                                                <label for="is_discount_active"
                                                    class="font-semibold text-gray-900 cursor-pointer">
                                                    Aktifkan Diskon
                                                </label>
                                                <p class="text-gray-600 text-sm mt-1">Centang untuk memberlakukan diskon
                                                    ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Input untuk TANGGAL MULAI DISKON --}}
                                <div>
                                    <label for="discount_start_date"
                                        class="block text-sm font-semibold text-gray-700 mb-2">
                                        Tanggal Mulai Diskon (Opsional)
                                    </label>
                                    <input type="date" name="discount_start_date" id="discount_start_date"
                                        value="{{ old('discount_start_date', $membershipPackage->discount_start_date ? \Carbon\Carbon::parse($membershipPackage->discount_start_date)->format('Y-m-d') : '') }}"
                                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3">
                                    @error('discount_start_date')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Input untuk TANGGAL AKHIR DISKON --}}
                                <div>
                                    <label for="discount_end_date"
                                        class="block text-sm font-semibold text-gray-700 mb-2">
                                        Tanggal Akhir Diskon (Opsional)
                                    </label>
                                    <input type="date" name="discount_end_date" id="discount_end_date"
                                        value="{{ old('discount_end_date', $membershipPackage->discount_end_date ? \Carbon\Carbon::parse($membershipPackage->discount_end_date)->format('Y-m-d') : '') }}"
                                        class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] text-base py-3">
                                    @error('discount_end_date')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Form Actions --}}
                        <div
                            class="mt-8 pt-6 border-t border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <a href="{{ route('admin.membership-packages.index') }}"
                                class="inline-flex items-center text-base font-semibold text-gray-600 hover:text-[#023047] transition-colors">
                                <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 12H5m0 0l7 7m-7-7l7-7" />
                                </svg>
                                Kembali ke Daftar Paket
                            </a>

                            <button type="submit"
                                class="inline-flex items-center justify-center rounded-lg bg-[#FFB703] px-8 py-3 text-base font-bold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus:outline-none focus:ring-2 focus:ring-[#FFB703] focus:ring-offset-2 transition-all duration-200 transform hover:scale-105">
                                <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
