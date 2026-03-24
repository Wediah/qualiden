@extends('layouts.main_layout')

@section('title', 'Cases')

@section('content')
    <div class="bg-white">
        <!-- Hero Section -->
        <div class="relative min-h-[350px] flex items-center">
            <div class="absolute inset-0">
                <img src="{{ asset('assets/quality.jpeg') }}" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>
            <div class="relative z-10 text-white p-8 w-full px-4 md:px-60">
                <h1 class="text-3xl md:text-6xl font-bold mb-3">Cases</h1>
            </div>
        </div>

        <!-- Cases Content -->
        <div class="max-w-4xl mx-auto px-4 md:px-14 py-16">
            @php
                $cases = App\Models\Cases::where('is_published', true)
                    ->orderBy('published_at', 'desc')
                    ->paginate(10);
            @endphp

            @if($cases->isEmpty())
                <!-- Empty State -->
                <div class="text-center py-20">
                    <div class="mb-6">
                        <svg class="w-24 h-24 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">More Case Studies Coming Soon</h2>
                    <p class="text-gray-500 max-w-md mx-auto">
                        We're currently preparing detailed case studies showcasing our successful projects. Check back soon for inspiring stories of innovation and excellence.
                    </p>
                </div>
            @else
                <!-- Cases List -->
                <div class="space-y-12">
                    @foreach($cases as $case)
                        <article class="group">
                            <a href="{{ route('cases.show', $case) }}" class="block">
                                <!-- Title -->
                                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 group-hover:text-[#fbbf24] transition-colors">
                                    {{ $case->title }}
                                </h2>

                                <!-- Description/Excerpt -->
                                <p class="text-gray-600 leading-relaxed mb-3">
                                    {{ $case->excerpt ?? Str::limit(strip_tags($case->content), 200) }}
                                </p>

                                <!-- Date -->
                                <div class="text-gray-500 text-sm">
                                    {{ $case->published_at ? $case->published_at->format('M. d. Y') : $case->created_at->format('M. d. Y') }}
                                </div>

                                <!-- Optional: Client Name if available -->
                                @if($case->client_name)
                                    <div class="text-gray-400 text-sm mt-1">
                                        Client: {{ $case->client_name }}
                                    </div>
                                @endif
                            </a>
                        </article>

                        @if(!$loop->last)
                            <hr class="border-gray-200">
                        @endif
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($cases->hasPages())
                    <div class="mt-12">
                        {{ $cases->links() }}
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection
