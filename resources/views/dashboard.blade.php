<x-layouts::app :title="__('dashboard')">
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
                        <flux:card class="space-y-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">{{ $project->name }}</h3>
                                    <p class="text-sm text-gray-500">{{ $project->client ?? 'No client' }}</p>
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

                            <p class="text-gray-600 text-sm line-clamp-3">
                                {{ $project->bio }}
                            </p>

                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center text-sm text-gray-500">
                                    <flux:icon name="photograph" class="h-4 w-4 mr-1" />
                                    <span>{{ $project->images->count() }} images</span>
                                </div>

                                <div class="flex items-center space-x-2">
                                    <flux:button href="{{ route('projects.show', $project) }}"
                                                 size="sm" variant="secondary" icon="eye">
                                    </flux:button>

                                    <flux:button href="{{ route('projects.edit', $project) }}"
                                                 size="sm" variant="secondary" icon="pencil">
                                    </flux:button>

                                    <form action="{{ route('projects.destroy', $project) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this project?');">
                                        @csrf
                                        @method('DELETE')
                                        <flux:button type="submit"
                                                     size="sm"
                                                     variant="danger"
                                                     icon="trash">
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
</x-layouts::app>
