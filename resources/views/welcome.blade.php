@php use App\Models\Project; @endphp
@extends('layouts.main_layout')

@section('title', 'Welcome')

@section('content')
    <div>
        <!-- Carousel Section -->
        <div class="relative carousel-container h-[75vh]">
            <div class="carousel h-full">
                <!-- Slide 1 -->
                <div class="carousel-slide relative h-full">
                    <img src="{{ asset('assets/3rd.jpeg') }}" class="h-full w-full object-cover" alt="landing page image"/>
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                    <div class="absolute bottom-28 left-0 text-white py-4 px-4 md:px-60 md:w-1/2 z-10" data-aos="fade-up">
                        <span class="inline-block text-sm md:text-base font-semibold tracking-wider text-white/90 mb-3">EST. 2004</span>

                        <p class="text-3xl md:text-6xl font-bold leading-tight mb-4">
                            20 YEARS OF <br>EXCELLENCE
                        </p>

                        <p class="text-sm md:text-base text-white/80 leading-relaxed mb-8 max-w-lg">
                            Custom service professional design. Plenty of stock, fast delivery,
                            and long service life with quality assurance guaranteed.
                        </p>

                        <a href="/contact" class="inline-block">
                            <button class="group bg-white text-gray-900 hover:bg-gray-100 rounded-full py-4 px-8 font-semibold text-sm md:text-base transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2">
                                Contact Us
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide relative h-full">
                    <img src="{{ asset('assets/4rd.jpeg') }}" class="h-full w-full object-cover" alt="second slide"/>
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                    <div class="absolute bottom-28 left-0 text-white py-4 px-4 md:px-60 md:w-1/2 z-10" data-aos="fade-up">
                        <span class="inline-block text-sm md:text-base font-semibold tracking-wider text-white/90 mb-3">EXCELLENT QUALITY</span>

                        <p class="text-3xl md:text-6xl font-bold leading-tight mb-4">
                            HDPE KRAH <br>PIPE
                        </p>

                        <p class="text-sm md:text-base text-white/80 leading-relaxed mb-8 max-w-lg">
                            Krah pipes made from HD-PE100 are produced with an integral electro joint socket and spigot.
                        </p>

                        <a href="/contact" class="inline-block">
                            <button class="group bg-white text-gray-900 hover:bg-gray-100 rounded-full py-4 px-8 font-semibold text-sm md:text-base transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2">
                                Contact Us
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide relative h-full">
                    <img src="{{ asset('assets/5th.jpeg') }}" class="h-full w-full object-cover" alt="third slide"/>
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                    <div class="absolute bottom-28 left-0 text-white py-4 px-4 md:px-60 md:w-1/2 z-10" data-aos="fade-up">
                        <p class="text-3xl md:text-6xl font-bold leading-tight mb-4">
                            LOW COST <br>INSTALLATION
                        </p>

                        <p class="text-sm md:text-base text-white/80 leading-relaxed mb-8 max-w-lg">
                            Rapid low-cost installation reduces overall capital costs and provides 4x faster tie-in time versus steel, leading to more rapid paybacks.
                        </p>

                        <a href="/contact" class="inline-block">
                            <button class="group bg-white text-gray-900 hover:bg-gray-100 rounded-full py-4 px-8 font-semibold text-sm md:text-base transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2">
                                Contact Us
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="carousel-nav carousel-prev absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/20 hover:bg-white/40 backdrop-blur-xs text-white rounded-full p-3 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button class="carousel-nav carousel-next absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/20 hover:bg-white/40 backdrop-blur-xs text-white rounded-full p-3 transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            <!-- Progress Indicator -->
            <div class="carousel-progress">
                <div class="progress-item active" data-index="0">
                    <div class="progress-bar"></div>
                </div>
                <div class="progress-item" data-index="1">
                    <div class="progress-bar"></div>
                </div>
                <div class="progress-item" data-index="2">
                    <div class="progress-bar"></div>
                </div>
            </div>
        </div>

        <!-- Rest of your existing content remains exactly the same -->
        <div class="flex md:flex-row-reverse flex-col justify-center py-14 px-4 md:px-60 gap-7 items-center">
            <img src="{{ asset('assets/nm.jpeg') }}" class="w-full h-full md:w-1/2 md:h-96 object-cover" alt="second image" data-aos="fade-right"/>
            <div class="w-full md:w-1/2 h-full md:h-96 flex flex-col justify-center" data-aos="fade-up" data-aos-delay="100">
                <span class="inline-block text-sm md:text-base font-semibold tracking-wider text-black mb-3">
                    OUR COMPANY
                </span>

                <span class="inline-block text-xl md:text-2xl font-bold tracking-wider text-black mb-3">
                    We are a Ghana-based manufacturer diverse piping solutions.
                </span>

                <p class="md:w-full text-2xl text-black flex-wrap">
                    Qualiden Engineering Limited is a Ghanaian-owned engineering and
                    construction firm headquartered in Accra, established by experienced
                    civil engineers with extensive expertise in water infrastructure, pipeline
                    systems, and civil engineering works.
                </p>
            </div>
        </div>

        <!-- Rest of your existing content remains exactly the same -->
        <div class="py-14 px-4 md:px-60">
            <div class="flex items-center justify-center mb-12">
                <div class="flex-1 h-px bg-gray-300"></div>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 px-6">Products</h1>
                <div class="flex-1 h-px bg-gray-300"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">

                {{-- Product 1: HDPE Pipe --}}
                <div class="group bg-white overflow-hidden cursor-pointer md:col-span-2 border border-gray-200 hover:bg-[#fbbf24]">
                    <div class="relative w-full bg-gray-100 overflow-hidden">
                        <img
                            src="{{ asset('assets/HDPEPipe.png') }}"
                            alt="HDPE Pipe"
                            class="w-full h-auto object-contain group-hover:scale-110 transition-transform duration-300"
                        >
                    </div>
                    <div class="p-4 group-hover:bg-[#fbbf24] transition-colors duration-300 flex items-center justify-between">
                        <h3 class="text-base font-semibold text-gray-800 group-hover:text-white transition-colors duration-300">HDPE Pipe</h3>
                        <div class="flex items-center">
                            <span class="text-gray-600 group-hover:text-white transition-colors duration-300 mr-1">Read More</span>
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:w-8 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>


                {{-- Product 2: PVC Pipe --}}
                <div class="group bg-white overflow-hidden cursor-pointer border border-gray-200">
                    <div class="relative w-full bg-gray-100 overflow-hidden">
                        <img
                            src="{{ asset('assets/PVC-Pipe.png') }}"
                            alt="PVC Pipe"
                            class="w-full h-auto object-contain group-hover:scale-110 transition-transform duration-300"
                        >
                    </div>
                    <div class="p-4 group-hover:bg-[#fbbf24] transition-colors duration-300 flex items-center justify-between">
                        <h3 class="text-base font-semibold text-gray-800 group-hover:text-white transition-colors duration-300">PVC Pipe</h3>
                        <div class="flex items-center">
                            <span class="text-gray-600 group-hover:text-white transition-colors duration-300 mr-1">Read More</span>
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:w-8 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Product 3: PVC Fitting --}}
                <div class="group bg-white overflow-hidden cursor-pointer border border-gray-200">
                    <div class="relative w-full bg-gray-100 overflow-hidden">
                        <img
                            src="{{ asset('assets/PVC-Fiting.png') }}"
                            alt="PVC Fitting"
                            class="w-full h-auto object-contain group-hover:scale-110 transition-transform duration-300"
                        >
                    </div>
                    <div class="p-4 group-hover:bg-[#fbbf24] transition-colors duration-300 flex items-center justify-between">
                        <h3 class="text-base font-semibold text-gray-800 group-hover:text-white transition-colors duration-300">PVC Fitting</h3>
                        <div class="flex items-center">
                            <span class="text-gray-600 group-hover:text-white transition-colors duration-300 mr-1">Read More</span>
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:w-8 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Product 4: HDPE Fitting --}}
                <div class="group bg-white overflow-hidden cursor-pointer border border-gray-200">
                    <div class="relative w-full bg-gray-100 overflow-hidden">
                        <img
                            src="{{ asset('assets/HDPEFiting.png') }}"
                            alt="HDPE Fitting"
                            class="w-full h-auto object-contain group-hover:scale-110 transition-transform duration-300"
                        >
                    </div>
                    <div class="p-4 group-hover:bg-[#fbbf24] transition-colors duration-300 flex items-center justify-between">
                        <h3 class="text-base font-semibold text-gray-800 group-hover:text-white transition-colors duration-300">HDPE Fitting</h3>
                        <div class="flex items-center">
                            <span class="text-gray-600 group-hover:text-white transition-colors duration-300 mr-1">Read More</span>
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:w-8 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Product 5: HDPE Welding --}}
                <div class="group bg-white overflow-hidden cursor-pointer border border-gray-200">
                    <div class="relative w-full bg-gray-100 overflow-hidden">
                        <img
                            src="{{ asset('assets/HDPE-Welding.png')  }}"
                            alt="HDPE Welding"
                            class="w-full h-auto object-contain group-hover:scale-110 transition-transform duration-300"
                        >
                    </div>
                    <div class="p-4 group-hover:bg-[#fbbf24] transition-colors duration-300 flex items-center justify-between">
                        <h3 class="text-base font-semibold text-gray-800 group-hover:text-white transition-colors duration-300">HDPE Welding</h3>
                        <div class="flex items-center">
                            <span class="text-gray-600 group-hover:text-white transition-colors duration-300 mr-1">Read More</span>
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:w-8 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="font-bold md:text-4xl text-2xl text-center pt-8">Our HDPE pipes and fittings have been exported to more than 120 countries and regions. Supported over 300
                pipeline projects</h1>
        </div>

        <div class="py-14 px-4 md:px-60">
            <div class="flex items-center justify-center mb-12">
                <div class="flex-1 h-px bg-gray-300"></div>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 px-6">Cases</h1>
                <div class="flex-1 h-px bg-gray-300"></div>
            </div>

            <div class="container mx-auto px-4 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mx-auto">

                    {{-- Card 1: HDPE Pipes In Oil And Gas --}}
                    <div class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col">
                        <div class="relative overflow-hidden h-full">

                            <img
                                src="{{ asset('assets/slide1.jpeg') }}"
                                alt="Water pipes"
                                class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"
                            />

                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    HDFE Pipes In Massive Desalination Plant Projects
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded">
                                    Check the details
                                </button>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0"
                                style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;"
                            >
                                <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                                    <svg class="w-12 h-12 text-[#fbbf24]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M12 2C8 8 5 11.5 5 15a7 7 0 0014 0c0-3.5-3-7-7-13z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                            <span class="text-[#fbbf24] font-bold text-sm tracking-wide">Water</span>
                        </div>
                    </div>

                    {{-- Card 2: PVC Piping Solutions --}}
                    <div class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col">
                        <div class="relative overflow-hidden h-full">

                            <img
                                src="{{ asset('assets/oil.png') }}"
                                alt="Water pipes"
                                class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"
                            />

                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    HDFE Pipes In Oil And Gas Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded">
                                    Check the details
                                </button>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0"
                                style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;"
                            >
                                <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                                    <svg class="w-12 h-12 text-[#fbbf24]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 20h16M8 20V8l4-4 4 4v12M12 4v16"/>
                                        <path d="M10 12h4M8 16h8"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                            <span class="text-[#fbbf24] font-bold text-sm tracking-wide">Oil and Gas</span>
                        </div>
                    </div>

                    {{-- Card 3: HDPE Welding Services --}}
                    <div class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col">
                        <div class="relative overflow-hidden h-full">

                            <img
                                src="{{ asset('assets/water.jpeg') }}"
                                alt="Water pipes"
                                class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"
                            />

                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                        HDFE Pipes In Mining Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded">
                                    Check the details
                                </button>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0"
                                style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;"
                            >
                                <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                                    <svg class="w-12 h-12 text-[#fbbf24]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 20h16M6 20V12M18 20V12"/>
                                        <rect x="8" y="8" width="8" height="4" rx="1" ry="1"/>
                                        <path d="M12 8V4M16 12v8M8 12v8"/>
                                        <path d="M20 12H4"/>
                                        <circle cx="8" cy="6" r="2"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                            <span class="text-[#fbbf24] font-bold text-sm tracking-wide">Mining</span>
                        </div>
                    </div>

                    {{-- Card 4: PVC Fittings & Accessories --}}
                    <div class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col">
                        <div class="relative overflow-hidden h-full">

                            <img
                                src="{{ asset('assets/marine.jpg') }}"
                                alt="Water pipes"
                                class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"
                            />

                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    An exemplary case of HDFE Piping In Marine and Dreging Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded">
                                    Check the details
                                </button>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0"
                                style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;"
                            >
                                <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                                    <svg class="w-12 h-12 text-[#fbbf24]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 18h18M5 18l2-8h10l2 8"/>
                                        <path d="M7 10l2-4h6l2 4"/>
                                        <path d="M12 6v4"/>
                                        <circle cx="8" cy="18" r="1.5"/>
                                        <circle cx="16" cy="18" r="1.5"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                            <span class="text-[#fbbf24] font-bold text-sm tracking-wide">Marine</span>
                        </div>
                    </div>

                    <div class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col">
                        <div class="relative overflow-hidden h-full">

                            <img
                                src="{{ asset('assets/fire.jpeg') }}"
                                alt="Water pipes"
                                class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"
                            />

                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    The Important Roles Of HDFE Pipes In Fire Fighting
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded">
                                    Check the details
                                </button>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0"
                                style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;"
                            >
                                <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                                    <svg class="w-12 h-12 text-[#fbbf24]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 18h18M5 18l2-8h10l2 8"/>
                                        <path d="M7 10l2-4h6l2 4"/>
                                        <path d="M12 6v4"/>
                                        <circle cx="8" cy="18" r="1.5"/>
                                        <circle cx="16" cy="18" r="1.5"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                            <span class="text-[#fbbf24] font-bold text-sm tracking-wide">Fire Fighting</span>
                        </div>
                    </div>

                    <div class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col">
                        <div class="relative overflow-hidden h-full">

                            <img
                                src="{{ asset('assets/energy.jpg') }}"
                                alt="Water pipes"
                                class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"
                            />

                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    A Case Study On The Impact Of HDFE Pipes In Energy And Power Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded">
                                    Check the details
                                </button>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0"
                                style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;"
                            >
                                <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                                    <svg class="w-12 h-12 text-[#fbbf24]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 18h18M5 18l2-8h10l2 8"/>
                                        <path d="M7 10l2-4h6l2 4"/>
                                        <path d="M12 6v4"/>
                                        <circle cx="8" cy="18" r="1.5"/>
                                        <circle cx="16" cy="18" r="1.5"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                            <span class="text-[#fbbf24] font-bold text-sm tracking-wide">Energy</span>
                        </div>
                    </div>

                    <div class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col">
                        <div class="relative overflow-hidden h-full">

                            <img
                                src="{{ asset('assets/agric.jpg') }}"
                                alt="Water pipes"
                                class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"
                            />

                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    The Role Of HDFE Pipes In Agriculture And Landscape Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded">
                                    Check the details
                                </button>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0"
                                style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;"
                            >
                                <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                                    <svg class="w-12 h-12 text-[#fbbf24]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 18h18M5 18l2-8h10l2 8"/>
                                        <path d="M7 10l2-4h6l2 4"/>
                                        <path d="M12 6v4"/>
                                        <circle cx="8" cy="18" r="1.5"/>
                                        <circle cx="16" cy="18" r="1.5"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                            <span class="text-[#fbbf24] font-bold text-sm tracking-wide">Agriculture</span>
                        </div>
                    </div>

                    <div class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col">
                        <div class="relative overflow-hidden h-full">

                            <img
                                src="{{ asset('assets/industry.jpeg') }}"
                                alt="Water pipes"
                                class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"
                            />

                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    An illustrative Case Of HDFE Pipes In Industrial And Chemical Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded">
                                    Check the details
                                </button>
                            </div>

                            <div
                                class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0"
                                style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;"
                            >
                                <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                                    <svg class="w-12 h-12 text-[#fbbf24]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 18h18M5 18l2-8h10l2 8"/>
                                        <path d="M7 10l2-4h6l2 4"/>
                                        <path d="M12 6v4"/>
                                        <circle cx="8" cy="18" r="1.5"/>
                                        <circle cx="16" cy="18" r="1.5"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center py-4 gap-1 bg-white transition-colors duration-300 group-hover:bg-blue-100">
                            <span class="text-[#fbbf24] font-bold text-sm tracking-wide">Industry</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        .carousel-container {
            position: relative;
            width: 100%;
            height: 75vh;
            overflow: hidden;
        }

        .carousel {
            display: flex;
            transition: transform 0.8s ease-in-out;
            height: 100%;
        }

        .carousel-slide {
            position: relative;
            min-width: 100%;
            height: 100%;
        }

        /* Progress Indicator Styles */
        .carousel-progress {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 0.5rem;
            z-index: 20;
        }

        .progress-item {
            width: 40px;
            height: 4px;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 2px;
            overflow: hidden;
            cursor: pointer;
        }

        .progress-bar {
            height: 100%;
            width: 0%;
            background: white;
            transition: width 5s linear;
        }

        .progress-item.active .progress-bar {
            width: 100%;
        }

        /* Navigation Buttons */
        .carousel-nav {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .carousel-container:hover .carousel-nav {
            opacity: 1;
        }

        .carousel-nav:focus {
            outline: none;
        }
    </style>

    <!-- Updated JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel');
            const slides = document.querySelectorAll('.carousel-slide');
            const progressItems = document.querySelectorAll('.progress-item');
            const progressBars = document.querySelectorAll('.progress-bar');
            const prevBtn = document.querySelector('.carousel-prev');
            const nextBtn = document.querySelector('.carousel-next');

            let currentSlide = 0;
            const totalSlides = slides.length;
            let autoSlideInterval;
            let isTransitioning = false;

            // Function to update carousel position
            function updateCarousel() {
                if (isTransitioning) return;
                isTransitioning = true;

                carousel.style.transform = `translateX(-${currentSlide * 100}%)`;

                // Update progress indicators
                progressItems.forEach((item, index) => {
                    if (index === currentSlide) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });

                // Reset and restart progress bars
                progressBars.forEach(bar => {
                    bar.style.transition = 'none';
                    bar.style.width = '0%';
                });

                setTimeout(() => {
                    progressBars[currentSlide].style.transition = 'width 5s linear';
                    progressBars[currentSlide].style.width = '100%';
                    isTransitioning = false;
                }, 50);
            }

            // Next slide function
            function nextSlide() {
                if (isTransitioning) return;
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }

            // Previous slide function
            function prevSlide() {
                if (isTransitioning) return;
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }

            // Start auto-advance
            function startAutoSlide() {
                stopAutoSlide();
                autoSlideInterval = setInterval(nextSlide, 5000);
            }

            function stopAutoSlide() {
                if (autoSlideInterval) {
                    clearInterval(autoSlideInterval);
                }
            }

            // Navigation button click handlers
            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    stopAutoSlide();
                    prevSlide();
                    startAutoSlide();
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    stopAutoSlide();
                    nextSlide();
                    startAutoSlide();
                });
            }

            // Click on progress indicator to navigate
            progressItems.forEach(item => {
                item.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    if (index !== currentSlide && !isTransitioning) {
                        stopAutoSlide();
                        currentSlide = index;
                        updateCarousel();
                        startAutoSlide();
                    }
                });
            });

            // Pause auto-advance on hover
            const carouselContainer = document.querySelector('.carousel-container');
            carouselContainer.addEventListener('mouseenter', stopAutoSlide);
            carouselContainer.addEventListener('mouseleave', startAutoSlide);

            // Initialize carousel
            updateCarousel();
            startAutoSlide();
        });
    </script>


