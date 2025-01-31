<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('/img/logo-header.png') }}" type="image/x-icon">

    {{-- fonts (Megrim | Dosis) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Megrim&display=swap"
        rel="stylesheet">


    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}"> --}}

    {{-- tailwind and js --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                screens: {
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                    '2xl': '1536px',
                },
                fontFamily: {
                    'megrim': ['Megrim', 'sans-serif'],
                    'dosis': ['Dosis', 'sans-serif'],
                },
                extend: {
                    colors: {
                        'custom-green': '#7b7f5d',
                        'custom-blue': '#405060'
                    },
                },
            }
        }
    </script>

    <!-- Swiper CSS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body>
    <main class="w-full h-full transition-all duration-150 ease-in overflow-hidden">

        {{-- navbar --}}
        {{-- <nav id="navbar" class="fixed top-0 w-full px-10 lg:px-32 xl:px-52 py-5 z-50">
            <ul class="hidden md:flex items-center justify-between">
                <div class="flex gap-14">
                    <x-navbar-menu item="Home" route="/" />
                    <x-navbar-menu item="Artists" route="#" />
                    <x-navbar-menu item="Gallery" route="#" />
                </div>
                <span class="-ml-24 w-fit">
                    <x-logo class="h-20 w-20" />
                </span>
                <div class="flex gap-14">
                    <x-navbar-menu item="Services" route="#" />
                    <x-navbar-menu item="Clinic" route="#" />
                </div>
            </ul>

            <ul class="flex md:hidden items-center justify-between">
                <x-logo class="h-14 w-14" />
                <span class="h-8 w-8 text-white hover:opacity-75 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M3 4h18v2H3zm6 7h12v2H9zm-6 7h18v2H3z" />
                    </svg>
                </span>
            </ul>
        </nav> --}}

        <nav id="navbar" class="fixed top-0 w-full h-auto px-10 lg:px-32 xl:px-52 py-5 z-50">
            <span class="hidden md:block">
                <div class="text-white grid grid-cols-3 container mx-auto text-nowrap ">
                    <section class="flex items-center justify-start gap-10">
                        <x-navbar-menu item="Home" route="/" />
                        <x-navbar-menu item="Artists" route="#" />
                        <x-navbar-menu item="Gallery" route="#" />
                    </section>

                    <section class="flex items-center justify-center gap-10">
                        <span class="w-fit">
                            <x-logo class="h-20 w-20" />
                        </span>
                    </section>

                    <section class="flex items-center  justify-end gap-10">
                        <x-navbar-menu item="Services" route="#" />
                        <x-navbar-menu item="Clinic" route="#" />
                    </section>
                </div>
            </span>

            <span class="block md:hidden" x-data="{ open: false }">
                <div class="flex items-center justify-between container">
                    <x-logo class="h-14 w-14" />

                    {{-- Menu Toggle Button --}}
                    <span class="h-8 w-8 text-white hover:opacity-75 cursor-pointer" @click="open = !open">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3 4h18v2H3zm6 7h12v2H9zm-6 7h18v2H3z" />
                        </svg>
                    </span>
                </div>

                {{-- Mobile Menu --}}
                <div class="flex flex-col items-end justify-center text-white gap-2 mt-2" x-show="open" x-transition>
                    <x-navbar-menu item="Home" route="/" />
                    <x-navbar-menu item="Artists" route="#" />
                    <x-navbar-menu item="Gallery" route="#" />
                    <x-navbar-menu item="Services" route="#" />
                    <x-navbar-menu item="Clinic" route="#" />
                </div>
            </span>

        </nav>

        {{-- content --}}
        <div class="h-auto w-full">
            {{ $slot }}
        </div>
    </main>



    <script>
        document.addEventListener("scroll", function() {
            const navbar = document.getElementById("navbar");

            const customClass = 'bg-custom-blue/30 border-b border-custom-blue backdrop-blur';

            if (window.scrollY > 50) {
                navbar.classList.add(...customClass.split(' '));
            } else {
                navbar.classList.remove(...customClass.split(' '));
            }
        });
    </script>

</body>

</html>
