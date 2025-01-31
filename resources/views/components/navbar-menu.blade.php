@props(['item' => '', 'route'])

<a href="{{ url($route) }}" @class([
    'font-dosis text-lg cursor-pointer text-gray-300 hover:text-white select-none',
    'border-b-2 text-white hover:text-white' => Request::routeIs($route),
])>
    {{ $item }}
</a>
