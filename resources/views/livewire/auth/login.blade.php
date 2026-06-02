<x-layouts::auth>
    <div class="flex flex-col gap-6">
        <!-- Force header text to be visible in dark mode -->
        <x-auth-header
            :title="__('Log in to your account')"
            :description="__('Enter your email and password below to log in')"
            class="text-white [&_p]:text-zinc-300"
        />

        <!-- Session Status -->
        <x-auth-session-status class="text-center text-white" :status="session('status')" />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
            @csrf

            <!-- Email Address -->
            <!-- Added bg-zinc-900/50 for dark background and text-white for visibility -->
            <flux:input
                name="email"
                :label="__('Email address')"
                :value="old('email')"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="email@example.com"
                class="bg-zinc-900/50 text-white placeholder:text-zinc-500 border-zinc-700 focus:border-zinc-500"
            />

            <!-- Password -->
            <div class="relative">
                <flux:input
                    name="password"
                    :label="__('Password')"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Password')"
                    viewable
                    class="bg-zinc-900/50 text-white placeholder:text-zinc-500 border-zinc-700 focus:border-zinc-500"
                />

                @if (Route::has('password.request'))
                    <!-- Changed text color to zinc-400 so it's visible against dark bg -->
                    <flux:link class="absolute top-0 text-sm end-0 text-zinc-400 hover:text-white" :href="route('password.request')" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </flux:link>
                @endif
            </div>

            <!-- Remember Me -->
            <!-- Added text-zinc-300 for label visibility -->
            <flux:checkbox name="remember" :label="__('Remember me')" :checked="old('remember')" class="text-zinc-300" />

            <div class="flex items-center justify-end">
                <flux:button variant="primary" type="submit" class="w-full" data-test="login-button">
                    {{ __('Log in') }}
                </flux:button>
            </div>
        </form>

        @if (Route::has('register'))
            <!-- Changed text color to zinc-400 for visibility -->
            <div class="space-x-1 text-sm text-center rtl:space-x-reverse text-zinc-400">
                <span>{{ __('Don\'t have an account?') }}</span>
                <flux:link :href="route('register')" wire:navigate class="text-white hover:underline">{{ __('Sign up') }}</flux:link>
            </div>
        @endif
    </div>
</x-layouts::auth>
