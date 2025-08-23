@props([
    'href' => null,
    'request' => null
])

<a href="{{ $href }}" class="{{ $request === '1' ? 'text-gray-50' : 'text-gray-50/75' }} hover:text-xl transition-all duration-200 active:text-lg">{{ $slot }}</a>