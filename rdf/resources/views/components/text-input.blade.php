@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-[#00000000] block border-[#838383] p-3 pl-16 rounded-full text-white w-full']) !!}>
