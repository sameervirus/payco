<x-app-layout>
    <div class="absolute left-0 top-0 min-h-[1290px] w-full -z-10 bg-cover opacity-5" style="background-image: url('/images/about.jpg');background-repeat: no-repeat;"></div>
    <div class="flex flex-col pt-12 lg:pt-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 mx-5 lg:mx-28">
            <div class="flex flex-col uppercase">
                <div class="flex justify-center lg:justify-start">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12 8.25C12.7956 8.25 13.5587 7.93393 14.1213 7.37132C14.6839 6.80871 15 6.04565 15 5.25C15 4.45435 14.6839 3.69129 14.1213 3.12868C13.5587 2.56607 12.7956 2.25 12 2.25C11.2044 2.25 10.4413 2.56607 9.87868 3.12868C9.31607 3.69129 9 4.45435 9 5.25C9 6.04565 9.31607 6.80871 9.87868 7.37132C10.4413 7.93393 11.2044 8.25 12 8.25ZM7.5 5.625C7.5 5.96972 7.4321 6.31106 7.30018 6.62954C7.16827 6.94802 6.97491 7.2374 6.73116 7.48116C6.4874 7.72491 6.19802 7.91827 5.87954 8.05018C5.56106 8.1821 5.21972 8.25 4.875 8.25C4.53028 8.25 4.18894 8.1821 3.87046 8.05018C3.55198 7.91827 3.2626 7.72491 3.01885 7.48116C2.77509 7.2374 2.58173 6.94802 2.44982 6.62954C2.3179 6.31106 2.25 5.96972 2.25 5.625C2.25 4.92881 2.52656 4.26113 3.01885 3.76884C3.51113 3.27656 4.17881 3 4.875 3C5.57119 3 6.23887 3.27656 6.73116 3.76884C7.22344 4.26113 7.5 4.92881 7.5 5.625ZM21.75 5.625C21.75 5.96972 21.6821 6.31106 21.5502 6.62954C21.4183 6.94802 21.2249 7.2374 20.9812 7.48116C20.7374 7.72491 20.448 7.91827 20.1295 8.05018C19.8111 8.1821 19.4697 8.25 19.125 8.25C18.7803 8.25 18.4389 8.1821 18.1205 8.05018C17.802 7.91827 17.5126 7.72491 17.2688 7.48116C17.0251 7.2374 16.8317 6.94802 16.6998 6.62954C16.5679 6.31106 16.5 5.96972 16.5 5.625C16.5 4.92881 16.7766 4.26113 17.2688 3.76884C17.7611 3.27656 18.4288 3 19.125 3C19.8212 3 20.4889 3.27656 20.9812 3.76884C21.4734 4.26113 21.75 4.92881 21.75 5.625ZM7.03275 9.75C6.60597 10.2816 6.37387 10.9433 6.375 11.625V17.25C6.375 18.1763 6.5985 19.05 6.99525 19.8202C6.42365 20.1208 5.78412 20.2687 5.13861 20.2495C4.49309 20.2303 3.86347 20.0447 3.31073 19.7108C2.75799 19.3768 2.30086 18.9057 1.98363 18.3432C1.66639 17.7807 1.49981 17.1458 1.5 16.5V11.625C1.5 11.1277 1.69754 10.6508 2.04917 10.2992C2.40081 9.94754 2.87772 9.75 3.375 9.75H7.03275ZM17.0048 19.8202C17.4137 19.0253 17.6263 18.144 17.625 17.25V11.625C17.625 10.9155 17.379 10.2638 16.9672 9.75H20.625C21.1223 9.75 21.5992 9.94754 21.9508 10.2992C22.3025 10.6508 22.5 11.1277 22.5 11.625V16.5C22.5002 17.1458 22.3336 17.7807 22.0164 18.3432C21.6991 18.9057 21.242 19.3768 20.6893 19.7108C20.1365 20.0447 19.5069 20.2303 18.8614 20.2495C18.2159 20.2687 17.5763 20.1208 17.0048 19.8202ZM9.375 9.75C8.87772 9.75 8.40081 9.94754 8.04917 10.2992C7.69754 10.6508 7.5 11.1277 7.5 11.625V17.25C7.5 18.4435 7.97411 19.5881 8.81802 20.432C9.66193 21.2759 10.8065 21.75 12 21.75C13.1935 21.75 14.3381 21.2759 15.182 20.432C16.0259 19.5881 16.5 18.4435 16.5 17.25V11.625C16.5 11.1277 16.3025 10.6508 15.9508 10.2992C15.5992 9.94754 15.1223 9.75 14.625 9.75H9.375Z" fill="#ff0000"/>
                    </svg>
                    <p class="text-primary font-bold text-sm lg:text-xl ml-2">Meet Our team</p>
                </div>
                <h2 class="text-white/[0.20] mt-8 lg:mt-12 text-center lg:text-start text-xl lg:text-[34px] font-light tracking-[-0.01em]">{{ $page_texts->where('title', 'About Hero 1')->first()->content ?? ''}}</h2>
                <h2 class="text-white/[0.80] mt-2 lg:mt-4 text-center lg:text-start text-xl lg:text-[38px] font-medium tracking-[-0.01em]">{{ $page_texts->where('title', 'About Hero 2')->first()->content ?? ''}}</h2>
                <h2 class="text-white/[0.20] mt-6 lg:mt-8 text-center lg:text-start text-xl lg:text-[34px] font-light tracking-[-0.01em]">{{ $page_texts->where('title', 'About Hero 3')->first()->content ?? ''}}</h2>
                <h2 class="text-white/[0.80] mt-2 lg:mt-0 text-center lg:text-start text-xl lg:text-[38px] font-medium tracking-[-0.01em] lg:leading-[60px]">{{ $page_texts->where('title', 'About Hero 4')->first()->content ?? ''}}</h2>
                <div class="hidden lg:block lg:text-start mt-20">
                    <x-primary-button contentClasses="border-white text-white bg-white/[0.13] hover:text-white hover:bg-primary">
                        <a href="#who-we-are" class="flex uppercase font-medium lg:text-lg">Who we Are <svg class="ml-5" xmlns="http://www.w3.org/2000/svg" width="28" height="30" viewBox="0 0 28 30" fill="none">
                            <g filter="url(#filter0_d_174_38)">
                            <path d="M14 16L18 12L16.6 10.6L15 12.2V8H13V12.2L11.4 10.6L10 12L14 16ZM14 22C12.6167 22 11.3167 21.7373 10.1 21.212C8.88333 20.6873 7.825 19.975 6.925 19.075C6.025 18.175 5.31267 17.1167 4.788 15.9C4.26267 14.6833 4 13.3833 4 12C4 10.6167 4.26267 9.31667 4.788 8.1C5.31267 6.88333 6.025 5.825 6.925 4.925C7.825 4.025 8.88333 3.31233 10.1 2.787C11.3167 2.26233 12.6167 2 14 2C15.3833 2 16.6833 2.26233 17.9 2.787C19.1167 3.31233 20.175 4.025 21.075 4.925C21.975 5.825 22.6873 6.88333 23.212 8.1C23.7373 9.31667 24 10.6167 24 12C24 13.3833 23.7373 14.6833 23.212 15.9C22.6873 17.1167 21.975 18.175 21.075 19.075C20.175 19.975 19.1167 20.6873 17.9 21.212C16.6833 21.7373 15.3833 22 14 22Z" fill="white"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_174_38" x="-2" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_174_38"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_174_38" result="shape"/>
                            </filter>
                            </defs>
                            </svg></a>
                    </x-primary-button>
                </div>
            </div>
            <div>
                <img class="w-100 mt-10 lg:mt-0" src="/images/group_21.png" alt="about">
            </div>
            <div class="lg:hidden text-center mt-10">
                <x-primary-button contentClasses="px-10 border-white text-white bg-white/[0.13] hover:text-white hover:bg-primary">
                    <a href="#who-we-are" class="flex items-center uppercase font-medium lg:text-lg">Who we Are <svg class="ml-5" xmlns="http://www.w3.org/2000/svg" width="28" height="30" viewBox="0 0 28 30" fill="none">
                        <g filter="url(#filter0_d_174_38)">
                        <path d="M14 16L18 12L16.6 10.6L15 12.2V8H13V12.2L11.4 10.6L10 12L14 16ZM14 22C12.6167 22 11.3167 21.7373 10.1 21.212C8.88333 20.6873 7.825 19.975 6.925 19.075C6.025 18.175 5.31267 17.1167 4.788 15.9C4.26267 14.6833 4 13.3833 4 12C4 10.6167 4.26267 9.31667 4.788 8.1C5.31267 6.88333 6.025 5.825 6.925 4.925C7.825 4.025 8.88333 3.31233 10.1 2.787C11.3167 2.26233 12.6167 2 14 2C15.3833 2 16.6833 2.26233 17.9 2.787C19.1167 3.31233 20.175 4.025 21.075 4.925C21.975 5.825 22.6873 6.88333 23.212 8.1C23.7373 9.31667 24 10.6167 24 12C24 13.3833 23.7373 14.6833 23.212 15.9C22.6873 17.1167 21.975 18.175 21.075 19.075C20.175 19.975 19.1167 20.6873 17.9 21.212C16.6833 21.7373 15.3833 22 14 22Z" fill="white"/>
                        </g>
                        <defs>
                        <filter id="filter0_d_174_38" x="-2" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_174_38"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_174_38" result="shape"/>
                        </filter>
                        </defs>
                        </svg></a>
                </x-primary-button>
            </div>
        </div>
    </div>
    <section id="who-we-are" class="flex flex-col mx-5 lg:mx-28 mb-10 mt-20 lg:mt-32">
        <div>
            <x-section-title><span class="text-primary">W</span>ho We Are</x-section-title>
            <x-section-subtitle>Know More About us!</x-section-subtitle>
        </div>
        <div class="grid grid-col-1 lg:grid-cols-4 mt-10 overflow-hidden">
            <div class="abouts space-y-6 lg:space-y-16 relative">
                <div class="absolute left-[22px] lg:left-[40px] -z-10">
                    <img src="/images/line_8.png" alt="">
                </div>
                <div class="flex items-center relative">
                    <div class="p-3 bg-black rounded-full border-white border-2 mr-6">
                        <img class="w-[18px] h-[18px] lg:w-[54px] lg:h-[54px]" src="/images/binoculars_1.png" alt="binoculars_1" />
                    </div>
                    <a data-id="mission" class="acc-head text-white active" href="#"><h3 class="text-xl lg:text-3xl font-bold">OUR MISSION</h3></a>
                </div>
                <div id="sm-mission" class="acc-body lg:hidden ml-[70px] text-xs text-[#CAC8C899] leading-[20px] duration-300 ease-out transition-all">
                    {{ $page_texts->where('title', 'About Mission')->first()->content ?? ''}}
                </div>
                <div class="flex items-center">
                    <div class="p-3 bg-black rounded-full border-white border-2 mr-6">
                        <img class="w-[18px] h-[18px] lg:w-[54px] lg:h-[54px]" src="/images/binoculars_2.png" alt="binoculars_2" />
                    </div>
                    <a data-id="vision" class="acc-head text-white" href="#"><h3 class="text-xl lg:text-3xl font-bold">OUR VISION</h3></a>
                </div>
                <div id="sm-vision" class="acc-body lg:hidden hidden ml-[70px] text-xs text-[#CAC8C899] leading-[20px] duration-300 ease-out transition-all">
                    {{ $page_texts->where('title', 'About Vision')->first()->content ?? ''}}
                </div>
                <div class="flex items-center">
                    <div class="p-3 bg-black rounded-full border-white border-2 mr-6">
                        <img class="w-[18px] h-[18px] lg:w-[54px] lg:h-[54px]" src="/images/binoculars_3.png" alt="binoculars_3" />
                    </div>
                    <a data-id="goal" class="acc-head text-white" href="#"><h3 class=" text-xl lg:text-3xl font-bold">OUR GOAL</h3></a>
                </div>
                <div id="sm-goal" class="acc-body lg:hidden hidden ml-[70px] text-xs text-[#CAC8C899] leading-[20px] duration-300 ease-out transition-all">
                    {{ $page_texts->where('title', 'About Goal')->first()->content ?? ''}}
                </div>
            </div>
            <div class="hidden lg:block col-span-3 lg:text-3xl text-[#CAC8C899] mt-[72px] mx-20 relative">
                <div id="lg-mission" class="acc-lg-body absolute top-0 leading-[58px] duration-300 ease-out transition-all">
                    {{ $page_texts->where('title', 'About Mission')->first()->content ?? ''}}
                </div>
                <div id="lg-vision" class="acc-lg-body absolute bottom-0 opacity-0 leading-[58px] duration-300 ease-out transition-all translate-y-full">
                    {{ $page_texts->where('title', 'About Vision')->first()->content ?? ''}}
                </div>
                <div id="lg-goal" class="acc-lg-body absolute bottom-0 opacity-0 leading-[58px] duration-300 ease-out transition-all translate-y-full">
                    {{ $page_texts->where('title', 'About Goal')->first()->content ?? ''}}
                </div>
            </div>
        </div>
    </section>
    <section class="flex flex-col mx-5 lg:mx-28 mb-10 mt-20 lg:mt-32">
        <div>
            <x-section-title><span class="text-primary">T</span>eam Members</x-section-title>
            <x-section-subtitle>Meet our team of Experts</x-section-subtitle>
        </div>
        <div class="grid grid-col-1 lg:grid-cols-4 gap-8 mt-20">
            <x-about-team name="Bishoy" text="Founder & CEO" img="bishoy.jpg" contentClasses="lg:col-start-2"></x-about-team>
            <x-about-team name="Khaled Sherif" text="Founder & CTO" img="khaled.jpg"></x-about-team>
        </div>
    </section>
    <section class="flex flex-col mx-5 lg:mx-28 mb-10 mt-20 lg:mt-32">
        <div>
            <x-section-title><span class="text-primary">A</span>dvisor Report Members</x-section-title>
            <x-section-subtitle>Meet our team of Experts</x-section-subtitle>
        </div>
        <div class="grid grid-col-1 lg:grid-cols-4 gap-8 mt-20">
            <x-about-team name="Dr. Moenes Iskarous" text="" img="moenes.png" contentClasses="lg:col-start-2"></x-about-team>
            <x-about-team name="Dr. Mattia Rattaggi" text="" img="mattia_portrait.jpg"></x-about-team>
        </div>
    </section>
    <div class="min-h-[100px] lg:min-h-[300px]"></div>
</x-app-layout>
