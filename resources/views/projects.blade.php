@php use App\Models\Project; @endphp
@extends('layouts.main_layout')

@section('title', 'Projects')

@section('content')
    <div class="bg-white pb-12">
        <!-- Hero Section -->
        <div class="relative min-h-[350px] flex items-center">
            <div class="absolute inset-0">
                <img src="{{ asset('assets/5th.jpeg') }}" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>
            <div class="relative z-10 text-white p-8 w-full px-4 md:px-60">
                <h1 class="text-3xl md:text-6xl font-bold mb-3">Projects</h1>
            </div>
        </div>

        <!-- Products Section -->
        <div class="mx-auto px-4 md:px-60 py-16 flex flex-col md:flex-row gap-8 md:gap-16">
            <!-- Products Table -->
            <div class="mb-16">
                <div class="overflow-x-auto">
                    <table class="border-collapse md:w-2/5">
                        <thead>
                        <tr class="border-b-2 border-gray-200">
                            <th class="text-left py-4 text-lg font-semibold text-black">All Categories</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $cat)
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                <td class="py-4 text-gray-800 font-medium">{{ $cat }}</td>
                                <td class="py-4 text-right">
                                    <a href="{{ route('our-projects', ['category' => $cat]) }}"
                                       class="text-2xl text-gray-400 hover:text-[#fbbf24] transition-colors inline-flex items-center gap-1">
                                        +
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Filtered Projects Section -->
            @if($category)
                <div class="mt-12">
                    <div class="flex justify-between items-start mb-8">
                        <h2 class="text-2xl md:text-4xl font-bold text-black w-2/3">{{ $category }} Projects</h2>
                        <p class="w-2/3">
                            As a HDPE pipe manufacturer, we use high-quality raw materials and advanced technology, provide a wide range of specifications and customized services, and ensure that our products are high-quality and reasonably priced.
                        </p>
                    </div>

                    @if($projects->isEmpty())
                        <p class="text-center text-gray-500 py-12">No projects found in this category.</p>
                    @else
                        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
                            @foreach($projects as $project)
                                <a href="{{ route('projects.show', $project) }}"
                                   class="group block bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-all duration-300">
                                    @if($project->images->isNotEmpty())
                                        <img src="{{ Storage::url($project->images->first()->path) }}"
                                             alt="{{ $project->name }}"
                                             class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-56 bg-gray-200 flex items-center justify-center">
                                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="p-4">
                                        <h3 class="text-lg font-semibold text-black mb-1 line-clamp-1">{{ $project->name }}</h3>
                                        @if($project->client)
                                            <p class="text-sm text-gray-500">Client: {{ $project->client }}</p>
                                        @endif
                                        @if($project->completion_date)
                                            <p class="text-xs text-gray-400 mt-1">{{ \Carbon\Carbon::parse($project->completion_date)->format('M Y') }}</p>
                                        @endif
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-8">
                            {{ $projects->links() }}
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection
