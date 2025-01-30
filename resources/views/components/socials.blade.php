@props(['socials'])

<div class="flex gap-5 items-center">
    @foreach ($socials as $social)
        <span class="text-white hover:text-custom-green w-12 h-12 transition-all duration-200 ease-in cursor-pointer">
            {!! $social['icon'] !!}
        </span>
    @endforeach
</div>
