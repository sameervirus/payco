@props(['img' => '', 'text'=>'', 'name' => '','contentClasses' => ''])

<div class="flex flex-col items-center mt-16 px-5 pb-5 text-center shadow-[0px_29px_62px_rgba(21,21,21,0.15)] backdrop-blur-[10px] rounded-2xl bg-white/[0.18]">
    <img class="-mt-[35px] border-4 border-white/[0.18] h-[75px] lg:-mt-[49px] lg:h-[108px] lg:w-[108px] rounded-full w-[75px]" src="/images/{{ $img }}" alt="{{ $name }}">
    <p class="text-lg text-white mt-4">{{ $text }}</p>
    <p class="text-sm text-white font-extrabold mt-8">{{ $name }}</p>
</div>