{{--    <div class="pt-20">--}}
{{--        <div class="pt-24 px-4 md:px-14">--}}
{{--            <div class="flex flex-col-reverse gap-6 md:flex-row md:items-end md:justify-between">--}}
{{--                <div data-aos="fade-up" class="mb-12 md:mb-20 md:w-2/3">--}}
{{--                    <h1 class="text-black text-4xl md:text-8xl font-semibold leading-tight md:leading-none">--}}
{{--                        Engineering excellence, building thriving <br> futures--}}
{{--                    </h1>--}}

{{--                    <div class="mt-6 md:hidden block">--}}
{{--                        <flux:button--}}
{{--                            href="/contact"--}}
{{--                            icon:trailing="arrow-up-right"--}}
{{--                        >--}}
{{--                            Get a quote--}}
{{--                        </flux:button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="md:w-2/6">--}}
{{--                    <div class="hidden md:block">--}}
{{--                        <flux:button--}}
{{--                            href="/contact"--}}
{{--                            icon:trailing="arrow-up-right"--}}
{{--                        >--}}
{{--                            Get a quote--}}
{{--                        </flux:button>--}}
{{--                    </div>--}}
{{--                    <div class="h-px w-32 bg-[#fbbf24] my-6"></div>--}}
{{--                    <p class="text-lg md:text-3xl text-gray-700 leading-relaxed">--}}
{{--                        Develop new solutions to meet changing needs, leveraging our deep customer insight,--}}
{{--                        practical expertise and broad range of capabilities.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="flex flex-row gap-12 h-96 pt-12">--}}
{{--            <img src="{{ asset('assets/slide1.jpeg') }}" class="h-full w-2/6 object-cover" alt="landing page image"/>--}}
{{--            <img src="{{ asset('assets/slide2.jpeg') }}" class="h-full w-2/3 object-cover" alt="landing page image"/>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div data-aos="fade-up" class=" mx-4 md:mx-14 flex md:flex-row flex-col gap-12 items-center pt-24">--}}
{{--        <h1 class="md:text-6xl text-3xl font-bold text-black md:w-1/2">--}}
{{--            Established in Accra, our company was founded by a team of engineers with comprehensive experience across civil engineering and construction disciplines.--}}
{{--        </h1>--}}

