<x-app-layout>
    <div class="absolute left-0 top-0 min-h-[1188px] w-full -z-10 bg-cover opacity-20" style="background-image: url('/images/product.jpg');background-repeat: no-repeat;"></div>
    <div class="flex flex-col pt-12 lg:pt-32">
        <div class="flex justify-center items-center">
            <img src="/images/vector.png" alt="vector" class=" w-[18px] h-[22px]">
            <p class="text-primary ml-3 font-bold uppercase lg:text-xl">Products and Services</p>
        </div>
        <div class="text-center px-3 lg:px-80">
            <h1 class="mt-5 text-white text-lg lg:text-5xl font-light leading-[40px] lg:leading-[80px] ">{{ $page_texts->where('title', 'Products Hero Title')->first()->content ?? ''}}</h1>
            <p class="mt-5 lg:text-xl text-[#C0C0C0] font-light">{!! $page_texts->where('title', 'Products Hero Body')->first()->content ?? '' !!}</p>
        </div>
        <div class="text-center px-3 lg:px-80 my-5">
            <img src="/images/products.jpg" alt="Products" />
        </div>
        <div class="flex items-center justify-center lg:flex-row lg:gap-10 lg:mt-20 mt-10 overflow-hidden relative">
            <!-- contentClasses="z-10 border-primary/40 -mr-8 lg:-mr-12 pl-5 pr-10 lg:pr-10 text-white bg-gradient-to-b from-primary to-[#DA291C] hover:text-white hover:bg-white/[0.13]"> -->
            <x-primary-button contentClasses="hidden z-10 border-primary/40 -mr-8 lg:-mr-12 pl-5 pr-10 lg:pr-10 text-white bg-gradient-to-b from-primary to-[#DA291C] hover:text-white hover:bg-white/[0.13]">
                <a href="/contact-us" class="uppercase font-medium text-xs lg:text-lg">Personal Services</a>
            </x-primary-button>
            <!-- contentClasses="border-primary/40 lg:-ml-14 pr-5 pl-10 lg:pl-20 text-primary/40 bg-[#00000000] hover:text-white hover:bg-white/[0.13]"> -->
            <x-primary-button contentClasses="border-primary/40 pl-5 text-white bg-gradient-to-b from-primary to-[#DA291C] hover:text-white hover:bg-white/[0.7]">
                <a href="/contact-us" class="uppercase font-medium text-xs lg:text-lg">BUSINESS Services</a>
            </x-primary-button>

        </div>

        <section class="hidden flex flex-col-reverse lg:flex-row lg:gap-10 pr-3 py-16 relative">
            <div class="absolute right-0 top-5">
                <svg class="w-[101px] lg:w-[251px] h-[16px] lg:h-[41px]" viewBox="0 0 251 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M264.5 40.0002L244.243 40.0001C239.169 40 234.285 38.0716 230.58 34.6054L205.769 11.3947C202.064 7.92841 197.179 5.99998 192.106 5.99998L42 6" stroke="white" stroke-opacity="0.32"/>
                    <circle cx="6" cy="6" r="6" transform="matrix(-1 8.74228e-08 8.74228e-08 1 43 3.05176e-05)" fill="white" fill-opacity="0.32"/>
                </svg>
            </div>
            <div class="absolute right-0 top-10">
                <svg class="w-[74px] lg:w-[171px] h-[15px] lg:h-[41px]" viewBox="0 0 171 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M174.5 40L154.243 39.9998C149.169 39.9998 144.285 38.0714 140.58 34.6052L115.769 11.3944C112.064 7.92819 107.179 5.99977 102.106 5.99977L12 5.99978" stroke="white" stroke-opacity="0.32"/>
                <circle cx="6" cy="6" r="6" transform="matrix(-1 8.74228e-08 8.74228e-08 1 12 0)" fill="white" fill-opacity="0.32"/>
                </svg>
            </div>
            <div class="lg:mt-0 mt-8 relative">
                <div class="a absolute w-full h-full bg-black/40 z-10 rounded-r-3xl lg:rounded-r-[45px] "></div>
                <img class="rounded-r-3xl lg:rounded-r-[45px]" src="/images/girl-with-phone.jpg" alt="Social Payments">
            </div>
            <div class="flex flex-col lg:mr-28 lg:mt-5 lg:space-y-10 lg:w-1/2 px-5 space-y-5">
                <div class="flex gap-3 items-center">
                    <svg class="w-[38px] lg:w-[67px] h-[38px] lg:h-[67px]" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5592 9.80841C24.5592 14.2949 20.9222 17.9318 16.4357 17.9318C11.9493 17.9318 8.3123 14.2949 8.3123 9.80841C8.3123 5.32197 11.9493 1.68499 16.4357 1.68499C20.9222 1.68499 24.5592 5.32197 24.5592 9.80841Z" stroke="url(#paint0_linear_123_4836)" stroke-width="1.4"/>
                        <path d="M15.9669 4.42706C15.7066 4.56446 15.6198 4.738 15.6198 5.13572C15.6198 5.46113 15.6198 5.46113 15.1859 5.69252C13.7758 6.44457 13.3347 8.17283 14.2097 9.49614C14.6581 10.1759 15.3161 10.5447 16.2851 10.6604C16.5454 10.6965 16.8419 10.7761 16.9504 10.8411C17.7964 11.3979 17.3915 12.7213 16.3791 12.7213C15.9235 12.7213 15.656 12.526 15.3884 11.9764C15.0919 11.3907 14.7665 11.1882 14.3543 11.3256C13.9639 11.4558 13.7903 11.7234 13.8265 12.1645C13.8915 12.902 14.4917 13.7192 15.2438 14.0663L15.6198 14.2398V14.5941C15.6198 14.8762 15.6632 14.9846 15.8295 15.1726C16.0103 15.3751 16.0898 15.4113 16.3791 15.4113C16.6683 15.4113 16.7479 15.3751 16.9214 15.1799C17.0733 15.0136 17.1456 14.8328 17.1817 14.5797C17.2251 14.2398 17.2541 14.1964 17.5288 14.059C17.9916 13.8204 18.2664 13.589 18.5412 13.1841C19.6765 11.5064 18.6425 9.35152 16.5816 9.09119C16.3068 9.05504 15.9814 8.97549 15.8584 8.91764C15.0919 8.5127 15.2149 7.30508 16.0537 7.05199C16.6466 6.87121 17.189 7.16769 17.3915 7.78234C17.5433 8.23791 17.7819 8.43315 18.1941 8.43315C18.44 8.43315 18.5412 8.38977 18.722 8.20898C18.91 8.02097 18.9462 7.9342 18.9462 7.64495C18.9462 6.95075 18.3026 6.03962 17.5433 5.67083C17.2468 5.52621 17.2251 5.49728 17.1817 5.15741C17.1167 4.69462 17.0444 4.55722 16.7768 4.41983C16.5165 4.28244 16.22 4.28244 15.9669 4.42706Z" fill="url(#paint1_linear_123_4836)"/>
                        <path d="M0.419584 23.2933C-0.0215196 23.5391 0.000173974 23.192 0.000173974 30.5968C0.000173974 38.0377 -0.0215196 37.6617 0.434047 37.9003C0.622058 38.0016 1.08486 38.0088 3.91226 37.9943L7.17353 37.9726L7.38324 37.734C7.57125 37.5243 7.59294 37.4448 7.59294 37.0326V36.5698L16.8344 36.5409C27.0087 36.5192 26.3796 36.5481 27.4426 36.0708C28.0428 35.8033 35.8236 30.416 36.2141 30.0038C37.1614 28.9915 37.2771 27.5525 36.5178 26.3666C35.8525 25.3253 34.522 24.8408 33.2854 25.1734C32.8733 25.2891 32.3743 25.5928 29.7928 27.3066L26.7773 29.3169L26.6906 28.7601C26.5098 27.5525 25.7867 26.6703 24.6731 26.3015C24.2537 26.1568 24.0729 26.1496 21.1876 26.1496H18.1505L17.5792 25.723C16.4656 24.8986 15.634 24.4792 14.5349 24.19C12.4523 23.6476 10.3697 23.9369 8.43176 25.0432C8.02682 25.2746 7.67972 25.4699 7.65079 25.4843C7.61464 25.4988 7.59294 25.1011 7.59294 24.6021C7.59294 23.6982 7.59294 23.691 7.38324 23.4596L7.17353 23.221L3.89056 23.2065C1.09209 23.192 0.585902 23.2065 0.419584 23.2933ZM6.00208 30.5968V36.4179H3.79656H1.59104V30.5968V24.7757H3.79656H6.00208V30.5968ZM14.0649 25.7157C14.882 25.9254 15.8221 26.3955 16.6898 27.0463C17.102 27.35 17.5214 27.632 17.6154 27.6754C17.7239 27.7116 19.1412 27.7405 20.9418 27.7405C23.9355 27.7405 24.1018 27.7477 24.3694 27.8851C24.9406 28.1744 25.2516 28.8758 25.0925 29.4832C24.984 29.8881 24.5067 30.3726 24.1163 30.4811C23.921 30.5317 22.4675 30.5607 19.5895 30.5607C15.446 30.5607 15.3448 30.5607 15.164 30.7053C15.0628 30.7848 14.9399 30.9656 14.8965 31.103C14.8242 31.3199 14.8314 31.3995 14.9471 31.6309C15.2146 32.1804 14.9977 32.1587 20.2837 32.1371C24.9551 32.1154 24.984 32.1081 25.4685 31.949C25.8517 31.8189 26.7918 31.2332 29.7566 29.259C31.8464 27.8706 33.6398 26.7064 33.741 26.6847C33.8422 26.6558 34.0664 26.6558 34.2472 26.6775C35.2089 26.786 35.7368 27.8779 35.2234 28.7095C35.1005 28.9047 34.0809 29.6495 31.0799 31.7249C28.8889 33.2434 26.9581 34.545 26.7846 34.6246C25.9891 34.9717 26.0759 34.9717 16.5813 34.9717H7.66526V31.1536V27.3355L8.69932 26.7281C9.784 26.0845 10.7241 25.7085 11.5701 25.5783C12.2281 25.4771 13.3779 25.5422 14.0649 25.7157Z" fill="url(#paint2_linear_123_4836)"/>
                        <defs>
                        <linearGradient id="paint0_linear_123_4836" x1="16.4357" y1="0.984985" x2="16.4357" y2="18.6318" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F4B554"/>
                        <stop offset="1" stop-color="#E09F3C"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_123_4836" x1="16.3848" y1="15.4113" x2="16.3848" y2="4.31767" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F4B554"/>
                        <stop offset="1" stop-color="#E09F3C"/>
                        </linearGradient>
                        <linearGradient id="paint2_linear_123_4836" x1="18.5078" y1="38" x2="18.5078" y2="23.2016" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F4B554"/>
                        <stop offset="1" stop-color="#E09F3C"/>
                        </linearGradient>
                        </defs>
                    </svg>
                    <h2 class="text-lg font-extrabold text-[#E09F3C] font-mono">Social Payments</h2>
                </div>
                <p class="text-white/70 text-sm lg:text-xl font-light">Pay for goods and services or make charitable donations using our convenient and secure digital wallet.</p>
                <p class="text-white/70 text-sm lg:text-xl font-light">Get Started with a payco Personal Account</p>
            </div>

        </section>

        <section class="hidden flex flex-col lg:flex-row lg:gap-10 pl-5 py-16 relative">
            <div class="absolute left-0 top-5">
                <svg class="w-[101px] lg:w-[251px] h-[16px] lg:h-[41px]" viewBox="0 0 253 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-11.5 40.0002L8.75701 40.0001C13.8308 40.0001 18.7149 38.0716 22.4201 34.6054L47.2312 11.3947C50.9364 7.92844 55.8206 6.00001 60.8944 6.00001L211 6.00003" stroke="#F4B554" stroke-opacity="0.5"/>
                    <circle cx="216" cy="6" r="6" fill="#F4B554" fill-opacity="0.5"/>
                </svg>
            </div>
            <div class="absolute left-0 top-10">
                <svg class="w-[74px] lg:w-[171px] h-[15px] lg:h-[41px]" viewBox="0 0 173 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.5 40L18.757 39.9998C23.8308 39.9998 28.7149 38.0714 32.4201 34.6052L57.2312 11.3944C60.9364 7.92819 65.8206 5.99977 70.8944 5.99977L161 5.99978" stroke="#F4B554" stroke-opacity="0.5"/>
                    <circle cx="167" cy="6" r="6" fill="#F4B554" fill-opacity="0.5"/>
                </svg>
            </div>

            <div class="flex flex-col lg:ml-28 lg:mt-5 lg:pl-10 lg:space-y-10 lg:w-1/2 space-y-5">
                <div class="flex gap-3 items-center">
                    <svg class="w-[38px] lg:w-[67px] h-[38px] lg:h-[67px]" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5373 0.719719C17.4174 1.2955 15.9256 2.80038 15.376 4.93339C15.2059 5.5746 15.1797 8.07401 15.1797 22.992V40.3047H13.6225H12.0652L12.0129 38.6689L11.9736 37.0332L11.5418 36.6144C11.1754 36.248 11.0314 36.1826 10.4688 36.1826H9.81445L5.2082 40.8019L0.588867 45.4082V46.0625V46.7168L5.23438 51.3623C9.44805 55.576 9.93223 56.0078 10.3117 56.0078C10.8482 56.0078 11.4109 55.7199 11.7643 55.275C12.0129 54.9609 12.0391 54.7515 12.0391 53.3775V51.8203H13.6094H15.1797V56.5705C15.1797 61.6871 15.232 62.1451 15.8994 63.4668C16.3182 64.2912 17.365 65.3381 18.1895 65.7568C19.642 66.4896 19.2363 66.4765 33.4607 66.4765C42.6732 66.4765 46.7822 66.4373 47.2664 66.3326C48.8236 65.9924 50.4201 64.8015 51.1006 63.4668C51.8465 61.9881 51.8203 62.8125 51.8203 44.008V26.6953H53.3906H54.9609V28.2656V29.8359L55.4059 30.3332C55.8115 30.765 55.9162 30.8174 56.5182 30.8174H57.1855L61.7918 26.198L66.4111 21.5918V20.9375V20.2832L61.7918 15.6769L57.1855 11.0576H56.5312C55.9686 11.0576 55.8246 11.123 55.4582 11.4894L55.0264 11.9082L54.9871 13.5439L54.9348 15.1797H53.3775H51.8203V10.4295C51.8203 5.31289 51.768 4.85488 51.1006 3.5332C50.4201 2.19843 48.8236 1.00761 47.2664 0.667374C46.7822 0.562691 42.6863 0.52343 33.3953 0.536514C22.4816 0.536514 20.1 0.575775 19.5373 0.719719ZM47.4104 4.04355C47.6852 4.21367 48.0646 4.59316 48.2609 4.88105C48.5881 5.37831 48.6143 5.52226 48.6535 7.158L48.7059 8.89843H33.5131H18.3203V7.41972C18.3203 6.62148 18.3857 5.73163 18.4643 5.45683C18.6344 4.84179 19.4588 3.97812 20.0477 3.808C20.3094 3.72948 25.583 3.69023 33.6963 3.70331L46.9131 3.72948L47.4104 4.04355ZM48.6797 13.5963V15.1666L45.9971 15.2058L43.3145 15.2451L42.8957 15.6769C42.5293 16.0434 42.4639 16.1873 42.4639 16.75C42.4639 17.3127 42.5293 17.4566 42.8957 17.823L43.3145 18.2549H50.25H57.1855L57.5781 17.8623C57.8268 17.6006 58.01 17.2603 58.0754 16.907L58.167 16.3574L60.457 18.6474L62.7471 20.9375L60.457 23.2275L58.167 25.5176L58.0754 24.968C58.01 24.6146 57.8268 24.2744 57.5781 24.0127L57.1855 23.6201H50.25H43.3145L42.8957 24.0519C42.5293 24.4183 42.4639 24.5623 42.4639 25.125C42.4639 25.6877 42.5293 25.8316 42.8957 26.198L43.3145 26.6299L45.9971 26.6691L48.6797 26.7084V40.8412V54.9609H33.5H18.3203V53.4037V51.8334L21.0029 51.7941L23.6855 51.7549L24.1043 51.323C24.4707 50.9566 24.5361 50.8127 24.5361 50.25C24.5361 49.6873 24.4707 49.5433 24.1043 49.1769L23.6855 48.7451H16.75H9.81445L9.42188 49.1377C9.17324 49.3994 8.99004 49.7396 8.92461 50.093L8.83301 50.6426L6.54297 48.3525L4.25293 46.0625L6.54297 43.7724L8.83301 41.4824L8.92461 42.032C8.99004 42.3853 9.17324 42.7256 9.42188 42.9873L9.81445 43.3799H16.75H23.6855L24.1043 42.948C24.4707 42.5816 24.5361 42.4377 24.5361 41.875C24.5361 41.3123 24.4707 41.1683 24.1043 40.8019L23.6855 40.3701L21.0029 40.3308L18.3203 40.2916V26.1588V12.0391H33.5H48.6797V13.5963ZM48.6535 59.842C48.6143 61.4777 48.5881 61.6217 48.2609 62.1189C48.0646 62.4068 47.6852 62.7863 47.4104 62.9564L46.9131 63.2705H33.4869H20.0738L19.5373 62.9172C19.2494 62.7209 18.8699 62.3414 18.6998 62.0666C18.4119 61.6217 18.3857 61.3861 18.3465 59.8289L18.2941 58.1015H33.5H48.7059L48.6535 59.842Z" fill="url(#paint0_linear_291_358)"/>
                        <path d="M32.9107 19.485C32.7667 19.5504 32.505 19.7598 32.3218 19.9561C32.0208 20.2832 31.9947 20.401 31.9554 21.932L31.9031 23.5547H31.4058C27.9118 23.5547 25.1638 26.8 25.7527 30.2285C26.1191 32.3746 27.4538 33.9449 29.6261 34.7824C30.0318 34.9395 30.9216 35.0049 33.3163 35.0572C36.457 35.1357 36.4701 35.1357 36.9935 35.4891C37.8179 36.0256 38.1451 36.6668 38.1451 37.7006C38.1451 38.4072 38.0796 38.6428 37.7917 39.0877C37.5954 39.3756 37.216 39.7551 36.9411 39.9252C36.457 40.2393 36.3915 40.2393 33.0808 40.2393H29.7046L29.312 39.8467C29.0372 39.5719 28.8802 39.2447 28.7886 38.7344C28.5923 37.7006 28.0951 37.2295 27.2183 37.2295C26.6556 37.2295 26.5117 37.2949 26.1452 37.6613C25.7396 38.0539 25.7134 38.1455 25.7134 38.9699C25.7265 40.6449 26.8126 42.2545 28.4615 43.0135C29.1158 43.3145 29.4691 43.3799 30.5814 43.4191L31.9031 43.4715L31.9554 45.0941L31.9947 46.7168L32.4265 47.1355C32.7929 47.502 32.9368 47.5674 33.4995 47.5674C34.0622 47.5674 34.2062 47.502 34.5726 47.1355L35.0044 46.7168L35.0437 45.0811L35.096 43.4453H35.6456C35.9466 43.4453 36.5355 43.3537 36.9411 43.249C39.2574 42.6471 40.8538 40.9066 41.2595 38.5381C41.7175 35.8293 39.9902 33.0813 37.229 32.1521C37.0197 32.0867 35.4232 31.982 33.6827 31.9428C30.5421 31.8643 30.529 31.8643 30.0056 31.5109C29.1943 30.9744 28.854 30.3332 28.854 29.3125C28.854 28.2918 29.1943 27.6506 30.0056 27.1141L30.5421 26.7607H33.9183H37.2945L37.687 27.1533C37.9618 27.4281 38.1189 27.7553 38.2105 28.2656C38.4068 29.2994 38.904 29.7705 39.7808 29.7705C40.3435 29.7705 40.4874 29.7051 40.8538 29.3387C41.2595 28.9461 41.2857 28.8545 41.2857 28.0301C41.2726 26.3682 40.1734 24.7324 38.5507 23.9996C37.8833 23.6986 37.53 23.6201 36.4177 23.5809L35.096 23.5285L35.0437 21.9059C35.0044 20.2963 35.0044 20.2832 34.5988 19.8775C34.1669 19.4457 33.3949 19.2756 32.9107 19.485Z" fill="url(#paint1_linear_291_358)"/>
                        <defs>
                        <linearGradient id="paint0_linear_291_358" x1="33.5" y1="66.4766" x2="33.5" y2="0.534081" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F4B554"/>
                        <stop offset="1" stop-color="#E09F3C"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_291_358" x1="33.5029" y1="47.5674" x2="33.5029" y2="19.3957" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F4B554"/>
                        <stop offset="1" stop-color="#E09F3C"/>
                        </linearGradient>
                        </defs>
                    </svg>

                    <h2 class="text-lg font-extrabold text-[#E09F3C] font-mono">Money Remittance</h2>
                </div>
                <p class="text-white/70 text-sm lg:text-xl font-light">Easily send money internationally to friends and family using our secure platform.</p>
                <p class="text-white/70 text-sm lg:text-xl font-light">Get Started with a payco Personal Account</p>
            </div>
            <div class="lg:mt-0 mt-8 relative">
                <div class="a absolute w-full h-full bg-black/40 z-10 rounded-l-3xl lg:rounded-l-[45px] "></div>
                <img class="rounded-l-3xl lg:rounded-l-[45px]" src="/images/product2.jpg" alt="Money Remittance">
            </div>

        </section>
        <section class="lg:px-80 py-10 lg:py-28">
            <div class="lg:grid lg:grid-cols-12 gap-5 lg:gap-10 items-center px-5">
                <p class="lg:col-span-8 text-sm font-medium text-white/70 text-center lg:text-start lg:text-lg capitalize">
                    {{ $page_texts->where('title', 'Products Card Body')->first()->content ?? ''}}
                </p>
                <div class="lg:col-span-4">
                    <x-primary-button contentClasses="w-full mt-5 lg:mt-0 lg:h-3/4 border-primary bg-white/0 text-primary hover:text-white lg:px-5">
                        <a href="/register" class=" uppercase font-medium lg:text-lg">Get Started</a>
                    </x-primary-button>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
