<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Payco') }}</title>
        <link rel="icon" type="image/png" href="http://www.payco.technodyna.com/images/favicon.png">
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
                    <div class="{{ in_array(Route::currentRouteName(), ['invset']) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-0 -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), [ 'invset', 'contacts']) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9534.png" alt="" class="absolute top-40 -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), []) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9532.png" alt="" class="absolute right-0 top-52 -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['invset', 'contacts']) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-[1000px] -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['products', 'invset', 'contacts', 'blog']) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9534.png" alt="" class="absolute top-[1300px] -z-20 ">
                    </div>
                    <!-- <div class="{{ in_array(Route::currentRouteName(), ['products', 'invset', 'contacts']) ? 'hidden lg:hidden' : '' }}"> -->
                    <div class="hidden lg:block {{ in_array(Route::currentRouteName(), ['products', 'invset', 'contacts']) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9532.png" alt="" class="absolute right-0 top-[1300px] -z-20 ">
                    </div>
                    <div class="{{ in_array(Route::currentRouteName(), ['products', 'invset', 'contacts']) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-[1500px] -z-20 ">
                    </div>
                    <!-- <div class="{{ in_array(Route::currentRouteName(), ['about', 'products', 'invset', 'contacts', 'blog']) ? 'hidden' : '' }}"> -->
                    <div class="hidden {{ in_array(Route::currentRouteName(), ['home','about', 'products', 'invset', 'contacts', 'blog']) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9534.png" alt="" class="absolute top-[1800px] -z-20 ">
                    </div>
                    <!-- <div class="{{ in_array(Route::currentRouteName(), ['about', 'products', 'invset', 'contacts', 'blog']) ? 'hidden' : '' }}"> -->
                    <div class="hidden lg:block {{ in_array(Route::currentRouteName(), ['about', 'products', 'invset', 'contacts', 'blog']) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9532.png" alt="" class="absolute right-0 top-[1600px] -z-20 ">
                    </div>
                    <!-- <div class="{{ in_array(Route::currentRouteName(), ['about', 'products', 'invset', 'contacts', 'blog']) ? 'hidden' : '' }}"> -->
                    <div class="hidden lg:block {{ in_array(Route::currentRouteName(), ['about', 'products', 'invset', 'contacts', 'blog']) ? 'hidden lg:hidden' : '' }}">
                        <img src="/images/rectangle_9535.png" alt="" class="absolute right-0 top-[2000px] -z-20 ">
                    </div>


                </div>
                <div class="hidden translate-x-full"></div>
                <header class="py-0 px-0 lg:py-6 lg:px-8 lg:mx-20">
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
                                    <stop stop-color="#ff0000"/>
                                    <stop offset="1" stop-color="#DA291C"/>
                                    </linearGradient>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                        @if(Auth::check() && Auth::user()->isAdmin())
                        <div class="hidden items-center">
                            <a class="text-white pl-2" href="/admin/posts">Admin area</a>
                        </div>
                        @endif
                        <div class="flex flex-col text-white mt-10">
                            <a href="/" class="py-4">Home</a>
                            <a href="/about-us" class="py-4">About Us</a>
                            <a href="/products" class="py-4">Products</a>
                            <a href="/blog" class="py-4">blog</a>
                            <a href="/contact-us" class="py-4">Contact Us</a>
                        </div>
                        <div class="text-center mt-5">
                            <x-primary-button contentClasses="border-[#F4B554] text-[#F4B554]">
                                <a href="/invset" class="uppercase font-medium text-lg ">Invest In Payco</a>
                            </x-primary-button>
                        </div>

                    </div>
                    <div>
                        <div class="hidden lg:flex items-center justify-between 2xl:px-20 lg:px-8 md:px-6 mx-auto px-4 py-6 md:py-8 lg:py-5 bg-[#4b4b4b66] lg:rounded-[40px] backdrop-blur-[2px]">
                            <div class="inline-flex focus:outline-none logo ps-3 md:ps-0 lg:mx-0 h-8 lg:h-14">
                            <a class="flex h-8 lg:h-14" href="{{route('home')}}"><img src="/images/logo.png" alt="Payco" /></a>
                            </div>
                            <div class="hidden lg:flex content-between justify-between h-5 gap-10 text-white ">
                                <a href="/" class="nav-item {{ (request()->is('/')) ? 'active' : '' }} hover:text-primary">Home</a>
                                <a href="/about-us" class="nav-item {{ (request()->is('about-us')) ? 'active' : '' }} hover:text-primary">About Us</a>
                                <a href="/products" class="nav-item {{ (request()->is('products')) ? 'active' : '' }} hover:text-primary">Products</a>
                                <a href="/blog" class="nav-item {{ (request()->is('blog')) ? 'active' : '' }} hover:text-primary">blog</a>
                                <a href="/contact-us" class="nav-item {{ (request()->is('contact-us')) ? 'active' : '' }} hover:text-primary">Contact Us</a>
                            </div>
                            <x-primary-button contentClasses="hidden lg:block lg:px-6 border-[#F4B554] text-[#F4B554] hover:text-white hover:bg-primary hover:border-primary">
                                <a href="/invset" class="uppercase font-medium text-lg ">Invest In Payco</a>
                            </x-primary-button>
                            @if(Auth::check() && Auth::user()->isAdmin())
                            <div class="items-center justify-between">
                                <a class="text-white pl-2" href="/admin/posts">Admin area</a>
                            </div>
                            @endif
                        </div>
                        <div class="flex lg:hidden py-6">
                            <button type="button" class="mobile-menu-button inline-flex items-center p-2 mx-3 text-sm text-white rounded-lg md:hidden">
                                <span class="sr-only">Open main menu</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                    <path d="M0 1.42857C0 1.04969 0.158036 0.686328 0.43934 0.418419C0.720645 0.15051 1.10218 0 1.5 0H22.5C22.8978 0 23.2794 0.15051 23.5607 0.418419C23.842 0.686328 24 1.04969 24 1.42857C24 1.80745 23.842 2.17081 23.5607 2.43872C23.2794 2.70663 22.8978 2.85714 22.5 2.85714H1.5C1.10218 2.85714 0.720645 2.70663 0.43934 2.43872C0.158036 2.17081 0 1.80745 0 1.42857ZM0 18.5714C0 18.1925 0.158036 17.8292 0.43934 17.5613C0.720645 17.2934 1.10218 17.1429 1.5 17.1429H22.5C22.8978 17.1429 23.2794 17.2934 23.5607 17.5613C23.842 17.8292 24 18.1925 24 18.5714C24 18.9503 23.842 19.3137 23.5607 19.5816C23.2794 19.8495 22.8978 20 22.5 20H1.5C1.10218 20 0.720645 19.8495 0.43934 19.5816C0.158036 19.3137 0 18.9503 0 18.5714ZM1.5 8.57143C1.10218 8.57143 0.720645 8.72194 0.43934 8.98985C0.158036 9.25776 0 9.62112 0 10C0 10.3789 0.158036 10.7422 0.43934 11.0102C0.720645 11.2781 1.10218 11.4286 1.5 11.4286H13.5C13.8978 11.4286 14.2794 11.2781 14.5607 11.0102C14.842 10.7422 15 10.3789 15 10C15 9.62112 14.842 9.25776 14.5607 8.98985C14.2794 8.72194 13.8978 8.57143 13.5 8.57143H1.5Z" fill="white"/>
                                </svg>
                            </button>
                            <div class="inline-flex focus:outline-none logo ps-3 md:ps-0 h-8">
                            <a class="flex h-8 lg:h-14" href="{{route('home')}}"><img src="/images/logo.png" alt="Payco" /></a>
                            </div>
                        </div>
                    </div>

                </header>
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
                <footer class="relative px-5 py-10 2xl:px-20 lg:px-8 md:px-6 lg:py-32">
                    <div class="w-full h-full absolute top-0 left-0 -z-10" style="background-image: url('/images/rectangle_9540.png');background-repeat: no-repeat;"></div>
                    <div class="mx-5 lg:mx-8">
                        <h2 class="text-xl lg:text-[50px] font-extralight  text-white">{{ $page_texts->where('title', 'Footer Title')->first()->content ?? ''}}</h2>
                        <div class="grid grid-col-4 lg:grid-cols-12 gap-4 lg:gap-8 z-10 mt-10 lg:mt-20">
                            <div class="col-span-4 focus:outline-none logo ps-3 md:ps-0 lg:mx-0">
                            <a class="" href="{{route('home')}}"><img class="mb-4 lg:mb-10 h-8 lg:h-[76px]" src="/images/logo.png" alt="Payco" /></a>
                                <p class="text-xs lg:text-lg text-white/60 lg:pr-6">{{ $page_texts->where('title', 'Footer Body')->first()->content ?? ''}}</p>
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
                                    <a href="https://www.linkedin.com/company/thepaycompany/" target="_blank">
                                        <svg fill="#ffffff" class="w-[30px] h-[30px] lg:w-[40px] lg:h-[40px]" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z M41.4,508.1H-8.5V348.4h49.9V508.1z M15.1,328.4h-0.4c-18.1,0-29.8-12.2-29.8-27.7c0-15.8,12.1-27.7,30.5-27.7 c18.4,0,29.7,11.9,30.1,27.7C45.6,316.1,33.9,328.4,15.1,328.4z M241,508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4 c-14.9,0-23.2,10-27,19.6c-1.4,3.4-1.2,8.2-1.2,13.1v86.3H71.8c0,0,0.7-146.4,0-159.7h56.1v25.1c3.3-11,21.2-26.6,49.8-26.6 c35.5,0,63.3,23,63.3,72.4V508.1z"></path> </g></svg>
                                    </a>
                                    <a href="https://www.crunchbase.com/organization/the-pay-company-ag" target="_blank">
                                        <svg fill="#ffffff" class="w-[30px] h-[30px] lg:w-[40px] lg:h-[40px]" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>Crunchbase icon</title><path d="M21.6 0H2.4A2.41 2.41 0 0 0 0 2.4v19.2A2.41 2.41 0 0 0 2.4 24h19.2a2.41 2.41 0 0 0 2.4-2.4V2.4A2.41 2.41 0 0 0 21.6 0zM7.045 14.465A2.11 2.11 0 0 0 9.84 13.42h1.66a3.69 3.69 0 1 1 0-1.75H9.84a2.11 2.11 0 1 0-2.795 2.795zm11.345.845a3.55 3.55 0 0 1-1.06.63 3.68 3.68 0 0 1-3.39-.38v.38h-1.51V5.37h1.5v4.11a3.74 3.74 0 0 1 1.8-.63H16a3.67 3.67 0 0 1 2.39 6.46zm-.223-2.766a2.104 2.104 0 1 1-4.207 0 2.104 2.104 0 0 1 4.207 0z"></path></g></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
