@props(['title' => '', 'descr' => '', 'secondtitle' => false])

<div class="text-center md:space-y-7 space-y-2">
    <h1 class=" font-megrim md:text-6xl text-4xl ">
        {{ $title }}
        @if ($secondtitle)
            <br>
            {{ $secondtitle }}
        @endif
    </h1>
    <p class="md:text-lg text-base font-dosis">{{ $descr }}</p>
</div>
