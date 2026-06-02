<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
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
    </style>
</head>
<body class="min-h-screen dark:bg-gray-900 bg-gray-200">

{{-- Top Navbar --}}
<nav class="bg-gray-800 border-b border-gray-700 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <div class="flex items-center gap-8">
                <x-app-logo href="{{ route('dashboard') }}" wire:navigate />

                {{-- Desktop Nav Links --}}
                <div class="hidden lg:flex items-center gap-1">
                    <a href="{{ route('dashboard') }}"
                       wire:navigate
                       class="px-3 py-2 rounded text-sm font-medium transition-colors
                              {{ request()->routeIs('dashboard') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        Dashboard
                    </a>

                    {{-- Projects --}}
                    <div class="relative group">
                        <button class="px-3 py-2 rounded text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors flex items-center gap-1
                                       {{ request()->routeIs('admin.projects.*') || request()->routeIs('projects.*') ? 'bg-gray-700 text-white' : '' }}">
                            Projects
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 top-full mt-1 w-44 bg-gray-800 border border-gray-700 rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            @if(Route::has('admin.projects.index'))
                                <a href="{{ route('admin.projects.index') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">All Projects</a>
                                <a href="{{ route('admin.projects.create') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Create Project</a>
                            @elseif(Route::has('projects.index'))
                                <a href="{{ route('projects.index') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">All Projects</a>
                                <a href="{{ route('projects.create') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Create Project</a>
                            @endif
                        </div>
                    </div>

                    {{-- News --}}
                    <div class="relative group">
                        <button class="px-3 py-2 rounded text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors flex items-center gap-1
                                       {{ request()->routeIs('admin.news.*') ? 'bg-gray-700 text-white' : '' }}">
                            News
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 top-full mt-1 w-44 bg-gray-800 border border-gray-700 rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <a href="{{ route('admin.news.index') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">All News</a>
                            <a href="{{ route('admin.news.create') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Create News</a>
                        </div>
                    </div>

                    {{-- Cases --}}
                    <div class="relative group">
                        <button class="px-3 py-2 rounded text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors flex items-center gap-1
                                       {{ request()->routeIs('admin.cases.*') ? 'bg-gray-700 text-white' : '' }}">
                            Cases
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 top-full mt-1 w-44 bg-gray-800 border border-gray-700 rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <a href="{{ route('admin.cases.index') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">All Cases</a>
                            <a href="{{ route('admin.cases.create') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Create Case</a>
                        </div>
                    </div>

                    {{-- Contact Messages --}}
                    <a href="{{ route('admin.contacts.index') }}"
                       wire:navigate
                       class="px-3 py-2 rounded text-sm font-medium transition-colors flex items-center gap-1.5
                              {{ request()->routeIs('admin.contacts.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        Messages
                        @php $unreadCount = App\Models\ContactUs::where('is_read', false)->count(); @endphp
                        @if($unreadCount > 0)
                            <span class="bg-yellow-500 text-black text-xs px-1.5 py-0.5 rounded-full leading-none">{{ $unreadCount }}</span>
                        @endif
                    </a>
                </div>
            </div>

            {{-- Right side: Profile --}}
            <div class="flex items-center gap-3">
                {{-- Desktop user dropdown --}}
                <div class="hidden lg:block">
                    <flux:dropdown position="bottom" align="end">
                        <flux:profile
                            :name="auth()->user()->name"
                            :initials="auth()->user()->initials()"
                            icon-trailing="chevron-down"
                        />
                        <flux:menu>
                            <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                                {{ __('Settings') }}
                            </flux:menu.item>
                            <flux:menu.separator />
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full cursor-pointer">
                                    {{ __('Log Out') }}
                                </flux:menu.item>
                            </form>
                        </flux:menu>
                    </flux:dropdown>
                </div>

                {{-- Mobile hamburger --}}
                <button class="lg:hidden text-gray-300 hover:text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-700 px-4 py-3 space-y-1">
        <a href="{{ route('dashboard') }}" wire:navigate class="block px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>

        @if(Route::has('admin.projects.index'))
            <a href="{{ route('admin.projects.index') }}" wire:navigate class="block px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">All Projects</a>
            <a href="{{ route('admin.projects.create') }}" wire:navigate class="block px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Create Project</a>
        @endif

        <a href="{{ route('admin.news.index') }}" wire:navigate class="block px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">All News</a>
        <a href="{{ route('admin.news.create') }}" wire:navigate class="block px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Create News</a>
        <a href="{{ route('admin.cases.index') }}" wire:navigate class="block px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">All Cases</a>
        <a href="{{ route('admin.cases.create') }}" wire:navigate class="block px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Create Case</a>
        <a href="{{ route('admin.contacts.index') }}" wire:navigate class="block px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Messages</a>

        <div class="border-t border-gray-700 pt-3 mt-3">
            <a href="{{ route('profile.edit') }}" wire:navigate class="block px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Settings</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2 rounded text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Log Out</button>
            </form>
        </div>
    </div>
</nav>

{{-- Page Content --}}
{{ $slot }}

@fluxScripts
</body>
</html>
