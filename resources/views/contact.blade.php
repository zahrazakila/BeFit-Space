<x-guest-layout>
    <main class="isolate min-h-screen">
        <div class="relative grid grid-cols-1 lg:grid-cols-2 min-h-screen">

            {{-- LEFT: Contact Information --}}
            <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48">
                <div class="absolute inset-0 -z-20">
                    <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3"
                        alt="Modern Gym Interior" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 -z-10 bg-gradient-to-br from-[#023047]/90 to-[#023047]/70"></div>

                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <div class="mb-8">
                        <h1 class="text-4xl font-bold tracking-tight text-white mb-4">Hubungi Kami</h1>
                        <div class="w-16 h-1 bg-[#FFB703] rounded-full"></div>
                    </div>

                    <p class="mt-6 text-lg leading-8 text-gray-200 mb-10">
                        Siap memulai perjalanan fitness Anda? Tim profesional kami siap membantu mewujudkan
                        target kesehatan dan kebugaran Anda. Hubungi kami untuk konsultasi gratis.
                    </p>

                    <dl class="space-y-6 text-base leading-7 text-gray-200">
                        <div class="flex items-start gap-x-4 p-4 rounded-lg bg-white/10 backdrop-blur-sm">
                            <dt class="flex-none mt-1">
                                <span class="sr-only">Alamat</span>
                                <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </dt>
                            <dd class="text-white">
                                <div class="font-semibold mb-1">Lokasi Gym</div>
                                Jl. Kebugaran No. 123, Banguntapan<br>
                                Bantul, Daerah Istimewa Yogyakarta 55198
                            </dd>
                        </div>

                        <div class="flex items-start gap-x-4 p-4 rounded-lg bg-white/10 backdrop-blur-sm">
                            <dt class="flex-none mt-1">
                                <span class="sr-only">Telepon</span>
                                <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                                </svg>
                            </dt>
                            <dd class="text-white">
                                <div class="font-semibold mb-1">Hubungi Kami</div>
                                <a class="hover:text-[#FFB703] transition-colors duration-200" href="tel:+62274123456">
                                    +62 (274) 123-456
                                </a>
                            </dd>
                        </div>

                        <div class="flex items-start gap-x-4 p-4 rounded-lg bg-white/10 backdrop-blur-sm">
                            <dt class="flex-none mt-1">
                                <span class="sr-only">Email</span>
                                <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </dt>
                            <dd class="text-white">
                                <div class="font-semibold mb-1">Email Kami</div>
                                <a class="hover:text-[#FFB703] transition-colors duration-200"
                                    href="mailto:halo@befit.test">
                                    halo@befit.test
                                </a>
                            </dd>
                        </div>

                        <div class="flex items-start gap-x-4 p-4 rounded-lg bg-white/10 backdrop-blur-sm">
                            <dt class="flex-none mt-1">
                                <span class="sr-only">Jam Operasional</span>
                                <svg class="h-6 w-6 text-[#FFB703]" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </dt>
                            <dd class="text-white">
                                <div class="font-semibold mb-1">Jam Operasional</div>
                                Senin - Jumat: 05:00 - 22:00<br>
                                Sabtu - Minggu: 06:00 - 20:00
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            {{-- RIGHT: Contact Form --}}
            <div class="px-6 pb-24 pt-20 sm:pb-32 lg:px-12 lg:py-48 bg-gradient-to-br from-[#023047] to-[#03506b]">
                <div class="mx-auto max-w-xl lg:ml-0 lg:max-w-lg">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold tracking-tight text-white mb-4">Kirim Pesan</h2>
                        <div class="w-12 h-1 bg-[#FFB703] rounded-full"></div>
                        <p class="mt-4 text-gray-300">
                            Isi form di bawah ini dan kami akan menghubungi Anda dalam 24 jam.
                        </p>
                    </div>

                    <form action="#" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div class="group">
                                <label for="first-name" class="block text-sm font-semibold text-white mb-2">
                                    Nama Depan <span class="text-[#FFB703]">*</span>
                                </label>
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    required
                                    class="block w-full rounded-lg border-0 px-4 py-3 text-white bg-white/10 backdrop-blur-sm shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-[#FFB703] focus:bg-white/15 transition-all duration-200 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan nama depan">
                            </div>

                            <div class="group">
                                <label for="last-name" class="block text-sm font-semibold text-white mb-2">
                                    Nama Belakang <span class="text-[#FFB703]">*</span>
                                </label>
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                    required
                                    class="block w-full rounded-lg border-0 px-4 py-3 text-white bg-white/10 backdrop-blur-sm shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-[#FFB703] focus:bg-white/15 transition-all duration-200 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan nama belakang">
                            </div>
                        </div>

                        <div class="group">
                            <label for="email" class="block text-sm font-semibold text-white mb-2">
                                Email <span class="text-[#FFB703]">*</span>
                            </label>
                            <input type="email" name="email" id="email" autocomplete="email" required
                                class="block w-full rounded-lg border-0 px-4 py-3 text-white bg-white/10 backdrop-blur-sm shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-[#FFB703] focus:bg-white/15 transition-all duration-200 sm:text-sm sm:leading-6"
                                placeholder="nama@email.com">
                        </div>

                        <div class="group">
                            <label for="phone-number" class="block text-sm font-semibold text-white mb-2">
                                Nomor Telepon
                            </label>
                            <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                                class="block w-full rounded-lg border-0 px-4 py-3 text-white bg-white/10 backdrop-blur-sm shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-[#FFB703] focus:bg-white/15 transition-all duration-200 sm:text-sm sm:leading-6"
                                placeholder="+62 812 3456 7890">
                        </div>

                        <div class="group">
                            <label for="subject" class="block text-sm font-semibold text-white mb-2">
                                Subjek <span class="text-[#FFB703]">*</span>
                            </label>
                            <select name="subject" id="subject" required
                                class="block w-full rounded-lg border-0 px-4 py-3 text-white bg-white/10 backdrop-blur-sm shadow-sm ring-1 ring-inset ring-white/20 focus:ring-2 focus:ring-inset focus:ring-[#FFB703] focus:bg-white/15 transition-all duration-200 sm:text-sm sm:leading-6">
                                <option value="" class="bg-[#023047]">Pilih subjek pesan</option>
                                <option value="membership" class="bg-[#023047]">Informasi Membership</option>
                                <option value="personal-training" class="bg-[#023047]">Personal Training</option>
                                <option value="group-class" class="bg-[#023047]">Kelas Grup</option>
                                <option value="facilities" class="bg-[#023047]">Fasilitas Gym</option>
                                <option value="complaint" class="bg-[#023047]">Keluhan/Saran</option>
                                <option value="other" class="bg-[#023047]">Lainnya</option>
                            </select>
                        </div>

                        <div class="group">
                            <label for="message" class="block text-sm font-semibold text-white mb-2">
                                Pesan <span class="text-[#FFB703]">*</span>
                            </label>
                            <textarea name="message" id="message" rows="5" required
                                class="block w-full rounded-lg border-0 px-4 py-3 text-white bg-white/10 backdrop-blur-sm shadow-sm ring-1 ring-inset ring-white/20 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-[#FFB703] focus:bg-white/15 transition-all duration-200 sm:text-sm sm:leading-6 resize-none"
                                placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>

                        <div class="flex items-center gap-3">
                            <input type="checkbox" name="newsletter" id="newsletter"
                                class="h-4 w-4 rounded border-white/20 bg-white/10 text-[#FFB703] focus:ring-[#FFB703] focus:ring-2">
                            <label for="newsletter" class="text-sm text-gray-300">
                                Saya ingin menerima newsletter dan update terbaru dari Be-Fit Space
                            </label>
                        </div>

                        <div class="pt-4">
                            <button type="submit"
                                class="w-full flex justify-center items-center gap-2 rounded-lg bg-[#FFB703] px-6 py-3.5 text-base font-semibold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#FFB703] transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                </svg>
                                Kirim Pesan
                            </button>
                        </div>
                    </form>

                    <div class="mt-8 pt-6 border-t border-white/20">
                        <p class="text-sm text-gray-400 text-center">
                            Dengan mengirim pesan ini, Anda menyetujui
                            <a href="#" class="text-[#FFB703] hover:underline">Kebijakan Privasi</a> kami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
