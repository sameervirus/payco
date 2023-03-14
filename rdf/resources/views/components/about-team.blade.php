@props(['img' => '', 'text'=>'', 'name' => '','contentClasses' => ''])

<div class="text-white relative {{ $contentClasses }}">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-[#00000020] to-[#00000020]"></div>
    <img class="w-full" src="/images/{{ $img }}" alt="">
    <div class="bg-[#8181EC15] -left-[10px] absolute backdrop-blur-[10px] bottom-[10px] p-4 w-[90%]">
        <h4 class="font-black leading-8 text-[28px]">{{ $name }}</h4>
        <p class="text-lg">{{ $text }}</p>
    </div>
</div>
