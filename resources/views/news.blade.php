@extends('layouts.main_layout')

@section('title', 'News')

@section('content')
    <div class="bg-white">
        <!-- Hero Section -->
        <div class="relative min-h-[350px] flex items-center">
            <div class="absolute inset-0">
                <img src="{{ asset('assets/nm.jpeg') }}" alt="Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>
            <div class="relative z-10 text-white p-8 w-full px-4 md:px-60">
                <h1 class="text-3xl md:text-6xl font-bold mb-3">News</h1>
            </div>
        </div>

        <!-- News Content -->
        <div class="max-w-7xl mx-auto px-4 md:px-14 py-16">
            @php
                $news = App\Models\News::where('is_published', true)
                    ->orderBy('published_at', 'desc')
                    ->paginate(9);
            @endphp

            @if($news->isEmpty())
                <!-- Empty State - More Coming Soon -->
                <div class="text-center py-20">
                    <div class="mb-6">
                        <svg class="w-24 h-24 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">More News Coming Soon</h2>
                    <p class="text-gray-500 max-w-md mx-auto">
                        We're currently preparing exciting updates and announcements. Check back soon for the latest news and insights from Qualiden Group.
                    </p>
                </div>
            @else
                <!-- News Grid -->
                <div class="space-y-8">
                    @foreach($news as $item)
                        <article class="border-b border-gray-200 pb-8 last:border-0">
                            <a href="{{ route('news.show', $item) }}" class="group">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <!-- Image -->
                                    <div class="md:col-span-1">
                                        @if($item->featured_image)
                                            <img src="{{ Storage::url($item->featured_image) }}"
                                                 alt="{{ $item->title }}"
                                                 class="w-full h-48 md:h-40 object-cover rounded-lg group-hover:opacity-90 transition-opacity">
                                        @else
                                            <div class="w-full h-48 md:h-40 bg-gray-100 rounded-lg flex items-center justify-center">
                                                <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Content -->
                                    <div class="md:col-span-2">
                                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-2">
                                            <span class="flex items-center gap-1">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ $item->published_at ? $item->published_at->format('Y/m/d') : $item->created_at->format('Y/m/d') }}
                                            </span>
                                            @if($item->category)
                                                <span class="flex items-center gap-1">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 01.586 1.414V19a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z" />
                                                    </svg>
                                                    {{ $item->category }}
                                                </span>
                                            @endif
                                        </div>

                                        <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#fbbf24] transition-colors">
                                            {{ $item->title }}
                                        </h2>

                                        <p class="text-gray-600 leading-relaxed mb-4">
                                            {{ $item->excerpt ?? Str::limit(strip_tags($item->content), 150) }}
                                        </p>

                                        <div class="flex items-center text-[#fbbf24] font-medium group-hover:translate-x-2 transition-transform">
                                            Read more
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($news->hasPages())
                    <div class="mt-12">
                        {{ $news->links() }}
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection
