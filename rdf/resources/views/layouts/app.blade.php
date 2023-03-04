<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-black font-sans overflow-x-hidden relative">
        <div class="min-h-screen">

            <div id="content-warp" class="" >
                <div id="bg-colors">
                    <div class="{{ in_array(Route::currentRouteName(), ['invset']) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-0 -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['invset']) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9534.png" alt="" class="absolute top-40 -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), []) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9532.png" alt="" class="absolute right-0 top-52 -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['invset']) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-[1000px] -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['products', 'invset']) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9534.png" alt="" class="absolute top-[1300px] -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['products', 'invset']) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9532.png" alt="" class="absolute right-0 top-[1300px] -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['products', 'invset']) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-[1500px] -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['about', 'products', 'invset']) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9534.png" alt="" class="absolute top-[1800px] -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['about', 'products', 'invset']) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9532.png" alt="" class="absolute right-0 top-[1600px] -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['about', 'products', 'invset']) ? 'hidden' : '' }}">
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-[2000px] -z-20 ">
                    </div>


                </div>
                <header class="py-0 px-0 lg:py-6 lg:px-8">
                    <div class="mobile-menu lg:hidden h-screen w-full p-5 fixed -left-[100%] duration-300 ease-out transition-all bg-[#1E1E1E] z-50">
                        <div class="flex justify-between items-center lg:hidden mb-10">
                            <div class="inline-flex focus:outline-none logo ps-3 md:ps-0 lg:mx-0">
                                <a class="flex h-8 lg:h-14" href="{{route('home')}}"><img src="/images/logo.png" alt="Payco" /></a>
                            </div>
                            <button type="button" class="mobile-menu-hide inline-flex items-center p-2 mx-3 text-sm rounded-lg md:hidden">
                                <span class="sr-only">Open main menu</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <path d="M24.75 22.2V13.8C24.75 13.45 24.6 13.2125 24.3 13.0875C24 12.9625 23.725 13.025 23.475 13.275L19.8 16.95C19.5 17.25 19.35 17.6 19.35 18C19.35 18.4 19.5 18.75 19.8 19.05L23.475 22.725C23.725 22.975 24 23.0375 24.3 22.9125C24.6 22.7875 24.75 22.55 24.75 22.2ZM7.5 31.5C6.675 31.5 5.9685 31.2065 5.3805 30.6195C4.7935 30.0315 4.5 29.325 4.5 28.5V7.5C4.5 6.675 4.7935 5.9685 5.3805 5.3805C5.9685 4.7935 6.675 4.5 7.5 4.5H28.5C29.325 4.5 30.0315 4.7935 30.6195 5.3805C31.2065 5.9685 31.5 6.675 31.5 7.5V28.5C31.5 29.325 31.2065 30.0315 30.6195 30.6195C30.0315 31.2065 29.325 31.5 28.5 31.5H7.5ZM15 28.5H28.5V7.5H15V28.5Z" fill="url(#paint0_linear_123_5599)"/>
                                    <defs>
                                    <linearGradient id="paint0_linear_123_5599" x1="18" y1="4.5" x2="18" y2="31.5" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#DC4F3B"/>
                                    <stop offset="1" stop-color="#DA291C"/>
                                    </linearGradient>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <img src="/images/ic_baseline-account-circle.png" alt="avatar" class="h-[30px]">
                            @auth
                            <span class="text-white pl-2">{{ auth()->user()->name }}</span>
                            @else
                            <a class="text-white pl-2" href="/login">Login</a>
                            @endauth
                        </div>
                        <div class="flex flex-col text-white mt-10">
                            <a href="/" class="py-4">Home</a>
                            <a href="/about-us" class="py-4">About Us</a>
                            <a href="/products" class="py-4">Products</a>
                            <a href="#" class="py-4">blog</a>
                            <a href="#" class="py-4">Contact Us</a>
                        </div>
                        <div class="text-center mt-5">
                            <x-primary-button contentClasses="border-[#F4B554] text-[#F4B554]">
                                <a href="/invset" class="uppercase font-medium text-lg ">Invest With Payco</a>
                            </x-primary-button>
                        </div>

                    </div>
                    <div>
                        <div class="hidden lg:flex items-center justify-between 2xl:px-20 lg:px-8 md:px-6 mx-auto px-4 py-6 md:py-8 lg:py-10 bg-[#4b4b4b66] lg:rounded-[40px] backdrop-blur-[2px]">
                            <div class="inline-flex focus:outline-none logo ps-3 md:ps-0 lg:mx-0 h-8 lg:h-14">
                                <img src="/images/logo.png" alt="Payco" />
                            </div>
                            <div class="hidden lg:flex content-between justify-between h-5 lg:min-w-[565px] text-white ">
                                <a href="/" class="nav-item {{ (request()->is('/')) ? 'active' : '' }} hover:text-primary">Home</a>
                                <a href="/about-us" class="nav-item {{ (request()->is('about-us')) ? 'active' : '' }} hover:text-primary">About Us</a>
                                <a href="/products" class="nav-item {{ (request()->is('products')) ? 'active' : '' }} hover:text-primary">Products</a>
                                <a href="#" class="nav-item hover:text-primary">blog</a>
                                <a href="#" class="nav-item hover:text-primary">Contact Us</a>
                            </div>
                            <x-primary-button contentClasses="hidden lg:block lg:px-6 border-[#F4B554] text-[#F4B554] hover:text-white hover:bg-primary hover:border-primary">
                                <a href="/invset" class="uppercase font-medium text-lg ">Invest With Payco</a>
                            </x-primary-button>
                            <div class="hidden lg:flex items-center justify-between">
                                <img src="/images/ic_baseline-account-circle.png" alt="avatar" class="">
                                @auth
                                <span class="text-white pl-2">{{ auth()->user()->name }}</span>
                                @else
                                <a class="text-white pl-2" href="/login">Login</a>
                                @endauth
                            </div>
                        </div>
                        <div class="flex lg:hidden py-6">
                            <button type="button" class="mobile-menu-button inline-flex items-center p-2 mx-3 text-sm text-white rounded-lg md:hidden">
                                <span class="sr-only">Open main menu</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                    <path d="M0 1.42857C0 1.04969 0.158036 0.686328 0.43934 0.418419C0.720645 0.15051 1.10218 0 1.5 0H22.5C22.8978 0 23.2794 0.15051 23.5607 0.418419C23.842 0.686328 24 1.04969 24 1.42857C24 1.80745 23.842 2.17081 23.5607 2.43872C23.2794 2.70663 22.8978 2.85714 22.5 2.85714H1.5C1.10218 2.85714 0.720645 2.70663 0.43934 2.43872C0.158036 2.17081 0 1.80745 0 1.42857ZM0 18.5714C0 18.1925 0.158036 17.8292 0.43934 17.5613C0.720645 17.2934 1.10218 17.1429 1.5 17.1429H22.5C22.8978 17.1429 23.2794 17.2934 23.5607 17.5613C23.842 17.8292 24 18.1925 24 18.5714C24 18.9503 23.842 19.3137 23.5607 19.5816C23.2794 19.8495 22.8978 20 22.5 20H1.5C1.10218 20 0.720645 19.8495 0.43934 19.5816C0.158036 19.3137 0 18.9503 0 18.5714ZM1.5 8.57143C1.10218 8.57143 0.720645 8.72194 0.43934 8.98985C0.158036 9.25776 0 9.62112 0 10C0 10.3789 0.158036 10.7422 0.43934 11.0102C0.720645 11.2781 1.10218 11.4286 1.5 11.4286H13.5C13.8978 11.4286 14.2794 11.2781 14.5607 11.0102C14.842 10.7422 15 10.3789 15 10C15 9.62112 14.842 9.25776 14.5607 8.98985C14.2794 8.72194 13.8978 8.57143 13.5 8.57143H1.5Z" fill="white"/>
                                </svg>
                            </button>
                            <div class="inline-flex focus:outline-none logo ps-3 md:ps-0 h-8">
                                <img src="/images/logo.png" alt="Payco" />
                            </div>
                        </div>
                    </div>

                </header>
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
                <footer class="relative px-5 py-10 2xl:px-20 lg:px-8 md:px-6 mx-auto lg:py-32">
                    <div class="w-full h-full absolute top-0 left-0 -z-10" style="background-image: url('/images/rectangle_9540.png');background-repeat: no-repeat;"></div>
                    <h2 class="text-xl lg:text-[50px] font-extralight  text-white">Make your transactions safely with Payco!</h2>
                    <div class="grid grid-col-4 lg:grid-cols-12 gap-4 lg:gap-8 z-10 mt-10 lg:mt-20">
                        <div class="col-span-4 focus:outline-none logo ps-3 md:ps-0 lg:mx-0">
                            <img class="mb-4 lg:mb-10 h-8 lg:h-[76px]" src="/images/logo.png" alt="Payco" />
                            <p class="text-xs lg:text-lg text-white/60 lg:pr-6">Payco is a digital solution for cross-border payments, providing secure and convenient services for individuals and businesses. With Payco, you can easily send money internationally, issue letters of credit, and conduct transactions using our secure digital wallet.</p>
                        </div>
                        <div class="col-span-2 lg:col-span-3 text-white mt-5 lg:mt-0">
                            <ul class="lg:pl-20 space-y-3 lg:space-y-5">
                                <li><a class="text-sm lg:text-lg hover:text-primary" href="/">Home</a></li>
                                <li><a class="text-sm lg:text-lg hover:text-primary" href="/about-us">About Us</a></li>
                                <li><a class="text-sm lg:text-lg hover:text-primary" href="/products">Products</a></li>
                                <li><a class="text-sm lg:text-lg hover:text-primary" href="/contact-us">Contact Us</a></li>
                                <li><a class="text-sm lg:text-lg hover:text-primary" href="/blog">Blog</a></li>
                            </ul>
                        </div>
                        <div class="hidden lg:block lg:col-span-2 text-white"></div>
                        <div class="col-span-2 lg:col-span-3 text-white mt-5 lg:mt-0">
                            <h2 class="font-medium text-base lg:text-3xl mb-5">Catch us on</h2>
                            <div class="flex gap-3 lg:gap-5">
                                <a href="/"><svg class="w-[38px] h-[38px] lg:w-[58px] lg:h-[58px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58" fill="none">
                                    <rect opacity="0.15" x="0.75" y="0.75" width="56.5" height="56.5" rx="18.75" stroke="white" stroke-width="1.5"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.6584 42V28.999H23V24.5186H25.6584V21.8286C25.6584 18.1735 27.1595 16 31.4243 16H34.9749V20.4809H32.7555C31.0953 20.4809 30.9855 21.107 30.9855 22.2756L30.9795 24.5181H35L34.5295 28.9985H30.9795V42H25.6584Z" fill="white"/>
                                </svg></a>
                                <a href="/"><svg class="w-[38px] h-[38px] lg:w-[58px] lg:h-[58px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58" fill="none">
                                    <rect opacity="0.15" x="0.75" y="0.75" width="56.5" height="56.5" rx="18.75" stroke="white" stroke-width="1.5"/>
                                    <g clip-path="url(#clip0_123_2663)">
                                    <path d="M29 16C25.4721 16 25.0285 16.0163 23.6424 16.078C22.2562 16.143 21.3121 16.3607 20.485 16.6825C19.6174 17.0088 18.8315 17.5207 18.1824 18.1824C17.5211 18.8319 17.0093 19.6176 16.6825 20.485C16.3607 21.3105 16.1414 22.2562 16.078 23.6375C16.0163 25.0269 16 25.4689 16 29.0016C16 32.5311 16.0163 32.9731 16.078 34.3593C16.143 35.7437 16.3607 36.6879 16.6825 37.515C17.0156 38.3697 17.4593 39.0945 18.1824 39.8176C18.9039 40.5407 19.6286 40.986 20.4834 41.3175C21.3121 41.6392 22.2546 41.8586 23.6391 41.922C25.0269 41.9837 25.4689 42 29 42C32.5311 42 32.9715 41.9837 34.3593 41.922C35.7421 41.857 36.6895 41.6392 37.5166 41.3175C38.3837 40.991 39.169 40.4791 39.8176 39.8176C40.5407 39.0945 40.9844 38.3697 41.3175 37.515C41.6376 36.6879 41.857 35.7437 41.922 34.3593C41.9837 32.9731 42 32.5311 42 29C42 25.4689 41.9837 25.0269 41.922 23.6391C41.857 22.2563 41.6376 21.3105 41.3175 20.485C40.9907 19.6176 40.4789 18.8318 39.8176 18.1824C39.1687 17.5205 38.3827 17.0085 37.515 16.6825C36.6862 16.3607 35.7405 16.1414 34.3576 16.078C32.9699 16.0163 32.5295 16 28.9967 16H29.0016H29ZM27.8349 18.3433H29.0016C32.4726 18.3433 32.8837 18.3546 34.2536 18.418C35.5211 18.4749 36.2101 18.6878 36.6684 18.8649C37.2745 19.1005 37.7084 19.3832 38.1634 19.8382C38.6184 20.2933 38.8995 20.7255 39.1351 21.3333C39.3139 21.7899 39.5251 22.4789 39.582 23.7464C39.6454 25.1163 39.6584 25.5274 39.6584 28.9967C39.6584 32.4661 39.6454 32.8789 39.582 34.2487C39.5251 35.5162 39.3123 36.2036 39.1351 36.6619C38.9267 37.2263 38.594 37.7367 38.1617 38.1553C37.7067 38.6103 37.2745 38.8914 36.6667 39.127C36.2118 39.3057 35.5227 39.517 34.2536 39.5755C32.8837 39.6373 32.4726 39.6519 29.0016 39.6519C25.5306 39.6519 25.1179 39.6373 23.748 39.5755C22.4805 39.517 21.7931 39.3057 21.3349 39.127C20.7702 38.9189 20.2593 38.5868 19.8399 38.1553C19.4072 37.7361 19.074 37.2252 18.8649 36.6602C18.6878 36.2036 18.4749 35.5146 18.418 34.2471C18.3563 32.8773 18.3433 32.4661 18.3433 28.9935C18.3433 25.5225 18.3563 25.113 18.418 23.7431C18.4765 22.4756 18.6878 21.7866 18.8665 21.3284C19.1021 20.7222 19.3849 20.2884 19.8399 19.8334C20.2949 19.3784 20.7271 19.0972 21.3349 18.8616C21.7931 18.6829 22.4805 18.4716 23.748 18.4131C24.9473 18.3579 25.412 18.3416 27.8349 18.34V18.3433ZM35.9404 20.5012C35.7355 20.5012 35.5327 20.5416 35.3434 20.62C35.1541 20.6984 34.9821 20.8133 34.8373 20.9582C34.6924 21.103 34.5775 21.275 34.4991 21.4643C34.4207 21.6535 34.3804 21.8564 34.3804 22.0613C34.3804 22.2661 34.4207 22.469 34.4991 22.6582C34.5775 22.8475 34.6924 23.0195 34.8373 23.1643C34.9821 23.3092 35.1541 23.4241 35.3434 23.5025C35.5327 23.5809 35.7355 23.6213 35.9404 23.6213C36.3541 23.6213 36.7509 23.4569 37.0435 23.1643C37.336 22.8718 37.5004 22.475 37.5004 22.0613C37.5004 21.6475 37.336 21.2507 37.0435 20.9582C36.7509 20.6656 36.3541 20.5012 35.9404 20.5012ZM29.0016 22.3245C28.1161 22.3107 27.2367 22.4732 26.4146 22.8025C25.5925 23.1318 24.8441 23.6214 24.213 24.2427C23.5819 24.864 23.0807 25.6047 22.7386 26.4215C22.3965 27.2384 22.2203 28.1152 22.2203 29.0008C22.2203 29.8864 22.3965 30.7632 22.7386 31.5801C23.0807 32.397 23.5819 33.1376 24.213 33.7589C24.8441 34.3803 25.5925 34.8698 26.4146 35.1991C27.2367 35.5285 28.1161 35.6909 29.0016 35.6771C30.7543 35.6498 32.4258 34.9344 33.6556 33.6853C34.8853 32.4362 35.5746 30.7537 35.5746 29.0008C35.5746 27.248 34.8853 25.5654 33.6556 24.3163C32.4258 23.0673 30.7543 22.3518 29.0016 22.3245ZM29.0016 24.6661C30.151 24.6661 31.2534 25.1227 32.0661 25.9355C32.8789 26.7482 33.3355 27.8506 33.3355 29C33.3355 30.1494 32.8789 31.2518 32.0661 32.0645C31.2534 32.8773 30.151 33.3339 29.0016 33.3339C27.8522 33.3339 26.7499 32.8773 25.9371 32.0645C25.1244 31.2518 24.6678 30.1494 24.6678 29C24.6678 27.8506 25.1244 26.7482 25.9371 25.9355C26.7499 25.1227 27.8522 24.6661 29.0016 24.6661Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_123_2663">
                                    <rect width="26" height="26" fill="white" transform="translate(16 16)"/>
                                    </clipPath>
                                    </defs>
                                </svg></a>
                                <a href="/"><svg class="w-[38px] h-[38px] lg:w-[58px] lg:h-[58px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58" fill="none">
                                    <rect opacity="0.15" x="0.75" y="0.75" width="56.5" height="56.5" rx="18.75" stroke="white" stroke-width="1.5"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.6245 23.8523L28.6808 24.8039L27.7415 24.6874C24.3224 24.2407 21.3353 22.726 18.7992 20.182L17.5593 18.9198L17.2399 19.8519C16.5636 21.9298 16.9957 24.1242 18.4047 25.6001C19.1561 26.4157 18.987 26.5323 17.6908 26.0468C17.2399 25.8914 16.8454 25.7749 16.8078 25.8331C16.6763 25.9691 17.1272 27.7363 17.4841 28.4354C17.9726 29.4064 18.9683 30.3579 20.0579 30.9211L20.9784 31.3677L19.8888 31.3872C18.8368 31.3872 18.7992 31.4066 18.9119 31.8144C19.2876 33.0767 20.7718 34.4166 22.425 34.9992L23.5897 35.407L22.5753 36.0285C21.0723 36.9218 19.3064 37.4267 17.5405 37.4655C16.6951 37.4849 16 37.5626 16 37.6209C16 37.8151 18.2919 38.9026 19.6258 39.3298C23.6273 40.5921 28.3803 40.0483 31.9497 37.8927C34.4859 36.3586 37.022 33.3097 38.2056 30.3579C38.8443 28.7849 39.483 25.9108 39.483 24.532C39.483 23.6387 39.5394 23.5222 40.5914 22.4541C41.2114 21.8327 41.7938 21.153 41.9065 20.9588C42.0944 20.5898 42.0756 20.5898 41.1175 20.92C39.5206 21.5026 39.2952 21.4249 40.0842 20.551C40.6666 19.9296 41.3617 18.8032 41.3617 18.4731C41.3617 18.4148 41.0799 18.5119 40.7605 18.6867C40.4224 18.8809 39.6709 19.1722 39.1073 19.347L38.0928 19.6771L37.1723 19.0363C36.6651 18.6867 35.9512 18.2983 35.5755 18.1818C34.6174 17.9099 33.152 17.9488 32.2878 18.2595C29.9395 19.1334 28.4554 21.3861 28.6245 23.8523Z" fill="white"/>
                                </svg></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
