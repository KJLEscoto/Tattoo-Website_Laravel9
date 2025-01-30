<x-layout>
    <main class="h-full w-full bg-center bg-no-repeat bg-cover" style="background-image: url('/img/bg/bg-1.jpg');">
        {{-- hero --}}
        <section class="h-screen w-full bg-center bg-no-repeat bg-cover"
            style="background-image: url('/img/banner.jpg');">
            <div class="flex flex-col items-center justify-center h-screen px-10 lg:px-0">
                <h1 class="lg:text-8xl md:text-6xl text-5xl font-megrim text-white text-center">We Turn Skin Into Art;
                </h1>
                <span class="absolute bottom-5 w-full">
                    <x-button label="BOOK NOW" />
                </span>
            </div>
        </section>

        {{-- phrase --}}
        <section class="md:h-[600px] h-[450px] px-10 w-full flex flex-col items-center justify-center">
            <x-section-title title="Artists;" secondtitle="Masterpieces in Motion"
                descr="Crafting Dreams into Stunning, Wearable Art." />
        </section>

        {{-- showcase --}}
        <section class="h-auto w-full bg-center bg-no-repeat bg-cover py-10 shadow-2xl shadow-blue-800/50"
            style="background-image: url('/img/bg/bg-2.jpg');">

            <div class="container mx-auto max-w-screen-xl">
                <!-- Images Grid -->
                <section class="grid lg:grid-cols-3 grid-cols-2 md:gap-10 gap-7 md:py-20 py-7 md:px-24 px-10">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="w-full h-full relative group overflow-hidden">
                            <!-- Default (Black & White) -->
                            <img class="h-full w-full transition-opacity duration-500 grayscale group-hover:grayscale-0"
                                src="{{ '/img/artist-bnw/' . $i . '.png' }}"
                                onmouseover="this.src='/img/artist-colored/{{ $i }}.png'"
                                onmouseout="this.src='/img/artist-bnw/{{ $i }}.png'"
                                alt="{{ 'artist-' . $i }}" id="artist-{{ $i }}">

                            <!-- Rotated Hover Text (Properly Positioned) -->
                            <div
                                class="absolute left-10 bottom-0 cursor-default w-full min-w-max translate-x-full group-hover:translate-x-0 h-fit flex items-center justify-center 
                            bg-custom-green/80 shadow-lg text-white text-xl opacity-0 group-hover:opacity-100 
                            transition-all duration-300 origin-left -rotate-90">
                                <div class="text-center">
                                    <h1 class="font-megrim md:text-2xl text-lg">Solana Mercure</h1>
                                    <p class="font-dosis font-normal md:text-base text-sm">Tattoo Artist</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </section>
            </div>

            <x-button label="INQUIRE NOW" />
        </section>

        {{-- services --}}
        <section class="mt-40 h-full w-full bg-center bg-no-repeat bg-cover py-10 shadow-2xl shadow-blue-800/50"
            style="background-image: url('/img/bg/bg-3.jpg');">
            <div class="md:py-40 sm:py-20 py-10 xl:px-52 lg:px-32 md:px-20 px-5 text-white md:space-y-10 space-y-7">
                <x-section-title title="Services;" descr="Harmonizing Art and Expression" />

                <section class="flex items-center justify-evenly">
                    <x-services-options label="Tattoos" />
                    <x-services-options label="Aesthetics" />
                </section>
            </div>
        </section>

        {{-- works --}}
        <section class="md:pt-40 pt-20 space-y-10">
            <x-section-title title="Our Works;" descr="Ink Your Memories, Wear Your Story." />
            <x-carousel />
            <x-button label="BOOK NOW" />
        </section>

        <section class=" text-white h-full w-full bg-center bg-no-repeat bg-cover"
            style="background-image: url('/img/bg/bg-2.jpg');">
            <hr>
            <div class="mx-auto container max-w-screen-xl">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10 xl:px-20 lg:px-16 px-10 pt-20 pb-10">

                    {{-- location --}}
                    <span
                        class="md:order-1 order-2 w-full flex flex-col md:justify-start justify-center md:col-span-1 col-span-2">
                        <x-footer-layout title="Location">
                            <p class="text-lg font-dosis">Davao City, Philippines</p>
                            <iframe class="w-full md:h-[350px] h-auto"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5287217599616!2d125.60519157507993!3d7.064524992938034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d78c3c50cd1%3A0xe2da0fc53e9c675f!2sDavao%20City%20Hall!5e0!3m2!1sen!2sph!4v1738214493130!5m2!1sen!2sph"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </x-footer-layout>
                    </span>


                    {{-- logo --}}
                    <section
                        class="mx-auto flex flex-col gap-5 justify-start items-center md:col-span-1 col-span-2 md:order-2 order-1">
                        <x-logo class="w-40 h-40" />
                        <h1 class=" font-megrim lg:text-6xl md:text-5xl text-4xl">InkGie</h1>
                        <p class="text-lg font-dosis -mt-4">Tattoo & Aesthetics</p>
                    </section>

                    {{-- details --}}
                    <section
                        class="grid lg:grid-cols-1 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 lg:col-span-1 col-span-2 gap-10 lg:items-center items-start order-3">
                        <x-footer-layout title="Hours">
                            <p class="text-lg font-dosis ">Mon - Sat: 9AM - 6PM</p>
                        </x-footer-layout>

                        <x-footer-layout title="Socials">
                            <div class="flex md:justify-center sm:justify-start justify-center">
                                <x-socials :socials="$socials" />
                            </div>
                        </x-footer-layout>

                        <x-footer-layout title="Contact">
                            <p class="text-lg font-dosis hover:underline cursor-pointer">sample@gmail.com</p>
                            <p class="text-lg font-dosis mt-2">+63 999 492 8190</p>
                        </x-footer-layout>
                    </section>
                </div>
            </div>
            <hr>
            <x-copyright />
        </section>
    </main>
</x-layout>
