@extends('layouts.main_layout')

@section('title', 'Main')

@section('content')
    <div>
        <!-- Carousel Section -->
        <div class="relative carousel-container">
            <div class="carousel">
                <!-- Slide 1 -->
                <div class="carousel-slide">
                    <div class="image-container">
                        <img src="{{ asset('assets/gen.jpg') }}" class="h-full w-full object-cover" alt="landing page image"/>
                        <div class="image-overlay"></div>
                    </div>
                    <div class="slide-content md:top-96 top-auto md:bottom-auto bottom-8 left-0 text-white py-4 pl-4 md:pl-14 md:w-1/2 z-10" data-aos="fade-up">
                        <p class="text-2xl md:text-9xl font-bold block md:hidden">Qualiden Group Limited</p>
                        <p class="text-2xl md:text-9xl font-bold hidden md:block">Qualiden Group Limited</p>
                        <p class="text-sm md:text-lg mt-2 opacity-90">Civil | Electrical | Construction | HDPE Specialists</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <div class="image-container">
                        <img src="{{ asset('assets/optics.jpg') }}" class="h-full w-full object-cover" alt="second slide"/>
                        <div class="image-overlay"></div>
                    </div>
                    <div class="slide-content md:top-96 top-auto md:bottom-auto bottom-8 left-0 text-white py-4 pl-4 md:pl-14 md:w-1/2 z-10" data-aos="fade-up">
                        <p class="text-2xl md:text-9xl font-bold block md:hidden">DESIGNED<br>TO LAST</p>
                        <p class="text-2xl md:text-9xl font-bold hidden md:block">DESIGNED<br>TO LAST</p>
                        <p class="text-sm md:text-lg mt-2 opacity-90">HDPE Welding • Plumbing • Sustainable Solutions</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <div class="image-container">
                        <img src="{{ asset('assets/water.jpeg') }}" class="h-full w-full object-cover" alt="third slide"/>
                        <div class="image-overlay"></div>
                    </div>
                    <div class="slide-content md:top-96 top-auto md:bottom-auto bottom-8 left-0 text-white py-4 pl-4 md:pl-14 md:w-1/2 z-10" data-aos="fade-up">
                        <p class="text-2xl md:text-9xl font-bold block md:hidden">OUR VISION<br>OUR MISSION</p>
                        <p class="text-2xl md:text-9xl font-bold hidden md:block">OUR VISION<br>OUR MISSION</p>
                        <p class="text-sm md:text-lg mt-2 opacity-90">24/7 Management • Global Standards • Client-First</p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-slide">
                    <div class="image-container">
                        <img src="{{ asset('assets/forth.jpg') }}" class="h-full w-full object-cover" alt="fourth slide"/>
                        <div class="image-overlay"></div>
                    </div>
                    <div class="slide-content md:top-96 top-auto md:bottom-auto bottom-8 left-0 text-white py-4 pl-4 md:pl-14 md:w-1/2 z-10" data-aos="fade-up">
                        <p class="text-2xl md:text-9xl font-bold block md:hidden">BEYOND<br>CONSTRUCTION</p>
                        <p class="text-2xl md:text-9xl font-bold hidden md:block">BEYOND<br>CONSTRUCTION</p>
                        <p class="text-sm md:text-lg mt-2 opacity-90">Smart Systems • Advanced Engineering • Future-Ready</p>
                    </div>
                </div>
            </div>

            <!-- Progress Indicator -->
            <div class="carousel-progress">
                <div class="progress-item active" data-index="0">
                    <div class="progress-bar"></div>
                </div>
                <div class="progress-item" data-index="1">
                    <div class="progress-bar"></div>
                </div>
                <div class="progress-item" data-index="2">
                    <div class="progress-bar"></div>
                </div>
                <div class="progress-item" data-index="3">
                    <div class="progress-bar"></div>
                </div>
            </div>

            <!-- Bottom gradient overlay for smooth transition -->
            <div class="bottom-gradient-overlay"></div>
        </div>

        <div class="content-section bg-black">
            <div class="py-14 md:px-96 px-4 ">
                <h1 class="text-2xl font-bold text-white">Featured projects</h1>
                <hr class="my-4">
            </div>
        </div>
    </div>

    <!-- Updated CSS for auto-advance carousel -->
    <style>
        /* Main container */
        .carousel-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background-color: black;
        }

        .carousel {
            display: flex;
            transition: transform 0.8s ease-in-out;
            height: 100%;
        }

        .carousel-slide {
            position: relative;
            min-width: 100%;
            height: 100%;
        }

        /* Image container with black base */
        .image-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Overlay for image base */
        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top,
            rgba(0, 0, 0, 1) 0%,
            rgba(0, 0, 0, 0.8) 20%,
            rgba(0, 0, 0, 0.6) 40%,
            rgba(0, 0, 0, 0.4) 60%,
            rgba(0, 0, 0, 0.2) 80%,
            rgba(0, 0, 0, 0) 100%);
            pointer-events: none;
        }

        /* Slide content positioning */
        .slide-content {
            position: absolute;
            z-index: 10;
            transition: all 0.3s ease;
        }

        /* Mobile-specific positioning */
        @media (max-width: 768px) {
            .slide-content {
                bottom: 4rem !important;
                top: auto !important;
                padding-left: 1rem !important;
                padding-right: 1rem !important;
                width: 100% !important;
                text-align: center;
            }

            .slide-content p {
                text-align: center;
            }

            .carousel-container {
                height: 80vh;
            }
        }

        /* Desktop positioning */
        @media (min-width: 769px) {
            .slide-content {
                top: 60% !important;
                transform: translateY(-50%);
                text-align: left;
            }
        }

        /* Bottom gradient overlay for smooth transition to black */
        .bottom-gradient-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: linear-gradient(to top,
            rgba(0, 0, 0, 1) 0%,
            rgba(0, 0, 0, 0.8) 30%,
            rgba(0, 0, 0, 0.4) 70%,
            rgba(0, 0, 0, 0) 100%);
            pointer-events: none;
            z-index: 5;
        }

        /* Progress Indicator Styles */
        .carousel-progress {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 0.5rem;
            z-index: 20;
        }

        .progress-item {
            width: 40px;
            height: 4px;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 2px;
            overflow: hidden;
            cursor: pointer;
        }

        .progress-bar {
            height: 100%;
            width: 0%;
            background: white;
            transition: width 5s linear;
        }

        .progress-item.active .progress-bar {
            width: 100%;
        }

        /* Content section with black background */
        .content-section {
            background-color: black;
            position: relative;
            z-index: 1;
            margin-top: -5px; /* Remove any gap */
        }

        /* Ensure smooth transition */
        body {
            background-color: black;
        }
    </style>

    <!-- Updated JavaScript for auto-advance carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel');
            const slides = document.querySelectorAll('.carousel-slide');
            const progressItems = document.querySelectorAll('.progress-item');
            const progressBars = document.querySelectorAll('.progress-bar');

            let currentSlide = 0;
            const totalSlides = slides.length;
            let autoSlideInterval;

            // Function to update carousel position
            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentSlide * 100}%)`;

                // Update progress indicators
                progressItems.forEach((item, index) => {
                    if (index === currentSlide) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });

                // Reset and restart progress bars
                progressBars.forEach(bar => {
                    bar.style.transition = 'none';
                    bar.style.width = '0%';
                });

                setTimeout(() => {
                    progressBars[currentSlide].style.transition = 'width 5s linear';
                    progressBars[currentSlide].style.width = '100%';
                }, 50);
            }

            // Next slide function
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }

            // Start auto-advance
            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 5000);
            }

            // Click on progress indicator to navigate
            progressItems.forEach(item => {
                item.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    currentSlide = index;
                    updateCarousel();

                    // Restart auto-advance
                    clearInterval(autoSlideInterval);
                    startAutoSlide();
                });
            });

            // Pause auto-advance on hover
            const carouselContainer = document.querySelector('.carousel-container');
            carouselContainer.addEventListener('mouseenter', () => {
                clearInterval(autoSlideInterval);
            });

            carouselContainer.addEventListener('mouseleave', () => {
                startAutoSlide();
            });

            // Initialize carousel
            updateCarousel();
            startAutoSlide();

            // Adjust content position on window resize
            window.addEventListener('resize', function() {
                const slideContents = document.querySelectorAll('.slide-content');
                slideContents.forEach(content => {
                    if (window.innerWidth <= 768) {
                        content.style.bottom = '4rem';
                        content.style.top = 'auto';
                    } else {
                        content.style.top = '60%';
                        content.style.bottom = 'auto';
                    }
                });
            });
        });
    </script>
@endsection
