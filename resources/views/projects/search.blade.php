@extends('layouts.main_layout') {{-- Or whatever your main layout is called --}}

@section('title', 'Search Results')

@section('content')
    <div class="bg-gray-50 min-h-screen pt-36 pb-12 px-4 md:px-60">

        <!-- Search Bar (Optional: Allow them to search again on this page) -->
        <div class="max-w-xl mx-auto mb-12">
            <form action="{{ route('projects.search') }}" method="GET" class="flex gap-2">
                <input
                    type="text"
                    name="q"
                    value="{{ request('q') }}"
                    placeholder="Search projects..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent outline-none"
                >
                <button type="submit" class="bg-[#fbbf24] hover:bg-yellow-500 text-black font-semibold px-6 py-3 rounded-lg transition-colors">
                    Search
                </button>
            </form>
        </div>

        <!-- Results Grid -->
        @if($projects->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <a href="{{ route('projects.show', $project->id) }}" class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                        <!-- Image -->
                        <div class="h-48 overflow-hidden relative">
                            @if($project->images && $project->images->count() > 0)
                                <img src="{{ Storage::url($project->images->first()->path) }}" alt="{{ $project->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">
                                    No Image
                                </div>
                            @endif
                            <div class="absolute top-2 right-2 bg-black/60 text-white text-xs px-2 py-1 rounded backdrop-blur-sm">
                                {{ $project->category ?? 'General' }}
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-[#fbbf24] transition-colors">
                                {{ $project->name }}
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-2 mb-4">
                                {{ Str::limit($project->description, 100) }}
                            </p>
                            <div class="flex items-center justify-between text-xs text-gray-500 border-t pt-4">
                                <span>{{ $project->location ?? 'No Location' }}</span>
                                <span>{{ $project->created_at->format('M Y') }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $projects->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-12 bg-white rounded-lg shadow-sm border border-gray-100">
                <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-lg font-medium text-gray-900">No projects found</h3>
                <p class="text-gray-500 mt-1">We couldn't find any projects matching "{{ $query }}".</p>
                <a href="{{ route('our-projects') }}" class="inline-block mt-4 text-[#fbbf24] hover:underline font-medium">View All Projects</a>
            </div>
        @endif
    </div>
@endsection
