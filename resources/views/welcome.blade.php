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

        <!-- Company Section -->
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

        <!-- Products Section -->
        <div class="py-14 px-4 md:px-60">
            <div class="flex items-center justify-center mb-12">
                <div class="flex-1 h-px bg-gray-300"></div>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 px-6">Products</h1>
                <div class="flex-1 h-px bg-gray-300"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">

                {{-- Product 1: HDPE Pipe --}}
                <a href="{{ route('our-projects') }}" class="group bg-white overflow-hidden cursor-pointer md:col-span-2 border border-gray-200 hover:bg-[#fbbf24] transition-all duration-300 block">
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
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                {{-- Product 2: PVC Pipe --}}
                <a href="{{ route('our-projects') }}" class="group bg-white overflow-hidden cursor-pointer border border-gray-200 hover:bg-[#fbbf24] transition-all duration-300 block">
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
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                {{-- Product 3: PVC Fitting --}}
                <a href="{{ route('our-projects') }}" class="group bg-white overflow-hidden cursor-pointer border border-gray-200 hover:bg-[#fbbf24] transition-all duration-300 block">
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
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                {{-- Product 4: HDPE Fitting --}}
                <a href="{{ route('our-projects') }}" class="group bg-white overflow-hidden cursor-pointer border border-gray-200 hover:bg-[#fbbf24] transition-all duration-300 block">
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
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                {{-- Product 5: HDPE Welding --}}
                <a href="{{ route('our-projects') }}" class="group bg-white overflow-hidden cursor-pointer border border-gray-200 hover:bg-[#fbbf24] transition-all duration-300 block">
                    <div class="relative w-full bg-gray-100 overflow-hidden">
                        <img
                            src="{{ asset('assets/HDPE-Welding.png') }}"
                            alt="HDPE Welding"
                            class="w-full h-auto object-contain group-hover:scale-110 transition-transform duration-300"
                        >
                    </div>
                    <div class="p-4 group-hover:bg-[#fbbf24] transition-colors duration-300 flex items-center justify-between">
                        <h3 class="text-base font-semibold text-gray-800 group-hover:text-white transition-colors duration-300">HDPE Welding</h3>
                        <div class="flex items-center">
                            <span class="text-gray-600 group-hover:text-white transition-colors duration-300 mr-1">Read More</span>
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <h1 class="font-bold md:text-4xl text-2xl text-center pt-8">Our HDPE pipes and fittings have been exported to more than 120 countries and regions. Supported over 300 pipeline projects</h1>
        </div>

        <!-- Cases Section -->
        <div class="py-14 px-4 md:px-60">
            <div class="flex items-center justify-center mb-12">
                <div class="flex-1 h-px bg-gray-300"></div>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 px-6">Cases</h1>
                <div class="flex-1 h-px bg-gray-300"></div>
            </div>

            <div class="container mx-auto px-4 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mx-auto">

                    {{-- Card 1: Water --}}
                    <a href="{{ route('cases.index') }}" class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col transition-transform duration-300 hover:scale-105">
                        <div class="relative overflow-hidden h-full">
                            <img src="{{ asset('assets/slide1.jpeg') }}" alt="Water pipes" class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"/>
                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    HDFE Pipes In Massive Desalination Plant Projects
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded transition-all duration-300 hover:scale-105">
                                    Check the details
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0" style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;">
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
                    </a>

                    {{-- Card 2: Oil and Gas --}}
                    <a href="{{ route('cases.index') }}" class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col transition-transform duration-300 hover:scale-105">
                        <div class="relative overflow-hidden h-full">
                            <img src="{{ asset('assets/oil.png') }}" alt="Oil and Gas pipes" class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"/>
                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    HDFE Pipes In Oil And Gas Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded transition-all duration-300 hover:scale-105">
                                    Check the details
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0" style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;">
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
                    </a>

                    {{-- Card 3: Mining --}}
                    <a href="{{ route('cases.index') }}" class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col transition-transform duration-300 hover:scale-105">
                        <div class="relative overflow-hidden h-full">
                            <img src="{{ asset('assets/water.jpeg') }}" alt="Mining pipes" class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"/>
                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    HDFE Pipes In Mining Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded transition-all duration-300 hover:scale-105">
                                    Check the details
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0" style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;">
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
                    </a>

                    {{-- Card 4: Marine --}}
                    <a href="{{ route('cases.index') }}" class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col transition-transform duration-300 hover:scale-105">
                        <div class="relative overflow-hidden h-full">
                            <img src="{{ asset('assets/marine.jpg') }}" alt="Marine pipes" class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"/>
                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    An exemplary case of HDFE Piping In Marine and Dredging Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded transition-all duration-300 hover:scale-105">
                                    Check the details
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0" style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;">
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
                    </a>

                    {{-- Card 5: Fire Fighting --}}
                    <a href="{{ route('cases.index') }}" class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col transition-transform duration-300 hover:scale-105">
                        <div class="relative overflow-hidden h-full">
                            <img src="{{ asset('assets/fire.jpeg') }}" alt="Fire Fighting pipes" class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"/>
                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    The Important Roles Of HDFE Pipes In Fire Fighting
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded transition-all duration-300 hover:scale-105">
                                    Check the details
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0" style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;">
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
                    </a>

                    {{-- Card 6: Energy --}}
                    <a href="{{ route('cases.index') }}" class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col transition-transform duration-300 hover:scale-105">
                        <div class="relative overflow-hidden h-full">
                            <img src="{{ asset('assets/energy.jpg') }}" alt="Energy pipes" class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"/>
                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    A Case Study On The Impact Of HDFE Pipes In Energy And Power Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded transition-all duration-300 hover:scale-105">
                                    Check the details
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0" style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;">
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
                    </a>

                    {{-- Card 7: Agriculture --}}
                    <a href="{{ route('cases.index') }}" class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col transition-transform duration-300 hover:scale-105">
                        <div class="relative overflow-hidden h-full">
                            <img src="{{ asset('assets/agric.jpg') }}" alt="Agriculture pipes" class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"/>
                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    The Role Of HDFE Pipes In Agriculture And Landscape Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded transition-all duration-300 hover:scale-105">
                                    Check the details
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0" style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;">
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
                    </a>

                    {{-- Card 8: Industry --}}
                    <a href="{{ route('cases.index') }}" class="group rounded-2xl overflow-hidden h-96 bg-red-500 shadow-md cursor-pointer flex flex-col transition-transform duration-300 hover:scale-105">
                        <div class="relative overflow-hidden h-full">
                            <img src="{{ asset('assets/industry.jpeg') }}" alt="Industry pipes" class="block w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-15"/>
                            <div class="absolute inset-0 bg-[#fbbf24] flex flex-col items-center justify-center gap-4 px-5 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <p class="text-white text-sm font-medium text-center leading-snug underline underline-offset-2">
                                    An illustrative Case Of HDFE Pipes In Industrial And Chemical Applications
                                </p>
                                <button class="bg-white text-black text-xs font-semibold px-4 py-1.5 rounded transition-all duration-300 hover:scale-105">
                                    Check the details
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 transition-opacity duration-300 group-hover:opacity-0" style="clip-path: polygon(0 60%, 50% 0%, 100% 60%, 100% 100%, 0 100%); background: white;">
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
                    </a>
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

            function updateCarousel() {
                if (isTransitioning) return;
                isTransitioning = true;

                carousel.style.transform = `translateX(-${currentSlide * 100}%)`;

                progressItems.forEach((item, index) => {
                    if (index === currentSlide) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });

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

            function nextSlide() {
                if (isTransitioning) return;
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }

            function prevSlide() {
                if (isTransitioning) return;
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }

            function startAutoSlide() {
                stopAutoSlide();
                autoSlideInterval = setInterval(nextSlide, 5000);
            }

            function stopAutoSlide() {
                if (autoSlideInterval) {
                    clearInterval(autoSlideInterval);
                }
            }

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

            const carouselContainer = document.querySelector('.carousel-container');
            carouselContainer.addEventListener('mouseenter', stopAutoSlide);
            carouselContainer.addEventListener('mouseleave', startAutoSlide);

            updateCarousel();
            startAutoSlide();
        });
    </script>
@endsection
