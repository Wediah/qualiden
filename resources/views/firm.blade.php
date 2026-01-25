@extends('layouts.main_layout')

@section('title', 'Our Services')

@section('content')
    <div class="bg-black">
        <!-- Hero Section -->
        <div class="px-4 md:px-96 py-20">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">Our Services</h1>
            <div class="w-20 h-1 bg-yellow-500 mb-8"></div>
            <p class="text-xl text-gray-300 max-w-3xl">
                Comprehensive engineering and construction solutions delivered with expertise, precision, and innovation.
            </p>
        </div>

        <!-- Services Sections -->
        <div class="px-4 md:px-96 pb-20 space-y-20">

            <!-- Service 1: General Construction Works -->
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Image div - takes 50% -->
                <div class="md:w-1/2 w-full">
                    <img src="{{ asset('assets/gen.jpg') }}" class="h-full w-full object-cover rounded-lg" alt="General Construction Works"/>
                </div>

                <!-- Text div - takes 50% -->
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <h1 class="text-4xl font-bold text-white">General Construction Works</h1>
                    <p class="text-white">
                        We provide complete building construction services from ground-up development to finishing works. Our expertise covers residential, commercial, and industrial projects, delivered with precision and quality craftsmanship.
                        <br><br>
                        Our team handles all aspects of construction including structural works, finishing, renovation, and refurbishment. We employ modern construction techniques while maintaining traditional standards of quality and durability.
                        <br><br>
                        From project inception to completion, we ensure every detail meets the highest standards of safety, quality, and client satisfaction.
                    </p>
                </div>
            </div>

            <!-- Service 2: Civil Engineering Works -->
            <div class="flex flex-col md:flex-row-reverse gap-6">
                <!-- Image div - takes 50% -->
                <div class="md:w-1/2 w-full">
                    <img src="{{ asset('assets/optics.jpg') }}" class="h-full w-full object-cover rounded-lg" alt="Civil Engineering Works"/>
                </div>

                <!-- Text div - takes 50% -->
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <h1 class="text-4xl font-bold text-white">Civil Engineering Works</h1>
                    <p class="text-white">
                        Our civil engineering services encompass comprehensive infrastructure solutions including site development, earthworks, drainage systems, road construction, and structural engineering.
                        <br><br>
                        We specialize in foundation works, pavement construction, sewer systems, and land development projects. Our approach combines technical expertise with practical solutions to address complex engineering challenges.
                        <br><br>
                        Using advanced surveying equipment and modern engineering software, we deliver precise and sustainable civil engineering solutions that stand the test of time.
                    </p>
                </div>
            </div>

            <!-- Service 3: Pipes Works and Installations -->
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Image div - takes 50% -->
                <div class="md:w-1/2 w-full">
                    <img src="{{ asset('assets/water.jpeg') }}" class="h-full w-full object-cover rounded-lg" alt="Pipes Works and Installations"/>
                </div>

                <!-- Text div - takes 50% -->
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <h1 class="text-4xl font-bold text-white">Pipes Works & Installations</h1>
                    <p class="text-white">
                        Specialized pipe installation services for water supply, drainage, irrigation, and industrial applications. We work with various materials including HDPE, PVC, steel, and other piping systems.
                        <br><br>
                        Our expertise includes HDPE pipe welding, pipe fitting, pressure testing, and complete piping system installations. We ensure leak-proof connections and optimal flow efficiency in all our installations.
                        <br><br>
                        From residential plumbing to industrial piping systems, we deliver reliable and durable pipe works that meet international standards and client specifications.
                    </p>
                </div>
            </div>

            <!-- Service 4: Construction Chemicals -->
            <div class="flex flex-col md:flex-row-reverse gap-6">
                <!-- Image div - takes 50% -->
                <div class="md:w-1/2 w-full">
                    <img src="{{ asset('assets/forth.jpg') }}" class="h-full w-full object-cover rounded-lg" alt="Construction Chemicals"/>
                </div>

                <!-- Text div - takes 50% -->
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <h1 class="text-4xl font-bold text-white">Construction Chemicals</h1>
                    <p class="text-white">
                        We provide high-performance chemical solutions for concrete protection, waterproofing, bonding, and surface treatment. Our chemicals enhance durability and extend the lifespan of construction materials.
                        <br><br>
                        Our range includes waterproofing compounds, concrete admixtures, protective coatings, bonding agents, and surface preparation chemicals. All products meet international quality standards and are environmentally friendly.
                        <br><br>
                        Proper application of construction chemicals is crucial for structural integrity, and our certified technicians ensure precise application for optimal results.
                    </p>
                </div>
            </div>

            <!-- Service 5: Corrosion Control -->
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Image div - takes 50% -->
                <div class="md:w-1/2 w-full">
                    <img src="{{ asset('assets/plant.jpg') }}" class="h-full w-full object-cover rounded-lg" alt="Corrosion Control"/>
                </div>

                <!-- Text div - takes 50% -->
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <h1 class="text-4xl font-bold text-white">Corrosion Control</h1>
                    <p class="text-white">
                        Advanced corrosion prevention and protection systems for metal structures, pipelines, and industrial equipment. We extend service life and reduce maintenance costs through effective corrosion control.
                        <br><br>
                        Our services include protective coatings application, cathodic protection systems, corrosion monitoring, and maintenance solutions. We use high-quality materials and proven techniques to combat corrosion in harsh environments.
                        <br><br>
                        Regular inspection and maintenance programs ensure ongoing protection and early detection of potential issues, saving costs and preventing structural failures.
                    </p>
                </div>
            </div>

            <!-- Service 6: Welding and Fabrication Works -->
            <div class="flex flex-col md:flex-row-reverse gap-6">
                <!-- Image div - takes 50% -->
                <div class="md:w-1/2 w-full">
                    <img src="{{ asset('assets/gen.jpg') }}" class="h-full w-full object-cover rounded-lg" alt="Welding and Fabrication Works"/>
                </div>

                <!-- Text div - takes 50% -->
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <h1 class="text-4xl font-bold text-white">Welding & Fabrication</h1>
                    <p class="text-white">
                        Precision welding and metal fabrication services for structural steel, pipe systems, and custom metal components. We use advanced welding techniques and quality control processes.
                        <br><br>
                        Our capabilities include structural steel welding, pipe welding, custom metal fabrication, and quality welding inspection. All our welders are certified and experienced in various welding methods.
                        <br><br>
                        We maintain strict quality standards with non-destructive testing and inspection to ensure weld integrity and structural safety in all our fabrication works.
                    </p>
                </div>
            </div>

            <!-- Service 7: Supply of Materials -->
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Image div - takes 50% -->
                <div class="md:w-1/2 w-full">
                    <img src="{{ asset('assets/optics.jpg') }}" class="h-full w-full object-cover rounded-lg" alt="Supply of Materials"/>
                </div>

                <!-- Text div - takes 50% -->
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <h1 class="text-4xl font-bold text-white">Supply of Materials</h1>
                    <p class="text-white">
                        Comprehensive material procurement and supply services, ensuring quality construction materials are available when and where you need them. We maintain an extensive network of trusted suppliers.
                        <br><br>
                        We supply construction materials, engineering equipment, safety gear, and specialized tools. All materials undergo quality inspection before delivery to ensure they meet required specifications.
                        <br><br>
                        Our logistics team ensures timely delivery and proper handling of materials, reducing project delays and ensuring smooth construction operations.
                    </p>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center pt-16">
                <h2 class="text-4xl font-bold text-white mb-6">Ready to Start Your Project?</h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Contact us today to discuss how our comprehensive engineering and construction services can bring your vision to life.
                </p>
                <a href="/contact">
                    <button class="bg-yellow-500 text-black font-bold px-8 py-4 rounded-lg hover:bg-yellow-600 transition-colors duration-300 text-lg">
                        Get in Touch
                    </button>
                </a>
            </div>
        </div>
    </div>

    <style>
        /* Smooth animations */
        img {
            transition: transform 0.5s ease;
        }

        .md\:w-1\/2:hover img {
            transform: scale(1.02);
        }

        /* Fade in animation for sections */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .space-y-20 > * {
            animation: fadeIn 0.8s ease forwards;
            opacity: 0;
        }

        .space-y-20 > *:nth-child(1) { animation-delay: 0.1s; }
        .space-y-20 > *:nth-child(2) { animation-delay: 0.2s; }
        .space-y-20 > *:nth-child(3) { animation-delay: 0.3s; }
        .space-y-20 > *:nth-child(4) { animation-delay: 0.4s; }
        .space-y-20 > *:nth-child(5) { animation-delay: 0.5s; }
        .space-y-20 > *:nth-child(6) { animation-delay: 0.6s; }
        .space-y-20 > *:nth-child(7) { animation-delay: 0.7s; }
    </style>
@endsection
