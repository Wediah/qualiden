@extends('layouts.main_layout')

@section('title', 'Firm Profile')

@section('content')
    <div class="px-4 md:px-14 bg-white md:pt-36 pt-24 pb:12">
        <div class="flex flex-col gap-2">
            <h1 class="text-4xl font-bold text-center">
                ABOUT <br>
                OUR <span class="text-gray-300">COMPANY</span>
            </h1>
            <p class="text-sm text-center text-gray-300">
                Delivery by specification is our hallmark
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 pt-12">
            <!-- Image 1 - Down -->
            <div class="relative group mt-12">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img
                        src="{{ asset('assets/plant.jpg') }}"
                        alt=""
                        class="w-full h-48 object-cover"
                    />
                </div>
            </div>

            <!-- Image 2 - Up -->
            <div class="relative group">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img
                        src="{{ asset('assets/safety.jpeg') }}"
                        alt="PulseWave"
                        class="w-full h-48 object-cover"
                    />
                </div>
            </div>

            <!-- Image 3 - Down -->
            <div class="relative group mt-12">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img
                        src="{{ asset('assets/3rd.jpeg') }}"
                        alt="HorizonTech"
                        class="w-full h-48 object-cover"
                    />
                </div>
            </div>

            <!-- Image 4 - Up -->
            <div class="relative group">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img
                        src="{{ asset('assets/4rd.jpeg') }}"
                        alt="SunFlare"
                        class="w-full h-48 object-cover"
                    />
                </div>
            </div>

            <!-- Image 5 - Down -->
            <div class="relative group mt-12">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img
                        src="{{ asset('assets/5th.jpeg') }}"
                        alt="WideDesk"
                        class="w-full h-48 object-cover"
                    />
                </div>
            </div>

            <!-- Image 6 - Up -->
            <div class="relative group">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img
                        src="{{ asset('assets/site.jpg') }}"
                        alt="TechNova"
                        class="w-full h-48 object-cover"
                    />
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-6 pt-24">
            <h1 class="md:text-6xl text-3xl text-[#fbbf24] md:w-1/2 w-full">
                THIS IS <br>
                <span class="text-gray-300">OUR STORY</span>
            </h1>
            <p class="text-md text-gray-500 md:w-1/2 w-full">
                Qualiden Engineering Limited is a Ghanaian-owned engineering and
                construction firm headquartered in Accra, established by experienced
                civil engineers with extensive expertise in water infrastructure, pipeline
                systems, and civil engineering works.
                <br>
                ne its inception the company has delivered are of teal
                complex projects, building proven capability in HDPE, PVC, and steel
                pipeline installations, waterproofing and concrete protection systems,
                and related engineering services.
                <br>
                Qualiden Engineering operates as both a main contractor and specialist
                subcontractor, providing disciplined project execution, coordination of
                specialist trades, and engineering-led solutions for industrial and commercial developments. The company is recognised for its technical
                competence, structured project management approach, and consis-
                tent delivery to specification.
                <br>
                We have a broad portfolio of successfully completed projects across a
                range of sectors including Residential, Restoration / Refurbishment,
                Hospitality, Commercial, Industrial and Healthcare. We have built our
                reputation on our client focus and hands-on approach. We are proud of
                the fact that our workload comes from our ability to handle multiple
                jobs with excellent results.
            </p>
        </div>

        <div class="mx-auto pt-24">
            <!-- Mission Section - Image Left, Text Right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
                <!-- Image -->
                <div>
                    <img
                        src="{{ asset('assets/mn.jpeg') }}"
                        alt="Our Mission"
                        class="w-full h-96 object-cover rounded-lg shadow-lg"
                    />
                </div>

                <!-- Text Content -->
                <div>
                    <!-- Icon -->
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-[#fbbf24] rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Label -->
                    <p class="text-sm font-semibold text-gray-600 uppercase tracking-wider mb-4">
                        OUR MISSION
                    </p>

                    <!-- Title & Description -->
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-6 leading-tight">
                        To consistently deliver complex engineering projects to the highest stan-
                        dards o f safety, quality, and compliance through engineering-led leader-
                        ship, robust systems, and a commitment to continuous improvement.
                    </h2>

                    <p class="text-lg text-gray-500 leading-relaxed">
                        This means every project we touch—from concept to completion—benefits from technical excellence at every level. Our engineering-led approach ensures decisions are grounded in expertise, our systems guarantee consistency, and our commitment to continuous improvement means we're always finding better, safer, and more efficient ways to build.
                    </p>

                </div>
            </div>

            <!-- Vision Section - Text Left, Image Right -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="order-2 lg:order-1">
                    <!-- Icon -->
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-[#fbbf24] rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Label -->
                    <p class="text-sm font-semibold text-gray-600 uppercase tracking-wider mb-4">
                        OUR VISION
                    </p>

                    <!-- Title & Description -->
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-6 leading-tight">
                        To be a globally respected engineering
                        group delivering critical infrastructure
                        and technical solutions that set the
                        benchmark for quality, safety, and
                        long-term performance in Africa and
                        beyond.
                    </h2>

                    <p class="text-lg text-gray-500 leading-relaxed">
                        By combining world-class engineering expertise with an unwavering commitment to excellence,
                        we're not just constructing infrastructure—we're building Africa's tomorrow, one landmark project at a time.
                    </p>
                </div>

                <!-- Image -->
                <div class="order-1 lg:order-2">
                    <img
                        src="{{ asset('assets/nm.jpeg') }}"
                        alt="Our Vision"
                        class="w-full h-96 object-cover rounded-lg shadow-lg"
                    />
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mt-24">
                <!-- Image -->
                <div>
                    <img
                        src="{{ asset('assets/tema.jpeg') }}"
                        alt="Our Core Values"
                        class="w-full h-96 object-cover rounded-lg shadow-lg"
                    />
                </div>

                <!-- Text Content -->
                <div>
                    <!-- Icon -->
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-[#fbbf24] rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3H5L2 9L12 22L22 9L19 3ZM12 18.5L5.5 9L8 5H16L18.5 9L12 18.5Z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Label -->
                    <p class="text-sm font-semibold text-gray-600 uppercase tracking-wider mb-4">
                        OUR MANTRA
                    </p>

                    <!-- Title & Description -->
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-6 leading-tight">
                        Attitude. Efficiency. Safety.
                    </h2>

                    <p class="text-lg text-gray-500 leading-relaxed mb-4">
                        Our business is built around these three non-negotiable principles. The ATTITUDE we bring to every challenge, the EFFICIENCY with which we deliver on our commitments, and our unwavering belief in SAFETY—these are the standards that precede us in everything we do.
                    </p>

                    <p class="text-lg text-gray-500 leading-relaxed">
                        Rooted in world-class business ethics, our principles extend beyond the job site. We hold ourselves to the highest environmental standards and place exceptional customer satisfaction at the heart of every transaction. Because how we build is just as important as what we build.
                    </p>
                </div>
            </div>
        </div>

        <div class="pt-24">
            <h1 class="md:text-6xl text-3xl text-gray-300 w-1/2">MEET OUR  <br> <span class="text-[#fbbf24]">PROFESSIONAL TEAM</span></h1>
            <p class="text-sm text-gray-300 md:w-1/3">
                A dedicated group of skilled expects commited to delivering quality workmanship and exceptional service of very project
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-6">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                    <!-- Image -->
{{--                    <div class="aspect-square bg-gray-200">--}}
{{--                        <img--}}
{{--                            src="{{ asset('assets/team1.jpg') }}"--}}
{{--                            alt="Dennis Nsoh"--}}
{{--                            class="w-full h-full object-cover"--}}
{{--                        />--}}
{{--                    </div>--}}

                    <!-- Content -->
                    <div class="p-6">
                        <!-- Name -->
                        <h3 class="text-xl font-bold text-black mb-1">
                            Dennis Nsoh
                        </h3>

                        <!-- Title -->
                        <p class="text-sm text-gray-500 mb-4">
                            Managing Director
                        </p>

                        <!-- Social Media Icons -->
                        <div class="flex gap-3">
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>

                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5a4.25 4.25 0 004.25 4.25h8.5a4.25 4.25 0 004.25-4.25v-8.5a4.25 4.25 0 00-4.25-4.25h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM17.5 5.5a1 1 0 110 2 1 1 0 010-2z"/>
                                </svg>
                            </a>

                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>

                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Colored Bottom Border -->
                    <div class="h-1 bg-gradient-to-r from-orange-400 to-orange-600"></div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
{{--                    <div class="aspect-square bg-gray-200">--}}
{{--                        <img--}}
{{--                            src="{{ asset('assets/team2.jpg') }}"--}}
{{--                            alt="Bashiru Yakubu"--}}
{{--                            class="w-full h-full object-cover"--}}
{{--                        />--}}
{{--                    </div>--}}

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-1">
                            Bashiru Yakubu
                        </h3>
                        <p class="text-sm text-gray-500 mb-4">
                            Chief Operating Officer
                        </p>

                        <div class="flex gap-3">
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5a4.25 4.25 0 004.25 4.25h8.5a4.25 4.25 0 004.25-4.25v-8.5a4.25 4.25 0 00-4.25-4.25h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM17.5 5.5a1 1 0 110 2 1 1 0 010-2z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="h-1 bg-gradient-to-r from-orange-500 to-yellow-500"></div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
{{--                    <div class="aspect-square bg-gray-200">--}}
{{--                        <img--}}
{{--                            src="{{ asset('assets/team3.jpg') }}"--}}
{{--                            alt="Abubakr Siddiq Husein"--}}
{{--                            class="w-full h-full object-cover"--}}
{{--                        />--}}
{{--                    </div>--}}

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-1">
                            Abubakr Siddiq Husein.
                        </h3>
                        <p class="text-sm text-gray-500 mb-4">
                            Sales Manager
                        </p>

                        <div class="flex gap-3">
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5a4.25 4.25 0 004.25 4.25h8.5a4.25 4.25 0 004.25-4.25v-8.5a4.25 4.25 0 00-4.25-4.25h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM17.5 5.5a1 1 0 110 2 1 1 0 010-2z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="h-1 bg-gradient-to-r from-yellow-400 to-amber-500"></div>
                </div>

                <!-- Team Member 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
{{--                    <div class="aspect-square bg-gray-200">--}}
{{--                        <img--}}
{{--                            src="{{ asset('assets/team4.jpg') }}"--}}
{{--                            alt="Sandy Gborgbortsi"--}}
{{--                            class="w-full h-full object-cover"--}}
{{--                        />--}}
{{--                    </div>--}}

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-1">
                            Sandy Gborgbortsi
                        </h3>
                        <p class="text-sm text-gray-500 mb-4">
                            Accountant
                        </p>

                        <div class="flex gap-3">
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5a4.25 4.25 0 004.25 4.25h8.5a4.25 4.25 0 004.25-4.25v-8.5a4.25 4.25 0 00-4.25-4.25h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM17.5 5.5a1 1 0 110 2 1 1 0 010-2z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="h-1 bg-linear-to-r from-green-500 to-green-700"></div>
                </div>
            </div>
        </div>

        <div class="py-24">
            <div>
                <h2 class="md:text-2xl text-xl text-[#fbbf24]">OUR <span class="text-gray-300">CLIENTS</span> </h2>
                <div class="flex flow-row flex-row-wrap gap-6 pt-12">
                    <img width="158" height="48" src="{{ asset('assets/desimone-logo.svg') }}" alt="Transistor" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                    <img width="158" height="48" src="{{ asset('assets/engplan.png') }}" alt="Reform" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                    <img width="158" height="48" src="{{ asset('assets/logo-eiffage.svg') }}" alt="Transistor" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                    <img width="158" height="48" src="{{ asset('assets/logo-aksa-energy.svg') }}" alt="Reform" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                    <img width="158" height="48" src="{{ asset('assets/tagg.png') }}" alt="Transistor" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                    <img width="158" height="48" src="{{ asset('assets/twellium.png') }}" alt="Reform" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                    <img width="158" height="48" src="{{ asset('assets/wbho.png') }}" alt="Transistor" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                </div>
            </div>
        </div>

    </div>
@endsection
