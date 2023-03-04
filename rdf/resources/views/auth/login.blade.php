<x-guest-layout>
    <div class="lg:flex lg:flex-row-reverse gap-10 lg:mt-20 lg:mx-[120px] mt-10 mx-5">
        <div class="flex flex-col justify-end lg:flex-1 lg:text-start space-y-5 lg:space-y-10 text-center lg:mb-0 mb-10">
            <img class="hidden lg:block h-[66px] w-[199px]" src="/images/logo-white.png" alt="payco" />
            <h1 class="font-black text-base lg:text-3xl text-primary uppercase">Welcome to Payco</h1>
            <p class="lg:text-lg text-[13px] text-white/70">
                Your solution for secure and convenient cross-border payments. Our digital wallet and platform make it easy for individuals to send money internationally, pay for goods and services, and make charitable donations.</p>
        </div>
        <div class="flex lg:flex-1 flex-col space-y-10">
            <div class="flex items-center">
                <svg class="w-[17px] h-[17px] lg:w-8 lg:h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 23" fill="none">
                    <g clip-path="url(#clip0_123_2824)">
                    <path d="M16.8676 16.8667H15.3342V15.3334H16.8676V16.8667ZM12.2676 16.8667H13.8009V15.3334H12.2676V16.8667ZM19.9342 16.8667H18.4009V15.3334H19.9342V16.8667Z" fill="#DC4F3B"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.6 9.2V5.36667C4.6 4.66191 4.73881 3.96405 5.00851 3.31293C5.27821 2.66182 5.67352 2.0702 6.17186 1.57186C6.6702 1.07352 7.26182 0.678213 7.91293 0.408513C8.56405 0.138813 9.26191 0 9.96667 0C10.6714 0 11.3693 0.138813 12.0204 0.408513C12.6715 0.678213 13.2631 1.07352 13.7615 1.57186C14.2598 2.0702 14.6551 2.66182 14.9248 3.31293C15.1945 3.96405 15.3333 4.66191 15.3333 5.36667V9.2H17.6333C18.2433 9.2 18.8283 9.44232 19.2597 9.87365C19.691 10.305 19.9333 10.89 19.9333 11.5V12.3433C20.7999 12.5193 21.579 12.9894 22.1386 13.6741C22.6981 14.3587 23.0038 15.2158 23.0038 16.1C23.0038 16.9842 22.6981 17.8413 22.1386 18.5259C21.579 19.2106 20.7999 19.6807 19.9333 19.8567V20.7C19.9333 21.31 19.691 21.895 19.2597 22.3263C18.8283 22.7577 18.2433 23 17.6333 23H2.3C1.69 23 1.10499 22.7577 0.673654 22.3263C0.242321 21.895 0 21.31 0 20.7L0 11.5C0 10.89 0.242321 10.305 0.673654 9.87365C1.10499 9.44232 1.69 9.2 2.3 9.2H4.6ZM6.13333 5.36667C6.13333 4.35 6.5372 3.37498 7.25609 2.65609C7.97498 1.9372 8.95 1.53333 9.96667 1.53333C10.9833 1.53333 11.9584 1.9372 12.6772 2.65609C13.3961 3.37498 13.8 4.35 13.8 5.36667V9.2H6.13333V5.36667ZM13.0333 13.8C12.4233 13.8 11.8383 14.0423 11.407 14.4737C10.9757 14.905 10.7333 15.49 10.7333 16.1C10.7333 16.71 10.9757 17.295 11.407 17.7263C11.8383 18.1577 12.4233 18.4 13.0333 18.4H19.1667C19.7767 18.4 20.3617 18.1577 20.793 17.7263C21.2243 17.295 21.4667 16.71 21.4667 16.1C21.4667 15.49 21.2243 14.905 20.793 14.4737C20.3617 14.0423 19.7767 13.8 19.1667 13.8H13.0333Z" fill="#DC4F3B"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_123_2824">
                    <rect width="23" height="23" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <h3 class="text-[15px] lg:text-xl text-primary ml-3 uppercase font-bold">Login</h3>

            </div>
            <div class="flex items-center">
                <h2 class="head_line relative font-bold text-xl lg:text-[40px] text-white">Login To your Account</h2>
                <svg class="w-[6px] h-[6px] lg:w-3 lg:h-3 ml-1 mt-3 lg:ml-2 lg:mt-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none">
                    <circle cx="6" cy="6" r="6" fill="url(#paint0_linear_123_2830)"/>
                    <defs>
                    <linearGradient id="paint0_linear_123_2830" x1="6" y1="0" x2="6" y2="12" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#DC4F3B"/>
                    <stop offset="1" stop-color="#DA291C"/>
                    </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="pb-10 lg:pb-0 lg:pr-[170px]">
                <form method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf

                    <!-- Email Address -->
                    <div class="relative mt-10">
                        <x-text-input id="email" type="email" name="email" :value="old('email')" placeholder="Your email" required autocomplete="username" />
                        <svg class="absolute left-5 top-4 lg:top-3 w-5 h-5 lg:w-6 lg:h-6" xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                            <path d="M18 4L10 9L2 4V2L10 7L18 2M18 0H2C0.89 0 0 0.89 0 2V14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H18C18.5304 16 19.0391 15.7893 19.4142 15.4142C19.7893 15.0391 20 14.5304 20 14V2C20 1.46957 19.7893 0.960859 19.4142 0.585786C19.0391 0.210714 18.5304 0 18 0Z" fill="#DC4F3B"/>
                            </svg>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="relative mt-5">
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Enter your password..." required autocomplete="new-password" />
                        <svg class="absolute left-5 top-4 lg:top-3 w-5 h-5 lg:w-6 lg:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 23" fill="none">
                            <g clip-path="url(#clip0_123_2824)">
                            <path d="M16.8676 16.8667H15.3342V15.3334H16.8676V16.8667ZM12.2676 16.8667H13.8009V15.3334H12.2676V16.8667ZM19.9342 16.8667H18.4009V15.3334H19.9342V16.8667Z" fill="#DC4F3B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.6 9.2V5.36667C4.6 4.66191 4.73881 3.96405 5.00851 3.31293C5.27821 2.66182 5.67352 2.0702 6.17186 1.57186C6.6702 1.07352 7.26182 0.678213 7.91293 0.408513C8.56405 0.138813 9.26191 0 9.96667 0C10.6714 0 11.3693 0.138813 12.0204 0.408513C12.6715 0.678213 13.2631 1.07352 13.7615 1.57186C14.2598 2.0702 14.6551 2.66182 14.9248 3.31293C15.1945 3.96405 15.3333 4.66191 15.3333 5.36667V9.2H17.6333C18.2433 9.2 18.8283 9.44232 19.2597 9.87365C19.691 10.305 19.9333 10.89 19.9333 11.5V12.3433C20.7999 12.5193 21.579 12.9894 22.1386 13.6741C22.6981 14.3587 23.0038 15.2158 23.0038 16.1C23.0038 16.9842 22.6981 17.8413 22.1386 18.5259C21.579 19.2106 20.7999 19.6807 19.9333 19.8567V20.7C19.9333 21.31 19.691 21.895 19.2597 22.3263C18.8283 22.7577 18.2433 23 17.6333 23H2.3C1.69 23 1.10499 22.7577 0.673654 22.3263C0.242321 21.895 0 21.31 0 20.7L0 11.5C0 10.89 0.242321 10.305 0.673654 9.87365C1.10499 9.44232 1.69 9.2 2.3 9.2H4.6ZM6.13333 5.36667C6.13333 4.35 6.5372 3.37498 7.25609 2.65609C7.97498 1.9372 8.95 1.53333 9.96667 1.53333C10.9833 1.53333 11.9584 1.9372 12.6772 2.65609C13.3961 3.37498 13.8 4.35 13.8 5.36667V9.2H6.13333V5.36667ZM13.0333 13.8C12.4233 13.8 11.8383 14.0423 11.407 14.4737C10.9757 14.905 10.7333 15.49 10.7333 16.1C10.7333 16.71 10.9757 17.295 11.407 17.7263C11.8383 18.1577 12.4233 18.4 13.0333 18.4H19.1667C19.7767 18.4 20.3617 18.1577 20.793 17.7263C21.2243 17.295 21.4667 16.71 21.4667 16.1C21.4667 15.49 21.2243 14.905 20.793 14.4737C20.3617 14.0423 19.7767 13.8 19.1667 13.8H13.0333Z" fill="#DC4F3B"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_123_2824">
                            <rect width="23" height="23" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <x-primary-button id="submitLogin" disabled type="submit" contentClasses="bg-primary-class mt-12 lg:py-[10px] border-none w-full text-white bg-primary hover:text-white hover:bg-white/[0.13]">
                        <span class="font-extralight lg:text-lg">Login</span>
                    </x-primary-button>
                </form>
            </div>
        </div>

    </div>

</x-guest-layout>
