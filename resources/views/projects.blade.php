@php use App\Models\Project; @endphp
@extends('layouts.main_layout')

@section('title', 'Projects')

@section('content')
    <div class="px-4 md:px-14 bg-white md:pt-36 pt-24 pb:12">
        <div class="flex flex-col gap-2">
            <h1 class="text-4xl font-bold text-center">
                OUR <br>
                <span class="text-gray-300">PROJECTS</span>
            </h1>
            <p class="text-sm text-center text-gray-300">
                Every project, every time: executed exactly to your <br> specifications with unwavering precision.
            </p>
        </div>
        @php
            $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        @endphp

        <div class="mt-24">
            @if ($projects->isEmpty())
                <p class="text-center text-gray-500">No projects available at the moment.</p>
            @else
                <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
                    @foreach ($projects as $project)
                        <a
                            href="{{ route('projects.show', $project) }}"
                            class="block relative overflow-hidden rounded-lg group"
                            aria-label="{{ $project->name }}"
                        >
                            <!-- Image -->
                            @if ($project->images->isNotEmpty())
                                <img
                                    src="{{ Storage::url($project->images->first()->path) }}"
                                    alt="{{ $project->name }}"
                                    class="w-full h-64 md:h-80 object-cover transition-transform duration-500 group-hover:scale-105"
                                >
                            @else
                                <div class="w-full h-64 md:h-80 bg-linear-to-br from-gray-200 to-gray-300 flex items-center justify-center text-gray-500">
                                    <span class="text-lg font-medium">No image</span>
                                </div>
                            @endif

                            <!-- Overlay (hidden by default, shows on hover) -->
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <div>
                                    <h3 class="text-2xl font-bold text-white mb-2">{{ $project->name }}</h3>
                                    <p class="text-gray-200 text-sm">for {{ $project->client ?? 'Client' }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- Pagination Links -->
                <div class="mt-8">
                    {{ $projects->links() }}
                </div>
            @endif
        </div>

    </div>
@endsection
