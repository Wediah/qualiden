// Create a simple index view for projects with admin edit/delete actions
@php
    $projects = \App\Models\Project::orderBy('created_at', 'desc')->get();
@endphp

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects</title>
</head>
<body class="p-6">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">All Projects</h1>
            @if (Route::has('projects.create'))
                <a href="{{ route('projects.create') }}" class="px-3 py-2 bg-blue-600 text-white rounded">Create Project</a>
            @endif
        </div>

        <div class="space-y-4">
            @forelse ($projects as $project)
                <div class="p-4 border rounded flex items-center justify-between">
                    <div>
                        <div class="font-medium">{{ $project->name }}</div>
                        <div class="text-sm text-gray-600">{{ $project->client ?? '-' }} • {{ $project->status ?? 'pending' }}</div>
                    </div>

                    <div class="flex items-center gap-3">
                        @if (auth()->check() && (isset(auth()->user()->is_admin) ? auth()->user()->is_admin : false))
                            @if (Route::has('projects.edit'))
                                <a href="{{ route('projects.edit', $project) }}" class="text-sm text-indigo-600">Edit</a>
                            @endif

                            <form method="POST" action="{{ Route::has('projects.destroy') ? route('projects.destroy', $project) : url('/projects/'.$project->id) }}" onsubmit="return confirm('Delete this project?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm text-red-600">Delete</button>
                            </form>
                        @else
                            <a href="{{ Route::has('projects.show') ? route('projects.show', $project) : url('/projects/'.$project->id) }}" class="text-sm text-gray-700">View</a>
                        @endif
                    </div>
                </div>
            @empty
                <div class="p-4 border rounded text-gray-600">No projects yet.</div>
            @endforelse
        </div>
    </div>
</body>
</html>
