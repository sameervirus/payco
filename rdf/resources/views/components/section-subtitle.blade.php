@props(['contentClasses' => ''])

@php
$classes = 'mt-4 lg:mt-10 leading-[20px] lg:leading-[40px] lg:text-[25px] text-[16px] text-center text-white/[0.58]';
$classes .= $contentClasses;
@endphp
<p {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</p>
