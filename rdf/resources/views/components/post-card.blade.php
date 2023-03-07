@props(['id' => '', 'img' => '', 'title'=>'', 'contentClasses'=>''])
@php
$classes = 'relative ';
$classes .= $contentClasses;
@endphp
<div id="{{$id}}" {!! $attributes->merge(['class' => $classes]) !!}>
    <img class="h-full rounded-[10px] w-auto" src="{{ asset('storage/' . $img) }}" alt="{{ $title }}">
    <div class="absolute flex items-end left-0 top-0 w-full h-full p-5 bg-gradient-to-t from-black via-black/30 to-black/30">
        <a href="#"><h4 class="capitalize font-light leading-3 lg:leading-5 text-[10px] lg:text-[16px] text-white hover:text-primary">{{ $title }}</h4></a>
    </div>
</div>
