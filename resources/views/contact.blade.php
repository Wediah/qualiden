@extends('layouts.main_layout')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <div class="bg-white pt-24 md:pt-32 pb-12">
        <div class="max-w-7xl mx-auto px-4 md:px-14">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-block mb-6">
                    <div class="w-16 h-1 bg-[#fbbf24] mx-auto mb-6"></div>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold text-black mb-4">
                    GET IN
                </h1>
                <h1 class="text-5xl md:text-7xl font-bold text-gray-300 mb-6">
                    TOUCH
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Always available to discuss your project and answer any questions.
                </p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-20 md:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 md:px-14">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Text Content -->
                <div class="relative z-10">
                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-12">
                        Let's start<br>
                        something<br>
                        new together
                    </h2>

                    <!-- CTA Button -->
                    <a href="https://wa.me/+233547478747" class="inline-block mb-12">
                        <button class="bg-[#fbbf24] text-black font-bold px-10 py-5 rounded-full hover:bg-white transition-all duration-300 text-lg shadow-2xl hover:shadow-[#fbbf24]/50 transform hover:scale-105 flex items-center gap-3">
                            Get in Touch
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>
                    </a>

                    <!-- Contact Info -->
                    <div class="space-y-6">
                        <div>
                            <p class="text-sm text-gray-400 mb-2">Or reach us directly</p>
                            <a href="mailto:dennisnsoh@qualiden.com" class="text-xl font-semibold text-white hover:text-[#fbbf24] transition-colors">
                                dennisnsoh@qualiden.com
                            </a>
                        </div>

                        <div>
                            <p class="text-sm text-gray-400 mb-2">Call us</p>
                            <a href="tel:+233547478747" class="text-xl font-semibold text-white hover:text-[#fbbf24] transition-colors">
                                +233 54 747 8747
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Decorative Circle Badge -->
                <div class="relative flex justify-center lg:justify-end">
                    <div class="w-64 h-64 lg:w-80 lg:h-80 bg-[#fbbf24] rounded-full flex items-center justify-center shadow-2xl shadow-[#fbbf24]/20 relative animate-spin-slow">
                        <!-- Circle Text (rotating around) -->
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 200 200">
                            <defs>
                                <path id="circlePath" d="M 100, 100 m -75, 0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0"/>
                            </defs>
                            <text class="text-sm font-bold fill-current text-gray-900 uppercase tracking-wider">
                                <textPath href="#circlePath" startOffset="0%">
                                    Let's Work Together • Let's Work Together •
                                </textPath>
                            </text>
                        </svg>

                        <!-- Center Icon -->
                        <div class="relative z-10 text-center animate-reverse-spin-slow">
                            <svg class="w-16 h-16 mx-auto mb-3 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                            <p class="text-sm font-bold uppercase text-gray-900">Start Now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Animated Background Elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-[#fbbf24] rounded-full blur-3xl opacity-10 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#fbbf24] rounded-full blur-3xl opacity-10 translate-x-1/2 translate-y-1/2"></div>
    </div>

    <!-- Additional Info Section -->
    <div class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-14">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Location -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#fbbf24] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Our Location</h3>
                    <p class="text-gray-600">
                        GW-0291-1260 <br>
                        Accra, Ghana
                    </p>
                </div>

                <!-- Email -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#fbbf24] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Email Us</h3>
                    <a href="mailto:dennisnsoh@qualiden.com" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                        dennisnsoh@qualiden.com
                    </a>
                </div>

                <!-- Phone -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#fbbf24] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Call Us</h3>
                    <a href="tel:+233547478747" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                        +233 54 747 8747
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes reverse-spin-slow {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(-360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 25s linear infinite;
        }

        .animate-reverse-spin-slow {
            animation: reverse-spin-slow 25s linear infinite;
        }
    </style>
@endsection
