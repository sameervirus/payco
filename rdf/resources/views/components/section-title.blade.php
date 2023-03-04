@props(['contentClasses' => ''])

@php
$classes = 'leading-[30px] lg:leading-[60px] lg:text-[40px] text-[30px] text-center text-white font-bolder';
$classes .= $contentClasses;
@endphp
<h2 {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</h2>
