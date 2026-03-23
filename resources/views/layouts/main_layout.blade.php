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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        primary: '#fbbf24',
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
            z-index: 1000;
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
            overflow-y: auto;
        }
        #mobile-menu.active {
            transform: translateX(0);
        }
        #close-menu {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            color: #1f2937;
            z-index: 1001;
        }
        .no-scroll {
            overflow: hidden;
        }

        /* Let's Chat Bubble */
        .chat-bubble {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .chat-bubble:hover {
            transform: scale(1.1);
        }
        .chat-bubble-inner {
            background-color: #fbbf24;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .chat-bubble-inner i {
            font-size: 28px;
            color: #1f2937;
        }

        /* Pulse animation */
        .pulse {
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(251, 191, 36, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(251, 191, 36, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(251, 191, 36, 0);
            }
        }

        /* Chat modal */
        .chat-modal {
            position: fixed;
            bottom: 100px;
            right: 30px;
            width: 350px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            z-index: 1000;
            display: none;
            overflow: hidden;
        }
        .chat-modal.active {
            display: block;
            animation: slideUp 0.3s ease;
        }
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="font-sans">

<!-- NAVBAR -->
<nav id="navbar" class="absolute top-0 w-full z-50 bg-white/50 text-black py-4 px-4 md:px-60">
    <div class="mx-auto py-4">
        <div class="flex flex-wrap items-center justify-between">

            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2">
                <img id="white-logo" src="{{ asset('assets/logo.png') }}" class="h-10 md:h-12" alt="DRD Logo" />
                <span class="text-xl md:text-2xl font-bold text-black">Qualiden Group</span>
            </a>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex items-center space-x-8">
                <ul class="flex space-x-8">
                    <li><a href="/" class="text-gray-700 hover:text-[#fbbf24] transition-colors text-sm font-medium">HOME</a></li>
                    <li><a href="/about" class="text-gray-700 hover:text-[#fbbf24] transition-colors text-sm font-medium">ABOUT US</a></li>
                    <li><a href="/products" class="text-gray-700 hover:text-[#fbbf24] transition-colors text-sm font-medium">PRODUCTS</a></li>
                    <li><a href="/news" class="text-gray-700 hover:text-[#fbbf24] transition-colors text-sm font-medium">NEWS</a></li>
                    <li><a href="/cases" class="text-gray-700 hover:text-[#fbbf24] transition-colors text-sm font-medium">CASES</a></li>
                    <li><a href="/services" class="text-gray-700 hover:text-[#fbbf24] transition-colors text-sm font-medium">SERVICES</a></li>
                    <li><a href="/contact" class="text-gray-700 hover:text-[#fbbf24] transition-colors text-sm font-medium">CONTACT</a></li>
                </ul>
            </div>

            <!-- Right Side: Get a Quote, Language, Search -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="/quote" class="bg-[#fbbf24] hover:bg-yellow-500 text-black font-semibold px-5 py-2 text-sm transition-colors">
                    Get a Quote
                </a>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-700 text-sm font-medium">EN</span>
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
                <div class="relative">
                    <input
                        type="text"
                        placeholder="Search Here......"
                        class="pl-8 pr-4 py-2 border border-gray-300 rounded text-sm w-48 focus:outline-none focus:border-[#fbbf24]"
                    >
                    <svg class="absolute left-2 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>

            <!-- Hamburger Menu Button for Mobile -->
            <button id="menu-toggle" type="button" class="lg:hidden inline-flex items-center p-2 w-10 h-10 justify-center text-sm bg-[#fbbf24] text-black rounded-md hover:bg-yellow-500 focus:outline-none">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- MOBILE MENU -->
<div id="mobile-menu">
    <button id="close-menu" type="button" class="p-2 rounded-lg hover:bg-gray-100 absolute top-4 right-4">
        <svg class="w-6 h-6" fill="none" stroke="#1f2937" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <div class="flex flex-col items-center justify-center min-h-screen pt-20 pb-10 px-6">
        <!-- Logo in Mobile Menu -->
        <div class="mb-8 text-center">
            <img src="{{ asset('assets/logo.png') }}" class="h-16 mx-auto mb-3" alt="Qualiden Group">
            <span class="text-xl font-bold text-black">Qualiden Group</span>
        </div>

        <!-- Navigation Links -->
        <ul class="w-full space-y-4 mb-8">
            <li class="text-center border-b border-gray-200 pb-3">
                <a href="/" class="block text-lg font-semibold text-black hover:text-[#fbbf24] transition-colors">HOME</a>
            </li>
            <li class="text-center border-b border-gray-200 pb-3">
                <a href="/about" class="block text-lg font-semibold text-black hover:text-[#fbbf24] transition-colors">ABOUT US</a>
            </li>
            <li class="text-center border-b border-gray-200 pb-3">
                <a href="/products" class="block text-lg font-semibold text-black hover:text-[#fbbf24] transition-colors">PRODUCTS</a>
            </li>
            <li class="text-center border-b border-gray-200 pb-3">
                <a href="/news" class="block text-lg font-semibold text-black hover:text-[#fbbf24] transition-colors">NEWS</a>
            </li>
            <li class="text-center border-b border-gray-200 pb-3">
                <a href="/cases" class="block text-lg font-semibold text-black hover:text-[#fbbf24] transition-colors">CASES</a>
            </li>
            <li class="text-center border-b border-gray-200 pb-3">
                <a href="/services" class="block text-lg font-semibold text-black hover:text-[#fbbf24] transition-colors">SERVICES</a>
            </li>
            <li class="text-center border-b border-gray-200 pb-3">
                <a href="/contact" class="block text-lg font-semibold text-black hover:text-[#fbbf24] transition-colors">CONTACT</a>
            </li>
        </ul>

        <!-- Email Section -->
        <div class="w-full mb-6 p-4 bg-gray-50 rounded-lg text-center">
            <i class='bx bx-envelope text-2xl text-[#fbbf24] mb-2 block'></i>
            <p class="text-sm text-gray-600 mb-1">E-MAIL</p>
            <a href="mailto:dennisnsoh@qualiden.com" class="text-black font-medium hover:text-[#fbbf24] transition-colors">dennisnsoh@qualiden.com</a>
        </div>

        <!-- Telephone Section -->
        <div class="w-full mb-6 p-4 bg-gray-50 rounded-lg text-center">
            <i class='bx bx-phone text-2xl text-[#fbbf24] mb-2 block'></i>
            <p class="text-sm text-gray-600 mb-1">TEL</p>
            <a href="tel:+233547478747" class="text-black font-medium hover:text-[#fbbf24] transition-colors">+233 54 747 8747</a>
        </div>

        <!-- Get a Quote Button -->
        <a href="/quote" class="w-full bg-[#fbbf24] hover:bg-yellow-500 text-black font-bold py-3 rounded-lg transition-colors text-center mb-4">
            Get a Quote
        </a>

        <!-- Social Icons -->
        <div class="flex gap-6 mt-4">
            <a href="https://www.linkedin.com/" target="_blank" class="text-gray-500 hover:text-[#fbbf24] transition-colors">
                <i class='bx bxl-linkedin text-2xl'></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="text-gray-500 hover:text-[#fbbf24] transition-colors">
                <i class='bx bxl-instagram text-2xl'></i>
            </a>
            <a href="https://www.facebook.com/" target="_blank" class="text-gray-500 hover:text-[#fbbf24] transition-colors">
                <i class='bx bxl-facebook text-2xl'></i>
            </a>
            <a href="https://www.tiktok.com/" target="_blank" class="text-gray-500 hover:text-[#fbbf24] transition-colors">
                <i class='bx bxl-tiktok text-2xl'></i>
            </a>
        </div>
    </div>
</div>

<!-- LET'S CHAT BUBBLE OVERLAY -->
<div class="chat-bubble" id="chatBubble">
    <div class="chat-bubble-inner pulse">
        <i class='bx bx-chat'></i>
    </div>
</div>

<!-- CHAT MODAL -->
<div class="chat-modal" id="chatModal">
    <div class="bg-[#fbbf24] p-4">
        <div class="flex justify-between items-center">
            <h3 class="font-bold text-black">Let's Chat</h3>
            <button id="closeChat" class="text-black hover:text-gray-700">
                <i class='bx bx-x text-2xl'></i>
            </button>
        </div>
    </div>
    <div class="p-4">
        <p class="text-gray-600 text-sm mb-4">Hi there! 👋 How can we help you today?</p>
        <div class="space-y-3">
            <a href="https://wa.me/233547478747" target="_blank" class="flex items-center gap-3 p-3 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                <i class='bx bxl-whatsapp text-2xl text-green-600'></i>
                <div>
                    <p class="font-medium text-black">WhatsApp</p>
                    <p class="text-xs text-gray-500">Chat with us on WhatsApp</p>
                </div>
            </a>
            <a href="mailto:dennisnsoh@qualiden.com" class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                <i class='bx bx-envelope text-2xl text-blue-600'></i>
                <div>
                    <p class="font-medium text-black">Email</p>
                    <p class="text-xs text-gray-500">Send us an email</p>
                </div>
            </a>
            <a href="tel:+233547478747" class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                <i class='bx bx-phone text-2xl text-gray-600'></i>
                <div>
                    <p class="font-medium text-black">Call Us</p>
                    <p class="text-xs text-gray-500">+233 54 747 8747</p>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- CONTENT AREA -->
<div>
    @yield('content')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
</div>

<!-- Footer -->
<footer class="bg-black">
    <div class="relative min-h-[350px] flex items-center px-4 md:px-60">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/site.jpg') }}" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-white p-8 flex justify-between items-center w-full">
            <div>
                <h1 class="text-3xl font-bold mb-3">Write down your question</h1>
                <p class="text-lg max-w-2xl">
                    We are not only a product manufacturer, but also a solution provider. Whether you have questions or quotation requests, we will help you.
                </p>
            </div>
            <div>
                <button class="bg-[#fbbf24] px-6 py-3 text-black rounded-full font-semibold hover:bg-yellow-400 transition-colors">
                    Get A Quote
                </button>
            </div>
        </div>
    </div>
    <div class="py-12 px-4 md:px-60 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">

            <!-- Contact Section -->
            <div>
                <h3 class="text-xl font-bold mb-4">Contact</h3>
                <div class="space-y-3 text-gray-300 text-sm">
                    <p class="leading-relaxed flex gap-2">
                        <i class='bx bx-map text-[#fbbf24] text-lg mt-0.5'></i>
                        <span>Add: GW-0291-1260 <br> Accra, Ghana</span>
                    </p>
                    <p class="flex gap-2">
                        <i class='bx bx-phone text-[#fbbf24] text-lg'></i>
                        <span>Tel: +233 54 747 8747</span>
                    </p>
                    <p class="flex gap-2">
                        <i class='bx bx-envelope text-[#fbbf24] text-lg'></i>
                        <span>E-mail: dennisnsoh@qualiden.com</span>
                    </p>
                    <p class="flex gap-2">
                        <i class='bx bxl-whatsapp text-[#fbbf24] text-lg'></i>
                        <span>Mobile/WhatsApp: +233 54 747 8747</span>
                    </p>
                </div>

                <!-- Social Icons -->
                <div class="flex gap-3 mt-4">
                    <a href="https://www.linkedin.com/" target="_blank" class="text-gray-400 hover:text-[#fbbf24] transition-colors">
                        <i class='bx bxl-linkedin text-xl'></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="text-gray-400 hover:text-[#fbbf24] transition-colors">
                        <i class='bx bxl-instagram text-xl'></i>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" class="text-gray-400 hover:text-[#fbbf24] transition-colors">
                        <i class='bx bxl-facebook text-xl'></i>
                    </a>
                    <a href="https://www.tiktok.com/" target="_blank" class="text-gray-400 hover:text-[#fbbf24] transition-colors">
                        <i class='bx bxl-tiktok text-xl'></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links Section -->
            <div>
                <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-gray-300 text-sm">
                    <li><a href="/about" class="hover:text-[#fbbf24] transition-colors">About Us</a></li>
                    <li><a href="/products" class="hover:text-[#fbbf24] transition-colors">Products</a></li>
                    <li><a href="/news" class="hover:text-[#fbbf24] transition-colors">News</a></li>
                    <li><a href="/cases" class="hover:text-[#fbbf24] transition-colors">Cases</a></li>
                    <li><a href="/services" class="hover:text-[#fbbf24] transition-colors">Services</a></li>
                    <li><a href="/contact" class="hover:text-[#fbbf24] transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Information / Newsletter Section -->
            <div>
                <h3 class="text-xl font-bold mb-4">Information</h3>
                <p class="text-gray-300 text-sm mb-4">
                    Sign up to receive our weekly newsletter
                </p>
                <form class="space-y-3">
                    <input
                        type="text"
                        placeholder="Your Name"
                        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded text-white text-sm focus:outline-none focus:border-[#fbbf24] transition-colors"
                    >
                    <input
                        type="email"
                        placeholder="Email Address"
                        class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded text-white text-sm focus:outline-none focus:border-[#fbbf24] transition-colors"
                    >
                    <button
                        type="submit"
                        class="bg-[#fbbf24] hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded transition-colors text-sm inline-flex items-center gap-2"
                    >
                        SUBMIT <span>→</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-400 text-sm">
            <p>Qualiden | Copyright © 2026 | All rights reserved</p>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
    // Mobile menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const closeMenu = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const body = document.body;

    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            body.classList.add('no-scroll');
        });
    }

    if (closeMenu) {
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            body.classList.remove('no-scroll');
        });
    }

    // Close mobile menu on link click
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            body.classList.remove('no-scroll');
        });
    });

    // Let's Chat Bubble
    const chatBubble = document.getElementById('chatBubble');
    const chatModal = document.getElementById('chatModal');
    const closeChat = document.getElementById('closeChat');

    if (chatBubble) {
        chatBubble.addEventListener('click', () => {
            chatModal.classList.toggle('active');
        });
    }

    if (closeChat) {
        closeChat.addEventListener('click', () => {
            chatModal.classList.remove('active');
        });
    }

    // Close chat modal when clicking outside
    document.addEventListener('click', (e) => {
        if (chatModal && chatModal.classList.contains('active')) {
            if (!chatModal.contains(e.target) && !chatBubble.contains(e.target)) {
                chatModal.classList.remove('active');
            }
        }
    });
</script>
</body>
</html>
