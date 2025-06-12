<nav x-data="{ open: false }" class="shadow-lg border-b"
    style="background: linear-gradient(135deg, #023047 0%, #126782 100%); border-color: rgba(255, 183, 3, 0.2);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo Section -->
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="/"
                        class="flex items-center space-x-3 group transition-all duration-300 hover:scale-105">
                        <div class="relative">
                            <img class="h-10 w-10 rounded-full border-2 border-yellow-400 shadow-lg transition-all duration-300 group-hover:border-yellow-300"
                                src="/img/logo.png" alt="Be-Fit Space Logo">
                            <div
                                class="absolute -inset-1 bg-yellow-400 rounded-full opacity-20 group-hover:opacity-30 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span
                                class="hidden sm:inline-block text-xl font-bold text-white group-hover:text-yellow-400 transition-colors duration-300">
                                Be-Fit Space
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden space-x-2 sm:-my-px sm:ms-10 sm:flex sm:items-center">
                    <!-- Dashboard Link with White Text -->
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 {{ request()->routeIs('dashboard') || request()->routeIs('user.dashboard') || request()->routeIs('admin.dashboard') ? 'bg-white text-gray-800 shadow-lg' : 'text-white hover:text-gray-800 hover:bg-white/90' }}">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z" />
                        </svg>
                        {{ __('Dashboard') }}
                    </a>

                    {{-- User Role Navigation --}}
                    @if (Auth::check() && Auth::user()->role === 'user')
                        <a href="{{ route('user.training-schedule') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition-all duration-300 {{ request()->routeIs('user.training-schedule') ? 'bg-white text-gray-800 shadow-lg' : 'text-white hover:text-gray-800 hover:bg-white/90' }}">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ __('Jadwal Latihan') }}
                        </a>
                    @endif

                    {{-- Admin Role Navigation --}}
                    @if (Auth::check() && Auth::user()->role === 'admin')
                        <div class="relative group">
                            <button
                                class="flex items-center px-4 py-2 text-sm font-medium text-white hover:text-gray-800 hover:bg-white/90 rounded-lg transition-all duration-300">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4" />
                                </svg>
                                {{ __('Management') }}
                                <svg class="w-4 h-4 ml-1 transition-transform duration-300 group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div
                                class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-xl border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                                <div class="py-2">
                                    <a href="{{ route('admin.membership-packages.index') }}"
                                        class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600 transition-colors duration-200 {{ request()->routeIs('admin.membership-packages.*') ? 'bg-yellow-50 text-yellow-600 border-r-2 border-yellow-400' : '' }}">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                        </svg>
                                        {{ __('Kelola Paket') }}
                                    </a>

                                    <a href="{{ route('admin.memberships.index') }}"
                                        class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600 transition-colors duration-200 {{ request()->routeIs('admin.memberships.index') ? 'bg-yellow-50 text-yellow-600 border-r-2 border-yellow-400' : '' }}">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        {{ __('Data Membership') }}
                                    </a>

                                    <a href="{{ route('admin.trials.index') }}"
                                        class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-yellow-50 hover:text-yellow-600 transition-colors duration-200 {{ request()->routeIs('admin.trials.index') ? 'bg-yellow-50 text-yellow-600 border-r-2 border-yellow-400' : '' }}">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                        {{ __('Data Free Trial') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- User Profile Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-lg text-white bg-white/10 backdrop-blur-sm hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-transparent transition-all duration-300">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center">
                                    <span class="text-sm font-bold text-gray-800">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </span>
                                </div>
                                <div class="text-left hidden md:block">
                                    <div class="text-sm font-medium">{{ Auth::user()->name }}</div>
                                    <div class="text-xs text-yellow-400 capitalize">{{ Auth::user()->role }}</div>
                                </div>
                            </div>
                            <div class="ms-2">
                                <svg class="fill-current h-4 w-4 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-3 border-b border-gray-200">
                            <div class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</div>
                            <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            <div class="text-xs text-yellow-600 capitalize font-medium mt-1">{{ Auth::user()->role }}
                                Account</div>
                        </div>

                        <x-dropdown-link :href="route('profile.edit')" class="flex items-center">
                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            {{ __('Profil Saya') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="flex items-center text-red-600 hover:text-red-700 hover:bg-red-50">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Mobile menu button -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-lg text-white hover:text-yellow-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition-all duration-300">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden border-t border-white/20">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white/5 backdrop-blur-sm">
            <!-- Mobile Dashboard Link with White Background -->
            <a href="{{ route('dashboard') }}"
                class="flex items-center px-3 py-2 text-base font-medium rounded-lg transition-all duration-300 {{ request()->routeIs('dashboard') || request()->routeIs('user.dashboard') || request()->routeIs('admin.dashboard') ? 'bg-white text-gray-800 shadow-lg' : 'text-white hover:text-gray-800 hover:bg-white/90' }}">
                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                </svg>
                {{ __('Dashboard') }}
            </a>

            {{-- Mobile User Links --}}
            @if (Auth::check() && Auth::user()->role === 'user')
                <a href="{{ route('user.training-schedule') }}"
                    class="flex items-center px-3 py-2 text-base font-medium rounded-lg transition-all duration-300 {{ request()->routeIs('user.training-schedule') ? 'bg-white text-gray-800 shadow-lg' : 'text-white hover:text-gray-800 hover:bg-white/90' }}">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ __('Jadwal Latihan') }}
                </a>
            @endif

            {{-- Mobile Admin Links --}}
            @if (Auth::check() && Auth::user()->role === 'admin')
                <div class="px-3 py-2">
                    <div class="text-xs font-semibold text-yellow-400 uppercase tracking-wider">Management</div>
                </div>

                <a href="{{ route('admin.membership-packages.index') }}"
                    class="flex items-center px-3 py-2 text-base font-medium rounded-lg transition-all duration-300 pl-6 {{ request()->routeIs('admin.membership-packages.*') ? 'bg-white text-gray-800 shadow-lg' : 'text-white hover:text-gray-800 hover:bg-white/90' }}">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    {{ __('Kelola Paket') }}
                </a>

                <a href="{{ route('admin.memberships.index') }}"
                    class="flex items-center px-3 py-2 text-base font-medium rounded-lg transition-all duration-300 pl-6 {{ request()->routeIs('admin.memberships.index') ? 'bg-white text-gray-800 shadow-lg' : 'text-white hover:text-gray-800 hover:bg-white/90' }}">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    {{ __('Data Membership') }}
                </a>

                <a href="{{ route('admin.trials.index') }}"
                    class="flex items-center px-3 py-2 text-base font-medium rounded-lg transition-all duration-300 pl-6 {{ request()->routeIs('admin.trials.index') ? 'bg-white text-gray-800 shadow-lg' : 'text-white hover:text-gray-800 hover:bg-white/90' }}">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    {{ __('Data Free Trial') }}
                </a>
            @endif
        </div>

        <!-- Mobile User Profile Section -->
        <div class="pt-4 pb-1 border-t border-white/20 bg-white/5 backdrop-blur-sm">
            <div class="px-4 flex items-center space-x-3">
                <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center">
                    <span class="text-sm font-bold text-gray-800">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </span>
                </div>
                <div>
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-yellow-400">{{ Auth::user()->email }}</div>
                    <div class="text-xs text-yellow-300 capitalize">{{ Auth::user()->role }} Account</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <a href="{{ route('profile.edit') }}"
                    class="flex items-center px-3 py-2 text-base font-medium text-white hover:text-gray-800 hover:bg-white/90 rounded-lg transition-all duration-300">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    {{ __('Profil Saya') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center px-3 py-2 text-base font-medium text-red-300 hover:text-red-200 hover:bg-red-500/20 rounded-lg transition-all duration-300">
                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
