<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-gray-900">
        <flux:sidebar sticky collapsible="mobile" class="border-e  border-gray-700 bg-gray-800">
            <flux:sidebar.header>
                <x-app-logo :sidebar="true" href="{{ route('dashboard') }}" wire:navigate />
                <flux:sidebar.collapse class="lg:hidden" />
            </flux:sidebar.header>



            <flux:sidebar.nav>
                <flux:sidebar.group :heading="__('Platform')" class="grid">
                    <flux:sidebar.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>

                {{-- Projects navigation --}}
                <flux:sidebar.group :heading="__('Projects')" class="grid">
{{--                    @if (Route::has('projects.index'))--}}
{{--                        <flux:sidebar.item icon="folder" :href="route('projects.index')" :current="request()->routeIs('projects.index')" wire:navigate>--}}
{{--                            {{ __('All Projects') }}--}}
{{--                        </flux:sidebar.item>--}}
{{--                    @else--}}
{{--                        <flux:sidebar.item icon="folder" href="{{ url('/projects') }}">--}}
{{--                            {{ __('All Projects') }}--}}
{{--                        </flux:sidebar.item>--}}
{{--                    @endif--}}

                    @if (Route::has('projects.create'))
                        <flux:sidebar.item icon="plus" :href="route('projects.create')" wire:navigate>
                            {{ __('Create Project') }}
                        </flux:sidebar.item>
                    @else
                        <flux:sidebar.item icon="plus" href="{{ url('/projects/create') }}">
                            {{ __('Create Project') }}
                        </flux:sidebar.item>
                    @endif
                </flux:sidebar.group>

                {{-- Admin quick list with edit/delete actions --}}
{{--                @if (auth()->check() && (isset(auth()->user()->is_admin) ? auth()->user()->is_admin : false))--}}
{{--                    @php--}}
{{--                        // Load latest projects to show quick actions. Limit to 10.--}}
{{--                        $__sidebarProjects = \App\Models\Project::orderBy('created_at', 'desc')->limit(10)->get();--}}
{{--                    @endphp--}}

{{--                    <flux:sidebar.group :heading="__('Manage Projects')" class="grid">--}}
{{--                        @forelse ($__sidebarProjects as $__proj)--}}
{{--                            <flux:sidebar.item icon="folder" href="{{ Route::has('projects.show') ? route('projects.show', $__proj) : url('/projects/'.$__proj->id) }}">--}}
{{--                                <div class="flex items-center justify-between gap-2 w-full">--}}
{{--                                    <span class="truncate">{{ $__proj->name }}</span>--}}
{{--                                    <span class="flex items-center gap-2">--}}
{{--                                        @if (Route::has('projects.edit'))--}}
{{--                                            <a href="{{ route('projects.edit', $__proj) }}" class="text-xs text-zinc-500 hover:text-zinc-700">{{ __('Edit') }}</a>--}}
{{--                                        @else--}}
{{--                                            <a href="{{ url('/projects/'.$__proj->id.'/edit') }}" class="text-xs text-zinc-500 hover:text-zinc-700">{{ __('Edit') }}</a>--}}
{{--                                        @endif--}}

{{--                                        <form method="POST" action="{{ Route::has('projects.destroy') ? route('projects.destroy', $__proj) : url('/projects/'.$__proj->id) }}" onsubmit="return confirm('{{ __('Delete this project?') }}');" class="inline">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="text-xs text-red-500 hover:text-red-700">{{ __('Delete') }}</button>--}}
{{--                                        </form>--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </flux:sidebar.item>--}}
{{--                        @empty--}}
{{--                            <flux:sidebar.item icon="folder-open" href="#">{{ __('No projects') }}</flux:sidebar.item>--}}
{{--                        @endforelse--}}
{{--                    </flux:sidebar.group>--}}
{{--                @endif--}}

            </flux:sidebar.nav>

            <flux:spacer />


            <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <flux:avatar
                                    :name="auth()->user()->name"
                                    :initials="auth()->user()->initials()"
                                />

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <flux:heading class="truncate">{{ auth()->user()->name }}</flux:heading>
                                    <flux:text class="truncate">{{ auth()->user()->email }}</flux:text>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                            {{ __('Settings') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item
                            as="button"
                            type="submit"
                            icon="arrow-right-start-on-rectangle"
                            class="w-full cursor-pointer"
                            data-test="logout-button"
                        >
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
