<x-guest-layout>
    <div class="flex min-h-screen bg-[#023047]">
        {{-- Left Side - Login Form --}}
        <div
            class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24 bg-gradient-to-br from-[#023047] to-[#034263]">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    {{-- Brand Logo/Icon --}}


                    <h2 class="text-3xl font-bold leading-9 tracking-tight text-white text-center">
                        Masuk ke Akun Anda
                    </h2>
                    <p class="mt-3 text-center text-gray-300">
                        Belum punya akun?
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="font-semibold text-[#FFB703] hover:text-[#FFB703]/80 transition-colors duration-200">
                                Daftar sekarang dan dapatkan trial gratis
                            </a>
                        @else
                            <span class="font-semibold text-[#FFB703]">Hubungi customer service kami.</span>
                        @endif
                    </p>
                </div>

                <div class="mt-10">
                    <div>
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}" class="space-y-6">
                            @csrf

                            {{-- Email Field --}}
                            <div>
                                <x-input-label for="email" :value="__('Alamat Email')"
                                    class="text-sm font-semibold text-white" />
                                <div class="mt-2">
                                    <x-text-input id="email" name="email" type="email" autocomplete="email"
                                        required :value="old('email')"
                                        class="block w-full rounded-lg border-gray-600 bg-white/10 backdrop-blur-sm text-white placeholder-gray-400 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] focus:bg-white/15 text-base py-3 px-4 transition-all duration-200"
                                        placeholder="nama@email.com" autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>

                            {{-- Password Field --}}
                            <div>
                                <x-input-label for="password" :value="__('Password')"
                                    class="text-sm font-semibold text-white" />
                                <div class="mt-2">
                                    <x-text-input id="password" name="password" type="password"
                                        autocomplete="current-password" required
                                        class="block w-full rounded-lg border-gray-600 bg-white/10 backdrop-blur-sm text-white placeholder-gray-400 shadow-sm focus:border-[#FFB703] focus:ring-[#FFB703] focus:bg-white/15 text-base py-3 px-4 transition-all duration-200"
                                        placeholder="Masukkan password Anda" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>

                            {{-- Remember Me & Forgot Password --}}
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember_me" name="remember" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-600 bg-white/10 text-[#FFB703] focus:ring-[#FFB703] focus:ring-2">
                                    <label for="remember_me"
                                        class="ml-3 block text-sm leading-6 text-gray-300">{{ __('Ingat saya') }}</label>
                                </div>

                                @if (Route::has('password.request'))
                                    <div class="text-sm leading-6">
                                        <a href="{{ route('password.request') }}"
                                            class="font-semibold text-[#FFB703] hover:text-[#FFB703]/80 transition-colors duration-200">
                                            {{ __('Lupa password?') }}
                                        </a>
                                    </div>
                                @endif
                            </div>

                            {{-- Login Button --}}
                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center items-center gap-2 rounded-lg bg-[#FFB703] px-4 py-3.5 text-base font-bold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 focus:outline-none focus:ring-2 focus:ring-[#FFB703] focus:ring-offset-2 focus:ring-offset-[#023047] transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                    </svg>
                                    {{ __('Masuk ke Akun') }}
                                </button>
                            </div>
                        </form>
                    </div>

                    {{-- Divider --}}
                    <div class="mt-8">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                <div class="w-full border-t border-gray-600"></div>
                            </div>
                        </div>

                    </div>

                    {{-- Additional Links --}}
                    <div class="mt-8 text-center">
                        <div class="text-sm text-gray-300">
                            <span>Butuh bantuan? </span>
                            <a href="{{ route('contact.us') }}"
                                class="font-semibold text-[#FFB703] hover:text-[#FFB703]/80 transition-colors duration-200">
                                Hubungi Customer Service
                            </a>
                        </div>
                        <div class="mt-2 text-xs text-gray-400">
                            Dengan masuk, Anda menyetujui
                            <a href="#" class="text-[#FFB703] hover:underline">Syarat & Ketentuan</a>
                            dan
                            <a href="#" class="text-[#FFB703] hover:underline">Kebijakan Privasi</a> kami.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right Side - Hero Image --}}
        <div class="relative hidden w-0 flex-1 lg:block">
            {{-- Background Image --}}
            <div class="absolute inset-0">
                <img class="h-full w-full object-cover"
                    src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1470&auto=format&fit=crop"
                    alt="Modern Gym Interior"
                    onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1470&auto=format&fit=crop';">
            </div>

            {{-- Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-br from-[#023047]/95 via-[#023047]/85 to-[#034263]/90"></div>

            {{-- Decorative elements --}}
            <div class="absolute inset-0">
                <div class="absolute top-20 left-10 w-32 h-32 bg-[#FFB703]/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 right-10 w-40 h-40 bg-[#FFB703]/10 rounded-full blur-3xl"></div>
            </div>

            {{-- Content Overlay --}}
            <div class="relative flex h-full items-center justify-center p-12">
                <div class="max-w-lg text-center">
                    {{-- Brand Badge --}}
                    <div
                        class="mb-8 inline-flex items-center rounded-full bg-[#FFB703]/20 backdrop-blur-sm px-6 py-2 text-sm font-semibold text-[#FFB703] ring-1 ring-[#FFB703]/30">
                        <svg class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        Be-Fit Space
                    </div>

                    {{-- Main Heading --}}
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl mb-6">
                        <span class="block">Wujudkan</span>
                        <span class="block text-[#FFB703]">Tubuh Impian</span>
                        <span class="block">Anda</span>
                    </h1>

                    {{-- Description --}}
                    <p class="text-xl leading-8 text-gray-200 mb-8">
                        Bergabunglah dengan ribuan member yang telah merasakan transformasi luar biasa bersama Be-Fit
                        Space.
                    </p>

                    {{-- Stats --}}
                    <div class="grid grid-cols-3 gap-6 text-center mb-8">
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                            <div class="text-2xl font-bold text-[#FFB703]">500+</div>
                            <div class="text-sm text-gray-300">Active Members</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                            <div class="text-2xl font-bold text-[#FFB703]">24/7</div>
                            <div class="text-sm text-gray-300">Access</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                            <div class="text-2xl font-bold text-[#FFB703]">15+</div>
                            <div class="text-sm text-gray-300">Expert Trainers</div>
                        </div>
                    </div>

                    {{-- CTA --}}
                    <div class="mt-8">
                        <a href="{{ route('trial.store') }}"
                            class="inline-flex items-center rounded-lg bg-[#FFB703] px-6 py-3 text-base font-semibold text-gray-900 shadow-lg hover:bg-[#FFB703]/90 transition-all duration-200 transform hover:scale-105">
                            Coba Gratis Sekarang
                            <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
