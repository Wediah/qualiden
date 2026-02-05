@php use App\Models\Project; @endphp
@extends('layouts.main_layout')

@section('title', 'Welcome')

@section('content')
    <div class="pt-20">
        <div class="pt-24 px-4 md:px-14">
            <div class="flex flex-col-reverse gap-6 md:flex-row md:items-end md:justify-between">
                <div data-aos="fade-up" class="mb-12 md:mb-20 md:w-2/3">
                    <h1 class="text-black text-4xl md:text-8xl font-semibold leading-tight md:leading-none">
                        Engineering excellence, building thriving <br> futures
                    </h1>

                    <div class="mt-6 md:hidden block">
                        <flux:button
                            href="/contact"
                            icon:trailing="arrow-up-right"
                        >
                            Get a quote
                        </flux:button>
                    </div>
                </div>

                <div class="md:w-2/6">
                    <div class="hidden md:block">
                        <flux:button
                            href="/contact"
                            icon:trailing="arrow-up-right"
                        >
                            Get a quote
                        </flux:button>
                    </div>
                    <div class="h-px w-32 bg-[#fbbf24] my-6"></div>
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

    <div data-aos="fade-up" class=" mx-4 md:mx-14 flex md:flex-row flex-col gap-12 items-center pt-24">
        <h1 class="md:text-6xl text-3xl font-bold text-black md:w-1/2">
            Established in Accra, our company was founded by a team of engineers with comprehensive experience across civil engineering and construction disciplines.
        </h1>

        <div class="flex flex-col gap-12 md:w-1/2">
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
                        Qualiden Group Limited has over 23 plants <br> and machinery ready in active service
                    </p>
                </div>

                <!-- Years Experience -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-700">Sectors Served</h3>
                    <div class="text-5xl md:text-6xl font-bold tracking-tight text-black">
                        <span class="counter" data-target="6">0</span>+
                    </div>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        We have served and still serving <br> over 6 sectors from residential to healthcare.
                    </p>
                </div>

                <!-- Current Projects -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-700">Concurrent Projects</h3>
                    <div class="text-5xl md:text-6xl font-bold tracking-tight text-black">
                        <span class="counter" data-target="5">0</span>
                    </div>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        Qualiden Group can a maximum of 1-5 <br> projects at time with attention to detail
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
        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100 z-0"></div>

        <div data-aos="fade-up" class=" mx-auto relative z-10">
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
                       class="px-6 py-2 bg-[#fbbf24] text-white rounded-full flex items-center gap-2 font-medium hover:bg-[#fbbf20] transition-colors">
                        View more
                        <flux:icon.arrow-right class="w-4 h-4" />
                    </a>
                </div>
            </div>

            @php
                $projects = Project::orderBy('created_at', 'desc')->take(2)->get();
            @endphp


                <!-- Project Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($projects as $project)
                <!-- Project 1 - Tema Port Expansion -->
                <a href="{{ route('projects.show', $project) }}"
                   aria-label="{{ $project->name }}"
                   class="block group relative overflow-hidden rounded-xl bg-white border border-gray-200"
                >
                    <div class="aspect-video bg-cover bg-center" style="background-image: url('{{  Storage::url($project->images->first()->path) }}');"></div>
                    <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold">{{ $project->name }}</h3>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-end">
                            <flux:icon.arrow-top-right-on-square class="w-6 h-6 text-gray-300 group-hover:text-white transition-colors" />
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-16 px-4 md:px-14 bg-white">
        <div class=" mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Left Menu -->
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-black">Get to know us</h2>
                    <h3 class="text-xl font-bold text-gray-900">Our work culture</h3>

                    <div class="space-y-4">
                        @php
                            $sections = [
                                [
                                    'id' => 'why-us',
                                    'title' => 'Why Us',
                                    'image' => 'assets/whyus.jpeg',
                                     'heading' => 'Tailored Service & Proven Excellence',
                                    'content' => 'We deliver tailored services with relevant experience, leading-edge H&S systems, and hands-on management. Our success comes from relentless attention to detail, an experienced team, and a competitive edge in reliable project execution. We are committed to exceeding client expectations through value-add engineering solutions.'
                                ],
                                [
                                    'id' => 'investors',
                                    'title' => 'Health, Safety and Welfare',
                                    'image' => 'assets/safety.jpeg',
                                    'heading' => 'Absolute Pre-Requisite: Zero Harm',
                                    'content' => 'The health and safety of our employees and all those affected by our operations is an absolute pre-requisite. Our Board and staff are fully committed to implementing and continuously improving Integrated Management Systems that align with industry best practices. Safety is non-negotiable in every operation.'
                                ],

                                [
                                    'id' => 'join-us',
                                    'title' => 'Quality Management',
                                    'image' => 'assets/quality.jpeg',
                                    'heading' => 'Get It Right First Time, Every Time',
                                    'content' => 'Our Quality Management System follows six core principles: long-term quality control, nurturing quality culture, client-defined standards, quality planning, collaborative delivery ("Work Together to Deliver the Best – First Time"), and continuous improvement. We are committed to projects that not only meet but exceed expectations.'
                                ]
                            ];
                        @endphp

                        @foreach($sections as $index => $section)
                            <button
                                data-index="{{ $index }}"
                                class="w-full text-left p-4 rounded-lg transition-colors {{ $loop->first ? 'bg-gray-100 text-black font-medium' : 'text-gray-600 hover:bg-gray-50' }}"
                            >
                                {{ $section['title'] }}
                            </button>
                        @endforeach
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex gap-3 pt-4">
                        <button
                            id="prevBtn"
                            class="w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition-colors"
                            aria-label="Previous section"
                        >
                            <flux:icon.arrow-left class="w-5 h-5" />
                        </button>
                        <button
                            id="nextBtn"
                            class="px-6 py-2 bg-[#fbbf24] text-white rounded-full flex items-center gap-2 font-medium hover:bg-gray-800 transition-colors"
                        >
                            Next
                            <flux:icon.arrow-right class="w-4 h-4" />
                        </button>
                    </div>
                </div>

                <!-- Right Content Area -->
                <div class="space-y-6">
                    <div class="relative h-[500px] md:h-[600px] rounded-xl overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center" id="heroImage"></div>

                        <!-- 🔥 Strong, readable overlay -->
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                            <h2 class="text-2xl md:text-3xl font-bold mb-3" id="sectionHeading">Tailored Service & Proven Excellence</h2>
                            <p class="text-gray-200 leading-relaxed mb-6" id="sectionContent">
                                We deliver tailored services with relevant experience, leading-edge H&S systems, and hands-on management...
                            </p>
                            <div class="flex items-center gap-4">
                                <a href="/firm" class="text-white font-medium flex items-center gap-2">
                                    Read more
                                    <flux:icon.arrow-top-right-on-square class="w-5 h-5" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = @json($sections);
            let currentIndex = 0;

            const heroImage = document.getElementById('heroImage');
            const sectionHeading = document.getElementById('sectionHeading');
            const sectionContent = document.getElementById('sectionContent');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const menuButtons = document.querySelectorAll('[data-index]');

            // Initialize first section
            function showSection(index) {
                if (index < 0) index = sections.length - 1;
                if (index >= sections.length) index = 0;
                currentIndex = index;

                const section = sections[index];

                // Update image
                heroImage.style.backgroundImage = `url('${section.image}')`;

                // Update text
                sectionHeading.textContent = section.heading;
                sectionContent.innerHTML = section.content;

                // Update active menu button
                menuButtons.forEach(btn => {
                    const btnIndex = parseInt(btn.dataset.index);
                    if (btnIndex === currentIndex) {
                        btn.classList.remove('text-gray-600', 'hover:bg-gray-50');
                        btn.classList.add('bg-gray-100', 'text-black', 'font-medium');
                    } else {
                        btn.classList.remove('bg-gray-100', 'text-black', 'font-medium');
                        btn.classList.add('text-gray-600', 'hover:bg-gray-50');
                    }
                });

                // Update buttons
                prevBtn.disabled = (currentIndex === 0);
                nextBtn.textContent = (currentIndex === sections.length - 1) ? 'Finish' : 'Next';
            }

            // Click handlers for menu
            menuButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const index = parseInt(btn.dataset.index);
                    showSection(index);
                });
            });

            // Navigation buttons
            nextBtn.addEventListener('click', () => {
                showSection(currentIndex + 1);
            });

            prevBtn.addEventListener('click', () => {
                showSection(currentIndex - 1);
            });

            // Initialize
            showSection(0);
        });
    </script>

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
