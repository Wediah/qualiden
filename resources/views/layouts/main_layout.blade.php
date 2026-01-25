<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qualiden Group Limited | @yield('title')</title>
    {{--    <link rel="icon" href="{{ asset('assets/logo.jpg') }}" type="image/x-icon">--}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['AvanteGarde', 'sans-serif'],
                    },
                    gridTemplateRows: {
                        auto: 'auto',
                    },
                    colors: {
                        'deep': '#224435',
                    },
                },
            },
        };
    </script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <style>
        /* Mobile menu styles */
        #mobile-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: white;
            z-index: 40;
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
            overflow-y: auto;
        }
        #mobile-menu.active {
            transform: translateX(0);
        }
        #mobile-menu ul li {
            padding: 1.5rem 0;
            border-bottom: 1px solid #e5e7eb;
            width: 100%;
            text-align: center;
        }
        #mobile-menu ul li a {
            font-size: 1.25rem;
            color: #1f2937;
        }
        #close-menu {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            color: #1f2937;
        }
        .no-scroll {
            overflow: hidden;
        }
        /* Ensure navbar remains transparent by default */
        #navbar {
            background-color: transparent !important;
        }
        #navbar.scrolled {
            background-color: white !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        /* Enhanced Dropdown styles for large screens */
        .dropdown-lg {
            position: relative;
        }

        .dropdown-content-lg {
            display: none;
            position: absolute;
            top: 100%;
            left: -20px;
            background-color: rgba(0, 0, 0, 0.9); /* Semi-transparent black background */
            min-width: 240px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            border-radius: 8px;
            padding: 12px 0;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
            pointer-events: none;
            backdrop-filter: blur(10px); /* Adds glass effect */
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dropdown-lg:hover .dropdown-content-lg {
            display: block;
            opacity: 1;
            transform: translateY(0);
            pointer-events: all;
        }

        .dropdown-content-lg a {
            display: flex;
            align-items: center;
            padding: 12px 24px;
            color: white; /* White text */
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            border-left: 3px solid transparent;
            transition: all 0.2s ease;
        }

        .dropdown-content-lg a:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Light overlay on hover */
            color: white;
            border-left-color: #fbbf24; /* Yellow accent */
            padding-left: 28px;
        }

        .dropdown-content-lg a:not(:last-child) {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1); /* Subtle divider */
        }

        /* Dropdown trigger styling */
        .dropdown-trigger {
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            position: relative;
            padding: 8px 0;
        }

        .dropdown-trigger::after {
            content: '▼';
            font-size: 10px;
            margin-left: 4px;
            transition: transform 0.3s ease;
        }

        .dropdown-lg:hover .dropdown-trigger::after {
            transform: rotate(180deg);
        }

        /* Ensure proper spacing for navbar */
        #desktop-menu ul {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        #desktop-menu a, .dropdown-trigger {
            color: white;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        #navbar.scrolled #desktop-menu a,
        #navbar.scrolled .dropdown-trigger {
            color: #111827;
        }

        #desktop-menu a:hover,
        .dropdown-trigger:hover {
            color: #fbbf24;
        }

        #navbar.scrolled #desktop-menu a:hover,
        #navbar.scrolled .dropdown-trigger:hover {
            color: #224435;
        }

        /* Mobile dropdown styles */
        .mobile-dropdown {
            width: 100%;
        }
        .mobile-dropdown-content {
            display: none;
            background-color: #f9fafb;
            width: 100%;
        }
        .mobile-dropdown-content.active {
            display: block;
        }
        .mobile-dropdown-content a {
            padding: 1rem 2rem;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
            display: block;
            font-size: 16px;
        }
        .mobile-dropdown-content a:last-child {
            border-bottom: none;
        }
        .dropdown-toggle {
            cursor: pointer;
            position: relative;
        }
        .dropdown-toggle::after {
            content: '▼';
            font-size: 0.6rem;
            margin-left: 0.25rem;
            vertical-align: middle;
            transition: transform 0.3s;
        }
        .dropdown-toggle.active::after {
            transform: rotate(180deg);
        }
    </style>
