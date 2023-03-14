<x-app-layout>
    <div class="bacgrounds">
        <div class="home-bg1"></div>
        <div class="home-bg2"></div>
    </div>
    <div class="absolute left-0 top-0 min-h-[1290px] w-full -z-10 bg-cover" style="background-image: url('/images/1060_1.png');background-repeat: no-repeat;"></div>
    <div class="hidden lg:flex flex-col absolute left-[3rem] top-[31rem] space-y-10">
        <a href="/">
            <svg fill="#CCCCCC" class="w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] rotate-90" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z M41.4,508.1H-8.5V348.4h49.9V508.1z M15.1,328.4h-0.4c-18.1,0-29.8-12.2-29.8-27.7c0-15.8,12.1-27.7,30.5-27.7 c18.4,0,29.7,11.9,30.1,27.7C45.6,316.1,33.9,328.4,15.1,328.4z M241,508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4 c-14.9,0-23.2,10-27,19.6c-1.4,3.4-1.2,8.2-1.2,13.1v86.3H71.8c0,0,0.7-146.4,0-159.7h56.1v25.1c3.3-11,21.2-26.6,49.8-26.6 c35.5,0,63.3,23,63.3,72.4V508.1z"></path> </g></svg>
        </a>
        <a href="/">
            <svg fill="#CCCCCC" class="w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] rotate-90" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>Crunchbase icon</title><path d="M21.6 0H2.4A2.41 2.41 0 0 0 0 2.4v19.2A2.41 2.41 0 0 0 2.4 24h19.2a2.41 2.41 0 0 0 2.4-2.4V2.4A2.41 2.41 0 0 0 21.6 0zM7.045 14.465A2.11 2.11 0 0 0 9.84 13.42h1.66a3.69 3.69 0 1 1 0-1.75H9.84a2.11 2.11 0 1 0-2.795 2.795zm11.345.845a3.55 3.55 0 0 1-1.06.63 3.68 3.68 0 0 1-3.39-.38v.38h-1.51V5.37h1.5v4.11a3.74 3.74 0 0 1 1.8-.63H16a3.67 3.67 0 0 1 2.39 6.46zm-.223-2.766a2.104 2.104 0 1 1-4.207 0 2.104 2.104 0 0 1 4.207 0z"></path></g></svg>
        </a>
    </div>
    <div class="flex flex-col pt-12 lg:pt-32">
        <div class="flex justify-center items-center">
            <img src="/images/vector.png" alt="vector" class=" w-[18px] h-[22px]">
            <p class="text-primary ml-3 font-bold uppercase text-xl">Secure digital Wallet</p>
        </div>
        <div class="text-center px-3 lg:px-80">
            <h1 class="mt-5 text-white text-3xl lg:text-5xl font-extrabold uppercase leading-[40px] lg:leading-[80px] ">Secure and convenient cross-border payments</h1>
            <p class="mt-5 lg:text-xl text-white font-thin">Payco is a digital solution for cross-border payments, providing secure and convenient services for individuals and businesses. With Payco, you can easily send money internationally, issue letters of credit, and conduct transactions using our secure digital wallet.</p>
        </div>
        <div class="flex flex-col gap-5 lg:gap-10 items-center justify-center lg:flex-row mt-10 lg:mt-20">
            <x-primary-button contentClasses="border-white text-white bg-white/[0.13] hover:text-white hover:bg-primary">
                <a href="/register" class="uppercase font-medium lg:text-lg">Get Started</a>
            </x-primary-button>
            <x-primary-button contentClasses="border-white text-white bg-primary hover:text-white hover:bg-white/[0.13]">
                <a href="/contact-us" class="uppercase font-medium lg:text-lg">Invest In Payco</a>
            </x-primary-button>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-10 lg:justify-between items-center px-5 lg:px-36 mt-20 backdrop-blur-[5px]">
            <!-- <div class="flex lg:col-span-5 lg:min-w-[553px] py-5 lg:py-24 items-center text-white uppercase font-light lg:text-[26px]">
                <img class="w-[47px] h-[47px] lg:w-[73px] lg:h-[73px] mr-4 lg:mr-8" src="images/payment1.svg" alt="Payment" />
                <p>Personal Money Remittance and Social Payments</p>
                <div class="hidden lg:block w-[2px] h-[85px] mx-10 bg-gradient-to-r from-[#F4B554] to-[#E09F3C] "></div>
            </div> -->

            <!-- old classes: flex lg:col-span-5 lg:min-w-[553px] py-5 lg:py-24 items-center text-white uppercase font-light lg:text-[26px] -->
            <div class="flex lg:col-span-12 justify-center lg:min-w-[553px] py-5 lg:py-24 items-center text-white uppercase font-light lg:text-[26px]">
                <img class="w-[47px] h-[47px] lg:w-[73px] lg:h-[73px] mr-4 lg:mr-8" src="images/payment2.svg" alt="Payment" />
                <p>Business Letters of Credit<span class="hidden"> and Point of sale services for businesses</span></p>
            </div>
        </div>
        <div class="relative bg-cover flex items-center w-full lg:-mt-24 z-10" style="background-image: url('/images/exclude.png');background-position: right;">
            <div class="hidden lg:block  absolute bottom-[10.5%] right-[8%]">
                <img class="h-[200px] lg:h-auto" src="/images/iPhone_13_Pro.png" alt="iPhone_13_Pro">
            </div>
            <div class="lg:hidden absolute bottom-[9.5%] right-[8%]">
                <img class="" src="/images/phone-sm.png" alt="iPhone_13_Pro">
            </div>
            <div class="mx-5 pr-32 lg:px-28 py-20 lg:py-64 lg:pr-[20%]">
                <h2 class="text-[13px] lg:text-[40px] text-[#424242] font-semibold lg:leading-[60px] tracking-[-0.03em]">Secure and convenient services for <span class="hidden">individuals and </span>businesses</h2>
                <p class="text-[10px] lg:text-2xl mt-4 lg:mt-16 text-[#525252] lg:leading-[38px]">All transactions are regulated by the trusted financial system of Switzerland. Get started now and join the thousands of individuals and businesses who trust Payco for their cross-border payment needs.</p>
                <x-primary-button contentClasses="mt-4 lg:mt-16 border-primary text-white bg-primary hover:text-black hover:bg-white/[0.13] hover:border-primary">
                    <a href="/register" class="uppercase font-medium lg:text-lg">Get Started Now</a>
                </x-primary-button>
            </div>

        </div>
        <!-- old classes: flex flex-col mx-5 lg:mx-32 my-10 -->
        <section class="hidden flex-col mx-5 lg:mx-32 my-10">
            <div>
                <x-section-title><span class="text-primary">T</span>estmonials</x-section-title>
                <x-section-subtitle>What our customer are saying...</x-section-subtitle>
            </div>
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <x-testmonials-card
                                img="ellipse_1.png"
                                text="Investing with Payco was a really nice experience as i could make payments anywhere around the world with single click in addition keeping my money safely"
                                name="Stephen Brekke"
                            />
                        </li>
                        <li class="glide__slide">
                            <x-testmonials-card
                                img="ellipse_2.png"
                                text="Investing with Payco was a really nice experience as i could make payments anywhere around the world with single click in addition keeping my money safely"
                                name="Stephen Brekke"
                            />
                        </li>
                        <li class="glide__slide">
                            <x-testmonials-card
                                img="ellipse_3.png"
                                text="Investing with Payco was a really nice experience as i could make payments anywhere around the world with single click in addition keeping my money safely"
                                name="Stephen Brekke"
                            />
                        </li>
                        <li class="glide__slide">
                            <x-testmonials-card
                                img="ellipse_1.png"
                                text="Investing with Payco was a really nice experience as i could make payments anywhere around the world with single click in addition keeping my money safely"
                                name="Stephen Brekke"
                            />
                        </li>
                        <li class="glide__slide">
                            <x-testmonials-card
                                img="ellipse_2.png"
                                text="Investing with Payco was a really nice experience as i could make payments anywhere around the world with single click in addition keeping my money safely"
                                name="Stephen Brekke"
                            />
                        </li>
                        <li class="glide__slide">
                            <x-testmonials-card
                                img="ellipse_3.png"
                                text="Investing with Payco was a really nice experience as i could make payments anywhere around the world with single click in addition keeping my money safely"
                                name="Stephen Brekke"
                            />
                        </li>
                    </ul>
                </div>
                <div class="flex gap-4 my-5 lg:my-10 lg:mx-28 justify-center"  data-glide-el="controls">
                <svg class="glide__arrow glide__arrow--left" data-glide-dir="<" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="20.5" transform="matrix(4.37114e-08 1 1 -4.37114e-08 0 0)" stroke="white" />
                    <g clip-path="url(#clip0_123_2709)">
                    <path d="M23.4042 24.4292L22.6667 25.1667L18.5 21.0001L22.6667 16.8334L23.4042 17.5709L19.975 21.0001L23.4042 24.4292Z" fill="white" />
                    </g>
                    <defs>
                    <clipPath id="clip0_123_2709">
                    <rect width="10" height="10" fill="white" transform="matrix(1 -8.74228e-08 -8.74228e-08 -1 16 26)"/>
                    </clipPath>
                    </defs>
                </svg>

                <svg class="glide__arrow glide__arrow--right" data-glide-dir=">" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="21" cy="21" r="20.5" transform="rotate(90 21 21)" stroke="white"/>
                    <g clip-path="url(#clip0_123_2708)">
                    <path d="M18.5958 24.4292L19.3333 25.1667L23.5 21.0001L19.3333 16.8334L18.5958 17.5709L22.025 21.0001L18.5958 24.4292Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_123_2708">
                    <rect width="10" height="10" fill="white" transform="translate(26 26) rotate(-180)"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>
            </div>


        </section>
        <!-- old classes: flex flex-col lg:mx-32 relative -->
        <section class="flex flex-col lg:mx-32 relative my-10">
            <div class="flex flex-col relative overflow-hidden items-center lg:my-16 lg:py-8 lg:px-16 border rounded-[20px] lg:rounded-[90px] border-none rounded-br-none lg:rounded-br-none"
            style="background-image: url('/images/rectangle_9546.png')">
                <div class="absolute left-0 top-0 w-full h-full bg-cover" style="background: linear-gradient(266.6deg, #94554A 1.04%, #5353A7 97.52%);opacity: 0.85;backdrop-filter: blur(5px);"></div>
                <div class="absolute left-0 top-0 w-full h-full bg-contain bg-no-repeat" style="background-image: url('/images/mask-group.png')"></div>
                <div class="grid grid-cols-2 gap-2 lg:gap-8 items-center z-10 px-3 py-6 lg:py-10 lg:px-16 lg:mb-20">
                    <h2 class="text-sm lg:text-5xl font-extrabold leading-[30px] lg:leading-[85px] tracking-[-0.02em] text-white">Start investing your money in <img class="h-[15px] lg:h-12 inline-flex ml-2 -mt-2 lg:-mt-5" src="/images/white_logo.png" alt="" /></h2>
                    <p class="text-[10px] lg:text-[22px] font-light text-[#F2F2F2] lg:leading-[43px]">Our digital wallet and platform make it easy to send money internationally, issue letters of credit, and conduct transactions with confidence.</p>
                </div>
                <div class="flex lg:grid lg:grid-cols-2 gap-4 lg:gap-8 items-center z-10 px-0 pb-5 lg:px-16">
                    <x-primary-button contentClasses="border-white text-primary bg-white hover:text-white hover:bg-primary">
                        <a href="/register" class="uppercase lg:font-medium text-sm lg:text-lg">Get Started</a>
                    </x-primary-button>
                    <x-primary-button contentClasses="border-white text-white bg-white/[0.13] hover:text-white hover:bg-primary">
                        <a href="/contact-us" class="uppercase lg:font-medium text-sm lg:text-lg">Invest In Payco</a>
                    </x-primary-button>
                </div>
            </div>

        </section>
    </div>
</x-app-layout>
