@extends('layouts.main_layout')

@section('title', 'About Company')

@section('content')
    <div class=" bg-white pb:12">
        <div class="relative min-h-[350px] flex items-center">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="{{ asset('assets/site.jpg') }}" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 text-white p-8 flex justify-between items-center w-full px:4 md:px-60" >
                <h1 class="text-3xl md:text-6xl font-bold mb-3">About Us</h1>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mt-12 mb-24 px-4 md:px-60 mx-auto items-start">
            <div class="text-lg text-black w-full">
                Qualiden Engineering Limited is a Ghanaian-owned engineering and
                construction firm headquartered in Accra, established by experienced
                civil engineers with extensive expertise in water infrastructure, pipeline
                systems, and civil engineering works
                Since its inception the company has delivered are of teal
                complex projects, building proven capability in HDPE, PVC, and steel
                pipeline installations, waterproofing and concrete protection systems,
                and related engineering services.
                Qualiden Engineering operates as both a main contractor and specialist
                subcontractor, providing disciplined project execution, coordination of
                specialist trades, and engineering-led solutions for industrial and commercial developments. The company is recognised for its technical
                competence, structured project management approach, and consis-
                tent delivery to specification.
                We have a broad portfolio of successfully completed projects across a
                range of sectors including Residential, Restoration / Refurbishment,
                Hospitality, Commercial, Industrial and Healthcare. We have built our
                reputation on our client focus and hands-on approach. We are proud of
                the fact that our workload comes from our ability to handle multiple
                jobs with excellent results.
            </div>
            <div>
                <img
                    src="{{ asset('assets/mn.jpeg') }}"
                    alt="Our Mission"
                    class="w-full h-96 object-cover"
                />
            </div>
        </div>

        <div class="bg-white py-16 px-4 md:px-60">
            <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Stat 1 -->
                <div class="relative animate-fade-in-up" style="animation-delay: 0s">
                    <div class="text-4xl md:text-5xl font-bold text-black mb-2">
                        <span class="counter" data-target="20">0</span>
                    </div>
                    <div class="text-gray-600 text-sm md:text-base uppercase tracking-wide">
                        Experience
                    </div>
                    <!-- Plus Icon -->
                    <div class="absolute top-0 right-0">
                        <svg class="w-6 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 4v16M4 12h16" stroke="currentColor" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="relative animate-fade-in-up" style="animation-delay: 0.2s">
                    <div class="text-4xl md:text-5xl font-bold text-black mb-2">
                        <span class="counter" data-target="3000">0</span>
                    </div>
                    <div class="text-gray-600 text-sm md:text-base uppercase tracking-wide">
                        Cooperative Customers
                    </div>
                    <!-- Plus Icon -->
                    <div class="absolute top-0 right-0">
                        <svg class="w-6 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 4v16M4 12h16" stroke="currentColor" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="relative animate-fade-in-up" style="animation-delay: 0.4s">
                    <div class="text-4xl md:text-5xl font-bold text-black mb-2">
                        <span class="counter" data-target="200">0</span>
                    </div>
                    <div class="text-gray-600 text-sm md:text-base uppercase tracking-wide">
                        Professional Staff
                    </div>
                    <!-- Plus Icon -->
                    <div class="absolute top-0 right-0">
                        <svg class="w-6 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 4v16M4 12h16" stroke="currentColor" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="relative animate-fade-in-up" style="animation-delay: 0.6s">
                    <div class="text-4xl md:text-5xl font-bold text-black mb-2">
                        <span class="counter" data-target="100">0</span>
                    </div>
                    <div class="text-gray-600 text-sm md:text-base uppercase tracking-wide">
                        Countries & Regions
                    </div>
                    <!-- Plus Icon -->
                    <div class="absolute top-0 right-0">
                        <svg class="w-6 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 4v16M4 12h16" stroke="currentColor" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto pt-24 px-4 md:px-60">
            <!-- Rigorous Testing Section - Image Left, Text Right -->
            <div class="flex md:flex-row flex-col gap-8 items-center mb-24">
                <!-- Image -->
                <div class="flex-shrink-0 md:w-1/2 ">
                    <img
                        src="{{ asset('assets/mn.jpeg') }}"
                        alt="Rigorous Testing"
                        class="w-full h-96 object-cover"
                    />
                </div>

                <!-- Text Content -->
                <div class="md:w-1/2 ">
                    <!-- Title -->
                    <h2 class="text-2xl md:text-3xl font-bold text-black mb-4">
                        Rigorous Testing
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600 leading-relaxed">
                        We Conduct Thorough Quality Checks Throughout The Manufacturing Process To Guarantee Precision And Consistency. The Surface Of The Pipe Will Be Checked To Be Flat And Smooth, Without Defects Such As Bubbles, Cracks, Bumps, Uneven Colors, Etc. The Two Ends Of The Pipe Should Be Parallel And Without Obvious Deformation. The Performance Will Be Checked By Tensile Test, Impact Test, Compression Test, Etc.
                    </p>
                </div>
            </div>

            <!-- Excellent Service Section - Text Left, Image Right -->
            <div class="flex md:flex-row flex-col gap-8 items-center">
                <!-- Text Content -->
                <div class="md:w-1/2 ">
                    <!-- Title -->
                    <h2 class="text-2xl md:text-3xl font-bold text-black mb-4">
                        Excellent Service
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600 leading-relaxed">
                        We Have A Professional Sales Team And Technical Consultants Who Can Provide Customers With Detailed HDPE Pipe Product Consultation. According To The Customer's Specific Application Scenarios, Pressure Levels, Media Requirements And Other Conditions, We Recommend The Most Suitable Pipe Models And Specifications To Customers To Ensure That The Products Can Meet The Actual Needs Of Customers.
                    </p>
                </div>

                <!-- Image -->
                <div class="flex-shrink-0 md:w-1/2 ">
                    <img
                        src="{{ asset('assets/nm.jpeg') }}"
                        alt="Excellent Service"
                        class="w-full h-96 object-cover"
                    />
                </div>
            </div>
        </div>



        <div class="py-24 mx-4 md:mx-60">
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

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }
    </style>

    <script>
        // Counter animation function
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                let current = 0;
                const increment = target / 50;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.innerText = Math.ceil(current);
                        setTimeout(updateCounter, 30);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCounter();
            });
        }

        // Trigger animation when element is in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        // Observe the stats section
        const statsSection = document.querySelector('.bg-white');
        if (statsSection) {
            observer.observe(statsSection);
        }
    </script>
@endsection