</head>
<body class="font-sans">
<nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 text-white py-4 px-4 md:px-14">
    <div class="flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center space-x-1 rtl:space-x-reverse">
            <span id="big1" class="self-center text-xl font-semibold whitespace-nowrap ">Qualiden Group Limited</span>
        </a>

        <!-- Mobile menu button -->
        <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

        <!-- Desktop Menu -->
        <div class="hidden w-full md:block md:w-auto" id="desktop-menu">
            <ul class="flex flex-col md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 font-medium">
                <li>
                    <a href="/" class="block py-2 px-3 md:hover:bg-transparent md:border-0 md:p-0">Home</a>
                </li>

                <!-- About Dropdown -->
                <li class="dropdown-lg">
                    <span class="dropdown-trigger block py-2 px-3 md:hover:bg-transparent md:border-0 md:p-0 cursor-pointer">About</span>
                    <div class="dropdown-content-lg">
                        <a href="/firm">Our Company</a>
                        <a href="/team">Our Team</a>
                        <a href="/mission">Mission & Vision</a>
                        <a href="/values">Core Values</a>
                    </div>
                </li>

                <li>
                    <a href="/services" class="block py-2 px-3 md:hover:bg-transparent md:border-0 md:p-0">Services</a>
                </li>

                <!-- Projects Dropdown -->
                <li class="dropdown-lg">
                    <span class="dropdown-trigger block py-2 px-3 md:hover:bg-transparent md:border-0 md:p-0 cursor-pointer">Projects</span>
                    <div class="dropdown-content-lg">
                        <a href="/projects/completed">Completed Projects</a>
                        <a href="/projects/ongoing">Ongoing Projects</a>
                        <a href="/projects/upcoming">Upcoming Projects</a>
                        <a href="/projects/portfolio">Project Portfolio</a>
                        <a href="/projects/case-studies">Case Studies</a>
                    </div>
                </li>

                <li>
                    <a href="/contact" class="block py-2 px-3 md:hover:bg-transparent md:border-0 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu (Full Screen) -->
    <div id="mobile-menu">
        <button id="close-menu" type="button" class="p-2 rounded-lg hover:bg-gray-100">
            <svg class="w-6 h-6" fill="none" stroke="#1f2937" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <ul class="flex flex-col items-center justify-center h-full pt-16">
            <li class="w-full text-center">
                <a href="/" class="block w-full py-4 text-lg font-medium text-black">Home</a>
            </li>

            <!-- Mobile About Dropdown -->
            <li class="w-full text-center mobile-dropdown">
                <div class="dropdown-toggle block w-full py-4 cursor-pointer text-lg font-medium text-black">
                    About
                </div>
                <div class="mobile-dropdown-content">
                    <a href="/firm">Our Company</a>
                    <a href="/team">Our Team</a>
                    <a href="/mission">Mission & Vision</a>
                    <a href="/values">Core Values</a>
                </div>
            </li>

            <li class="w-full text-center">
                <a href="/services" class="block w-full py-4 text-lg font-medium text-black">Services</a>
            </li>

            <!-- Mobile Projects Dropdown -->
            <li class="w-full text-center mobile-dropdown">
                <div class="dropdown-toggle block w-full py-4 cursor-pointer text-lg font-medium text-black">
                    Projects
                </div>
                <div class="mobile-dropdown-content">
                    <a href="/projects/completed">Completed Projects</a>
                    <a href="/projects/ongoing">Ongoing Projects</a>
                    <a href="/projects/upcoming">Upcoming Projects</a>
                    <a href="/projects/portfolio">Project Portfolio</a>
                    <a href="/projects/case-studies">Case Studies</a>
                </div>
            </li>

            <li class="w-full text-center">
                <a href="/contact" class="block w-full py-4 text-lg font-medium text-black">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div class="pt-16">
    @yield('content')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</div>

