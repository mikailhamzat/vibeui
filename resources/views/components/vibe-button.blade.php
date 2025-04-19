@props([
    'variant' => 'primary',
    'size' => 'md',
    'icon' => null,
    'disabled' => false,
])

@php
    $variants = [
        'primary' => 'bg-blue-600 text-white',
        'secondary' => 'bg-gray-600 text-white',
        'danger' => 'bg-red-600 text-white',
        'outline' => 'border-2 border-gray-600 text-gray-600',
    ];

    $sizes = [
        'sm' => 'px-3 py-2 text-sm',
        'md' => 'px-4 py-2 text-base',
        'lg' => 'px-6 py-3 text-lg',
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp

<button {{ $attributes->merge(['class' => "inline-flex items-center justify-center rounded-lg $variantClass $sizeClass", 'disabled' => $disabled]) }}>
    @if($icon)
        <x-dynamic-component :component="$icon" class="mr-2" />
    @endif
    {{ $slot }}
</button>

