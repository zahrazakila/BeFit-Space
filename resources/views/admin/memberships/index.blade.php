<x-app-layout>

    <div class="py-12 bg-gradient-to-b from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#FFB703]">
                <div class="p-6">

                    {{-- Judul dan Form Pencarian --}}
                    <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                        <div>
                            <h3 class="text-xl font-bold text-[#023047] flex items-center gap-2">
                                <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 9a2 2 0 00-2 2v2m0 0V9a2 2 0 012-2m0 2a2 2 0 012-2h2a2 2 0 012 2m0 0a2 2 0 012-2v2a2 2 0 01-2 2m0 0a2 2 0 002 2v2a2 2 0 01-2 2" />
                                </svg>
                                Semua Data Member
                            </h3>
                            <p class="text-gray-600 text-sm mt-1">Daftar lengkap membership aktif dan expired</p>
                        </div>
                        <form method="GET" action="{{ route('admin.memberships.index') }}" class="w-full sm:w-auto">
                            <div class="flex shadow-sm rounded-lg overflow-hidden">
                                <div class="relative flex-grow">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                    <input type="text" name="search" id="search"
                                        placeholder="Cari nama, email, paket..." value="{{ $searchKeyword ?? '' }}"
                                        class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-l-lg focus:ring-[#FFB703] focus:border-[#FFB703] text-sm">
                                </div>
                                <button type="submit"
                                    class="px-6 py-3 bg-[#023047] text-white font-semibold rounded-r-lg hover:bg-[#034263] transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#FFB703] text-sm">
                                    Cari
                                </button>
                            </div>
                        </form>
                    </div>

                    {{-- Tabel Data --}}
                    <div class="overflow-x-auto rounded-xl border border-gray-200 shadow">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama User</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Paket</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal Berakhir</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">Aksi</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($memberships as $membership)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-10 w-10 bg-[#023047]/10 rounded-full flex items-center justify-center">
                                                    <span class="text-[#023047] font-semibold text-sm">
                                                        {{ substr($membership->user->name ?? 'NA', 0, 2) }}
                                                    </span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-[#023047]">
                                                        {{ $membership->user->name ?? 'N/A' }}
                                                    </div>
                                                    <div class="text-xs text-gray-500">
                                                        {{ $membership->user->email ?? 'N/A' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFB703]/20 text-[#FFB703]">
                                                {{ $membership->membershipPackage->name ?? 'N/A' }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            <div class="flex items-center">
                                                <svg class="h-4 w-4 text-gray-400 mr-1.5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ \Carbon\Carbon::parse($membership->end_date)->isoFormat('D MMMM YYYY') }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            @if (strtolower($membership->status) === 'active' && \Carbon\Carbon::parse($membership->end_date)->isFuture())
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Aktif
                                                </span>
                                            @else
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Expired
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#"
                                                class="text-[#023047] hover:text-[#034263] bg-gray-100 hover:bg-gray-200 px-3 py-1.5 rounded-lg transition-colors duration-200">
                                                <span class="flex items-center gap-1">
                                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    Detail
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-12 text-center">
                                            <div class="flex flex-col items-center">
                                                <svg class="h-12 w-12 text-gray-400 mb-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                                <span class="text-gray-500 font-medium">Tidak ada data membership yang
                                                    ditemukan.</span>
                                                <p class="text-gray-400 text-sm mt-1">Coba gunakan kata kunci pencarian
                                                    yang berbeda</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Link Pagination --}}
                    @if ($memberships->hasPages())
                        <div class="mt-6">
                            <div
                                class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                                {{ $memberships->links() }}
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
