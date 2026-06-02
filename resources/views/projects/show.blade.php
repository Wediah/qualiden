@extends('layouts.main_layout')

@section('title', 'Show Project')

@section('content')
    <div class="px-4 md:px-60">
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
                <p class="text-gray-400 text-md md:text-xl mt-8 font-light">{{ $project->description }}</p>
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
                        <p class="text-md font-bold text-gray-500 dark:text-gray-400">Project Location</p>
                        <p class="text-xl text-gray-700 dark:text-gray-500">{{ $project->location }}</p>
                    </div>
                    <div>
                        <p class="text-md font-bold text-gray-500 dark:text-gray-400">Project Completion Date</p>
                        <p class="text-xl text-gray-700 dark:text-gray-500">{{ \Carbon\Carbon::parse($project->completion_date)->toDateString() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Gallery -->
        <div class="mt-28 px-4 py-10 flex justify-center items-start min-h-screen">
            <!-- Image Grid Container -->
            <div class="flex flex-wrap justify-center gap-6 max-w-7xl mx-auto">
                @foreach($project->images as $image)
                    @if($image->path)
                        <div class="shrink-0 group cursor-pointer relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300"
                             onclick="openModal('{{ Storage::url($image->path) }}')">

                            <img
                                src="{{ Storage::url($image->path) }}"
                                class="w-64 h-64 object-cover transform group-hover:scale-105 transition-transform duration-300"
                                alt="{{ $project->name }} ({{ $loop->iteration }})"
                            >

                            <!-- Optional: Hover Overlay Icon -->
                            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                </svg>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <!-- MODAL -->
        <div id="imageModal" class="fixed inset-0 z-50 hidden bg-black/90 backdrop-blur-sm flex items-center justify-center p-4" onclick="closeModal()">
            <div class="relative max-w-5xl w-full">
                <!-- Close Button -->
                <button onclick="closeModal()" class="absolute -top-10 right-0 text-white hover:text-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Large Image -->
                <img id="modalImage" src="" alt="Full Size" class="max-h-[90vh] max-w-full mx-auto rounded-lg shadow-2xl">
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center my-12">
            <div class="text-gray-300 font-semibold text-lg md:text-6xl">Keep Going! <br> There is more to see</div>
            <div class="flex justify-center mt-4 gap-6">
                <a href="/contact" class="rounded-md bg-[#fbbf24] text-white px-4 py-2">
                    <i class="fas fa-arrow-right"></i> Contact
                </a>
                <a href="{{ route('our-projects') }}" class="rounded-md border-gray-500 border-2 text-gray-500 px-4 py-2">
                    <i class="fas fa-arrow-left"></i> View more projects
                </a>
            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');

        function openModal(imageSrc) {
            modalImg.src = imageSrc;
            modal.classList.remove('hidden');
            // Prevent body scroll when modal is open
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('hidden');
            modalImg.src = '';
            // Restore body scroll
            document.body.style.overflow = 'auto';
        }

        // Close on Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                closeModal();
            }
        });
    </script>
@endsection
