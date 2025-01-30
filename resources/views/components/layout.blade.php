<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('/img/logo-header.png') }}" type="image/x-icon">

    {{-- tailwind and js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- fonts (Megrim | Dosis) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Megrim&display=swap"
        rel="stylesheet">
</head>

<body>
    <main class="w-full h-full transition-all duration-150 ease-in">

        {{-- navbar --}}
        <nav id="navbar" class="fixed top-0 w-full px-10 lg:px-32 xl:px-52 py-5 z-50">
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
