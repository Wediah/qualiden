@extends('layouts.main_layout')

@section('title', 'Company Policy')

@section('content')
    <div class="px-4 md:px-14 bg-white md:pt-36 pt-24 pb-12">
        <div class="flex flex-col gap-2 mb-12">
            <h1 class="text-4xl font-bold text-center">
                OUR <br>
                COMPANY <span class="text-gray-300">POLICY</span>
            </h1>
            <p class="text-sm text-center text-gray-300">
                Delivery by specification
            </p>
        </div>

        <!-- Policy Content -->
        <div class=" mx-auto">
            <!-- Flex container with two columns -->
            <div class="flex flex-col gap-8 md:flex-row items-start">
                <!-- Left Column: Policy Statement -->
                <div class="md:w-1/3">
                    <div class="space-y-4 text-gray-600 leading-relaxed">
                        <p>
                            At Qualiden Group Limited, we are committed to delivering high-quality engineering solutions that meet client requirements, comply with applicable standards, and promote safety, efficiency, and sustainability.
                        </p>

                        <p>
                            We operate with integrity and professionalism, ensuring that all our engineering services are planned, executed, and delivered in accordance with industry best practices, statutory regulations, and contractual obligations.
                        </p>

                        <p class="font-semibold text-black">
                            Our company is guided by the following principles:
                        </p>
                    </div>
                </div>

                <!-- Right Column: Principles Grid (flex-wrap container) -->
                <div class="md:w-2/3">
                    <div class="flex flex-wrap gap-4">
                        <!-- Quality Excellence -->
                        <div class="w-full sm:w-[calc(50%-0.5rem)] bg-gray-50 p-5 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-lg font-bold text-black mb-1">Quality Excellence</h3>
                            <p class="text-gray-500 text-sm">
                                Delivering engineering solutions that consistently meet or exceed quality standards
                            </p>
                        </div>

                        <!-- Health & Safety -->
                        <div class="w-full sm:w-[calc(50%-0.5rem)] bg-gray-50 p-5 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-lg font-bold text-black mb-1">Health & Safety</h3>
                            <p class="text-gray-500 text-sm">
                                Prioritizing the wellbeing of our people, partners, and communities
                            </p>
                        </div>

                        <!-- Customer Satisfaction -->
                        <div class="w-full sm:w-[calc(50%-0.5rem)] bg-gray-50 p-5 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-lg font-bold text-black mb-1">Customer Satisfaction</h3>
                            <p class="text-gray-500 text-sm">
                                Understanding and exceeding client expectations through reliable delivery
                            </p>
                        </div>

                        <!-- Professional Ethics -->
                        <div class="w-full sm:w-[calc(50%-0.5rem)] bg-gray-50 p-5 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-lg font-bold text-black mb-1">Professional Ethics</h3>
                            <p class="text-gray-500 text-sm">
                                Operating with integrity, transparency, and accountability in all we do
                            </p>
                        </div>

                        <!-- Environmental Responsibility -->
                        <div class="w-full sm:w-[calc(50%-0.5rem)] bg-gray-50 p-5 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-lg font-bold text-black mb-1">Environmental Responsibility</h3>
                            <p class="text-gray-500 text-sm">
                                Minimizing our environmental footprint through sustainable practices
                            </p>
                        </div>

                        <!-- Competence & Training -->
                        <div class="w-full sm:w-[calc(50%-0.5rem)] bg-gray-50 p-5 rounded-lg border-l-4 border-yellow-400">
                            <h3 class="text-lg font-bold text-black mb-1">Competence & Training</h3>
                            <p class="text-gray-500 text-sm">
                                Investing in continuous development of our people and capabilities
                            </p>
                        </div>
                    </div>

                    <!-- Management Commitment (placed below the grid) -->
                    <div class="mt-6 bg-yellow-50 p-5 rounded-lg border border-yellow-200">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-black mb-1">Management Commitment</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Management is fully committed to this policy and ensures it is communicated, understood, implemented, and regularly reviewed to remain relevant to our operations and objectives.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
