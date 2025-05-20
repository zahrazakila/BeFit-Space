<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 20s linear infinite;
        }
    </style>
</head>

<body class="h-full">
    <div class="bg-black">
        <header x-data="{ isOpen: false }" class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <div class="flex items-center space-x-2">
                            <img class="h-8 w-auto" src="/img/logo.png" alt="Logo">
                            <span class="text-xl font-bold text-[#FFB703]">Be-Fit Space</span>
                        </div>
                    </a>
                </div>

                <!-- Mobile menu open button -->
                <div class="flex lg:hidden">
                    <button type="button" @click="isOpen = true"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

                <!-- Desktop menu -->
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-semibold text-white">Home</a>
                    <a href="#" class="text-sm font-semibold text-white">Program</a>
                    <a href="#" class="text-sm font-semibold text-white">Tentang</a>
                    <a href="#" class="text-sm font-semibold text-white">Contact</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-sm font-semibold text-white">Log in <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>

            <!-- Mobile menu -->
            <div x-show="isOpen" x-cloak x-transition
                class="lg:hidden fixed inset-0 z-50 bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 overflow-y-auto">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto"
                            src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                    <button @click="isOpen = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Product</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                        </div>
                        <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{ show: true }" x-show="show" x-transition
                class="relative overflow-hidden bg-[#FFB703] w-full py-2.5 px-6 flex items-center justify-between">

                <!-- Infinite Scroll Wrapper -->
                <div class="relative w-full pr-10">
                    <div class="animate-marquee whitespace-nowrap">
                        <span class="inline-block text-white">
                            🔥 50% OFF | Join us from June 7 – 9 to get 50% discount * &nbsp;&nbsp;&nbsp;
                            🔥 50% OFF | Join us from June 7 – 9 to get 50% discount * &nbsp;&nbsp;&nbsp;
                            🔥 50% OFF | Join us from June 7 – 9 to get 50% discount *
                        </span>
                    </div>
                </div>

                <!-- Close Button -->
                <button @click="show = false" class="absolute right-4 text-white font-bold hover:text-black transition">
                    ✕
                </button>
            </div>


        </header>
    </div>

    <div class="relative isolate px-6  lg:px-8"
        style="background-image: url('/img/bg-home.jpg'); background-size: cover; background-position: center;">
        <!-- Overlay gelap -->
        <div class="absolute inset-0 bg-[#023047] opacity-90 -z-10"></div>

        <!-- Efek blur di belakang -->
        <div class="absolute inset-x-0 -top-40 -z-20 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm/6 font-bold text-[#FFB703] ring-1 ring-white-900/10">
                    Get Ready With Us!
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">YOUR FITNESS
                    JOURNEY START HERE</h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Perubahan tidak datang dari
                    menunggu. Ia datang dari keberanian untuk memulai dan konsistensi untuk bertahan. BeFit-Space siap
                    mendampingi setiap perjuanganmu.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-[#FFB703] px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-[#ffb803a1] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#FFB703]">Get
                        started</a>
                    <a href="#" class="text-sm/6 font-semibold text-white">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>


    <main>
        <div class="overflow-hidden bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pt-4 lg:pr-8">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
                            <p
                                class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">
                                A better workflow</p>
                            <p class="mt-6 text-lg/8 text-gray-600">Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                blanditiis ratione.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Push to deploy.
                                    </dt>
                                    <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis
                                        ratione.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        SSL certificates.
                                    </dt>
                                    <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure
                                        qui lorem cupidatat commodo.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path
                                                d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                            <path fill-rule="evenodd"
                                                d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Database backups.
                                    </dt>
                                    <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque
                                        rhoncus. Et magna sit morbi lobortis.</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png"
                        alt="Product screenshot"
                        class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-228 md:-ml-4 lg:-ml-0"
                        width="2432" height="1442">
                </div>
            </div>
        </div>
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-lg/8 font-semibold text-gray-900">Trusted by the world’s most
                    innovative teams</h2>
                <div
                    class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="https://tailwindcss.com/plus-assets/img/logos/158x48/transistor-logo-gray-900.svg"
                        alt="Transistor" width="158" height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="https://tailwindcss.com/plus-assets/img/logos/158x48/reform-logo-gray-900.svg"
                        alt="Reform" width="158" height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                        src="https://tailwindcss.com/plus-assets/img/logos/158x48/tuple-logo-gray-900.svg"
                        alt="Tuple" width="158" height="48">
                    <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                        src="https://tailwindcss.com/plus-assets/img/logos/158x48/savvycal-logo-gray-900.svg"
                        alt="SavvyCal" width="158" height="48">
                    <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                        src="https://tailwindcss.com/plus-assets/img/logos/158x48/statamic-logo-gray-900.svg"
                        alt="Statamic" width="158" height="48">
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
                <div
                    class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                    <svg viewBox="0 0 1024 1024"
                        class="absolute top-1/2 left-1/2 -z-10 size-256 -translate-y-1/2 mask-[radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                        aria-hidden="true">
                        <circle cx="512" cy="512" r="512"
                            fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                        <defs>
                            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                                <stop stop-color="#7775D6" />
                                <stop offset="1" stop-color="#E935C1" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                        <h2 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-4xl">Boost
                            your productivity. Start using our app today.</h2>
                        <p class="mt-6 text-lg/8 text-pretty text-gray-300">Ac euismod vel sit maecenas id
                            pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                            <a href="#"
                                class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-xs hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                                started</a>
                            <a href="#" class="text-sm/6 font-semibold text-white">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                    <div class="relative mt-16 h-80 lg:mt-8">
                        <img class="absolute top-0 left-0 w-228 max-w-none rounded-md bg-white/5 ring-1 ring-white/10"
                            src="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png"
                            alt="App screenshot" width="1824" height="1080">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
                    <p
                        class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance">
                        Everything you need to deploy your app</p>
                    <p class="mt-6 text-lg/8 text-gray-600">Quis tellus eget adipiscing convallis sit sit eget
                        aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi
                        viverra elit nunc.</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <div class="relative pl-16">
                            <dt class="text-base/7 font-semibold text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                                    </svg>
                                </div>
                                Push to deploy
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600">Morbi viverra dui mi arcu sed. Tellus semper
                                adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base/7 font-semibold text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg>
                                </div>
                                SSL certificates
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600">Sit quis amet rutrum tellus ullamcorper
                                ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base/7 font-semibold text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </div>
                                Simple queues
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600">Quisque est vel vulputate cursus. Risus
                                proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base/7 font-semibold text-gray-900">
                                <div
                                    class="absolute top-0 left-0 flex size-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                                    </svg>
                                </div>
                                Advanced security
                            </dt>
                            <dd class="mt-2 text-base/7 text-gray-600">Arcu egestas dolor vel iaculis in ipsum
                                mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>


    </main>
    </div>

</body>

</html>
