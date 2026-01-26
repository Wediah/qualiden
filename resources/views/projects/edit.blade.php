<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Project</title>
</head>
<body class="p-6">
    <h1 class="text-2xl mb-4">Edit Project</h1>

    <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label class="block">Name</label>
            <input type="text" name="name" value="{{ old('name', $project->name) }}" required class="border px-2 py-1" />
        </div>

        <div class="mb-2">
            <label class="block">Client</label>
            <input type="text" name="client" value="{{ old('client', $project->client) }}" class="border px-2 py-1" />
        </div>

        <div class="mb-2">
            <label class="block">Status</label>
            <input type="text" name="status" value="{{ old('status', $project->status) }}" class="border px-2 py-1" />
        </div>

        <div class="mb-2">
            <label class="block">Bio</label>
            <textarea name="bio" class="border px-2 py-1">{{ old('bio', $project->bio) }}</textarea>
        </div>

        <div class="mb-2">
            <label class="block">Add Images</label>

            <div x-data class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 dark:border-gray-600 px-6 pb-6 pt-5 hover:border-gray-400 dark:hover:border-gray-500 bg-gray-50 dark:bg-gray-800 transition">
                <div class="space-y-1 text-center w-full">
                    <svg class="mx-auto h-10 w-10 text-gray-400 dark:text-gray-500" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="flex text-sm justify-center text-gray-600 dark:text-gray-400">
                        <label for="images" class="relative cursor-pointer rounded-md font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300">
                            <span>Click to select images</span>
                            <input id="images" name="images[]" type="file" onchange="(function onChange(e){
                                const files = e.target.files;
                                const container = document.getElementById('selectedPreviews');
                                if (!container) return;

                                Object.keys(files).forEach(function(i){
                                    const reader = new FileReader();
                                    reader.onload = function(ev){
                                        const img = document.createElement('img');
                                        img.src = ev.target.result;
                                        img.alt = 'Preview';
                                        img.className = 'h-20 w-20 object-cover rounded-md border border-gray-200 dark:border-gray-600 mr-2 mb-2';
                                        const wrapper = document.createElement('div');
                                        wrapper.className = 'relative group aspect-square inline-block';
                                        wrapper.appendChild(img);
                                        container.appendChild(wrapper);
                                    };

                                    reader.readAsDataURL(files[i]);
                                });
                            })(event)" multiple accept="image/*" class="sr-only">
                        </label>
                    </div>

                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF, SVG, WEBP up to 10MB</p>
                </div>
            </div>

            {{-- Previews container for newly selected images --}}
            <div id="selectedPreviews" class="mt-3 flex flex-wrap"></div>

            @error('images.*') <p class="mt-1 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
            @error('images') <p class="mt-1 text-sm font-medium text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center px-3 py-2 border rounded bg-white hover:bg-gray-50">&larr; Back to Projects</a>
            <button type="submit" class="px-3 py-2 bg-blue-600 text-white rounded">Save</button>
        </div>
    </form>
</body>
</html>
