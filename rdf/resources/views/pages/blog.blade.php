<x-app-layout>
    @php echo "<script>const posts = JSON.parse('$posts');</script>"; @endphp
    <div class="absolute left-0 top-0 min-h-[545px] lg:min-h-[1090px] w-full -z-10 bg-cover bg-center opacity-40" style="background-image: url('/images/blog1.jpg');background-repeat: no-repeat;"></div>
    <div class="bg-blog lg:hidden"></div>
    <div class="flex flex-col pt-8 lg:pt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 mx-5 lg:mx-28">
            <div class="flex flex-col lg:pr-40">
                <div class="flex">
                    <p class="text-primary font-bold text-sm lg:text-xl ml-2 uppercase">The Payco Blog</p>
                </div>
                <h2 class="w-1/2 lg:w-full text-white mt-8 lg:mt-12 text-2xl lg:text-[50px] font-extralight tracking-[-0.01em] leading-[32px] lg:leading-[75px]">{!! $page_texts->where('title', 'Blog Hero Title')->first()->content ?? '' !!}</h2>
                <p class="w-2/3 lg:w-full text-white/[0.70] mt-5 lg:mt-5 text-[13px] lg:text-[18px] font-light lg:font-normal tracking-[-0.01em]">{!! $page_texts->where('title', 'Blog Hero Body')->first()->content ?? '' !!}</p>
                <div class="flex my-7 lg:my-10 mx-10">
                    <x-primary-button contentClasses="border-primary w-full text-center py-2 text-primary bg-black/[0.13] hover:text-white hover:bg-primary">
                        <a href="#" class="font-medium lg:text-lg">View All Blogs</a>
                    </x-primary-button>
                </div>
            </div>
            <div class="">

            </div>
        </div>
    </div>
    <section class="bg-black/60 py-20">
        <div class="flex flex-col mx-5 lg:mx-28">
            <div class="flex items-center py-10">
                <h2 class="head_line relative font-bold text-xl lg:text-[32px] text-white">Recent blogs</h2>
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
            <div class="grid grid-cols-2 gap-7 lg:grid-cols-12">
                <div class="col-span-2 lg:col-span-5 mx-5 relative">
                    <div class="absolute left-0 top-0 w-full h-full rotate-[-6.86deg] rounded-[10px] bg-primary opacity-30 z-[-2]"></div>
                    <div class="absolute left-0 top-0 w-full h-full rotate-[-2.46deg] rounded-[10px] bg-primary opacity-50 z-[-2]"></div>
                    <img class="rounded-[10px]" src="{{ asset('storage/' . $posts->first()->photo) }}" alt="{{ $posts->first()->title }}">
                    <div class="absolute flex items-end justify-center left-0 top-0 w-full h-full p-5 bg-gradient-to-t from-black via-black/30 to-black/30">
                        <a href="/post/{{ $posts->first()->slug }}"><h4 class="capitalize font-light lg:leading-[50px] lg:text-[26px] text-sm text-white hover:text-primary">{{ $posts->first()->title }}</h4></a>
                    </div>
                    @php unset($posts[0]); @endphp
                </div>
                <div class="col-span-2 gap-7 mt-5 lg:mt-0 lg:gap-4 grid grid-cols-2 lg:col-span-7 lg:grid-cols-3">
                    @foreach($posts->take(6) as $index=>$post)
                    <x-post-card :id="$post->id" :img="$post->photo" :title="$post->title" />
                    @php unset($posts[$index]); @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="py-20">
        <div class="flex flex-col mx-5 lg:mx-28">
            <div class="flex items-center py-10">
                <h2 class="head_line relative font-bold text-xl lg:text-[32px] text-white">Categories</h2>
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
            <div class="grid grid-cols-2 gap-7 lg:grid-cols-12">
                <div class="col-span-2 lg:col-span-3 lg:overflow-y-hidden lg:whitespace-normal overflow-y-auto relative whitespace-nowrap">
                    <x-primary-button slug="payments" contentClasses="select-category lg:w-full mt-4 z-10 border-white/10 border-[1px] lg:px-6 lg:py-5 text-white hover:bg-gradient-to-b from-primary to-[#DA291C] bg-white/4 active-category">
                        <a href="#" class="flex items-center uppercase font-medium text-xs lg:text-base ">
                        <img class="w-[22px] h-[22px] lg:w-[31px] lg:h-[31px] mr-2" src="/images/icon-payment.png" alt="">
                        Payments
                        </a>
                    </x-primary-button>
                    <x-primary-button slug="fintech" contentClasses="select-category lg:w-full mt-4 z-10 border-white/10 border-[1px] lg:px-6 lg:py-5 text-white hover:bg-gradient-to-b from-primary to-[#DA291C] bg-white/4">
                        <a href="#" class="flex items-center uppercase font-medium text-xs lg:text-base ">
                        <img class="w-[22px] h-[22px] lg:w-[31px] lg:h-[31px] mr-2" src="/images/icon-fintech.png" alt="">
                        Fintech
                        </a>
                    </x-primary-button>
                    <x-primary-button slug="financial-industry" contentClasses="select-category lg:w-full mt-4 z-10 border-white/10 border-[1px] lg:px-6 lg:py-5 text-white hover:bg-gradient-to-b from-primary to-[#DA291C] bg-white/4">
                        <a href="#" class="flex items-center uppercase font-medium text-xs lg:text-base ">
                        <img class="w-[22px] h-[22px] lg:w-[31px] lg:h-[31px] mr-2" src="/images/icon-financial.png" alt="">
                        Financial Industry
                        </a>
                    </x-primary-button>
                    <x-primary-button slug="company-news" contentClasses="select-category lg:w-full mt-4 z-10 border-white/10 border-[1px] lg:px-6 lg:py-5 text-white hover:bg-gradient-to-b from-primary to-[#DA291C] bg-white/4">
                        <a href="/contact-us" class="flex items-center uppercase font-medium text-xs lg:text-base ">
                        <img class="w-[22px] h-[22px] lg:w-[31px] lg:h-[31px] mr-2" src="/images/icon-news.png" alt="">
                        Company News
                        </a>
                    </x-primary-button>
                    <x-primary-button slug="thought-leadership" contentClasses="select-category lg:w-full mt-4 z-10 border-white/10 border-[1px] lg:px-6 lg:py-5 text-white hover:bg-gradient-to-b from-primary to-[#DA291C] bg-white/4">
                        <a href="/contact-us" class="flex items-center uppercase font-medium text-xs lg:text-base ">
                        <svg class="w-[22px] h-[22px] lg:w-[31px] lg:h-[31px] mr-2" viewBox="0 0 31 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.3333 32.9999H10.6667M20.3333 32.9999V18.0657C20.3333 17.7828 20.2315 17.5115 20.0502 17.3115C19.8689 17.1114 19.623 16.999 19.3667 16.999H11.6333C11.377 16.999 11.1311 17.1114 10.9498 17.3115C10.7685 17.5115 10.6667 17.7828 10.6667 18.0657V32.9999M20.3333 32.9999H29.0333C29.2897 32.9999 29.5356 32.8875 29.7169 32.6874C29.8982 32.4874 30 32.2161 30 31.9332V27.844C30 27.5611 29.8982 27.2898 29.7169 27.0898C29.5356 26.8897 29.2897 26.7773 29.0333 26.7773H21.3C21.0436 26.7773 20.7977 26.8897 20.6165 27.0898C20.4352 27.2898 20.3333 27.5611 20.3333 27.844V32.9999ZM10.6667 32.9999V24.2883C10.6667 24.0054 10.5648 23.7341 10.3835 23.534C10.2023 23.334 9.95638 23.2216 9.7 23.2216H1.96667C1.71029 23.2216 1.46442 23.334 1.28313 23.534C1.10184 23.7341 1 24.0054 1 24.2883V31.9332C1 32.2161 1.10184 32.4874 1.28313 32.6874C1.46442 32.8875 1.71029 32.9999 1.96667 32.9999H10.6667Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.9535 4.62102L14.5118 1.31724C14.5539 1.2228 14.6224 1.14257 14.7091 1.08627C14.7959 1.02996 14.897 1 15.0004 1C15.1038 1 15.205 1.02996 15.2917 1.08627C15.3784 1.14257 15.4469 1.2228 15.489 1.31724L17.0491 4.62102L20.5327 5.15422C20.9801 5.2228 21.1584 5.79886 20.8344 6.12804L18.3143 8.69974L18.9092 12.331C18.9846 12.7973 18.5183 13.1539 18.1171 12.9328L15.0004 11.2183L11.8837 12.9328C11.4843 13.1522 11.0162 12.7973 11.0917 12.331L11.6866 8.69974L9.16645 6.12804C8.84072 5.79886 9.02073 5.2228 9.46646 5.15422L12.9535 4.62102Z" stroke="#DC4F3B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Thought Leadership
                        </a>
                    </x-primary-button>
                </div>
                <div id="categories-div" class="col-span-2 lg:col-span-6 grid grid-cols-2 gap-4">
                    <div class="col-span-2 flex justify-between items-center">
                        <h4 class="font-medium text-white text-sm lg:text-[23px] leading-[70px]"><b>Latest</b> <span id="category-title">Payments</span> Blogs</h4>
                        <x-primary-button contentClasses="lg:px-6 lg:!py-1 h-10 border-white text-white bg-white/[0.13] hover:text-white hover:bg-primary">
                            <a id="category-link" href="/category/payment" class="font-medium lg:text-lg">Show More</a>
                        </x-primary-button>
                    </div>
                    @if(@$posts && $posts->count() > 0)
                    @php $countPost = 0; @endphp
                    @foreach($posts as $post)
                    @continue(!in_array('payments', $post->categories->pluck('slug')->toArray()))
                    <x-post-card contentClasses="max-h-[180px] overflow-hidden rouned-[10px]" :id="$post->id" :img="$post->photo" :title="$post->title" />
                    @php
                        $countPost++;
                        if($countPost > 3) break;
                    @endphp
                    @endforeach
                    @endif
                </div>
                <div class="col-span-2 lg:col-span-3">
                    <h4 class="head_line relative font-medium text-white text-sm lg:text-[23px]"><b>Archives</b></h4>
                    <a href="#"><h5 class="mt-8 lg:mt-12 -mb-1 lg:text-lg ml-5 text-white">January 2021</h5></a>
                    <svg width="346" height="22" viewBox="0 0 346 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.9" d="M3 17L150.5 17L165 0.999511L360 0.999512" stroke="white"/>
                        <circle cx="5" cy="5" r="5" transform="matrix(-1 0 0 1 10 12)" fill="white"/>
                    </svg>
                    <a href="#"><h5 class="mt-8 -mb-1 lg:text-lg ml-5 text-white">Febuery 2021</h5></a>
                    <svg width="346" height="22" viewBox="0 0 346 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.9" d="M3 17L150.5 17L165 0.999511L360 0.999512" stroke="white"/>
                        <circle cx="5" cy="5" r="5" transform="matrix(-1 0 0 1 10 12)" fill="white"/>
                    </svg>
                    <a href="#"><h5 class="mt-8 -mb-1 lg:text-lg ml-5 text-white">March 2021</h5></a>
                    <svg width="346" height="22" viewBox="0 0 346 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.9" d="M3 17L150.5 17L165 0.999511L360 0.999512" stroke="white"/>
                        <circle cx="5" cy="5" r="5" transform="matrix(-1 0 0 1 10 12)" fill="white"/>
                    </svg>
                    <a href="#"><h5 class="mt-8 -mb-1 lg:text-lg ml-5 text-white">April 2021</h5></a>
                    <svg width="346" height="22" viewBox="0 0 346 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.9" d="M3 17L150.5 17L165 0.999511L360 0.999512" stroke="white"/>
                        <circle cx="5" cy="5" r="5" transform="matrix(-1 0 0 1 10 12)" fill="white"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <div class="min-h-[100px] lg:min-h-[100px]"></div>
</x-app-layout>
