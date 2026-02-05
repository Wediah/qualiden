@extends('layouts.main_layout')

@section('title', 'Show Project')

@section('content')
    <h1 class="text-2xl text-gray-400 font-medium pt-28 px-14">Portfolio</h1>

    <div class="grid md:grid-cols-2 grid-cols-1 items-center pt-28 px-14 gap-28">
        <div>
            @if($project->images->isNotEmpty())
                {{-- FIX: Use Storage facade or direct path --}}
                <img
                    src="{{ Storage::url($project->images->first()->path) }}"
                    alt="{{ $project->name }}"
                    class="w-full h-full object-cover"
                >
            @else
                <div class="w-full h-96 bg-gray-200 flex items-center justify-center text-gray-500">
                    No image
                </div>
            @endif
        </div>

        <div class="flex flex-col text-left">
            <h1 class="md:text-4xl text-2xl font-bold">{{ $project->name }}</h1>
            <p class="text-gray-400 text-md md:text-xl mt-8 font-light">{{ $project->bio }}</p>
        </div>
    </div>

    <!-- Project Details -->
    <div class="bg-gray-100 grid md:grid-cols-2 grid-cols-1 items-start mt-28 px-14 gap-28 py-28">
        <div>
            <h1 class="md:text-6xl text-2xl font-bold">Project Details</h1>
        </div>
        <div>
            <div class="flex flex-col gap-4">
                <div>
                    <p class="text-md font-bold text-gray-500 dark:text-gray-400">Project Client</p>
                    <p class="text-xl text-gray-700 dark:text-gray-500">{{ $project->client }}</p>
                </div>
                <div>
                    <p class="text-md font-bold text-gray-500 dark:text-gray-400">Project Status</p>
                    <p class="text-xl text-gray-700 dark:text-gray-500">{{ $project->status }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Gallery -->
    <div class="mt-28 px-14 gap-28 py-28">
        <div class="flex flex-wrap gap-4">
            @foreach($project->images as $image)
                @if($image->path)
                    <div class="shrink-0">
                        <img
                            src="{{ Storage::url($image->path) }}"
                            class="w-64 h-64 object-cover rounded"
                            alt="{{ $project->name }} ({{ $loop->iteration }})"
                        >
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Back Button -->
    <div class="text-center my-12">
        <div class="text-gray-300 font-semibold text-lg md:text-6xl">Keep Going! <br> There is more to see</div>
        <div class="flex justify-center mt-4 gap-6">
            <a href="/contact" class="rounded-md bg-[#fbbf24] text-white px-4 py-2">
                <i class="fas fa-arrow-right"></i> Contact
            </a>
            <a href="{{ route('projects') }}" class="rounded-md border-gray-500 border-2 text-gray-500 px-4 py-2">
                <i class="fas fa-arrow-left"></i> View more projects
            </a>
        </div>
    </div>
@endsection
