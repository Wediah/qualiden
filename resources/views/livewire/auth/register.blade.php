<x-layouts::auth>
    <div class="flex flex-col gap-6">
        <!-- Force header text to be visible in dark mode -->
        <x-auth-header
            :title="__('Create an account')"
            :description="__('Enter your details below to create your account')"
            class="text-white [&_p]:text-zinc-300"
        />

        <!-- Session Status -->
        <x-auth-session-status class="text-center text-white" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf

            <!-- Name -->
            <flux:input
                name="name"
                :label="__('Name')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Full name')"
                class="bg-zinc-900/50 text-white placeholder:text-zinc-500 border-zinc-700 focus:border-zinc-500"
            />

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Email address')"
                :value="old('email')"
                type="email"
                required
                autocomplete="email"
                placeholder="email@example.com"
                class="bg-zinc-900/50 text-white placeholder:text-zinc-500 border-zinc-700 focus:border-zinc-500"
            />

            <!-- Password -->
            <flux:input
                name="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
                viewable
                class="bg-zinc-900/50 text-white placeholder:text-zinc-500 border-zinc-700 focus:border-zinc-500"
            />

            <!-- Confirm Password -->
            <flux:input
                name="password_confirmation"
                :label="__('Confirm password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm password')"
                viewable
                class="bg-zinc-900/50 text-white placeholder:text-zinc-500 border-zinc-700 focus:border-zinc-500"
            />

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full">
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <!-- Updated footer text colors for dark mode visibility -->
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <flux:link :href="route('login')" wire:navigate class="text-white hover:underline">{{ __('Log in') }}</flux:link>
        </div>
    </div>
</x-layouts::auth>
