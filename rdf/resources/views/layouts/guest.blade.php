<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Payco') }}</title>
        <link rel="icon" type="image/png" href="http://www.payco.technodyna.com/images/favicon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-black">
        <div class="min-h-screen">
            <div id="content-warp" class="" >
                <div id="bg-colors">
                    <div>
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-0 -z-10 ">
                    </div>
                    <div>
                        <img src="/images/rectangle_9551.png" alt="" class="absolute min-h-[380px] lg:min-h-[1144px] -z-10 ">
                    </div>
                    <div>
                        <img src="/images/rectangle_9534qq.png" alt="" class="absolute top-80 lg:top-0 -z-10 ">
                    </div>
                    <div>
                        <img src="/images/rectangle_9627.png" alt="" class="lg:hidden absolute top-80 lg:top-0 -z-10 ">
                    </div>


                </div>
                <header class="py-0 px-0 lg:py-6 lg:px-8">
                    <div class="mobile-menu lg:hidden h-screen w-full p-5 fixed -left-[100%] duration-300 ease-out transition-all bg-[#1E1E1E] z-50">
                        <div class="flex justify-between items-center lg:hidden mb-10">
                            <div class="inline-flex focus:outline-none logo ps-3 md:ps-0 h-8">
                                <img src="/images/logo.png" alt="Payco" />
                            </div>
                            <button type="button" class="mobile-menu-hide inline-flex items-center p-2 mx-3 text-sm rounded-lg md:hidden">
                                <span class="sr-only">Open main menu</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <path d="M24.75 22.2V13.8C24.75 13.45 24.6 13.2125 24.3 13.0875C24 12.9625 23.725 13.025 23.475 13.275L19.8 16.95C19.5 17.25 19.35 17.6 19.35 18C19.35 18.4 19.5 18.75 19.8 19.05L23.475 22.725C23.725 22.975 24 23.0375 24.3 22.9125C24.6 22.7875 24.75 22.55 24.75 22.2ZM7.5 31.5C6.675 31.5 5.9685 31.2065 5.3805 30.6195C4.7935 30.0315 4.5 29.325 4.5 28.5V7.5C4.5 6.675 4.7935 5.9685 5.3805 5.3805C5.9685 4.7935 6.675 4.5 7.5 4.5H28.5C29.325 4.5 30.0315 4.7935 30.6195 5.3805C31.2065 5.9685 31.5 6.675 31.5 7.5V28.5C31.5 29.325 31.2065 30.0315 30.6195 30.6195C30.0315 31.2065 29.325 31.5 28.5 31.5H7.5ZM15 28.5H28.5V7.5H15V28.5Z" fill="url(#paint0_linear_123_5599)"/>
                                    <defs>
                                    <linearGradient id="paint0_linear_123_5599" x1="18" y1="4.5" x2="18" y2="31.5" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#ff0000"/>
                                    <stop offset="1" stop-color="#DA291C"/>
                                    </linearGradient>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            @if(request()->is('login'))
                            <a href="{{route('register')}}"><img src="/images/ic_baseline-account-circle.png" alt="avatar" class="h-[30px]"></a>
                            <a href="{{route('register')}}"><span class="text-white pl-2">Create an Account</span></a>
                            @else
                            <a href="{{route('login')}}"><img src="/images/ic_baseline-account-circle.png" alt="avatar" class="h-[30px]"></a>
                            <a href="{{route('login')}}"><span class="text-white pl-2">Login</span></a>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="hidden lg:flex items-center justify-between 2xl:px-20 lg:px-8 md:px-6 mx-auto px-4 py-6 md:py-8 lg:py-10 bg-[#4b4b4b] lg:rounded-[40px] backdrop-blur-[2px]">
                            <div class="inline-flex focus:outline-none logo ps-3 md:ps-0 lg:mx-0">
                                <a class="flex h-8 lg:h-14" href="{{route('home')}}"><img src="/images/logo.png" alt="Payco" /></a>
                            </div>

                            <div class="hidden lg:flex items-center justify-between">
                                @if(request()->is('login'))
                                <a href="{{route('register')}}"><img src="/images/ic_baseline-account-circle.png" alt="avatar" class=""></a>
                                <a href="{{route('register')}}"><span class="text-white pl-2">Create an Account</span></a>
                                @else
                                <a href="{{route('login')}}"><img src="/images/ic_baseline-account-circle.png" alt="avatar" class=""></a>
                                <a href="{{route('login')}}"><span class="text-white pl-2">Login</span></a>
                                @endif
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
                    <div class="absolute opacity-20 left-0 top-0 min-h-[380px] lg:min-h-[1144px] w-full -z-20 bg-cover" style="background-image: url('/images/bg-gust.png');background-repeat: no-repeat;"></div>
                </header>
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
