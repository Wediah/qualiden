@extends('layouts.main_layout')

@section('title', 'Main')

@section('content')
    <div class="bg-black text-white px-4 md:px-96 md:py-40">

        <!-- Top Row: New Business, Careers, Press -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- New Business -->
            <div>
                <h3 class="text-xl font-semibold mb-4">New Business</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="mailto:newbusiness@qualidengroup.com" class="hover:underline">newbusiness@qualidengroup.com</a></li>

                </ul>
            </div>

            <!-- Careers -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Careers</h3>
                <p class="text-sm mb-2">To view our open positions click below</p>
                <a href="#" class="text-sm hover:underline">Here</a>
            </div>

            <!-- Press -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Press</h3>
                <a href="mailto:info@qualidengroup.com" class="text-sm hover:underline">info@qualidengroup.com</a>
            </div>
        </div>

        <!-- Bottom Row: Accra, London, New York -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Accra -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Accra</h3>
                <address class="not-italic text-sm space-y-1">
                    First Number Road<br>
                    31st December Street,<br>
                    Accra, Ghana<br>
                    GW-000-6427
                </address>
                <div class="mt-4 space-y-2">
                    <div class="mt-8">
                        <a aria-label="Chat on WhatsApp" href="https://wa.me/+233547478747">
                        <button class="bg-black text-white rounded-full py-2 px-4 flex flex-row items-center gap-2 border border-white">
                            Live chat
                            <i class='bx bx-right-arrow-alt bg-white text-white rounded-full'></i>
                        </button>
                        </a>
                    </div>
                        <a href="#" class="text-sm hover:underline">View Map</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
