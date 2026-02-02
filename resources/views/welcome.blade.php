@extends('layouts.main_layout')

@section('title', 'Welcome')

@section('content')
    <div class="pt-20">
        <div class="pt-24 px-4 md:px-14">
            <div class="flex flex-col-reverse gap-6 md:flex-row md:items-end md:justify-between">
                <div class="mb-12 md:mb-20 md:w-2/3">
                    <h1 class="text-black text-4xl md:text-8xl font-semibold leading-tight md:leading-none">
                        Engineering excellence, building thriving <br> futures
                    </h1>
                </div>

                <div class="md:w-2/6">
                    <div class="h-px w-16 bg-[#fbbf24] mb-6"></div>
                    <p class="text-lg md:text-3xl text-gray-700 leading-relaxed">
                        Develop new solutions to meet changing needs, leveraging our deep customer insight,
                        practical expertise and broad range of capabilities.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-row gap-12 h-96 pt-12">
            <img src="{{ asset('assets/slide1.jpeg') }}" class="h-full w-2/6 object-cover" alt="landing page image"/>
            <img src="{{ asset('assets/slide2.jpeg') }}" class="h-full w-2/3 object-cover" alt="landing page image"/>
        </div>
    </div>

    <div class="mx-4 md:mx-14 flex md:flex-row flex-col gap-12 items-center pt-24">
        <h1 class="md:text-6xl text-3xl font-bold text-black w-1/2">
            Founded in Accra by engineers with extensive experience in civil engineering and construction
        </h1>

        <div class="flex flex-col gap-12 w-1/2">
            <p class="text-2xl font-normal text-gray-500">
                We specialize in civil engineering, general construction works,
                pipe systems (HDPE welding, PVC, and steel fittings), engineering chemicals,
                waterproofing, concrete protection, and comprehensive project management.
            </p>

            <flux:button
                variant="primary" color="amber"
                href="/projects"
                icon:trailing="arrow-down"
            >
                Our work
            </flux:button>
        </div>
    </div>

    <div class="pb-12 px-4 md:px-14 bg-white" id="statsSection">
        <hr class="my-12 border-gray-300">
        <div class=" mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <!-- Total Workers -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-700">Total Plant & Machinery</h3>
                    <div class="text-5xl md:text-6xl font-bold tracking-tight text-black">
                        <span class="counter" data-target="40">0</span>+
                    </div>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        Qualiden Group Limited has a over 23 plants and machinery ready in active service
                    </p>
                </div>

                <!-- Years Experience -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-700">Sectors Served</h3>
                    <div class="text-5xl md:text-6xl font-bold tracking-tight text-black">
                        <span class="counter" data-target="6">0</span>+
                    </div>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        We have served and still serving over 6 sectors from residential to healthcare.
                    </p>
                </div>

                <!-- Current Projects -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-700">Concurrent Projects</h3>
                    <div class="text-5xl md:text-6xl font-bold tracking-tight text-black">
                        <span class="counter" data-target="5">0</span>
                    </div>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        Qualiden Group can a maximum of 1-5 projects at time with attention to detail
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- HORIZONTAL HALF BLACK / HALF WHITE PROJECTS SECTION -->
    <div class="relative py-16 px-4 md:px-14 overflow-hidden">
        <!-- Top Half - White -->
        <div class="absolute inset-x-0 top-0 h-1/2 bg-black z-0"></div>
        <!-- Bottom Half - Black -->
        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-white z-0"></div>

        <div class=" mx-auto relative z-10">
            <!-- Header Text -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-12">
                <div class="lg:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight text-white">
                        Committed to building long-term relationships with our partners, suppliers and clients.
                    </h2>
                </div>
                <div class="text-gray-700 lg:pl-12">
                    <p class="text-lg leading-relaxed">
                        We recognise that our success is the direct result of the hard work of the people who work for us, with us and alongside us.
                    </p>
                </div>
            </div>

            <!-- Section Title & Navigation -->
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
                <h3 class="text-2xl font-bold mb-4 md:mb-0 text-white">Our projects</h3>
                <div class="flex gap-3">
                    <a href="/projects"
                       class="px-6 py-2 bg-black text-white rounded-full flex items-center gap-2 font-medium hover:bg-gray-800 transition-colors">
                        View more
                        <flux:icon.arrow-right class="w-4 h-4" />
                    </a>
                </div>
            </div>

            <!-- Project Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Project 1 - Tema Port Expansion -->
                <a href="#" class="block group relative overflow-hidden rounded-xl bg-white border border-gray-200">
                    <div class="aspect-video bg-cover bg-center" style="background-image: url('{{ asset('assets/tema-port.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold">Tema Port Expansion Project Phase 2</h3>
                                <p class="text-gray-300 text-sm mt-1">Firefighting & Service Water Lines</p>
                            </div>
                            <span class="text-gray-300 text-sm">Ghana</span>
                        </div>
                        <div class="mt-4 flex justify-end">
                            <flux:icon.arrow-top-right-on-square class="w-6 h-6 text-gray-300 group-hover:text-white transition-colors" />
                        </div>
                    </div>
                </a>

                <!-- Project 2 - GWCL Pipeline -->
                <a href="#" class="block group relative overflow-hidden rounded-xl bg-white border border-gray-200">
                    <div class="aspect-video bg-cover bg-center" style="background-image: url('{{ asset('assets/gwcl-pipeline.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold">GWCL Pipeline Relocation</h3>
                                <p class="text-gray-300 text-sm mt-1">OD 400mm HDPE Pipe Installation</p>
                            </div>
                            <span class="text-gray-300 text-sm">Accra, Ghana</span>
                        </div>
                        <div class="mt-4 flex justify-end">
                            <flux:icon.arrow-top-right-on-square class="w-6 h-6 text-gray-300 group-hover:text-white transition-colors" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;
            let hasAnimated = false;

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const increment = target / speed;

                const updateCount = () => {
                    const count = +counter.innerText;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 10);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !hasAnimated) {
                        hasAnimated = true;
                        counters.forEach(counter => {
                            animateCounter(counter);
                        });
                    }
                });
            }, {
                threshold: 0.5
            });

            const statsSection = document.getElementById('statsSection');
            if (statsSection) {
                observer.observe(statsSection);
            }
        });
    </script>
@endsection
