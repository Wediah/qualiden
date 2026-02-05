@extends('layouts.main_layout')

@section('title', 'Engineering')

@section('content')
    <div class="px-4 md:px-14 bg-white md:pt-36 pt-24 pb-12">
        <div class="flex flex-col gap-2 text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                OUR <br>
                <span class="text-[#fbbf24]">ENGINEERING</span>
            </h1>
            <p class="text-lg text-gray-600 mt-4 max-w-3xl mx-auto">
                Every project, every time: executed exactly to your engineering specifications with unwavering precision.
            </p>
        </div>

        <!-- About Section -->
        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Precision Engineering Excellence</h2>
                <p class="text-gray-600 leading-relaxed">
                    Qualiden Engineering Limited delivers specialized civil engineering and construction solutions across West Africa. We combine hands-on technical expertise with rigorous quality control to execute complex projects—from HDPE pipe welding and structural works to corrosion protection systems—exactly to your specifications.
                </p>
                <p class="text-gray-600 leading-relaxed mt-4">
                    Our team leverages cutting-edge methodologies and owned equipment to ensure cost efficiency, safety compliance, and on-time delivery for industrial, commercial, and infrastructure projects.
                </p>
            </div>
            <div class="relative h-96 rounded-xl overflow-hidden border border-gray-200">
                <img
                    src="{{ asset('assets/water.jpeg') }}"
                    alt="Qualiden engineering team"
                    class="w-full h-full object-cover"
                >
                <div class="absolute inset-0 bg-linear-to-t from-black/20 to-transparent"></div>
            </div>
        </div>

        <!-- Equipment Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Our Specialized Equipment</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Equipment 1 -->
                <div class="group">
                    <div class="bg-gray-100 rounded-xl h-48 overflow-hidden mb-4">
                        <img
                            src="{{ asset('assets/machine.jpg') }}"
                            alt="HDPE Welding Machine"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-bold text-lg text-gray-900">HDPE Welding Machines</h3>
                    <p class="text-gray-600 mt-1">Butt fusion & electrofusion welders (63–630mm)</p>
                </div>

                <!-- Equipment 2 -->
                <div class="group">
                    <div class="bg-gray-100 rounded-xl h-48 overflow-hidden mb-4">
                        <img
                            src="{{ asset('assets/excavator.webp') }}"
                            alt="Excavation Equipment"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-bold text-lg text-gray-900">Excavation Machinery</h3>
                    <p class="text-gray-600 mt-1">Backhoes, mini-excavators & trenchers</p>
                </div>

                <!-- Equipment 3 -->
                <div class="group">
                    <div class="bg-gray-100 rounded-xl h-48 overflow-hidden mb-4">
                        <img
                            src="{{ asset('assets/pump.jpg') }}"
                            alt="Concrete Pump"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-bold text-lg text-gray-900">Concrete Pumps</h3>
                    <p class="text-gray-600 mt-1">Stationary & boom pumps for high-rise projects</p>
                </div>

                <!-- Equipment 4 -->
                <div class="group">
                    <div class="bg-gray-100 rounded-xl h-48 overflow-hidden mb-4">
                        <img
                            src="{{ asset('assets/watrprove.webp') }}"
                            alt="Waterproofing Equipment"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-bold text-lg text-gray-900">Waterproofing Systems</h3>
                    <p class="text-gray-600 mt-1">Spray applicators & membrane installation tools</p>
                </div>

                <!-- Equipment 5 -->
                <div class="group">
                    <div class="bg-gray-100 rounded-xl h-48 overflow-hidden mb-4">
                        <img
                            src="{{ asset('assets/lift.jpg') }}"
                            alt="Lifting Equipment"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-bold text-lg text-gray-900">Lifting & Rigging Gear</h3>
                    <p class="text-gray-600 mt-1">Mobile cranes, hoists & certified rigging sets</p>
                </div>

                <!-- Equipment 6 -->
                <div class="group">
                    <div class="bg-gray-100 rounded-xl h-48 overflow-hidden mb-4">
                        <img
                            src="{{ asset('assets/test.webp') }}"
                            alt="Testing Equipment"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-bold text-lg text-gray-900">Testing & Calibration Kits</h3>
                    <p class="text-gray-600 mt-1">Pressure testers, surveying tools & NDT equipment</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center py-12 border-t border-gray-200">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Ready for Precision Execution?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Partner with us for engineering solutions that meet exact specifications, timelines, and safety standards.
            </p>
            <a href="/contact">
                <button class="bg-[#fbbf24] text-black font-bold px-8 py-4 rounded-lg hover:bg-yellow-400 transition-colors duration-300 text-lg">
                    Request Engineering Services
                </button>
            </a>
        </div>
    </div>
@endsection
