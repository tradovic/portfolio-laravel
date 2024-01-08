<!-- ====== Work Section Start -->
    <section
        id="work"
        x-data="
            {
                selectedTab: 'all',
                activeClasses: 'bg-primary text-white',
                inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
            }
            "
        class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
    >
        <div class="container py-16 md:py-20">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                    <h2
                        class="text-3xl font-bold sm:text-4xl md:text-[40px] text-dark dark:text-gray mb-4"
                    >
                        My work experience
                    </h2>
                    <p class="text-base text-body-color">
                        Here's what I did until now.
                    </p>
                    </div>
                </div>
            </div>

            <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
                <span class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-40 md:block"></span>

                <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                    <div class="md:w-2/5">
                        <div class="flex justify-center md:justify-start">
                        <span class="shrink-0">
                            <img src="/img/xorstudio_white_t.png" class="h-auto w-48 hidden dark:inline-block" alt="company logo">
                            <img src="/img/xorstudio_1200.svg" class="h-auto w-48 inline-block dark:hidden" alt="company logo">
                        </span>
                        <div class="relative ml-3 hidden w-full md:block">
                            <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                        </div>
                        </div>
                    </div>
                    <div class="md:w-3/5">
                        <div class="relative flex md:pl-18">
                        <span class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>

                        <div class="mt-1 flex">
                            <x-right-arrow-icon :wh="8"></x-right-arrow-icon>
                            <div class="md:-mt-1 md:pl-8">
                            <span class="block font-body font-bold text-grey-40">May 2009 to Present</span>
                            <span class="block pt-2 font-header text-xl font-bold uppercase text-primary">Senior Software Developer</span>
                            <div class="pt-2">
                                <span class="block font-body text-gray-500 italic">XORStudio, Kragujevac, Serbia</span>
                                <span class="block text-black dark:text-gray-300">Software development company with more than 14 years of experience in designing, developing, and supporting many web applications.</span>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                    <div class="md:w-2/5">
                        <div class="flex justify-center md:justify-start">
                            <span class="shrink-0">
                                <x-daaily-icon></x-daaily-icon>
                            </span>
                            <div class="relative ml-3 hidden w-full md:block">
                                <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-3/5">
                        <div class="relative flex md:pl-18">
                            <span class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>

                            <div class="mt-1 flex">
                                <x-right-arrow-icon :wh="6"></x-right-arrow-icon>
                                <div class="md:-mt-1 md:pl-8">
                                    <span class="block font-body font-bold text-grey-40">May 2022 to Dec 2023</span>
                                    <span class="block pt-2 font-header text-xl font-bold uppercase text-primary">Senior Software Engineer</span>
                                    <div class="pt-2">
                                        <span class="block font-body text-gray-500 italic">DAAily platforms, Zurich, Switzerland</span>
                                        <span class="block text-black dark:text-gray-300">DAAily platforms, uniting the world’s three leading architecture and design platforms — Designboom, Architonic and ArchDaily.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                    <div class="md:w-2/5">
                        <div class="flex justify-center md:justify-start">
                            <span class="shrink-0">
                                <x-architonic-icon></x-architonic-icon>
                            </span>
                            <div class="relative ml-3 hidden w-full md:block">
                                <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-3/5">
                        <div class="relative flex md:pl-18">
                            <span class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>

                            <div class="mt-1 flex">
                                <x-right-arrow-icon :wh="6"></x-right-arrow-icon>
                                <div class="md:-mt-1 md:pl-8">
                                    <span class="block font-body font-bold text-grey-40">Nov 2017 to May 2022 </span>
                                    
                                    <span class="block pt-2 font-header text-xl font-bold uppercase text-primary">Senior Software Engineer</span>
                                    <div class="pt-2">
                                        <span class="block text-gray-500 italic">Architonic, Zurich, Switzerland</span>
                                        <span class="block text-black dark:text-gray-300">Architonic is the leading research tool for the specification of premium design products, featuring 400'000 products by 12'000 designers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                    <div class="md:w-2/5">
                        <div class="flex justify-center md:justify-start">
                            <span class="shrink-0">
                                <x-immomig-icon></x-immomig-icon>
                            </span>
                        </span>
                        <div class="relative ml-3 hidden w-full md:block">
                            <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                        </div>
                        </div>
                    </div>
                    <div class="md:w-3/5">
                        <div class="relative flex md:pl-18">
                        <span class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>

                        <div class="mt-1 flex">
                            <x-right-arrow-icon :wh="6"></x-right-arrow-icon>
                            <div class="md:-mt-1 md:pl-8">
                            <span class="bloc font-bold text-grey-40">Jan 2011 to November 2017</span>
                            <span class="block pt-2 font-header text-xl font-bold uppercase text-primary">Web Developer, Team Leader</span>
                            <div class="pt-2">
                                <span class="block text-gray-500 italic">IMMOMIG SA, Switzerland</span>
                                <span class="block text-black dark:text-gray-300">The online CRM real estate software for the administration of object and brokerage data. The solution for every real estate agent.</span>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>