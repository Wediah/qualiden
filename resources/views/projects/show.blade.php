<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $project->name }}</title>
</head>
<body class="p-6">
    <h1 class="text-2xl mb-2">{{ $project->name }}</h1>
    <div class="text-sm text-gray-600 mb-4">{{ $project->client ?? '-' }} • {{ $project->status ?? 'pending' }}</div>
    <div class="prose">{{ $project->bio }}</div>

    <div class="mt-4">
        <a href="{{ route('projects.index') }}">Back to projects</a>
    </div>
</body>
</html>
