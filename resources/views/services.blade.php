@extends('layouts.main_layout')

@section('title', 'Our Services')

@section('content')
    <div class=" bg-white pb:12">
        <div class="relative min-h-[350px] flex items-center">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="{{ asset('assets/5th.jpeg') }}" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 text-white p-8 flex justify-between items-center w-full px:4 md:px-60" >
                <h1 class="text-3xl md:text-6xl font-bold mb-3">Services</h1>
            </div>
        </div>

        <div class="px-4 md:px-60 py-12">
            <h1 class="text-lg md:text-xl">
                Qualiden group specializes in water infrastructure, pipeline systems, and civil engineering works. The company delivers complex projects with proven capability in HDPE, PVC, and steel pipeline installations, waterproofing, concrete protection systems, and related engineering services. Operating as both a main contractor and specialist subcontractor, Qualiden provides disciplined project execution and engineering-led solutions for industrial and commercial developments
            </h1>
        </div>



        <div class="py-20 px-4 md:px-60 bg-white">
            <div class="mx-auto">

                <!-- Carousel Container -->
                <div class="relative" id="services-carousel">
                    <!-- Navigation Arrows at Top Right -->
                    <div class="flex justify-end gap-2 mb-6">
                        <button id="prev-btn" class="w-10 h-10 bg-black hover:bg-gray-800 flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button id="next-btn" class="w-10 h-10 bg-[#fbbf24] hover:bg-yellow-500 flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Carousel Slides Container -->
                    <div class="overflow-hidden">
                        <div class="flex transition-transform duration-500 ease-in-out" id="services-track">
                            <!-- Service 1 - GENERAL CONSTRUCTION WORKS -->
                            <div class="w-full flex-shrink-0">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                                    <!-- Image Section -->
                                    <div class="order-2 lg:order-1 bg-gray-100 h-96 flex items-center justify-center">
                                        <img src="{{ asset('assets/mn.jpeg') }}" alt="General Construction Works" class="w-full h-full object-cover">
                                    </div>

                                    <!-- Text Section -->
                                    <div class="order-1 lg:order-2 bg-white flex flex-col justify-center p-12 h-96">
                                        <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                                            GENERAL CONSTRUCTION WORKS
                                        </h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Complete building construction from ground-up to finishing. We deliver residential, commercial, and industrial projects with precision craftsmanship and attention to detail.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 2 - CIVIL ENGINEERING -->
                            <div class="w-full flex-shrink-0">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                                    <!-- Image Section -->
                                    <div class="order-2 lg:order-1 bg-gray-100 h-96 flex items-center justify-center">
                                        <img src="{{ asset('assets/mn.jpeg') }}" alt="Civil Engineering" class="w-full h-full object-cover">
                                    </div>

                                    <!-- Text Section -->
                                    <div class="order-1 lg:order-2 bg-white flex flex-col justify-center p-12 h-96">
                                        <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                                            CIVIL ENGINEERING
                                        </h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Your business deserves to be noticed! Attract exceptional site development, earthworks, drainage, road construction, and structural engineering solutions that create lasting infrastructure.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 3 - PIPES & INSTALLATIONS -->
                            <div class="w-full flex-shrink-0">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                                    <!-- Image Section -->
                                    <div class="order-2 lg:order-1 bg-gray-100 h-96 flex items-center justify-center">
                                        <img src="{{ asset('assets/mn.jpeg') }}" alt="Pipes & Installations" class="w-full h-full object-cover">
                                    </div>

                                    <!-- Text Section -->
                                    <div class="order-1 lg:order-2 bg-white flex flex-col justify-center p-12 h-96">
                                        <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                                            PIPES & INSTALLATIONS
                                        </h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Specialized pipe installation for water supply, drainage, and industrial applications using HDPE welding, PVC, and steel fittings with precision and reliability.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 4 - CONSTRUCTION CHEMICALS -->
                            <div class="w-full flex-shrink-0">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                                    <!-- Image Section -->
                                    <div class="order-2 lg:order-1 bg-gray-100 h-96 flex items-center justify-center">
                                        <img src="{{ asset('assets/mn.jpeg') }}" alt="Construction Chemicals" class="w-full h-full object-cover">
                                    </div>

                                    <!-- Text Section -->
                                    <div class="order-1 lg:order-2 bg-white flex flex-col justify-center p-12 h-96">
                                        <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                                            CONSTRUCTION CHEMICALS
                                        </h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            High-performance chemical solutions for concrete protection, waterproofing, bonding, and surface treatment to ensure structural integrity and longevity.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 5 - CORROSION CONTROL -->
                            <div class="w-full flex-shrink-0">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                                    <!-- Image Section -->
                                    <div class="order-2 lg:order-1 bg-gray-100 h-96 flex items-center justify-center">
                                        <img src="{{ asset('assets/mn.jpeg') }}" alt="Corrosion Control" class="w-full h-full object-cover">
                                    </div>

                                    <!-- Text Section -->
                                    <div class="order-1 lg:order-2 bg-white flex flex-col justify-center p-12 h-96">
                                        <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                                            CORROSION CONTROL
                                        </h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Advanced corrosion prevention for metal structures, pipelines, and industrial equipment to extend service life and maintain structural integrity.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 6 - WELDING & FABRICATION -->
                            <div class="w-full flex-shrink-0">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                                    <!-- Image Section -->
                                    <div class="order-2 lg:order-1 bg-gray-100 h-96 flex items-center justify-center">
                                        <img src="{{ asset('assets/mn.jpeg') }}" alt="Welding & Fabrication" class="w-full h-full object-cover">
                                    </div>

                                    <!-- Text Section -->
                                    <div class="order-1 lg:order-2 bg-white flex flex-col justify-center p-12 h-96">
                                        <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                                            WELDING & FABRICATION
                                        </h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Precision welding and metal fabrication for structural steel, pipe systems, and custom metal components with certified craftsmen.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 7 - SUPPLY OF MATERIALS -->
                            <div class="w-full flex-shrink-0">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                                    <!-- Image Section -->
                                    <div class="order-2 lg:order-1 bg-gray-100 h-96 flex items-center justify-center">
                                        <img src="{{ asset('assets/mn.jpeg') }}" alt="Supply of Materials" class="w-full h-full object-cover">
                                    </div>

                                    <!-- Text Section -->
                                    <div class="order-1 lg:order-2 bg-white flex flex-col justify-center p-12 h-96">
                                        <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                                            SUPPLY OF MATERIALS
                                        </h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Comprehensive material procurement and supply services ensuring quality construction materials, engineering equipment, and specialized tools are delivered on time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const track = document.getElementById('services-track');
            const slides = Array.from(track.children);
            const totalSlides = slides.length;

            // Get all navigation buttons
            const prevBtns = document.querySelectorAll('#prev-btn, #prev-btn-bottom');
            const nextBtns = document.querySelectorAll('#next-btn, #next-btn-bottom');

            let currentIndex = 0;

            const updateCarousel = (index) => {
                track.style.transform = `translateX(-${index * 100}%)`;
                currentIndex = index;
            };

            // Add event listeners to all previous buttons
            prevBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                    updateCarousel(prevIndex);
                });
            });

            // Add event listeners to all next buttons
            nextBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const nextIndex = (currentIndex + 1) % totalSlides;
                    updateCarousel(nextIndex);
                });
            });

            // Auto-play
            let autoPlayInterval;

            const startAutoPlay = () => {
                autoPlayInterval = setInterval(() => {
                    const nextIndex = (currentIndex + 1) % totalSlides;
                    updateCarousel(nextIndex);
                }, 5000);
            };

            const stopAutoPlay = () => {
                clearInterval(autoPlayInterval);
            };

            startAutoPlay();

            const carousel = document.getElementById('services-carousel');
            carousel.addEventListener('mouseenter', stopAutoPlay);
            carousel.addEventListener('mouseleave', startAutoPlay);
        </script>


@endsection
