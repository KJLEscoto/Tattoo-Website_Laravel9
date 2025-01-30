<x-layout>
    <main class="h-full w-full bg-center bg-no-repeat bg-cover" style="background-image: url('/img/bg/bg-1.jpg');">

        {{-- hero --}}
        <section class="h-screen w-full bg-center bg-no-repeat bg-cover"
            style="background-image: url('/img/banner.jpg');">
            <div class="flex flex-col items-center justify-center h-screen">
                <h1 class="text-8xl font-megrim text-white">We Turn Skin Into Art;</h1>
                <span class="absolute bottom-5 w-full">
                    <button
                        class=" hover:opacity-85 cursor-pointer h-auto py-3 text-xl w-full bg-custom-green font-dosis text-center font-semibold tracking-widest text-white">
                        BOOK NOW
                    </button>
                </span>
            </div>
        </section>

        {{-- phrase --}}
        <section class="h-[700px] w-full flex flex-col items-center justify-center">
            <div class="text-center font-megrim text-6xl space-y-7">
                <h1>Artists; <br> Masterpieces in Motion</h1>
                <p class="text-lg font-dosis">Crafting Dreams into Stunning, Wearable Art.</p>
            </div>
        </section>

        {{-- showcase --}}
        <section
            class="h-auto w-full bg-center bg-no-repeat bg-cover py-10 bg-gradient-to-b from-black/30 to-transparent"
            style="background-image: url('/img/bg/bg-2.jpg');">

            {{-- images --}}
            <div class="px-52 py-20 grid grid-cols-3 gap-10">
                @for ($i = 1; $i <= 6; $i++)
                    <img class="cursor-pointer" draggable="false" src="{{ '/img/artist-bnw/' . $i . '.png' }}"
                        alt="{{ 'artist-' . $i }}" onmouseover="this.src='/img/artist-colored/{{ $i }}.png'"
                        onmouseout="this.src='/img/artist-bnw/{{ $i }}.png'">
                @endfor
            </div>

            <button
                class=" hover:opacity-85 cursor-pointer h-auto py-3 text-xl w-full bg-custom-green font-dosis text-center font-semibold tracking-widest text-white">
                INQUIRE NOW
            </button>
        </section>

    </main>
</x-layout>
