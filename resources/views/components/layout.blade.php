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

    {{-- fonts (Megrim | Dosis) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Megrim&display=swap"
        rel="stylesheet">
</head>

<body>
    <main class="w-full h-full">

        {{-- navbar --}}
        <nav id="navbar" class="fixed top-0 w-full px-10 xl:px-52 py-5 z-50 ">
            <ul class="flex items-center justify-between *:cursor-pointer text-white font-dosis text-lg">
                <div class="flex gap-14">
                    <li>Home</li>
                    <li>Artists</li>
                    <li>Gallery</li>
                </div>
                <li>
                    <img class="w-auto h-28" draggable="false" src="/img/logo-header.png" alt="Logo">
                </li>
                <div class="flex gap-14">
                    <li>Services</li>
                    <li>Clinic</li>
                </div>
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