<footer class="bg-black pt-16 pb-8">
    <hr class=" mx-4 md:mx-96 my-4">
    <div class=" px-4 md:px-96">
        <!-- Grid layout -->
        <div class="grid md:grid-cols-4 grid-cols-2  mb-12">
            <!-- Studio -->
            <div class="flex flex-col">
                <h3 class="text-sm font-semibold text-white mb-4 uppercase tracking-wider">Office</h3>
                <ul class="flex flex-col gap-2">
                    <li class="text-gray-400 text-sm">Accra, Ghana</li>
                    <li class="text-gray-400 text-sm">14th Street, North Kaneshie</li>
                    <li class="text-gray-400 text-sm">GXWH658</li>
                </ul>
            </div>

            <!-- Careers -->
            <div class="flex flex-col">
                <h3 class="text-sm font-semibold text-white mb-4 uppercase tracking-wider">Careers</h3>
                <ul class="flex flex-col gap-2">
                    <li>
                        <a href="#" class="text-gray-400 text-sm hover:text-white transition-colors">
                            careers
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 text-sm hover:text-white transition-colors">
                            Life at Qualiden Group
                        </a>
                    </li>
                    <li>
                        <a href="mailto:careers@qualiden.com" class="text-gray-400 text-sm hover:text-white transition-colors">
                            careers@qualidengroup.com
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Press -->
            <div class="flex flex-col">
                <h3 class="text-sm font-semibold text-white mb-4 uppercase tracking-wider">Enquires</h3>
                <ul class="flex flex-col gap-2">
                    <li>
                        <a href="mailto:press@qualiden.com" class="text-gray-400 text-sm hover:text-white transition-colors">
                            info@qualidengroup.com
                        </a>
                    </li>
                </ul>
            </div>

            <!-- New Business -->
            <div class="flex flex-col">
                <h3 class="text-sm font-semibold text-white mb-4 uppercase tracking-wider">New Business</h3>
                <ul class="flex flex-col gap-2">
                    <li>
                        <a href="mailto:newbusiness@qualidengroup.com" class="text-gray-400 text-sm hover:text-white transition-colors">
                            newbusinessafrica@qualidengroup.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <hr class="border-gray-800 my-8">

        <!-- Copyright -->
        <div class="text-center">
            <p class="text-sm text-gray-400">
                Copyright © 2026 Qualiden Group Limited. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<script>
    // Mobile menu functionality
    const menuToggle = document.getElementById('menu-toggle');
    const closeMenu = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.add('active');
        body.classList.add('no-scroll');
    });

    closeMenu.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        body.classList.remove('no-scroll');
    });

    // Mobile dropdown functionality
    document.querySelectorAll('.mobile-dropdown .dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const isActive = content.classList.contains('active');

            // Close all other dropdowns
            document.querySelectorAll('.mobile-dropdown-content').forEach(dropdown => {
                dropdown.classList.remove('active');
            });

            // Toggle current dropdown
            if (!isActive) {
                content.classList.add('active');
                this.classList.add('active');
            } else {
                content.classList.remove('active');
                this.classList.remove('active');
            }
        });
    });

    // Close menu when clicking on a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
            body.classList.remove('no-scroll');

            // Also close any open dropdowns
            document.querySelectorAll('.mobile-dropdown-content').forEach(dropdown => {
                dropdown.classList.remove('active');
            });
            document.querySelectorAll('.mobile-dropdown .dropdown-toggle').forEach(toggle => {
                toggle.classList.remove('active');
            });
        });
    });

    // Scroll functionality - SIMPLIFIED LIKE RETHINKAI
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        const navLogo = document.getElementById('big1');
        const navLinks = document.querySelectorAll('#desktop-menu a, #desktop-menu .dropdown-trigger');
        const menuToggle = document.getElementById('menu-toggle');

        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            navLogo.classList.add('text-black');

            // Apply black text to desktop nav links
            navLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-gray-900'); // Use 900 for true black
            });

            // Update mobile menu button color
            menuToggle.classList.remove('text-white');
            menuToggle.classList.add('text-gray-900');
        } else {
            navbar.classList.remove('scrolled');
            navLogo.classList.remove('text-black');

            // Revert to white text
            navLinks.forEach(link => {
                link.classList.remove('text-gray-900');
                link.classList.add('text-white');
            });

            // Update mobile menu button color
            menuToggle.classList.remove('text-gray-900');
            menuToggle.classList.add('text-white');
        }
    });

    // Dropdown hover functionality for desktop
    document.querySelectorAll('.dropdown-lg').forEach(dropdown => {
        const content = dropdown.querySelector('.dropdown-content-lg');

        dropdown.addEventListener('mouseenter', function() {
            content.style.display = 'block';
            setTimeout(() => {
                content.style.opacity = '1';
                content.style.transform = 'translateY(0)';
                content.style.pointerEvents = 'all';
            }, 10);
        });

        dropdown.addEventListener('mouseleave', function() {
            content.style.opacity = '0';
            content.style.transform = 'translateY(10px)';
            content.style.pointerEvents = 'none';

            setTimeout(() => {
                if (content.style.opacity === '0') {
                    content.style.display = 'none';
                }
            }, 300);
        });
    });

    // Close dropdowns when clicking outside (for touch devices)
    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.dropdown-lg');
        dropdowns.forEach(dropdown => {
            if (!dropdown.contains(event.target)) {
                const content = dropdown.querySelector('.dropdown-content-lg');
                content.style.display = 'none';
                content.style.opacity = '0';
                content.style.transform = 'translateY(10px)';
                content.style.pointerEvents = 'none';
            }
        });
    });
</script>
</body>
</html>
