@extends('layouts.main_layout')

@section('title', 'Our Services')

@section('content')
    <div class="bg-black">
        <!-- Hero Image with Left-Aligned Text (exactly like landing page) -->
        <div class="relative h-screen">

            <img src="{{ asset('assets/gen.jpg') }}" class="h-full w-full object-cover" alt="landing page image"/>
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            <div class="absolute md:top-96 top-36 left-0 text-white py-4 pl-4 md:pl-14 md:w-1/2 z-10" data-aos="fade-up">
                <p class="text-2xl md:text-9xl font-bold block md:hidden">OUR SERVICES</p>
                <p class="text-2xl md:text-9xl font-bold hidden md:block">OUR<br>SERVICES</p>
                <p class="text-sm md:text-lg mt-2 opacity-90">Engineering Excellence · Precision Construction · Innovative Solutions</p>
            </div>
        </div>

        <!-- Services Cards -->
        <div class="px-4 md:px-96 py-20">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: General Construction Works -->
                <div class="bg-transparent border border-gray-800 p-8 rounded-lg hover:border-white transition-all duration-300 group">
                    <div class="w-16 h-16 border border-gray-700 rounded-lg flex items-center justify-center mb-6 group-hover:border-white transition-colors">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">General Construction Works</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Complete building construction from ground-up to finishing. Residential, commercial, and industrial projects with precision craftsmanship.
                    </p>
                </div>

                <!-- Service 2: Civil Engineering Works -->
                <div class="bg-transparent border border-gray-800 p-8 rounded-lg hover:border-white transition-all duration-300 group">
                    <div class="w-16 h-16 border border-gray-700 rounded-lg flex items-center justify-center mb-6 group-hover:border-white transition-colors">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Civil Engineering Works</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Infrastructure solutions: site development, earthworks, drainage, road construction, and structural engineering.
                    </p>
                </div>

                <!-- Service 3: Pipes Works and Installations -->
                <div class="bg-transparent border border-gray-800 p-8 rounded-lg hover:border-white transition-all duration-300 group">
                    <div class="w-16 h-16 border border-gray-700 rounded-lg flex items-center justify-center mb-6 group-hover:border-white transition-colors">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Pipes Works & Installations</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Specialized pipe installation for water supply, drainage, and industrial applications using HDPE, PVC, and steel.
                    </p>
                </div>

                <!-- Service 4: Construction Chemicals -->
                <div class="bg-transparent border border-gray-800 p-8 rounded-lg hover:border-white transition-all duration-300 group">
                    <div class="w-16 h-16 border border-gray-700 rounded-lg flex items-center justify-center mb-6 group-hover:border-white transition-colors">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Construction Chemicals</h3>
                    <p class="text-gray-400 leading-relaxed">
                        High-performance chemical solutions for concrete protection, waterproofing, bonding, and surface treatment.
                    </p>
                </div>

                <!-- Service 5: Corrosion Control -->
                <div class="bg-transparent border border-gray-800 p-8 rounded-lg hover:border-white transition-all duration-300 group">
                    <div class="w-16 h-16 border border-gray-700 rounded-lg flex items-center justify-center mb-6 group-hover:border-white transition-colors">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Corrosion Control</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Advanced corrosion prevention for metal structures, pipelines, and industrial equipment to extend service life.
                    </p>
                </div>

                <!-- Service 6: Welding and Fabrication Works -->
                <div class="bg-transparent border border-gray-800 p-8 rounded-lg hover:border-white transition-all duration-300 group">
                    <div class="w-16 h-16 border border-gray-700 rounded-lg flex items-center justify-center mb-6 group-hover:border-white transition-colors">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Welding & Fabrication</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Precision welding and metal fabrication for structural steel, pipe systems, and custom metal components.
                    </p>
                </div>
            </div>

            <!-- Supply of Materials (Full Width) -->
            <div class="mt-16 bg-transparent border border-gray-800 p-10 rounded-lg hover:border-white transition-all duration-300 group">
                <div class="flex flex-col md:flex-row items-start md:items-center gap-8">
                    <div class="md:w-1/4">
                        <div class="w-20 h-20 border border-gray-700 rounded-lg flex items-center justify-center mx-auto md:mx-0 group-hover:border-white transition-colors">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="md:w-3/4 text-center md:text-left">
                        <h3 class="text-3xl font-bold text-white mb-4">Supply of Materials</h3>
                        <p class="text-gray-400 text-lg leading-relaxed">
                            Comprehensive material procurement and supply services. We ensure quality construction materials, engineering equipment, safety gear, and specialized tools are available when and where you need them.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center pt-20 mt-16 border-t border-gray-800">
                <h2 class="text-4xl font-bold text-white mb-6">Ready to Start Your Project?</h2>
                <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                    Contact us today to discuss how our comprehensive engineering and construction services can bring your vision to life.
                </p>
                <a href="/contact">
                    <button class="bg-white text-black font-bold px-8 py-4 rounded-lg hover:bg-gray-200 transition-colors duration-300 text-lg">
                        Get in Touch
                    </button>
                </a>
            </div>
        </div>
    </div>

    <style>
        /* Monochrome styling */
        * {
            color-scheme: dark;
        }

        /* Smooth hover effects */
        .group:hover {
            transform: translateY(-5px);
        }

        /* Ensure hero section matches landing page exactly */
        .relative.h-screen {
            position: relative;
            height: 100vh;
        }

        .absolute.inset-0.bg-black {
            background-color: rgba(0, 0, 0, 0.4);
        }

        /* Mobile text positioning */
        @media (max-width: 768px) {
            .slide-content {
                bottom: 4rem !important;
                top: auto !important;
                padding-left: 1rem !important;
                width: 100% !important;
            }
        }
    </style>
@endsection
