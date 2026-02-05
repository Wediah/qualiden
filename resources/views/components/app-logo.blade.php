@props([
'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand name="Qualiden Group" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground">
            <img id="white-logo" src="{{ asset('assets/logo.png') }}" class="h-12" alt="Qualiden Group Limited Logo" />
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="Qualiden Group" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground">
            <img id="white-logo" src="{{ asset('assets/logo.png') }}" class="h-12" alt="Qualiden Group Limited Logo" />
        </x-slot>
    </flux:brand>
@endif
