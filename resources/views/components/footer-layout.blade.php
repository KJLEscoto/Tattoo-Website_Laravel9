@props(['title' => '', 'center' => true])

<div @class([
    'md:space-y-7 space-y-3 ',
    'md:text-center sm:text-start text-center' => $center,
])>
    <h1 class=" font-megrim lg:text-6xl md:text-5xl text-4xl select-none">{{ $title }}</h1>

    {{ $slot }}
</div>
