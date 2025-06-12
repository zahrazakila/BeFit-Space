{{-- File: resources/views/admin/dashboard.blade.php --}}
<x-app-layout>
    <div class="py-12 bg-gradient-to-b from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-6 bg-green-50 border-l-4 border-green-400 text-green-800 px-6 py-4 rounded-r-lg shadow-sm"
                    role="alert">
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <div>
                            <strong class="font-bold">Sukses!</strong>
                            <span class="block sm:inline ml-1">{{ session('success') }}</span>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Section Statistik Angka --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                {{-- Kartu Total Pendapatan --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-l-4 border-[#FFB703] transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 bg-gradient-to-br from-[#FFB703] to-[#FFB703]/80 rounded-lg p-3 shadow-md">
                                <svg class="h-7 w-7 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-sm font-semibold text-gray-600 truncate">Total Pendapatan</p>
                                <p class="text-2xl font-bold text-[#023047]">Rp
                                    {{ number_format($totalRevenue ?? 0, 0, ',', '.') }}</p>
                                <p class="text-xs text-gray-500 mt-1">Semua waktu</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kartu Member Aktif --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-l-4 border-green-500 transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 bg-gradient-to-br from-green-500 to-green-600 rounded-lg p-3 shadow-md">
                                <svg class="h-7 w-7 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.08-.996-.223-1.293a4.002 4.002 0 00-1.457-1.051A4.002 4.002 0 0013 15c0-1.104.896-2 2-2h1c2.21 0 4 1.79 4 4v3c0 .552-.448 1-1 1zM5 18a3 3 0 01-3-3V9a3 3 0 013-3h4a3 3 0 013 3v6a3 3 0 01-3 3H5z" />
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-sm font-semibold text-gray-600 truncate">Member Aktif</p>
                                <p class="text-2xl font-bold text-[#023047]">{{ $activeMembersCount ?? 0 }}</p>
                                <p class="text-xs text-green-600 mt-1">Membership aktif</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kartu Total User --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-l-4 border-blue-500 transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg p-3 shadow-md">
                                <svg class="h-7 w-7 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-sm font-semibold text-gray-600 truncate">Total Pengguna</p>
                                <p class="text-2xl font-bold text-[#023047]">{{ $totalUsersCount ?? 0 }}</p>
                                <p class="text-xs text-blue-600 mt-1">Terdaftar</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kartu Member Baru Bulan Ini --}}
                <div
                    class="bg-white overflow-hidden shadow-lg rounded-xl border-l-4 border-[#023047] transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 bg-gradient-to-br from-[#023047] to-[#034263] rounded-lg p-3 shadow-md">
                                <svg class="h-7 w-7 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-sm font-semibold text-gray-600 truncate">Member Baru</p>
                                <p class="text-2xl font-bold text-[#023047]">{{ $newMembersThisMonth ?? 0 }}</p>
                                <p class="text-xs text-[#023047] mt-1">Bulan ini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Akhir Section Statistik Angka --}}

            {{-- Section Pendaftar Free Trial Baru --}}
            @if ($trialSubmissions->isNotEmpty())
                <div class="mt-8 mb-8">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-[#FFB703]">
                        <div class="bg-gradient-to-r from-[#FFB703] to-[#FFB703]/80 px-6 py-4">
                            <h2 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 2L3 7v11c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V7l-7-5zM10 12c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                                </svg>
                                Pendaftar Free Trial Baru
                            </h2>
                            <p class="text-gray-700 text-sm mt-1">Calon member yang perlu dihubungi</p>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nama</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nomor HP</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Klub</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Waktu Kontak</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Tanggal Daftar</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($trialSubmissions as $submission)
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="font-medium text-[#023047]">{{ $submission->name }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                                {{ $submission->phone_number }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#023047]/10 text-[#023047]">
                                                    {{ $submission->club_preference }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFB703]/20 text-[#FFB703]">
                                                    {{ $submission->contact_preference }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $submission->created_at->format('d M Y, H:i') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center space-x-2">
                                                    @php
                                                        $wa_number =
                                                            '62' .
                                                            ltrim(
                                                                preg_replace('/[^0-9]/', '', $submission->phone_number),
                                                                '0',
                                                            );
                                                        $message = urlencode(
                                                            "Halo {$submission->name}, kami dari Be-Fit Space. Kami menghubungi Anda terkait pendaftaran free trial yang telah Anda ajukan.",
                                                        );
                                                    @endphp
                                                    <a href="https://wa.me/{{ $wa_number }}?text={{ $message }}"
                                                        target="_blank"
                                                        class="inline-flex items-center px-3 py-2 bg-green-500 hover:bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition-colors duration-200">
                                                        <svg class="h-4 w-4 mr-1" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                                        </svg>
                                                        WhatsApp
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.trials.markContacted', $submission) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Tandai sudah dihubungi?');"
                                                        class="inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit"
                                                            class="inline-flex items-center px-3 py-2 bg-[#023047] hover:bg-[#034263] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition-colors duration-200">
                                                            <svg class="h-4 w-4 mr-1" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                            Tandai
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="bg-gray-50 px-6 py-3">
                            <div class="text-right">
                                <a href="{{ route('admin.trials.index') }}"
                                    class="text-sm font-medium text-[#023047] hover:text-[#034263] transition-colors duration-200">
                                    Lihat Semua Pendaftar →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Section Grafik --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl mb-8 border-t-4 border-[#023047]">
                <div class="p-6">
                    <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
                        <div>
                            <h3 class="text-xl font-bold text-[#023047] flex items-center gap-2">
                                <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                Grafik Pendaftaran Member
                            </h3>
                            <p class="text-gray-600 text-sm mt-1">Analisis pertumbuhan member</p>
                        </div>
                        <div class="mt-4 sm:mt-0">
                            <div class="flex space-x-2" id="chart-range-filter">
                                <button data-range="1m"
                                    class="chart-filter-btn px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors duration-200">
                                    1 Bulan
                                </button>
                                <button data-range="3m"
                                    class="chart-filter-btn px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors duration-200">
                                    3 Bulan
                                </button>
                                <button data-range="6m"
                                    class="chart-filter-btn active-filter px-4 py-2 text-sm font-medium text-white bg-[#023047] rounded-lg">
                                    6 Bulan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-6 rounded-xl shadow-inner"
                        style="height: 400px;">
                        <canvas id="userRegistrationChart"></canvas>
                    </div>
                </div>
            </div>
            {{-- Akhir Section Grafik --}}

            {{-- Tabel Membership --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#FFB703]">
                <div class="bg-gradient-to-r from-[#023047] to-[#034263] px-6 py-4">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 9a2 2 0 00-2 2v2m0 0V9a2 2 0 012-2m0 2a2 2 0 012-2h2a2 2 0 012 2m0 0a2 2 0 012-2v2a2 2 0 01-2 2m0 0a2 2 0 002 2v2a2 2 0 01-2 2" />
                        </svg>
                        Aktivitas Membership Terbaru
                    </h3>
                    <p class="text-gray-200 text-sm mt-1">Status membership member aktif</p>
                </div>

                @if ($latestMemberships->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama User
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Paket
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Berakhir
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($latestMemberships as $membership)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="font-medium text-[#023047]">
                                                {{ $membership->user->name ?? 'N/A' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#FFB703]/20 text-[#FFB703]">
                                                {{ $membership->membershipPackage->name ?? 'N/A' }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{ \Carbon\Carbon::parse($membership->end_date)->isoFormat('D MMM YYYY') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if (strtolower($membership->status) === 'active' && \Carbon\Carbon::parse($membership->end_date)->isFuture())
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Aktif
                                                </span>
                                            @elseif (strtolower($membership->status) === 'expired' || \Carbon\Carbon::parse($membership->end_date)->isPast())
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Expired
                                                </span>
                                            @else
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                    {{ ucfirst($membership->status) }}
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-gray-50 px-6 py-3">
                        <div class="text-right">
                            <a href="{{ route('admin.memberships.index') }}"
                                class="text-sm font-medium text-[#023047] hover:text-[#034263] transition-colors duration-200">
                                Lihat Semua Membership →
                            </a>
                        </div>
                    </div>
                @else
                    <div class="p-12 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Belum ada aktivitas</h3>
                        <p class="mt-1 text-sm text-gray-500">Belum ada aktivitas membership yang tercatat.</p>
                    </div>
                @endif
            </div>

        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const userRegistrationCtx = document.getElementById('userRegistrationChart');
                let userRegistrationChart;

                const activeFilterClasses = ['active-filter', 'bg-[#023047]', 'text-white'];
                const inactiveFilterClasses = ['bg-gray-100', 'hover:bg-gray-200', 'text-gray-700'];

                function updateActiveButton(clickedButton) {
                    document.querySelectorAll('.chart-filter-btn').forEach(button => {
                        button.classList.remove(...activeFilterClasses);
                        button.classList.add(...inactiveFilterClasses);
                    });
                    clickedButton.classList.add(...activeFilterClasses);
                    clickedButton.classList.remove(...inactiveFilterClasses);
                }

                async function fetchDataAndUpdateChart(range = '6m', initialLoad = false) {
                    try {
                        const response = await fetch(`{{ route('admin.dashboard') }}?range=${range}`, {
                            method: 'GET',
                            headers: {
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        const chartDataResponse = await response.json();

                        if (userRegistrationChart && !initialLoad) {
                            userRegistrationChart.data.labels = chartDataResponse.labels;
                            userRegistrationChart.data.datasets[0].data = chartDataResponse.data;
                            userRegistrationChart.update();
                        } else if (initialLoad && userRegistrationCtx) {
                            userRegistrationChart = new Chart(userRegistrationCtx, {
                                type: 'line',
                                data: {
                                    labels: chartDataResponse.labels,
                                    datasets: [{
                                        label: 'Member Baru',
                                        data: chartDataResponse.data,
                                        backgroundColor: 'rgba(2, 48, 71, 0.1)',
                                        borderColor: '#023047',
                                        borderWidth: 3,
                                        tension: 0.4,
                                        fill: true,
                                        pointBackgroundColor: '#FFB703',
                                        pointBorderColor: '#023047',
                                        pointBorderWidth: 2,
                                        pointRadius: 6,
                                        pointHoverBackgroundColor: '#FFB703',
                                        pointHoverBorderColor: '#023047',
                                        pointHoverRadius: 8
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            ticks: {
                                                stepSize: 1,
                                                color: '#6b7280',
                                                font: {
                                                    family: 'Inter, system-ui, sans-serif'
                                                }
                                            },
                                            grid: {
                                                color: 'rgba(0,0,0,0.05)',
                                                borderColor: '#e5e7eb'
                                            }
                                        },
                                        x: {
                                            ticks: {
                                                color: '#6b7280',
                                                font: {
                                                    family: 'Inter, system-ui, sans-serif'
                                                }
                                            },
                                            grid: {
                                                display: false
                                            }
                                        }
                                    },
                                    plugins: {
                                        legend: {
                                            display: true,
                                            position: 'top',
                                            labels: {
                                                color: '#023047',
                                                font: {
                                                    family: 'Inter, system-ui, sans-serif',
                                                    weight: '600'
                                                },
                                                usePointStyle: true,
                                                pointStyle: 'circle'
                                            }
                                        }
                                    },
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    interaction: {
                                        intersect: false,
                                        mode: 'index'
                                    }
                                }
                            });
                        }
                    } catch (error) {
                        console.error('Error fetching or updating chart data:', error);
                    }
                }

                document.querySelectorAll('.chart-filter-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const range = this.dataset.range;
                        updateActiveButton(this);
                        fetchDataAndUpdateChart(range);
                    });
                });

                const defaultActiveButton = document.querySelector('.chart-filter-btn.active-filter');
                const initialRange = defaultActiveButton ? defaultActiveButton.dataset.range : '6m';
                fetchDataAndUpdateChart(initialRange, true);
            });
        </script>
    @endpush
</x-app-layout>
