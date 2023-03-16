<x-app-layout>
    <div class="absolute left-0 top-0 min-h-[990px] w-full -z-10 bg-cover opacity-[0.25]" style="background-image: url('/images/contact-bg.jpg');background-repeat: no-repeat;"></div>
    <div class="flex flex-col pt-12 lg:pt-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 mx-5 lg:mx-28">
            <div class="flex flex-col px-10 lg:px-0 lg:pr-40">
                <div class="flex justify-center lg:justify-start">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.333 5.33333L11.9997 11.1667L2.66634 5.33333V3L11.9997 8.83333L21.333 3M21.333 0.666666H2.66634C1.37134 0.666666 0.333008 1.705 0.333008 3V17C0.333008 17.6188 0.57884 18.2123 1.01643 18.6499C1.45401 19.0875 2.0475 19.3333 2.66634 19.3333H21.333C21.9518 19.3333 22.5453 19.0875 22.9829 18.6499C23.4205 18.2123 23.6663 17.6188 23.6663 17V3C23.6663 2.38116 23.4205 1.78767 22.9829 1.35008C22.5453 0.912499 21.9518 0.666666 21.333 0.666666Z" fill="#ff0000"/>
                    </svg>
                    <p class="text-primary font-bold text-sm lg:text-xl ml-2 uppercase">Contact us</p>
                </div>
                <h2 class="text-white mt-8 lg:mt-12 text-center lg:text-start text-2xl lg:text-[50px] font-extralight tracking-[-0.01em] leading-[32px] lg:leading-[75px]">{{ $page_texts->where('title', 'Contact Us Hero Title')->first()->content ?? ''}}</h2>
                <p class="text-white/[0.70] mt-2 lg:mt-5 text-center lg:text-start text-[13px] lg:text-[18px] font-light lg:font-normal tracking-[-0.01em]">{{ $page_texts->where('title', 'Contact Us Hero Body')->first()->content ?? ''}}</p>
            </div>
            <div class="">
                <form method="POST" action="{{ route('feedback') }}" id="feedForm">
                    @csrf
                <div class="lg:flex lg:gap-5">
                    <!-- Business Name -->
                    <div class="relative mt-5">
                        <label class="text-white text-xs lg:text-sm font-semibold px-2">Business Name *</label>
                        <input class="w-full bg-white/[0.07] border-[#838383] text-white rounded-[10px] backdrop-blur-[12.5]"
                                type="text"
                                name="business"
                                value="{{ old('business') }}"
                                placeholder="Your Business Name" required />
                        <x-input-error :messages="$errors->get('business')" class="mt-2" />
                    </div>

                    <!-- Industry -->
                    <div class="relative mt-5">
                        <label class="text-white text-xs lg:text-sm font-semibold px-2">Industry *</label>
                        <input class="w-full bg-white/[0.07] border-[#838383] text-white rounded-[10px] backdrop-blur-[12.5]"
                                type="text"
                                name="industry"
                                value="{{ old('industry') }}"
                                placeholder="Your Industry (electronics, textile, .... other)" required />
                        <x-input-error :messages="$errors->get('industry')" class="mt-2" />
                    </div>
                </div>

                <div class="lg:flex lg:gap-5 justify-center">

                    <!-- Country -->
                    <div class="relative mt-5">
                        <label class="text-white text-xs lg:text-sm font-semibold px-2">Country *</label>
                        <select class="w-full bg-white/[0.07] border-[#838383] text-white rounded-[10px] backdrop-blur-[12.5] p-2" name="country_id" required>
                            <option class="bg-[#130000]" value="204">SWAZILAND</option>
                            @foreach(\App\Models\Country::all() as $country)
                            <option class="bg-[#130000]" value="{{$country->id}}" @if(old('country_id') == $country->id) selected @endif>{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Business Name -->
                    <div class="relative flex gap-10 mt-10">
                        <div class="flex items-center">
                            <input id="import-checkbox" type="checkbox" name="import" value="import" class="w-4 h-4 text-primary bg-white/[0.07] border-[#838383] rounded">
                            <label for="import-checkbox" class="ml-2 text-white text-xs lg:text-sm font-semibold px-2">Import</label>
                        </div>
                        <div class="flex items-center">
                            <input id="export-checkbox" type="checkbox" name="export" value="export" class="w-4 h-4 text-primary bg-white/[0.07] border-[#838383] rounded">
                            <label for="export-checkbox" class="ml-2 text-white text-xs lg:text-sm font-semibold">Export</label>
                        </div>
                    </div>
                </div>

                <div class="lg:flex lg:gap-5">

                    <!-- Contact Person -->
                    <div class="relative mt-5">
                        <label class="text-white text-xs lg:text-sm font-semibold px-2">Contact Person *</label>
                        <input class="w-full bg-white/[0.07] border-[#838383] text-white rounded-[10px] backdrop-blur-[12.5]"
                                type="text"
                                name="person"
                                value="{{ old('person') }}"
                                placeholder="Contact Person Name" required />
                        <x-input-error :messages="$errors->get('person')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="relative mt-5">
                        <label class="text-white text-xs lg:text-sm font-semibold px-2">Email *</label>
                        <input class="w-full bg-white/[0.07] border-[#838383] text-white rounded-[10px] backdrop-blur-[12.5]"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Email" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="lg:flex lg:gap-5">

                    <!-- Phone -->
                    <div class="relative mt-5">
                        <label class="text-white text-xs lg:text-sm font-semibold px-2">Phone *</label>
                        <input class="w-full bg-white/[0.07] border-[#838383] text-white rounded-[10px] backdrop-blur-[12.5]"
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="Phone" required />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Subject -->
                    <div class="relative mt-5">
                        <label class="text-white text-xs lg:text-sm font-semibold px-2">Subject *</label>
                        <input class="w-full bg-white/[0.07] border-[#838383] text-white rounded-[10px] backdrop-blur-[12.5]"
                                type="text"
                                name="subject"
                                value="{{ old('subject') }}"
                                placeholder="What is your inquiry about..." required />
                        <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                    </div>
                </div>
                    <!-- Inquiry -->
                    <div class="relative mt-5">
                        <label class="text-white text-xs lg:text-sm font-semibold px-2">Your inquiry *</label>
                        <textarea rows="4" class="w-full bg-white/[0.07] border-[#838383] text-white rounded-[10px] backdrop-blur-[12.5]"
                                type="text"
                                name="inquiry"
                                value="{{ old('inquiry') }}"
                                placeholder="Describe your inquiry in details..." required> </textarea>
                        <x-input-error :messages="$errors->get('inquiry')" class="mt-2" />
                    </div>


                    <x-primary-button id="submitFeed" type="submit" contentClasses="bg-primary-class mt-12 lg:py-[10px] border-none w-full text-white bg-primary hover:text-white hover:bg-white/[0.13]">
                        <span class="font-extralight lg:text-lg">Send</span>
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
    <div class="min-h-[100px] lg:min-h-[200px]"></div>
</x-app-layout>
