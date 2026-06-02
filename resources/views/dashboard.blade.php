<x-layouts::app :title="__('dashboard')">
    <!-- Changed bg-gray-900 to bg-slate-50 for a softer, professional light background -->
    <div class="min-h-screen bg-slate-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <flux:main class="flex flex-col gap-8">

                <!-- Header Section -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <flux:heading size="2xl" class="text-slate-800">{{ __('Projects') }}</flux:heading>
                    <flux:button href="{{ route('projects.create') }}" icon="plus" variant="primary">
                        {{ __('Add New Project') }}
                    </flux:button>
                </div>

                @php
                    $projects = \App\Models\Project::with('images')->latest()->get();
                @endphp

                @if($projects->isEmpty())
                    <!-- Empty State -->
                    <flux:card class="text-center py-16 bg-white shadow-sm border border-slate-200 rounded-xl">
                        <div class="flex flex-col items-center justify-center">
                            <div class="p-4 bg-slate-100 rounded-full mb-4">
                                <flux:icon name="folder-open" class="h-8 w-8 text-slate-500" />
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900">{{ __('No projects found') }}</h3>
                            <p class="mt-2 text-slate-500 max-w-sm">{{ __('Get started by creating your first project.') }}</p>
                            <div class="mt-6">
                                <flux:button href="{{ route('projects.create') }}" icon="plus" variant="primary">
                                    {{ __('Create Project') }}
                                </flux:button>
                            </div>
                        </div>
                    </flux:card>
                @else
                    <!-- Projects Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($projects as $project)
                            <!-- Added shadow-sm, border, and rounded-xl for a cleaner card look -->
                            <flux:card class="overflow-hidden bg-white shadow-sm hover:shadow-md transition-shadow duration-200 border border-slate-200 rounded-xl flex flex-col h-full">

                                <!-- Image Area -->
                                <div class="relative h-48 w-full bg-slate-100 overflow-hidden">
                                    @if($project->images->isNotEmpty())
                                        <img src="{{ Storage::url($project->images->first()->path) }}"
                                             alt="{{ $project->name }}"
                                             class="w-full h-full object-cover">
                                    @else
                                        <div class="flex items-center justify-center h-full text-slate-400">
                                            <flux:icon name="image" class="h-10 w-10" />
                                        </div>
                                    @endif
                                </div>

                                <!-- Content Area -->
                                <div class="p-5 flex flex-col flex-grow">
                                    <div class="flex justify-between items-start mb-3">
                                        <!-- Softer text color (slate-800 instead of gray-900) -->
                                        <h3 class="text-lg font-bold text-slate-800 leading-tight">
                                            {{ $project->name }}
                                        </h3>

                                        @php
                                            // Adjusted status colors to be softer/pastel for light mode
                                            $statusColors = [
                                                'pending' => 'bg-amber-100 text-amber-800 border border-amber-200',
                                                'in-progress' => 'bg-blue-100 text-blue-800 border border-blue-200',
                                                'completed' => 'bg-emerald-100 text-emerald-800 border border-emerald-200',
                                            ];
                                            $color = $statusColors[$project->status] ?? 'bg-slate-100 text-slate-800 border border-slate-200';
                                        @endphp

                                        <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full {{ $color }}">
                                            {{ ucfirst(str_replace('-', ' ', $project->status)) }}
                                        </span>
                                    </div>

                                    <!-- Spacer to push buttons to bottom if content varies -->
                                    <div class="flex-grow"></div>

                                    <!-- Action Buttons -->
                                    <div class="pt-4 mt-4 border-t border-slate-100 flex items-center gap-2">
                                        <flux:button
                                            href="{{ route('projects.show', $project) }}"
                                            size="sm"
                                            variant="subtle"
                                            class="text-slate-600 hover:text-slate-900"
                                        >
                                            <flux:icon name="eye" class="w-4 h-4" />
                                        </flux:button>

                                        <flux:button
                                            href="{{ route('projects.edit', $project) }}"
                                            size="sm"
                                            variant="subtle"
                                            class="text-slate-600 hover:text-blue-600"
                                        >
                                            <flux:icon name="pencil" class="w-4 h-4" />
                                        </flux:button>

                                        <div class="flex-grow"></div>

                                        <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Delete this project?');">
                                            @csrf
                                            @method('DELETE')
                                            <flux:button type="submit" size="sm" variant="subtle" class="text-red-500 hover:text-red-700 hover:bg-red-50">
                                                <flux:icon name="trash" class="w-4 h-4" />
                                            </flux:button>
                                        </form>
                                    </div>
                                </div>
                            </flux:card>
                        @endforeach
                    </div>
                @endif
            </flux:main>
        </div>
    </div>
</x-layouts::app>
