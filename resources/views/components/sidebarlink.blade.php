@props([
    'href' => null, 
    'icon' => null,
])

<a href="{{ $href }}"
    class="text-lg flex items-center mb-2 hover:bg-gray-700 p-2 rounded transition-all duration-200">
    <span class="material-icons me-2">
        <span class="text-2xl">{{ $icon }}</span>
    </span>
    {{ $slot }}
</a>
