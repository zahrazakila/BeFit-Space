{{-- File: resources/views/auth/forgot-password.blade.php --}}
<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">

            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">
                Lupa Password Anda?
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                Tidak masalah. Masukkan email Anda dan kami akan mengirimkan link untuk mereset password Anda.
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white dark:bg-gray-800 px-6 py-8 shadow sm:rounded-lg sm:px-10">

                <!-- Session Status (Pesan sukses setelah mengirim email) -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        {{-- Menambahkan class agar label terlihat di mode terang dan gelap --}}
                        <x-input-label for="email"
                            class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300"
                            :value="__('Email')" />
                        <div class="mt-2">
                            <x-text-input id="email" class="block w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="email" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-primary-button class="flex w-full justify-center">
                            {{ __('Kirim Link Reset Password') }}
                        </x-primary-button>
                    </div>
                </form>

                <p class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
                    Ingat password Anda?
                    <a href="{{ route('login') }}"
                        class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300">
                        Masuk di sini
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
