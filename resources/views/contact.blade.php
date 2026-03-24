{{-- resources/views/contact.blade.php --}}
@extends('layouts.main_layout')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <div class="relative min-h-[350px] flex items-center">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/5th.jpeg') }}" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        <div class="relative z-10 text-white p-8 w-full px-4 md:px-60">
            <h1 class="text-3xl md:text-6xl font-bold mb-3">Contact</h1>
        </div>
    </div>

    <div class="bg-white py-20">
        <div class="mx-auto px-4 md:px-60">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Location -->
                <div class="text-center border border-gray-200 p-6">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#fbbf24]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Our Location</h3>
                    <p class="text-gray-600">
                        GW-0291-1260 <br>
                        Accra, Ghana
                    </p>
                </div>

                <!-- Email -->
                <div class="text-center border border-gray-200 p-6">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#fbbf24]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Email Us</h3>
                    <a href="mailto:dennisnsoh@qualiden.com" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                        dennisnsoh@qualiden.com
                    </a>
                </div>

                <!-- Phone -->
                <div class="text-center border border-gray-200 p-6">
                    <div class="w-16 h-16 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#fbbf24]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Call Us</h3>
                    <a href="tel:+233547478747" class="text-gray-600 hover:text-[#fbbf24] transition-colors">
                        +233 54 747 8747
                    </a>
                </div>
            </div>

            <div class="py-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Form Section -->
                    <div class="border border-gray-200 p-6 flex flex-col h-full">
                        <div class="text-center mb-8">
                            <h1 class="text-xl md:text-3xl font-bold text-black mb-4">Contact Us</h1>
                            <p class="text-black text-sm">Your email address will not be published. Required fields are marked *</p>
                        </div>

                        @if(session('success'))
                            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                <ul class="list-disc pl-5">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="contact-form" method="POST" action="{{ route('contact.store') }}" class="flex-1 flex flex-col">
                            @csrf

                            <!-- Email -->
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    *Email
                                </label>
                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Please enter your email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-[#fbbf24] transition-colors @error('email') border-red-500 @enderror"
                                    required
                                >
                                <div class="text-right text-xs text-gray-400 mt-1">
                                    <span class="email-count">0</span>/100
                                </div>
                                @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Company Name -->
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Company Name
                                </label>
                                <input
                                    type="text"
                                    name="company"
                                    value="{{ old('company') }}"
                                    placeholder="Please enter your company name"
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-[#fbbf24] transition-colors"
                                >
                                <div class="text-right text-xs text-gray-400 mt-1">
                                    <span class="company-count">0</span>/200
                                </div>
                            </div>

                            <!-- WhatsApp -->
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    *WhatsApp
                                </label>
                                <div class="flex gap-2">
                                    <input
                                        type="text"
                                        name="code"
                                        value="{{ old('code') }}"
                                        placeholder="Code"
                                        class="w-24 px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-[#fbbf24] transition-colors"
                                    >
                                    <input
                                        type="tel"
                                        name="whatsapp"
                                        value="{{ old('whatsapp') }}"
                                        placeholder="Please enter your whatsapp"
                                        class="flex-1 px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-[#fbbf24] transition-colors @error('whatsapp') border-red-500 @enderror"
                                        required
                                    >
                                </div>
                                <div class="text-right text-xs text-gray-400 mt-1">
                                    <span class="whatsapp-count">0</span>/100
                                </div>
                                @error('whatsapp')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Message -->
                            <div class="mb-6 flex-1">
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Message
                                </label>
                                <textarea
                                    name="message"
                                    rows="5"
                                    placeholder="Please enter your message"
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:border-[#fbbf24] transition-colors resize-none"
                                    style="min-height: 120px;"
                                >{{ old('message') }}</textarea>
                                <div class="text-right text-xs text-gray-400 mt-1">
                                    <span class="message-count">0</span>/1000
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button
                                    type="submit"
                                    class="w-full bg-[#fbbf24] hover:bg-yellow-500 text-black font-semibold px-8 py-3 rounded transition-colors"
                                >
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Map Section -->
                    <div class="h-full">
                        <div class="bg-white overflow-hidden rounded-lg h-full flex flex-col">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.304689564957!2d117.200983!3d39.084158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35f1d6c5e8c5d2f7%3A0x8c8e6b9f3e4c5a2d!2sTianjin%2C%20China!5e0!3m2!1sen!2sus!4v1640000000000!5m2!1sen!2sus"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                class="w-full h-full min-h-[600px]"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Character Counter Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Character counters
            const emailInput = document.querySelector('input[name="email"]');
            const companyInput = document.querySelector('input[name="company"]');
            const whatsappInput = document.querySelector('input[name="whatsapp"]');
            const messageInput = document.querySelector('textarea[name="message"]');

            const emailCount = document.querySelector('.email-count');
            const companyCount = document.querySelector('.company-count');
            const whatsappCount = document.querySelector('.whatsapp-count');
            const messageCount = document.querySelector('.message-count');

            function updateCounter(input, counter, max) {
                if (input && counter) {
                    const length = input.value.length;
                    counter.textContent = length;
                    if (length > max) {
                        input.value = input.value.slice(0, max);
                        counter.textContent = max;
                    }
                }
            }

            if (emailInput) {
                emailInput.addEventListener('input', () => updateCounter(emailInput, emailCount, 100));
                updateCounter(emailInput, emailCount, 100);
            }

            if (companyInput) {
                companyInput.addEventListener('input', () => updateCounter(companyInput, companyCount, 200));
                updateCounter(companyInput, companyCount, 200);
            }

            if (whatsappInput) {
                whatsappInput.addEventListener('input', () => updateCounter(whatsappInput, whatsappCount, 100));
                updateCounter(whatsappInput, whatsappCount, 100);
            }

            if (messageInput) {
                messageInput.addEventListener('input', () => updateCounter(messageInput, messageCount, 1000));
                updateCounter(messageInput, messageCount, 1000);
            }
        });
    </script>
@endsection
