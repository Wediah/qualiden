@php use App\Models\Project; @endphp
@extends('layouts.main_layout')

@section('title', 'Projects')

@section('content')
    <div class="bg-white pb-12">
        <!-- Hero Section -->
        <div class="relative min-h-[50vh] flex items-center">
            <div class="absolute inset-0">
                <img src="{{ asset('assets/5th.jpeg') }}" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>
            <div class="relative z-10 text-white p-8 w-full px-4 md:px-60">
                <h1 class="text-3xl md:text-6xl font-bold mb-3">Our Projects</h1>
                <p class="text-lg text-gray-200">Explore our portfolio of completed works.</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="mx-auto px-4 md:px-60 py-16 flex flex-col md:flex-row gap-8 md:gap-16">

            <!-- Sidebar: Categories -->
            <div class="w-full md:w-1/4">
                <div class="sticky top-24">
                    <h3 class="text-xl font-semibold text-black mb-6 border-b pb-2">Categories</h3>

                    <ul class="space-y-2">
                        <!-- Link to show ALL projects (Reset Filter) -->
                        <li class="border-b border-gray-100 hover:bg-gray-50 transition-colors rounded">
                            <a href="{{ route('our-projects') }}"
                               class="block text-md {{ !$category ? 'text-[#fbbf24] font-bold' : 'text-gray-600 hover:text-[#fbbf24]' }} transition-colors py-3 px-2">
                                All Projects
                            </a>
                        </li>

                        <!-- List Specific Categories -->
                        @foreach($categories as $cat)
                            <li class="border-b border-gray-100 hover:bg-gray-50 transition-colors rounded">
                                <a href="{{ route('our-projects', ['category' => $cat]) }}"
                                   class="block text-md {{ $category == $cat ? 'text-[#fbbf24] font-bold' : 'text-gray-600 hover:text-[#fbbf24]' }} transition-colors py-3 px-2 flex justify-between items-center">
                                    <span>{{ $cat }}</span>
                                    {{-- Optional: Show count --}}
                                    {{-- <span class="text-xs bg-gray-100 text-gray-500 px-2 py-1 rounded-full">{{ $categoryCounts[$cat] ?? 0 }}</span> --}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Right Side: Project Grid -->
            <div class="w-full md:w-3/4">

                <!-- Dynamic Header -->
                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-black">
                        {{ $category ? $category . ' Projects' : 'All Projects' }}
                    </h2>
                    <p class="text-gray-500 mt-2">
                        {{ $category ? "Showing results for category: $category" : "Showing all recent projects." }}
                    </p>
                </div>

                @if($projects->isEmpty())
                    <div class="text-center py-12 bg-gray-50 rounded-lg">
                        <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900">No projects found</h3>
                        <p class="text-gray-500">There are no projects in this category yet.</p>
                        <a href="{{ route('our-projects') }}" class="mt-4 inline-block text-[#fbbf24] hover:underline">View All Projects</a>
                    </div>
                @else
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($projects as $project)
                            <a href="{{ route('projects.show', $project) }}"
                               class="group block bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">

                                <!-- Image -->
                                <div class="relative h-56 overflow-hidden">
                                    @if($project->images && $project->images->isNotEmpty())
                                        {{-- Adjust path based on your storage setup. If using Storage::url(), ensure disk is public --}}
                                        <img src="{{ Storage::url($project->images->first()->path) }}"
                                             alt="{{ $project->name }}"
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    @endif

                                    <!-- Category Badge Overlay -->
                                    @if($project->category)
                                        <span class="absolute top-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded backdrop-blur-sm">
                                            {{ $project->category }}
                                        </span>
                                    @endif
                                </div>

                                <!-- Content -->
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-black mb-1 line-clamp-1 group-hover:text-[#fbbf24] transition-colors">
                                        {{ $project->name }}
                                    </h3>

                                    <div class="flex justify-between items-end mt-3">
                                        @if($project->location)
                                            <p class="text-xs text-gray-500 flex items-center">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                {{ $project->location }}
                                            </p>
                                        @endif

                                        @if($project->completion_date)
                                            <p class="text-xs text-gray-400">
                                                {{ \Carbon\Carbon::parse($project->completion_date)->format('Y') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-10">
                        {{ $projects->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
