{{-- File: resources/views/auth/reset-password.blade.php --}}
<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            {{-- Logo --}}


            <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">
                Atur Password Baru Anda
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                Buat password baru yang kuat dan mudah Anda ingat.
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white dark:bg-gray-800 px-6 py-8 shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')"
                            class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300" />
                        <div class="mt-2">
                            {{-- Email akan di-set sebagai readonly karena sudah ditentukan dari link --}}
                            <x-text-input id="email" class="block w-full bg-gray-100 dark:bg-gray-700/50"
                                type="email" name="email" :value="old('email', $request->email)" required readonly
                                autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <!-- New Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password Baru')"
                            class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300" />
                        <div class="mt-2">
                            <x-text-input id="password" class="block w-full" type="password" name="password" required
                                autofocus autocomplete="new-password" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Minimal 8 karakter, kombinasi
                                huruf, angka, & simbol.</p>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')"
                            class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300" />
                        <div class="mt-2">
                            <x-text-input id="password_confirmation" class="block w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <x-primary-button class="flex w-full justify-center">
                            {{ __('Reset Password') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-guest-layout>
