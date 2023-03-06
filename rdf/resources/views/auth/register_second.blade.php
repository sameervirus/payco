<x-guest-layout>
    <div class="lg:flex lg:flex-row-reverse gap-10 lg:mt-20 lg:mx-[120px] mt-10 mx-5">
        <div class="flex flex-col justify-end lg:flex-1 lg:text-start space-y-5 lg:space-y-10 text-center lg:mb-0 mb-10">
            <img class="hidden lg:block h-[66px] w-[199px]" src="/images/logo-white.png" alt="payco" />
            <h1 class="font-black text-base lg:text-3xl text-primary uppercase">Welcome to Payco</h1>
            <p class="lg:text-lg text-[13px] text-white/70">
                Your solution for secure and convenient cross-border payments. Our digital wallet and platform make it easy for individuals to send money internationally, pay for goods and services, and make charitable donations.</p>
        </div>
        <div class="flex lg:flex-1 flex-col">
            <div class="flex items-center">
                <h2 class="head_line relative font-bold text-xl lg:text-[40px] text-white">Let’s Verify your email</h2>
                <svg class="w-[6px] h-[6px] lg:w-3 lg:h-3 ml-1 mt-3 lg:ml-2 lg:mt-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none">
                    <circle cx="6" cy="6" r="6" fill="url(#paint0_linear_123_2830)"/>
                    <defs>
                    <linearGradient id="paint0_linear_123_2830" x1="6" y1="0" x2="6" y2="12" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#ff0000"/>
                    <stop offset="1" stop-color="#DA291C"/>
                    </linearGradient>
                    </defs>
                </svg>
            </div>
            <p class="text-[#ffffffb3] lg:text-[22px] mt-6">We have sent you a code to </p>
            <p class="lg:text-[22px] text-primary font-semibold mt-3">{{ $email }}</p>
            <div class="pb-10 lg:pb-0 lg:pr-[170px] mt-10">
                <form method="POST" action="{{ route('verify', ['email' => $email]) }}" id="verifyForm">
                    @csrf
                    <div class="verify flex space-x-5 justify-center lg:justify-start">
                        <input name="code[]" class="bg-[#00000000] border-[#A7A7A7] h-10 lg:h-12 lg:w-12 text-center text-white w-10" type="text" maxlength="1" />
                        <input name="code[]" class="bg-[#00000000] border-[#A7A7A7] h-10 lg:h-12 lg:w-12 text-center text-white w-10" type="text" maxlength="1" />
                        <input name="code[]" class="bg-[#00000000] border-[#A7A7A7] h-10 lg:h-12 lg:w-12 text-center text-white w-10" type="text" maxlength="1" />
                        <input name="code[]" class="bg-[#00000000] border-[#A7A7A7] h-10 lg:h-12 lg:w-12 text-center text-white w-10" type="text" maxlength="1" />
                        <input name="code[]" class="bg-[#00000000] border-[#A7A7A7] h-10 lg:h-12 lg:w-12 text-center text-white w-10" type="text" maxlength="1" />
                    </div>
                    <x-input-error :messages="$errors->get('code.0')" class="mt-2" />
                    <x-input-error :messages="$errors->get('code.1')" class="mt-2" />
                    <x-input-error :messages="$errors->get('code.2')" class="mt-2" />
                    <x-input-error :messages="$errors->get('code.3')" class="mt-2" />
                    <x-input-error :messages="$errors->get('code.4')" class="mt-2" />
                    <x-input-error :messages="session('message') ?? null" class="mt-2" />


                    <div class="text-white mt-10">Didn’t get the code?  <a id="resendCode" data-email="{{ $email }}" data-token="{{ csrf_token() }}" href="#" class="text-primary">Resend</a></div>

                    <x-primary-button type="submit" contentClasses="bg-primary-class mt-12 lg:py-[10px] border-none w-full text-white bg-primary hover:text-white hover:bg-white/[0.13]">
                        <span class="font-extralight lg:text-lg">Next</span>
                    </x-primary-button>
                </form>
            </div>
        </div>

    </div>

</x-guest-layout>