{{--        <div class="flex flex-col gap-12 md:w-1/2">--}}
{{--            <p class="text-2xl font-normal text-gray-500">--}}
{{--                We specialize in civil engineering, general construction works,--}}
{{--                pipe systems (HDPE welding, PVC, and steel fittings), engineering chemicals,--}}
{{--                waterproofing, concrete protection, and comprehensive project management.--}}
{{--            </p>--}}

{{--            <flux:button--}}
{{--                variant="primary" color="amber"--}}
{{--                href="/projects"--}}
{{--                icon:trailing="arrow-down"--}}
{{--            >--}}
{{--                Our work--}}
{{--            </flux:button>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="pb-12 px-4 md:px-14 bg-white" id="statsSection">--}}
{{--        <hr class="my-12 border-gray-300">--}}
{{--        <div class=" mx-auto">--}}
{{--            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">--}}
{{--                <!-- Total Workers -->--}}
{{--                <div class="space-y-4">--}}
{{--                    <h3 class="text-lg font-medium text-gray-700">Total Plant & Machinery</h3>--}}
{{--                    <div class="text-5xl md:text-6xl font-bold tracking-tight text-black">--}}
{{--                        <span class="counter" data-target="40">0</span>+--}}
{{--                    </div>--}}
{{--                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">--}}
{{--                        Qualiden Group Limited has over 23 plants <br> and machinery ready in active service--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <!-- Years Experience -->--}}
{{--                <div class="space-y-4">--}}
{{--                    <h3 class="text-lg font-medium text-gray-700">Sectors Served</h3>--}}
{{--                    <div class="text-5xl md:text-6xl font-bold tracking-tight text-black">--}}
{{--                        <span class="counter" data-target="6">0</span>+--}}
{{--                    </div>--}}
{{--                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">--}}
{{--                        We have served and still serving <br> over 6 sectors from residential to healthcare.--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--                <!-- Current Projects -->--}}
{{--                <div class="space-y-4">--}}
{{--                    <h3 class="text-lg font-medium text-gray-700">Concurrent Projects</h3>--}}
{{--                    <div class="text-5xl md:text-6xl font-bold tracking-tight text-black">--}}
{{--                        <span class="counter" data-target="5">0</span>--}}
{{--                    </div>--}}
{{--                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">--}}
{{--                        Qualiden Group can a maximum of 1-5 <br> projects at time with attention to detail--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- HORIZONTAL HALF BLACK / HALF WHITE PROJECTS SECTION -->--}}
{{--    <div class="relative py-16 px-4 md:px-14 overflow-hidden">--}}
{{--        <!-- Top Half - White -->--}}
{{--        <div class="absolute inset-x-0 top-0 h-1/2 bg-black z-0"></div>--}}
{{--        <!-- Bottom Half - Black -->--}}
{{--        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100 z-0"></div>--}}

{{--        <div data-aos="fade-up" class=" mx-auto relative z-10">--}}
{{--            <!-- Header Text -->--}}
{{--            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-12">--}}
{{--                <div class="lg:pr-12">--}}
{{--                    <h2 class="text-3xl md:text-4xl font-bold leading-tight text-white">--}}
{{--                        Committed to building long-term relationships with our partners, suppliers and clients.--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div class="text-gray-700 lg:pl-12">--}}
{{--                    <p class="text-lg leading-relaxed">--}}
{{--                        We recognise that our success is the direct result of the hard work of the people who work for us, with us and alongside us.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Section Title & Navigation -->--}}
{{--            <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">--}}
{{--                <h3 class="text-2xl font-bold mb-4 md:mb-0 text-white">Our projects</h3>--}}
{{--                <div class="flex gap-3">--}}
{{--                    <a href="/projects"--}}
{{--                       class="px-6 py-2 bg-[#fbbf24] text-white rounded-full flex items-center gap-2 font-medium hover:bg-[#fbbf20] transition-colors">--}}
{{--                        View more--}}
{{--                        <flux:icon.arrow-right class="w-4 h-4" />--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            @php--}}
{{--                $projects = Project::orderBy('created_at', 'desc')->take(2)->get();--}}
{{--            @endphp--}}


{{--                <!-- Project Cards Grid -->--}}
{{--            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">--}}
{{--                @foreach ($projects as $project)--}}
{{--                <!-- Project 1 - Tema Port Expansion -->--}}
{{--                <a href="{{ route('projects.show', $project) }}"--}}
{{--                   aria-label="{{ $project->name }}"--}}
{{--                   class="block group relative overflow-hidden rounded-xl bg-white border border-gray-200"--}}
{{--                >--}}
{{--                    <div class="aspect-video bg-cover bg-center" style="background-image: url('{{  Storage::url($project->images->first()->path) }}');"></div>--}}
{{--                    <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>--}}
{{--                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">--}}
{{--                        <div class="flex justify-between items-start">--}}
{{--                            <div>--}}
{{--                                <h3 class="text-xl font-bold">{{ $project->name }}</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-4 flex justify-end">--}}
{{--                            <flux:icon.arrow-top-right-on-square class="w-6 h-6 text-gray-300 group-hover:text-white transition-colors" />--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="py-16 px-4 md:px-14 bg-white">--}}
{{--        <div class=" mx-auto">--}}
{{--            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">--}}
{{--                <!-- Left Menu -->--}}
{{--                <div class="space-y-6">--}}
{{--                    <h2 class="text-3xl md:text-4xl font-bold text-black">Get to know us</h2>--}}
{{--                    <h3 class="text-xl font-bold text-gray-900">Our work culture</h3>--}}

{{--                    <div class="space-y-4">--}}
{{--                        @php--}}
{{--                            $sections = [--}}
{{--                                [--}}
{{--                                    'id' => 'why-us',--}}
{{--                                    'title' => 'Why Us',--}}
{{--                                    'image' => 'assets/whyus.jpeg',--}}
{{--                                     'heading' => 'Tailored Service & Proven Excellence',--}}
{{--                                    'content' => 'We deliver tailored services with relevant experience, leading-edge H&S systems, and hands-on management. Our success comes from relentless attention to detail, an experienced team, and a competitive edge in reliable project execution. We are committed to exceeding client expectations through value-add engineering solutions.'--}}
{{--                                ],--}}
{{--                                [--}}
{{--                                    'id' => 'investors',--}}
{{--                                    'title' => 'Health, Safety and Welfare',--}}
{{--                                    'image' => 'assets/safety.jpeg',--}}
{{--                                    'heading' => 'Absolute Pre-Requisite: Zero Harm',--}}
{{--                                    'content' => 'The health and safety of our employees and all those affected by our operations is an absolute pre-requisite. Our Board and staff are fully committed to implementing and continuously improving Integrated Management Systems that align with industry best practices. Safety is non-negotiable in every operation.'--}}
{{--                                ],--}}

{{--                                [--}}
{{--                                    'id' => 'join-us',--}}
{{--                                    'title' => 'Quality Management',--}}
{{--                                    'image' => 'assets/quality.jpeg',--}}
{{--                                    'heading' => 'Quality That\'s Engineered In, Not Checked In',--}}
{{--                                    'content' => 'Our Quality Management System follows six core principles: operation of a structured QMS with defined procedures and controls, compliance with client specifications and industry standards, quality control across materials and workmanship, "right first time" project delivery, and continuous monitoring for ongoing improvement. Every process is designed to ensure excellence is built into every phase of your project.'--}}
{{--                                ],--}}

{{--                                [--}}
{{--                                    'id' => 'environment',--}}
{{--                                    'title' => 'Environmental Management',--}}
{{--                                    'image' => 'assets/plant.jpg',--}}
{{--                                    'heading' => 'Sustainability at Every Stage',--}}
{{--                                    'content' => 'We integrate environmental stewardship into everything we build. From planning through completion, we use sustainable materials, employ modern construction methods that minimize impact, and source responsibly from compliant suppliers. Our commitment extends beyond compliance—we continuously improve our environmental practices to exceed client and regulatory expectations while reducing our footprint across all projects.'--}}
{{--                                ]--}}
{{--                            ];--}}
{{--                        @endphp--}}

{{--                        @foreach($sections as $index => $section)--}}
{{--                            <button--}}
{{--                                data-index="{{ $index }}"--}}
{{--                                class="w-full text-left p-4 rounded-lg transition-colors {{ $loop->first ? 'bg-gray-100 text-black font-medium' : 'text-gray-600 hover:bg-gray-50' }}"--}}
{{--                            >--}}
{{--                                {{ $section['title'] }}--}}
{{--                            </button>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}

{{--                    <!-- Navigation Buttons -->--}}
{{--                    <div class="flex gap-3 pt-4">--}}
{{--                        <button--}}
{{--                            id="prevBtn"--}}
{{--                            class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition-colors"--}}
{{--                            aria-label="Previous section"--}}
{{--                        >--}}
{{--                            <flux:icon.arrow-left class="w-5 h-5" />--}}
{{--                        </button>--}}
{{--                        <button--}}
{{--                            id="nextBtn"--}}
{{--                            class="px-6 py-2 bg-[#fbbf24] text-white rounded-full flex items-center gap-2 font-medium hover:bg-gray-800 transition-colors"--}}
{{--                        >--}}
{{--                            Next--}}
{{--                            <flux:icon.arrow-right class="w-4 h-4" />--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Right Content Area -->--}}
{{--                <div class="space-y-6">--}}
{{--                    <div class="relative h-[500px] md:h-[600px] rounded-xl overflow-hidden">--}}
{{--                        <div class="absolute inset-0 bg-cover bg-center" id="heroImage"></div>--}}

{{--                        <!-- 🔥 Strong, readable overlay -->--}}
{{--                        <div class="absolute inset-0 bg-black/70"></div>--}}
{{--                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>--}}

{{--                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">--}}
{{--                            <h2 class="text-2xl md:text-3xl font-bold mb-3" id="sectionHeading">Tailored Service & Proven Excellence</h2>--}}
{{--                            <p class="text-gray-200 leading-relaxed mb-6" id="sectionContent">--}}
{{--                                We deliver tailored services with relevant experience, leading-edge H&S systems, and hands-on management...--}}
{{--                            </p>--}}
{{--                            <div class="flex items-center gap-4">--}}
{{--                                <a href="/firm" class="text-white font-medium flex items-center gap-2">--}}
{{--                                    Read more--}}
{{--                                    <flux:icon.arrow-top-right-on-square class="w-5 h-5" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', () => {--}}
{{--            const sections = @json($sections);--}}
{{--            let currentIndex = 0;--}}

{{--            const heroImage = document.getElementById('heroImage');--}}
{{--            const sectionHeading = document.getElementById('sectionHeading');--}}
{{--            const sectionContent = document.getElementById('sectionContent');--}}
{{--            const prevBtn = document.getElementById('prevBtn');--}}
{{--            const nextBtn = document.getElementById('nextBtn');--}}
{{--            const menuButtons = document.querySelectorAll('[data-index]');--}}

{{--            // Initialize first section--}}
{{--            function showSection(index) {--}}
{{--                if (index < 0) index = sections.length - 1;--}}
{{--                if (index >= sections.length) index = 0;--}}
{{--                currentIndex = index;--}}

{{--                const section = sections[index];--}}

{{--                // Update image--}}
{{--                heroImage.style.backgroundImage = `url('${section.image}')`;--}}

{{--                // Update text--}}
{{--                sectionHeading.textContent = section.heading;--}}
{{--                sectionContent.innerHTML = section.content;--}}

{{--                // Update active menu button--}}
{{--                menuButtons.forEach(btn => {--}}
{{--                    const btnIndex = parseInt(btn.dataset.index);--}}
{{--                    if (btnIndex === currentIndex) {--}}
{{--                        btn.classList.remove('text-gray-600', 'hover:bg-gray-50');--}}
{{--                        btn.classList.add('bg-gray-100', 'text-black', 'font-medium');--}}
{{--                    } else {--}}
{{--                        btn.classList.remove('bg-gray-100', 'text-black', 'font-medium');--}}
{{--                        btn.classList.add('text-gray-600', 'hover:bg-gray-50');--}}
{{--                    }--}}
{{--                });--}}

{{--                // Update buttons--}}
{{--                prevBtn.disabled = (currentIndex === 0);--}}
{{--                nextBtn.textContent = (currentIndex === sections.length - 1) ? 'Finish' : 'Next';--}}
{{--            }--}}

{{--            // Click handlers for menu--}}
{{--            menuButtons.forEach(btn => {--}}
{{--                btn.addEventListener('click', () => {--}}
{{--                    const index = parseInt(btn.dataset.index);--}}
{{--                    showSection(index);--}}
{{--                });--}}
{{--            });--}}

{{--            // Navigation buttons--}}
{{--            nextBtn.addEventListener('click', () => {--}}
{{--                showSection(currentIndex + 1);--}}
{{--            });--}}

{{--            prevBtn.addEventListener('click', () => {--}}
{{--                showSection(currentIndex - 1);--}}
{{--            });--}}

{{--            // Initialize--}}
{{--            showSection(0);--}}
{{--        });--}}
{{--    </script>--}}

{{--    <script>--}}
{{--        document.addEventListener('DOMContentLoaded', function() {--}}
{{--            const counters = document.querySelectorAll('.counter');--}}
{{--            const speed = 200;--}}
{{--            let hasAnimated = false;--}}

{{--            const animateCounter = (counter) => {--}}
{{--                const target = +counter.getAttribute('data-target');--}}
{{--                const increment = target / speed;--}}

{{--                const updateCount = () => {--}}
{{--                    const count = +counter.innerText;--}}

{{--                    if (count < target) {--}}
{{--                        counter.innerText = Math.ceil(count + increment);--}}
{{--                        setTimeout(updateCount, 10);--}}
{{--                    } else {--}}
{{--                        counter.innerText = target;--}}
{{--                    }--}}
{{--                };--}}

{{--                updateCount();--}}
{{--            };--}}

{{--            const observer = new IntersectionObserver((entries) => {--}}
{{--                entries.forEach(entry => {--}}
{{--                    if (entry.isIntersecting && !hasAnimated) {--}}
{{--                        hasAnimated = true;--}}
{{--                        counters.forEach(counter => {--}}
{{--                            animateCounter(counter);--}}
{{--                        });--}}
{{--                    }--}}
{{--                });--}}
{{--            }, {--}}
{{--                threshold: 0.5--}}
{{--            });--}}

{{--            const statsSection = document.getElementById('statsSection');--}}
{{--            if (statsSection) {--}}
{{--                observer.observe(statsSection);--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
@endsection
