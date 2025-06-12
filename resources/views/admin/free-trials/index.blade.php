<x-app-layout>

    <div class="py-12 bg-gradient-to-b from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Pesan Sukses --}}
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

            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#FFB703]">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-[#023047] flex items-center gap-2">
                            <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Pendaftar Free Trial
                        </h3>

                        <div class="text-sm text-gray-500">
                            Total: <span class="font-semibold text-[#023047]">{{ $submissions->total() }}</span>
                            pendaftar
                        </div>
                    </div>

                    {{-- Tombol Filter --}}
                    <div class="flex space-x-1 border-b border-gray-200 mb-6">
                        <a href="{{ route('admin.trials.index') }}"
                            class="px-4 py-3 text-sm font-medium border-b-2 transition-colors duration-200 {{ !request('status') ? 'border-[#FFB703] text-[#023047] font-semibold' : 'border-transparent text-gray-500 hover:text-[#023047] hover:border-gray-300' }}">
                            Semua
                        </a>
                        <a href="{{ route('admin.trials.index', ['status' => 'new']) }}"
                            class="px-4 py-3 text-sm font-medium border-b-2 transition-colors duration-200 {{ request('status') == 'new' ? 'border-[#FFB703] text-[#023047] font-semibold' : 'border-transparent text-gray-500 hover:text-[#023047] hover:border-gray-300' }}">
                            Baru
                        </a>
                        <a href="{{ route('admin.trials.index', ['status' => 'contacted']) }}"
                            class="px-4 py-3 text-sm font-medium border-b-2 transition-colors duration-200 {{ request('status') == 'contacted' ? 'border-[#FFB703] text-[#023047] font-semibold' : 'border-transparent text-gray-500 hover:text-[#023047] hover:border-gray-300' }}">
                            Sudah Dihubungi
                        </a>
                    </div>

                    {{-- Tabel Data --}}
                    <div class="overflow-x-auto rounded-xl border border-gray-200 shadow">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kontak</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Klub</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal Daftar</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($submissions as $submission)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-10 w-10 bg-[#FFB703]/20 rounded-full flex items-center justify-center">
                                                    <span class="text-[#023047] font-semibold text-sm">
                                                        {{ substr($submission->name, 0, 2) }}
                                                    </span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-[#023047]">
                                                        {{ $submission->name }}
                                                    </div>
                                                    <div class="text-xs text-gray-500">
                                                        {{ $submission->contact_preference ?? 'Kapan Saja' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 font-medium">
                                                {{ $submission->phone_number }}</div>
                                            <div class="text-xs text-gray-500">{{ $submission->email }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#023047]/10 text-[#023047]">
                                                {{ $submission->club_preference }}
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
                                                {{ $submission->created_at->isoFormat('D MMM Y, HH:mm') }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($submission->contacted_at)
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                    <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    Dihubungi
                                                </span>
                                            @else
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-[#FFB703]/20 text-[#FFB703]">
                                                    <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    Baru
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center space-x-3">
                                                @php
                                                    $wa_number =
                                                        '62' .
                                                        ltrim(
                                                            preg_replace('/[^0-9]/', '', $submission->phone_number),
                                                            '0',
                                                        );
                                                    $message = urlencode(
                                                        "Halo {$submission->name}, kami dari Be-Fit. Kami menghubungi Anda terkait pendaftaran free trial yang telah Anda ajukan.",
                                                    );
                                                @endphp
                                                <a href="https://wa.me/{{ $wa_number }}?text={{ $message }}"
                                                    target="_blank"
                                                    class="inline-flex items-center px-3 py-1.5 bg-green-500 hover:bg-green-600 border border-transparent rounded-md font-medium text-xs text-white uppercase tracking-wider transition-colors duration-200">
                                                    <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                        <path
                                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                                    </svg>
                                                    WhatsApp
                                                </a>

                                                @if (!$submission->contacted_at)
                                                    <form
                                                        action="{{ route('admin.trials.markContacted', $submission) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Tandai sudah dihubungi?');">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit"
                                                            class="inline-flex items-center px-3 py-1.5 bg-[#023047] hover:bg-[#034263] border border-transparent rounded-md font-medium text-xs text-white uppercase tracking-wider transition-colors duration-200">
                                                            <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                            Tandai
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-12 text-center">
                                            <div class="flex flex-col items-center">
                                                <svg class="h-12 w-12 text-gray-400 mb-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                                <span class="text-gray-500 font-medium">Tidak ada data pendaftar yang
                                                    cocok.</span>
                                                <p class="text-gray-400 text-sm mt-1">Coba pilih filter yang berbeda
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Link Pagination --}}
                <div class="p-6 border-t border-gray-200">
                    {{ $submissions->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
