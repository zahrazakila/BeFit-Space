<x-app-layout>

    <div class="py-12 bg-gradient-to-b from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Hero Introduction Section --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#FFB703] mb-8">
                <div class="bg-gradient-to-r from-[#FFB703] to-[#FFB703]/80 px-6 py-4">
                    <h3 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        Panduan Jadwal Latihan Profesional
                    </h3>
                    <p class="text-gray-700 text-sm mt-1">Dirancang oleh trainer bersertifikat untuk hasil maksimal</p>
                </div>

                <div class="p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <h4 class="text-2xl font-bold text-[#023047] mb-4">Mulai Transformasi Anda Hari Ini!</h4>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Program latihan yang telah terbukti efektif untuk mencapai berbagai tujuan fitness.
                                Sesuaikan intensitas dan beban dengan kemampuan Anda. Konsistensi adalah kunci utama
                                untuk mencapai hasil yang optimal.
                            </p>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-[#023047]/5 rounded-lg p-4 text-center">
                                    <div class="text-2xl font-bold text-[#FFB703]">3x</div>
                                    <div class="text-sm text-gray-600">Per Minggu</div>
                                    <div class="text-xs text-gray-500">Pemula</div>
                                </div>
                                <div class="bg-[#023047]/5 rounded-lg p-4 text-center">
                                    <div class="text-2xl font-bold text-[#FFB703]">5x</div>
                                    <div class="text-sm text-gray-600">Per Minggu</div>
                                    <div class="text-xs text-gray-500">Advanced</div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-[#023047]/5 to-[#FFB703]/10 rounded-xl p-6">
                            <h5 class="font-semibold text-[#023047] mb-4">Tips Sukses:</h5>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-[#FFB703]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Pemanasan 5-10 menit sebelum latihan
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-[#FFB703]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Fokus pada teknik yang benar
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-[#FFB703]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Progressive overload secara bertahap
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 text-[#FFB703]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Istirahat yang cukup antar sesi
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Program 3x Seminggu --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-[#023047] mb-8">
                <div class="bg-gradient-to-r from-[#023047] to-[#034263] px-6 py-4">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white flex items-center gap-2">
                                <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                Program Full Body - 3x Seminggu
                            </h3>
                            <p class="text-gray-200 text-sm mt-1">Ideal untuk pemula dan yang ingin efisiensi waktu</p>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <span
                                class="inline-flex items-center px-3 py-1 text-sm font-medium text-[#FFB703] bg-[#FFB703]/20 rounded-full">
                                <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                Recommended
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Hari 1 --}}
                        <div
                            class="bg-gradient-to-br from-[#FFB703]/10 to-[#FFB703]/5 border border-[#FFB703]/20 rounded-xl p-6 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-lg text-[#023047]">Hari 1</h4>
                                <div class="w-8 h-8 bg-[#FFB703] rounded-full flex items-center justify-center">
                                    <span class="text-sm font-bold text-gray-900">A</span>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Squat</div>
                                    <div class="text-xs text-gray-600">3 set × 8-12 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Bench Press</div>
                                    <div class="text-xs text-gray-600">3 set × 8-12 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Bent-over Row</div>
                                    <div class="text-xs text-gray-600">3 set × 8-12 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Overhead Press</div>
                                    <div class="text-xs text-gray-600">3 set × 8-12 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Plank</div>
                                    <div class="text-xs text-gray-600">3 set × 30-60 detik</div>
                                </div>
                            </div>
                        </div>

                        {{-- Hari 2 Istirahat --}}
                        <div
                            class="bg-gradient-to-br from-gray-100 to-gray-50 border border-gray-200 rounded-xl p-6 flex flex-col items-center justify-center">
                            <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                                <svg class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-lg text-gray-500 mb-1">Hari 2</h4>
                            <p class="text-xl font-semibold text-gray-400">ISTIRAHAT</p>
                            <p class="text-xs text-gray-500 text-center mt-2">Recovery & regenerasi otot</p>
                        </div>

                        {{-- Hari 3 --}}
                        <div
                            class="bg-gradient-to-br from-[#023047]/10 to-[#023047]/5 border border-[#023047]/20 rounded-xl p-6 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-lg text-[#023047]">Hari 3</h4>
                                <div class="w-8 h-8 bg-[#023047] rounded-full flex items-center justify-center">
                                    <span class="text-sm font-bold text-white">B</span>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Deadlift</div>
                                    <div class="text-xs text-gray-600">1 set × 5 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Incline DB Press</div>
                                    <div class="text-xs text-gray-600">3 set × 10-15 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Pull-up / Lat Pulldown</div>
                                    <div class="text-xs text-gray-600">3 set × max/10-15 reps</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">DB Shoulder Press</div>
                                    <div class="text-xs text-gray-600">3 set × 10-15 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Leg Raises</div>
                                    <div class="text-xs text-gray-600">3 set × 15-20 repetisi</div>
                                </div>
                            </div>
                        </div>

                        {{-- Hari 4 Istirahat --}}
                        <div
                            class="bg-gradient-to-br from-gray-100 to-gray-50 border border-gray-200 rounded-xl p-6 flex flex-col items-center justify-center">
                            <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                                <svg class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-lg text-gray-500 mb-1">Hari 4</h4>
                            <p class="text-xl font-semibold text-gray-400">ISTIRAHAT</p>
                            <p class="text-xs text-gray-500 text-center mt-2">Recovery & regenerasi otot</p>
                        </div>

                        {{-- Hari 5 --}}
                        <div
                            class="bg-gradient-to-br from-[#FFB703]/10 to-[#FFB703]/5 border border-[#FFB703]/20 rounded-xl p-6 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-lg text-[#023047]">Hari 5</h4>
                                <div class="w-8 h-8 bg-[#FFB703] rounded-full flex items-center justify-center">
                                    <span class="text-sm font-bold text-gray-900">A</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <span
                                    class="text-xs bg-[#FFB703]/20 text-[#FFB703] px-2 py-1 rounded-full font-medium">Variasi
                                    Latihan A</span>
                            </div>
                            <div class="space-y-3">
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Squat</div>
                                    <div class="text-xs text-gray-600">3 set × 8-12 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Bench Press</div>
                                    <div class="text-xs text-gray-600">3 set × 8-12 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Bent-over Row</div>
                                    <div class="text-xs text-gray-600">3 set × 8-12 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Overhead Press</div>
                                    <div class="text-xs text-gray-600">3 set × 8-12 repetisi</div>
                                </div>
                                <div class="bg-white rounded-lg p-3 shadow-sm">
                                    <div class="font-semibold text-[#023047] text-sm">Plank</div>
                                    <div class="text-xs text-gray-600">3 set × 30-60 detik</div>
                                </div>
                            </div>
                        </div>

                        {{-- Hari 6 & 7 Istirahat --}}
                        <div
                            class="bg-gradient-to-br from-gray-100 to-gray-50 border border-gray-200 rounded-xl p-6 flex flex-col items-center justify-center">
                            <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                                <svg class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-lg text-gray-500 mb-1">Hari 6 & 7</h4>
                            <p class="text-xl font-semibold text-gray-400">ISTIRAHAT</p>
                            <p class="text-xs text-gray-500 text-center mt-2">Weekend recovery</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Program 5x Seminggu --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-green-500 mb-8">
                <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-4">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white flex items-center gap-2">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Program Split Muscle - 5x Seminggu
                            </h3>
                            <p class="text-green-100 text-sm mt-1">Untuk yang berpengalaman dan ingin fokus spesifik
                            </p>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <span
                                class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-white/20 rounded-full">
                                <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                Advanced
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        {{-- Hari 1: Dada --}}
                        <div
                            class="bg-gradient-to-br from-red-50 to-red-100 border border-red-200 rounded-xl p-5 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-lg text-red-700">Hari 1</h4>
                                <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <span
                                    class="text-sm font-bold text-red-700 bg-red-200 px-2 py-1 rounded-full">DADA</span>
                            </div>
                            <div class="space-y-2">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-red-700 text-xs">Bench Press</div>
                                    <div class="text-xs text-gray-600">4×6-10</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-red-700 text-xs">Incline DB Press</div>
                                    <div class="text-xs text-gray-600">3×8-12</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-red-700 text-xs">Decline Press</div>
                                    <div class="text-xs text-gray-600">3×8-12</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-red-700 text-xs">Cable Flyes</div>
                                    <div class="text-xs text-gray-600">3×12-15</div>
                                </div>
                            </div>
                        </div>

                        {{-- Hari 2: Punggung --}}
                        <div
                            class="bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-200 rounded-xl p-5 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-lg text-blue-700">Hari 2</h4>
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <span
                                    class="text-sm font-bold text-blue-700 bg-blue-200 px-2 py-1 rounded-full">PUNGGUNG</span>
                            </div>
                            <div class="space-y-2">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-blue-700 text-xs">Pull-ups/Lat Pulldowns</div>
                                    <div class="text-xs text-gray-600">4×Max/8-12</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-blue-700 text-xs">Barbell Rows</div>
                                    <div class="text-xs text-gray-600">3×6-10</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-blue-700 text-xs">Seated Cable Rows</div>
                                    <div class="text-xs text-gray-600">3×10-12</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-blue-700 text-xs">Face Pulls</div>
                                    <div class="text-xs text-gray-600">3×15-20</div>
                                </div>
                            </div>
                        </div>

                        {{-- Hari 3: Bahu --}}
                        <div
                            class="bg-gradient-to-br from-yellow-50 to-yellow-100 border border-yellow-200 rounded-xl p-5 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-lg text-yellow-700">Hari 3</h4>
                                <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <span
                                    class="text-sm font-bold text-yellow-700 bg-yellow-200 px-2 py-1 rounded-full">BAHU</span>
                            </div>
                            <div class="space-y-2">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-yellow-700 text-xs">Overhead Press</div>
                                    <div class="text-xs text-gray-600">4×6-10</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-yellow-700 text-xs">Lateral Raises</div>
                                    <div class="text-xs text-gray-600">3×12-15</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-yellow-700 text-xs">Front Raises</div>
                                    <div class="text-xs text-gray-600">3×12-15</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-yellow-700 text-xs">Reverse Pec Deck</div>
                                    <div class="text-xs text-gray-600">3×12-15</div>
                                </div>
                            </div>
                        </div>

                        {{-- Hari 4: Kaki --}}
                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 border border-green-200 rounded-xl p-5 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-lg text-green-700">Hari 4</h4>
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <span
                                    class="text-sm font-bold text-green-700 bg-green-200 px-2 py-1 rounded-full">KAKI</span>
                            </div>
                            <div class="space-y-2">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-green-700 text-xs">Squats</div>
                                    <div class="text-xs text-gray-600">4×6-10</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-green-700 text-xs">Leg Press</div>
                                    <div class="text-xs text-gray-600">3×10-15</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-green-700 text-xs">Romanian Deadlifts</div>
                                    <div class="text-xs text-gray-600">3×8-12</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-green-700 text-xs">Leg Curls</div>
                                    <div class="text-xs text-gray-600">3×12-15</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-green-700 text-xs">Calf Raises</div>
                                    <div class="text-xs text-gray-600">4×15-20</div>
                                </div>
                            </div>
                        </div>

                        {{-- Hari 5: Lengan --}}
                        <div
                            class="bg-gradient-to-br from-purple-50 to-purple-100 border border-purple-200 rounded-xl p-5 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-bold text-lg text-purple-700">Hari 5</h4>
                                <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <span
                                    class="text-sm font-bold text-purple-700 bg-purple-200 px-2 py-1 rounded-full">LENGAN</span>
                            </div>
                            <div class="space-y-2">
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-purple-700 text-xs">Barbell Curls</div>
                                    <div class="text-xs text-gray-600">3×8-12</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-purple-700 text-xs">Close Grip Bench</div>
                                    <div class="text-xs text-gray-600">3×8-12</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-purple-700 text-xs">DB Hammer Curls</div>
                                    <div class="text-xs text-gray-600">3×10-15</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-purple-700 text-xs">Overhead DB Extension</div>
                                    <div class="text-xs text-gray-600">3×10-15</div>
                                </div>
                                <div class="bg-white rounded-lg p-2 shadow-sm">
                                    <div class="font-medium text-purple-700 text-xs">Tricep Pushdowns</div>
                                    <div class="text-xs text-gray-600">3×12-15</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Weekend Rest --}}
                    <div class="mt-8">
                        <div
                            class="bg-gradient-to-br from-gray-100 to-gray-50 border border-gray-200 rounded-xl p-6 text-center">
                            <div
                                class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-xl text-gray-500 mb-2">Hari 6 & 7 - Weekend Recovery</h4>
                            <p class="text-lg font-semibold text-gray-400 mb-2">ISTIRAHAT AKTIF / TOTAL</p>
                            <p class="text-sm text-gray-500">Jalan kaki, peregangan ringan, atau istirahat total untuk
                                pemulihan optimal</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Important Notes Section --}}
            <div class="bg-white overflow-hidden shadow-lg rounded-xl border-t-4 border-red-500">
                <div class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                        </svg>
                        Catatan Penting & Keselamatan
                    </h3>
                    <p class="text-red-100 text-sm mt-1">Panduan keselamatan yang wajib diperhatikan</p>
                </div>

                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-[#023047] mb-4 flex items-center gap-2">
                                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                Keselamatan Utama
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-sm text-gray-700">Konsultasikan dengan dokter sebelum memulai
                                        program latihan baru</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-sm text-gray-700">Fokus pada teknik yang benar untuk menghindari
                                        cedera</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-sm text-gray-700">Dengarkan tubuh Anda, jangan memaksakan diri
                                        jika merasa sakit</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-sm text-gray-700">Gunakan spotter untuk latihan beban
                                        berat</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-semibold text-[#023047] mb-4 flex items-center gap-2">
                                <svg class="h-5 w-5 text-[#FFB703]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Tips Optimalisasi
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#FFB703] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-sm text-gray-700">Pemanasan 5-10 menit sebelum setiap sesi</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#FFB703] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-sm text-gray-700">Pendinginan 5-10 menit setelah setiap
                                        sesi</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#FFB703] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-sm text-gray-700">Istirahat 60-90 detik antar set untuk compound
                                        movements</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#FFB703] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-sm text-gray-700">Tingkatkan beban secara bertahap (progressive
                                        overload)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#FFB703] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-sm text-gray-700">Pastikan asupan nutrisi dan hidrasi yang
                                        cukup</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Contact Trainer CTA --}}
                    <div class="mt-8 bg-gradient-to-r from-[#023047]/5 to-[#FFB703]/10 rounded-xl p-6 text-center">
                        <h4 class="text-lg font-bold text-[#023047] mb-2">Butuh Panduan Personal?</h4>
                        <p class="text-gray-600 mb-4">Konsultasikan program latihan Anda dengan trainer profesional
                            kami</p>
                        <a href="{{ route('contact.us') }}"
                            class="inline-flex items-center justify-center rounded-lg bg-[#FFB703] px-6 py-3 text-base font-bold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus:outline-none focus:ring-2 focus:ring-[#FFB703] focus:ring-offset-2 transition-all duration-200 transform hover:scale-105">
                            <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Konsultasi dengan Trainer
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
