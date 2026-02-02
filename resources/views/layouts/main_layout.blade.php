<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qualiden Group Limited | @yield('title')</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon" sizes="62x62">
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
        /* Mobile menu */
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

        /* Dropdown styles */
        .dropdown-lg { position: relative; }
        .dropdown-content-lg {
            display: none;
            position: absolute;
            top: 100%;
            left: -20px;
            background-color: rgba(0, 0, 0, 0.9);
            min-width: 240px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            border-radius: 8px;
            padding: 12px 0;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
            pointer-events: none;
            backdrop-filter: blur(10px);
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
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            border-left: 3px solid transparent;
            transition: all 0.2s ease;
        }
        .dropdown-content-lg a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-left-color: #fbbf24;
            padding-left: 28px;
        }
        .dropdown-content-lg a:not(:last-child) {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dropdown-trigger {
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
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

        /* Mobile dropdown */
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

<!-- ✅ FIXED TRANSPARENT NAVBAR -->
<nav id="navbar" class="absolute top-0 w-full z-50 bg-transparent text-black py-4 px-4 md:px-14">
    <div class="flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center space-x-1 rtl:space-x-reverse">
            <img id="white-logo" src="{{ asset('assets/logo.png') }}" class="h-12" alt="Qualiden Group Limited Logo" />
            <span id="big1" class="self-center text-md font-semibold whitespace-nowrap">Qualiden Group</span>
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
            <ul class="flex flex-col md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  ">
                <li>
                    <a href="/services" class="block py-2 px-3 md:p-0 font-light text-sm relative after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-[1px] after:w-0 hover:after:w-full after:bg-current after:transition-all after:duration-300 hover:after:bg-[#fbbf24]">
                        WHAT WE DO
                    </a>
                </li>
                <li>
                    <a href="projects" class="block py-2 px-3 md:p-0 font-light text-sm relative after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-[1px] after:w-0 hover:after:w-full after:bg-current after:transition-all after:duration-300 hover:after:bg-[#fbbf24]">OUR PROJECTS
                    </a>
                </li>
                <li>
                    <a href="/firm" class="block py-2 px-3 md:p-0 font-light text-sm relative after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-[1px] after:w-0 hover:after:w-full after:bg-current after:transition-all after:duration-300 hover:after:bg-[#fbbf24]">
                        ALL ABOUT US
                    </a>
                </li>
            </ul>
        </div>

        <div class="hidden w-full md:block md:w-auto">
            <a href="/contact" class="py-2 px-3 md:p-0 group flex items-center gap-2 transition-colors font-light text-sm">
                CONTACT US
                <span class="inline-block group-hover:translate-x-1 transition-transform duration-300 group-hover:text-[#fbbf24]">
                    <flux:icon.arrow-right />
                </span>
            </a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu">
        <button id="close-menu" type="button" class="p-2 rounded-lg hover:bg-gray-100 absolute top-4 right-4">
            <svg class="w-6 h-6" fill="none" stroke="#1f2937" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <ul class="flex flex-col items-center justify-center h-full pt-16">
            <li class="w-full text-center"><a href="/" class="block w-full py-4 text-lg font-medium text-black">HOME</a></li>
            <li class="w-full text-center"><a href="/services" class="block w-full py-4 text-lg font-medium text-black">OUR PROJECTS</a></li>
            <li class="w-full text-center"><a href="/services" class="block w-full py-4 text-lg font-medium text-black">WHAT WE DO</a></li>
            <li class="w-full text-center mobile-dropdown">
                <a href="/firm">ALL ABOUT US</a>
            </li>
            <li class="w-full text-center mobile-dropdown">
                <a href="/contact">CONTACT US</a>
            </li>
        </ul>
    </div>
</nav>

<!-- ✅ CONTENT AREA – pushed down so it doesn't hide under navbar -->
<div>
    @yield('content')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
</div>


<!-- Footer -->
<footer class="bg-black pt-16 pb-2 m-2 rounded-b-lg">
    <div class="flex flex-col mx-4 md:mx-14 my-4 text-white">
        <a href="/" class="flex items-center space-x-1 rtl:space-x-reverse">
            <img id="white-logo" src="{{ asset('assets/logo.png') }}" class="h-12" alt="Qualiden Group Limited Logo" />
            <span id="big1" class="self-center text-md font-semibold whitespace-nowrap">Qualiden Group</span>
        </a>

        <h1 class="text-4xl md:text-6xl mt-6 font-semibold md:w-3/4">
            Improving people's future through quality and innovative infrastructures
        </h1>

        <hr class="my-12 border-gray-700">

        <div class="flex justify-between flex-col items-center md:flex-row gap-6">
            <div>
                <ul class="flex flex-row gap-6 text-gray-200 text-sm">
                    <li><a href="/firm" class="hover:text-[#fbbf24] transition-colors">What we do</a></li>
                    <li><a href="/projects" class="hover:text-[#fbbf24] transition-colors">Our projects</a></li>
                    <li><a href="/about" class="hover:text-[#fbbf24] transition-colors">All about us</a></li>
                </ul>
            </div>

            <div>
                <ul class="flex flex-row gap-2">
                    <li>
                        <a href="https://www.linkedin.com/" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-white hover:text-[#fbbf24] transition-colors">
                            <i class='bx bxl-linkedin text-2xl'></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-white hover:text-[#fbbf24] transition-colors">
                            <i class='bx bxl-instagram text-2xl'></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-white hover:text-[#fbbf24] transition-colors">
                            <i class='bx bxl-facebook text-2xl'></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-white hover:text-[#fbbf24] transition-colors">
                            <i class='bx bxl-tiktok text-2xl'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <h1 class="text-sm font-light text-center mt-12">Qualiden | Copyright <i class='bx bx-copyright text-sm'></i> 2026 | All rights reserved</h1>
    </div>
</footer>

<!-- JavaScript -->
<script>
    // Mobile menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const closeMenu = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.add('active');
        body.classList.add('no-scroll');
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        body.classList.remove('no-scroll');
    });

    // Mobile dropdowns
    document.querySelectorAll('.mobile-dropdown .dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const isActive = content.classList.contains('active');

            document.querySelectorAll('.mobile-dropdown-content').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('.mobile-dropdown .dropdown-toggle').forEach(el => el.classList.remove('active'));

            if (!isActive) {
                content.classList.add('active');
                this.classList.add('active');
            }
        });
    });

    // Close mobile menu on link click
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            body.classList.remove('no-scroll');
            document.querySelectorAll('.mobile-dropdown-content').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('.mobile-dropdown .dropdown-toggle').forEach(el => el.classList.remove('active'));
        });
    });

    // Desktop dropdowns (hover only)
    document.querySelectorAll('.dropdown-lg').forEach(dropdown => {
        const content = dropdown.querySelector('.dropdown-content-lg');
        dropdown.addEventListener('mouseenter', () => content.style.display = 'block');
        dropdown.addEventListener('mouseleave', () => content.style.display = 'none');
    });
</script>
</body>
</html>
