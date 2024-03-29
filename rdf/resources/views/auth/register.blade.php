<x-guest-layout>
    <div class="lg:flex lg:flex-row-reverse gap-10 lg:mt-20 lg:mx-[120px] mt-10 mx-5">
        <div class="flex flex-col justify-end lg:flex-1 lg:text-start space-y-5 lg:space-y-10 text-center lg:mb-0 mb-10">
            <img class="hidden lg:block h-[66px] w-[199px]" src="/images/logo-white.png" alt="payco" />
            <h1 class="font-black text-base lg:text-3xl text-primary uppercase">Welcome to Payco</h1>
            <p class="lg:text-lg text-[13px] text-white/70">
                {{ $page_texts->where('title', 'Login')->first()->content ?? ''}}</p>
        </div>
        <div class="flex lg:flex-1 flex-col space-y-10">
            <div class="flex items-center">
                <svg class="w-[17px] h-[17px] lg:w-8 lg:h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 23" fill="none">
                    <g clip-path="url(#clip0_123_2824)">
                    <path d="M16.8676 16.8667H15.3342V15.3334H16.8676V16.8667ZM12.2676 16.8667H13.8009V15.3334H12.2676V16.8667ZM19.9342 16.8667H18.4009V15.3334H19.9342V16.8667Z" fill="#ff0000"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.6 9.2V5.36667C4.6 4.66191 4.73881 3.96405 5.00851 3.31293C5.27821 2.66182 5.67352 2.0702 6.17186 1.57186C6.6702 1.07352 7.26182 0.678213 7.91293 0.408513C8.56405 0.138813 9.26191 0 9.96667 0C10.6714 0 11.3693 0.138813 12.0204 0.408513C12.6715 0.678213 13.2631 1.07352 13.7615 1.57186C14.2598 2.0702 14.6551 2.66182 14.9248 3.31293C15.1945 3.96405 15.3333 4.66191 15.3333 5.36667V9.2H17.6333C18.2433 9.2 18.8283 9.44232 19.2597 9.87365C19.691 10.305 19.9333 10.89 19.9333 11.5V12.3433C20.7999 12.5193 21.579 12.9894 22.1386 13.6741C22.6981 14.3587 23.0038 15.2158 23.0038 16.1C23.0038 16.9842 22.6981 17.8413 22.1386 18.5259C21.579 19.2106 20.7999 19.6807 19.9333 19.8567V20.7C19.9333 21.31 19.691 21.895 19.2597 22.3263C18.8283 22.7577 18.2433 23 17.6333 23H2.3C1.69 23 1.10499 22.7577 0.673654 22.3263C0.242321 21.895 0 21.31 0 20.7L0 11.5C0 10.89 0.242321 10.305 0.673654 9.87365C1.10499 9.44232 1.69 9.2 2.3 9.2H4.6ZM6.13333 5.36667C6.13333 4.35 6.5372 3.37498 7.25609 2.65609C7.97498 1.9372 8.95 1.53333 9.96667 1.53333C10.9833 1.53333 11.9584 1.9372 12.6772 2.65609C13.3961 3.37498 13.8 4.35 13.8 5.36667V9.2H6.13333V5.36667ZM13.0333 13.8C12.4233 13.8 11.8383 14.0423 11.407 14.4737C10.9757 14.905 10.7333 15.49 10.7333 16.1C10.7333 16.71 10.9757 17.295 11.407 17.7263C11.8383 18.1577 12.4233 18.4 13.0333 18.4H19.1667C19.7767 18.4 20.3617 18.1577 20.793 17.7263C21.2243 17.295 21.4667 16.71 21.4667 16.1C21.4667 15.49 21.2243 14.905 20.793 14.4737C20.3617 14.0423 19.7767 13.8 19.1667 13.8H13.0333Z" fill="#ff0000"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_123_2824">
                    <rect width="23" height="23" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <h3 class="text-[15px] lg:text-xl text-primary ml-3 uppercase font-bold">Get started with a Payco personal account</h3>

            </div>
            <div class="flex items-center">
                <h2 class="head_line relative font-bold text-xl lg:text-[40px] text-white">Create a new Account</h2>
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
            <div class="pb-10 lg:pb-0 lg:pr-[170px]">
                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf

                    <!-- Name -->
                    <div class="relative">
                        <x-text-input id="name" class="" type="text" name="name" :value="old('name')" placeholder="Your name"  autofocus autocomplete="name" />
                        <svg class="absolute left-5 top-4 lg:top-3 w-5 h-5 lg:w-6 lg:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M16.5 9C16.5 10.1935 16.0259 11.3381 15.182 12.182C14.3381 13.0259 13.1935 13.5 12 13.5C10.8065 13.5 9.66193 13.0259 8.81802 12.182C7.97411 11.3381 7.5 10.1935 7.5 9C7.5 7.80653 7.97411 6.66193 8.81802 5.81802C9.66193 4.97411 10.8065 4.5 12 4.5C13.1935 4.5 14.3381 4.97411 15.182 5.81802C16.0259 6.66193 16.5 7.80653 16.5 9Z" fill="#ff0000"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 8.8174 1.26428 5.76516 3.51472 3.51472C5.76516 1.26428 8.8174 0 12 0C15.1826 0 18.2348 1.26428 20.4853 3.51472C22.7357 5.76516 24 8.8174 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24C8.8174 24 5.76516 22.7357 3.51472 20.4853C1.26428 18.2348 0 15.1826 0 12ZM12 1.5C10.0227 1.50011 8.08555 2.05854 6.4116 3.11104C4.73766 4.16354 3.39492 5.66732 2.53795 7.44929C1.68097 9.23127 1.34458 11.219 1.5675 13.1837C1.79042 15.1485 2.56358 17.0103 3.798 18.555C4.863 16.839 7.2075 15 12 15C16.7925 15 19.1355 16.8375 20.202 18.555C21.4364 17.0103 22.2096 15.1485 22.4325 13.1837C22.6554 11.219 22.319 9.23127 21.4621 7.44929C20.6051 5.66732 19.2623 4.16354 17.5884 3.11104C15.9145 2.05854 13.9773 1.50011 12 1.5Z" fill="#ff0000"/>
                        </svg>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <small id="namecheck" class="text-red-600">**Name is missing</small>
                    </div>

                    <!-- Email Address -->
                    <div class="relative mt-10">
                        <x-text-input id="email" type="email" name="email" :value="old('email')" placeholder="Your email" required autocomplete="username" />
                        <svg class="absolute left-5 top-4 lg:top-3 w-5 h-5 lg:w-6 lg:h-6" xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                            <path d="M18 4L10 9L2 4V2L10 7L18 2M18 0H2C0.89 0 0 0.89 0 2V14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H18C18.5304 16 19.0391 15.7893 19.4142 15.4142C19.7893 15.0391 20 14.5304 20 14V2C20 1.46957 19.7893 0.960859 19.4142 0.585786C19.0391 0.210714 18.5304 0 18 0Z" fill="#ff0000"/>
                            </svg>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <small id="emailcheck" class="text-red-600">
                            Your email must be a valid email
                        </small>
                    </div>

                    <!-- Phone -->
                    <div class="relative mt-10">
                        <x-text-input id="phone" type="text" name="phone" :value="old('phone')" placeholder="Your phone" autocomplete="phone" />
                        <svg class="absolute left-5 top-4 lg:top-3 w-5 h-5 lg:w-6 lg:h-6" version="1.1" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill="#ff0000" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g fill="#ff0000" id="Icons-Communication" transform="translate(-85.000000, -126.000000)"><g id="phone" transform="translate(85.000000, 126.000000)"><path d="M3.6,7.8 C5,10.6 7.4,12.9 10.2,14.4 L12.4,12.2 C12.7,11.9 13.1,11.8 13.4,12 C14.5,12.4 15.7,12.6 17,12.6 C17.6,12.6 18,13 18,13.6 L18,17 C18,17.6 17.6,18 17,18 C7.6,18 0,10.4 0,1 C0,0.4 0.4,0 1,0 L4.5,0 C5.1,0 5.5,0.4 5.5,1 C5.5,2.2 5.7,3.4 6.1,4.6 C6.2,4.9 6.1,5.3 5.9,5.6 L3.6,7.8 L3.6,7.8 Z" id="Shape"/></g></g></g></svg>
                    </div>

                    <!-- Password -->
                    <div class="relative mt-10">

                        <x-select :data="\App\Models\Country::all()" name="country_id" :value="old('country_id')" placeholder="Your country" />
                        <svg class="absolute left-5 top-4 lg:top-3 w-5 h-5 lg:w-6 lg:h-6" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.0006 19.6C11.0446 19.6 12.0526 19.432 12.9934 19.1248C12.5288 18.5207 12.1365 17.8642 11.8246 17.1688C11.2294 18.01 10.5838 18.4 10.0006 18.4C9.21222 18.4 8.31222 17.692 7.57422 16.1104C7.29332 15.4953 7.06919 14.8559 6.90462 14.2H11.2054C11.2198 13.7896 11.2762 13.3876 11.3698 13H6.64782C6.48107 12.0088 6.39837 11.0052 6.40062 10C6.40062 8.94043 6.48822 7.93003 6.64782 7.00003H13.3534C13.4974 7.84483 13.5838 8.75563 13.5982 9.70963C13.9606 9.46243 14.3554 9.25963 14.7814 9.10963C14.7504 8.40299 14.6795 7.69866 14.569 7.00003H17.8486C18.1006 7.65883 18.2722 8.35723 18.3514 9.08323C18.8002 9.23563 19.2166 9.44563 19.5958 9.70363C19.5376 7.81844 18.9253 5.99217 17.8355 4.45283C16.7456 2.91349 15.2265 1.72928 13.4677 1.04807C11.709 0.366848 9.78849 0.218799 7.94609 0.622404C6.10369 1.02601 4.421 1.96338 3.1081 3.3175C1.7952 4.67161 0.91026 6.38246 0.563775 8.23645C0.21729 10.0904 0.424607 12.0054 1.15984 13.7423C1.89508 15.4792 3.12566 16.961 4.69793 18.0028C6.27021 19.0445 8.11453 19.6001 10.0006 19.6ZM10.0006 1.60003C10.789 1.60003 11.689 2.30803 12.427 3.88963C12.6874 4.44883 12.9142 5.09203 13.0978 5.80003H6.90342C7.08702 5.09203 7.31382 4.44883 7.57542 3.88963C8.31102 2.30803 9.21102 1.60003 10.0006 1.60003ZM6.48702 3.38203C6.13267 4.1582 5.85806 4.96836 5.66742 5.80003H2.72382C3.73691 4.04907 5.34609 2.72101 7.25742 2.05843C6.96822 2.45443 6.71022 2.90323 6.48702 3.38203ZM5.43102 7.00003C5.27571 7.99244 5.19868 8.99553 5.20062 10C5.20062 11.044 5.28102 12.0544 5.43222 13H2.15262C1.78665 12.0422 1.59955 11.0254 1.60062 10C1.60062 8.94403 1.79622 7.93123 2.15262 7.00003H5.43222H5.43102ZM5.66742 14.2C5.87862 15.0916 6.15582 15.9064 6.48702 16.618C6.71022 17.0968 6.96822 17.5456 7.25742 17.9416C5.34609 17.279 3.73691 15.951 2.72382 14.2H5.66862H5.66742ZM12.7438 2.05843C14.6552 2.72091 16.2644 4.049 17.2774 5.80003H14.3326C14.142 4.96836 13.8674 4.15821 13.513 3.38203C13.2993 2.9171 13.0414 2.47385 12.7426 2.05843H12.7438ZM20.8006 14.4184C20.8006 11.9788 19.0426 10.0012 16.6018 10.0012C14.1622 10.0012 12.4006 11.9788 12.4006 14.4184C12.4006 16.2472 13.579 18.6544 16.3078 20.7016C16.4818 20.8336 16.7218 20.8336 16.8958 20.7016C19.627 18.6544 20.8006 16.2472 20.8006 14.4184ZM18.4006 14.2C18.4006 14.6774 18.211 15.1353 17.8734 15.4728C17.5358 15.8104 17.078 16 16.6006 16C16.1232 16 15.6654 15.8104 15.3278 15.4728C14.9903 15.1353 14.8006 14.6774 14.8006 14.2C14.8006 13.7226 14.9903 13.2648 15.3278 12.9272C15.6654 12.5897 16.1232 12.4 16.6006 12.4C17.078 12.4 17.5358 12.5897 17.8734 12.9272C18.211 13.2648 18.4006 13.7226 18.4006 14.2Z" fill="#ff0000"/>
                            </svg>
                        <x-input-error :messages="$errors->get('country_id')" class="mt-2" />
                    </div>

                    <x-primary-button id="submitRegister" disabled type="submit" contentClasses="bg-primary-class mt-12 lg:py-[10px] border-none w-full text-white bg-primary hover:text-white hover:bg-white/[0.13]">
                        <span class="font-extralight lg:text-lg">Next</span>
                    </x-primary-button>
                </form>
            </div>
        </div>

    </div>

</x-guest-layout>
