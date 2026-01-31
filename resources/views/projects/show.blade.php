@extends('layouts.main_layout')

@section('title', 'Show Project')

@section('content')
    <h1 class="text-2xl text-gray-400 font-medium pt-28 px-14">Portfolio</h1>
    <div class="grid md:grid-cols-2 grid-cols-1 items-center pt-28 px-14 gap-28">
        <div>
            <img src="{{ $project->images->first()->path }}"
                 alt="{{ $project->name }}"
                 class="w-full h-full object-cover"
            >
        </div>
        <div class="flex flex-col text-left">
            <h1 class="md:text-4xl text-2xl font-bold">{{ $project->name }}</h1>
            <p class="text-gray-400 text-md md:text-xl mt-8 font-light">{{ $project->bio }}</p>
        </div>
    </div>
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
    <div class="mt-28 px-14 gap-28 py-28">
        <div class="flex gap-28">
            @foreach($project->images as $index => $image)
                {{--                @php--}}
                {{--                    $sizes = ['w-100', 'w-75', 'w-50', 'w-25'];--}}
                {{--                    $randomSize = $sizes[array_rand($sizes)];--}}
                {{--                @endphp--}}
                <div class="flex flex-row flex-wrap">
                    <img src="{{ $image->path }}"
                         class="d-block w-full h-150 object-cover mb-4"
                         alt="{{ $project->name }}">
                </div>
            @endforeach
        </div>
    </div>



    <!-- Back Button -->
    <div class="text-center my-12">
        <div class="text-black font-semibold text-lg md:text-6xl">Keep Going! <br> There is more to
            see</div>
        <div class="flex justify-center mt-4 gap-6">
            <a href="/contact" class="rounded-md bg-green-800 text-white px-4 py-2">
                <i class="fas fa-arrow-right"></i> Contact
            </a>
            <a href="#" class="rounded-md border-gray-500 border-2 text-gray-500 px-4 py-2">
                <i class="fas fa-arrow-left"></i> View more projects
            </a>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .carousel-item img {
            max-height: 600px;
            object-fit: cover;
        }

        .project-header {
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
    </style>
@endsection
