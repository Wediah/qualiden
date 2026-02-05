<x-layouts::app :title="__('dashboard')">
    <!-- Add the same container structure as your create page -->
    <div class="min-h-screen bg-gray-900 py-8 px-4 sm:px-6 lg:px-8">
        <div class=" mx-auto">
            <flux:main class="flex flex-col gap-8">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <flux:heading size="2xl">{{ __('Projects') }}</flux:heading>
                    <flux:button href="{{ route('projects.create') }}" icon="plus">
                        {{ __('Add New Project') }}
                    </flux:button>
                </div>

                @php
                    $projects = \App\Models\Project::with('images')->latest()->get();
                @endphp

                @if($projects->isEmpty())
                    <flux:card>
                        <flux:card class="text-center py-12">
                            <flux:icon name="folder-open" class="h-12 w-12 mx-auto text-gray-400" />
                            <h3 class="mt-4 text-lg font-medium text-gray-900">{{ __('No projects found') }}</h3>
                            <p class="mt-2 text-gray-500">{{ __('Get started by creating your first project.') }}</p>
                            <div class="mt-6">
                                <flux:button href="{{ route('projects.create') }}" icon="plus">
                                    {{ __('Create Project') }}
                                </flux:button>
                            </div>
                        </flux:card>
                    </flux:card>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($projects as $project)
                            <flux:card>
                                @if($project->images->isNotEmpty())
                                    <img src="{{ Storage::url($project->images->first()->path) }}"
                                         alt="{{ $project->name }}"
                                         class="w-full h-48 object-cover rounded-t-lg">
                                @endif
                                <flux:card class="space-y-4 p-4"> {{-- Added padding --}}
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-900">{{ $project->name }}</h3>
                                        </div>
                                        @php
                                            $statusColors = [
                                                'pending' => 'bg-yellow-100 text-yellow-800',
                                                'in-progress' => 'bg-blue-100 text-blue-800',
                                                'completed' => 'bg-green-100 text-green-800',
                                            ];
                                            $color = $statusColors[$project->status] ?? 'bg-gray-100 text-gray-800';
                                        @endphp
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $color }}">
                                            {{ ucfirst($project->status) }}
                                        </span>
                                    </div>

                                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                        <div class="flex items-center space-x-2">
                                            <!-- View Button -->
                                            <flux:button
                                                href="{{ route('projects.show', $project) }}"
                                                size="sm"
                                                variant="outline"
                                            >
                                                <flux:icon name="eye" />
                                            </flux:button>

                                            <!-- Edit Button -->
                                            <flux:button
                                                href="{{ route('projects.edit', $project) }}"
                                                size="sm"
                                                variant="outline"
                                            >
                                                <flux:icon name="pencil" />
                                            </flux:button>

                                            <!-- Delete Button -->
                                            <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Delete this project?');">
                                                @csrf
                                                @method('DELETE')
                                                <flux:button type="submit" size="sm" variant="outline" class="text-red-600 hover:bg-red-50 border-red-300">
                                                    <flux:icon name="trash" />
                                                </flux:button>
                                            </form>
                                        </div>
                                    </div>
                                </flux:card>
                            </flux:card>
                        @endforeach
                    </div>
                @endif
            </flux:main>
        </div>
    </div>
</x-layouts::app>
