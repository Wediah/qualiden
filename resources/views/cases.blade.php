@extends('layouts.main_layout')

@section('title', 'Cases')

@section('content')
    <div class=" bg-white pb:12">
        <div class="relative min-h-[350px] flex items-center">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="{{ asset('assets/quality.jpeg') }}" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 text-white p-8 flex justify-between items-center w-full px:4 md:px-60" >
                <h1 class="text-3xl md:text-6xl font-bold mb-3">Cases</h1>
            </div>
        </div>
    </div>
@endsection
