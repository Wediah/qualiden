@extends('layouts.main_layout')

@section('title', 'Our Services')

@section('content')
    <div class=" bg-white md:pt-36 pt-12 pb:12">
        <div class="flex flex-col gap-2 px-4 md:px-14">
            <h1 class="text-4xl font-bold text-center text-black">
                SERVICES <br>
                WE <span class="text-gray-300">PROVIDE</span>
            </h1>
            <p class="text-sm text-center text-gray-300">
                Delivery by Specification: Where Precision Meets Reliability
            </p>
        </div>

        <div class="carousel-container relative overflow-hidden py-12">
            <!-- Carousel Track -->
            <div id="carouselTrack" class="carousel-track flex gap-8 items-center">
                <!-- Original Set -->
                <div class="carousel-item flex-shrink-0">
                    <img
                        src="{{ asset('assets/quality.jpeg') }}"
                        alt="Team collaboration"
                        class="w-80 h-64 object-cover rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    />
                </div>

                <div class="carousel-item flex-shrink-0">
                    <img
                        src="{{ asset('assets/optics.jpg') }}"
                        alt="Office workspace"
                        class="w-96 h-72 object-cover rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    />
                </div>

                <div class="carousel-item flex-shrink-0 relative">
                    <!-- Decorative Circle Badge -->
                    <div class="absolute -top-8 -right-8 w-32 h-32 bg-[#fbbf24] rounded-full flex items-center justify-center z-10 shadow-lg rotate-12">
                        <span class="text-xs font-bold text-center leading-tight">GREAT TO<br>WORK<br>WITH US</span>
                    </div>
                    <img
                        src="{{ asset('assets/nm.jpeg') }}"
                        alt="Team meeting"
                        class="w-80 h-64 object-cover rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    />
                </div>

                <div class="carousel-item flex-shrink-0">
                    <img
                        src="{{ asset('assets/mn.jpeg') }}"
                        alt="Creative workspace"
                        class="w-72 h-80 object-cover rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    />
                </div>

                <!-- Duplicate Set for Seamless Loop -->
                <div class="carousel-item flex-shrink-0">
                    <img
                        src="{{ asset('assets/safety.jpeg') }}"
                        alt="Team collaboration"
                        class="w-80 h-64 object-cover rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    />
                </div>

                <div class="carousel-item flex-shrink-0">
                    <img
                        src="{{ asset('assets/slide2.jpeg') }}"
                        alt="Office workspace"
                        class="w-96 h-72 object-cover rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    />
                </div>

                <div class="carousel-item flex-shrink-0 relative">
                    <div class="absolute -top-8 -right-8 w-32 h-32 bg-[#fbbf24] rounded-full flex items-center justify-center z-10 shadow-lg rotate-12">
                        <span class="text-xs font-bold text-center leading-tight">GREAT TO<br>WORK<br>WITH US</span>
                    </div>
                    <img
                        src="{{ asset('assets/slide1.jpeg') }}"
                        alt="Team meeting"
                        class="w-80 h-64 object-cover rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    />
                </div>

                <div class="carousel-item flex-shrink-0">
                    <img
                        src="{{ asset('assets/plant.jpg') }}"
                        alt="Creative workspace"
                        class="w-72 h-80 object-cover rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                    />
                </div>
            </div>
        </div>

        <!-- Services Cards -->
        <div class="py-20 px-4 md:px-14 bg-white">
            <div class=" mx-auto">
                <!-- Section Header -->
                <div class="mb-16">
                    <p class="text-sm text-gray-500 uppercase tracking-wider mb-4">OUR SERVICES</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-black">
                        We provide a wide range of services
                    </h2>
                </div>

                <!-- Divider -->
                <div class="border-t border-gray-200 mb-12"></div>

                <!-- Service 1 -->
                <div class="mb-16">
                    <div class="grid md:grid-cols-2 gap-8 items-start">
                        <div>
                            <p class="text-sm text-gray-500 mb-4">01</p>
                            <h3 class="text-3xl md:text-4xl font-bold text-black leading-tight">
                                GENERAL CONSTRUCTION WORKS
                            </h3>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Complete building construction from ground-up to finishing. We deliver residential, commercial, and industrial projects with precision craftsmanship and attention to detail.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="mb-16">
                    <div class="grid md:grid-cols-2 gap-8 items-start">
                        <div>
                            <p class="text-sm text-gray-500 mb-4">02</p>
                            <h3 class="text-3xl md:text-4xl font-bold text-black leading-tight">
                                CIVIL ENGINEERING
                            </h3>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Your business deserves to be noticed! Attract exceptional site development, earthworks, drainage, road construction, and structural engineering solutions that create lasting infrastructure.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="mb-16">
                    <div class="grid md:grid-cols-2 gap-8 items-start">
                        <div>
                            <p class="text-sm text-gray-500 mb-4">03</p>
                            <h3 class="text-3xl md:text-4xl font-bold text-black leading-tight">
                                PIPES & INSTALLATIONS
                            </h3>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Specialized pipe installation for water supply, drainage, and industrial applications using HDPE welding, PVC, and steel fittings with precision and reliability.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="mb-16">
                    <div class="grid md:grid-cols-2 gap-8 items-start">
                        <div>
                            <p class="text-sm text-gray-500 mb-4">04</p>
                            <h3 class="text-3xl md:text-4xl font-bold text-black leading-tight">
                                CONSTRUCTION CHEMICALS
                            </h3>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                High-performance chemical solutions for concrete protection, waterproofing, bonding, and surface treatment to ensure structural integrity and longevity.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="mb-16">
                    <div class="grid md:grid-cols-2 gap-8 items-start">
                        <div>
                            <p class="text-sm text-gray-500 mb-4">05</p>
                            <h3 class="text-3xl md:text-4xl font-bold text-black leading-tight">
                                CORROSION CONTROL
                            </h3>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Advanced corrosion prevention for metal structures, pipelines, and industrial equipment to extend service life and maintain structural integrity.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="mb-16">
                    <div class="grid md:grid-cols-2 gap-8 items-start">
                        <div>
                            <p class="text-sm text-gray-500 mb-4">06</p>
                            <h3 class="text-3xl md:text-4xl font-bold text-black leading-tight">
                                WELDING & FABRICATION
                            </h3>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Precision welding and metal fabrication for structural steel, pipe systems, and custom metal components with certified craftsmen.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="mb-16">
                    <div class="grid md:grid-cols-2 gap-8 items-start">
                        <div>
                            <p class="text-sm text-gray-500 mb-4">07</p>
                            <h3 class="text-3xl md:text-4xl font-bold text-black leading-tight">
                                SUPPLY OF MATERIALS
                            </h3>
                        </div>
                        <div>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Comprehensive material procurement and supply services ensuring quality construction materials, engineering equipment, and specialized tools are delivered on time.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Divider -->
                <div class="border-t border-gray-200 mt-16"></div>
            </div>
        </div>
    </div>

    <style>
        .carousel-container {
            position: relative;
        }

        .carousel-track {
            display: flex;
            width: fit-content;
            animation: scroll 30s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Pause on hover */
        .carousel-track:hover {
            animation-play-state: paused;
        }

        /* Optional: Add fade effect on edges */
        .carousel-container::before,
        .carousel-container::after {
            content: '';
            position: absolute;
            top: 0;
            width: 100px;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .carousel-container::before {
            left: 0;
            background: linear-gradient(to right, rgb(243, 244, 246), transparent);
        }

        .carousel-container::after {
            right: 0;
            background: linear-gradient(to left, rgb(243, 244, 246), transparent);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('carouselTrack');

            // Optional: Add speed control
            let speed = 1;

            track.addEventListener('mouseenter', function() {
                this.style.animationPlayState = 'paused';
            });

            track.addEventListener('mouseleave', function() {
                this.style.animationPlayState = 'running';
            });
        });
    </script>

@endsection
