@props(['contentClasses' => 'py-1 bg-white', 'type' => 'btn', 'slug' => ''])

@php
$classes = 'px-2 lg:px-12 py-1 lg:py-4 rounded-full border-solid border-2 backdrop-blur-[5px] ';
$classes .= $contentClasses;
@endphp
<button id="{{ $slug }}" {{ $attributes->merge(['class' => $classes]) }} type="{{ $type }}">
    {{ $slot }}
</button>
