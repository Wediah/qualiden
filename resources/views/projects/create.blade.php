<x-layouts::app :title="__('Create New Project')">
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-2">Create New Project</h1>
                <p class="text-gray-600 dark:text-gray-400">Fill in the details below to create a new project</p>
            </div>

            <!-- Main Card -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-200 dark:border-gray-700">
                <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data" class="p-0">
                    @csrf

                    <!-- Messages -->
                    @if (session('message'))
                        <div class="m-6 mb-0">
                            <div role="alert" class="relative w-full rounded-lg border p-4 border-green-300 dark:border-green-600 bg-green-50 dark:bg-green-900/20 text-green-800 dark:text-green-400">
                                <span class="absolute left-4 top-4 text-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <div class="pl-9">
                                    <div class="text-sm leading-relaxed">{{ session('message') }}</div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="m-6 mb-0">
                            <div role="alert" class="relative w-full rounded-lg border p-4 border-red-300 dark:border-red-600 bg-red-50 dark:bg-red-900/20 text-red-800 dark:text-red-400">
                                <span class="absolute left-4 top-4 text-current">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <div class="pl-9">
                                    <ul class="text-sm list-disc pl-5">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Form Content -->
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <!-- Left Column -->
                            <div class="space-y-6">
                                <!-- Project Name -->
                                <div class="space-y-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                        Project Name <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                        </div>
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="Enter project name"
                                            required
                                            class="pl-10 w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-4 py-3 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition"
                                        >
                                    </div>
                                    @error('name')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Client & Status Row -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <!-- Client -->
                                    <div class="space-y-2">
                                        <label for="client" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Client
                                        </label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                            <input
                                                type="text"
                                                id="client"
                                                name="client"
                                                value="{{ old('client') }}"
                                                placeholder="Client name"
                                                class="pl-10 w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-4 py-3 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition"
                                            >
                                        </div>
                                        @error('client')
                                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Status -->
                                    <div class="space-y-2">
                                        <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                            Status
                                        </label>
                                        <select
                                            id="status"
                                            name="status"
                                            class="w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition"
                                        >
                                            <option value="" disabled {{ old('status') ? '' : 'selected' }}>Select status</option>
                                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="in-progress" {{ old('status') == 'in-progress' ? 'selected' : '' }}>In Progress</option>
                                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="on-hold" {{ old('status') == 'on-hold' ? 'selected' : '' }}>On Hold</option>
                                        </select>
                                        @error('status')
                                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="space-y-2">
                                    <label for="bio" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                        Description <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute top-3 left-3 pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <textarea
                                            id="bio"
                                            name="bio"
                                            rows="6"
                                            placeholder="Enter project description"
                                            required
                                            class="pl-10 w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-4 py-3 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition resize-none"
                                        >{{ old('bio') }}</textarea>
                                    </div>
                                    @error('bio')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Right Column - Images -->
                            <div class="space-y-6">
                                <div class="space-y-4">
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                        Project Images
                                    </label>

                                    <!-- File Upload Area -->
                                    <div class="mt-2">
                                        <label for="images" class="block cursor-pointer">
                                            <div class="flex flex-col items-center justify-center rounded-xl border-2 border-dashed border-gray-300 dark:border-gray-600 p-8 hover:border-[#fbbf24] dark:hover:border-[#fbbf24] transition-colors bg-gray-50 dark:bg-gray-900/50">
                                                <div class="mb-4 rounded-full bg-amber-50 dark:bg-amber-900/20 p-3">
                                                    <svg class="h-8 w-8 text-[#fbbf24]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                                <div class="text-center">
                                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                                        Click to upload images
                                                    </p>
                                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                                                        PNG, JPG, GIF, SVG, WEBP up to 5MB each
                                                    </p>
                                                </div>
                                            </div>
                                            <input
                                                id="images"
                                                name="images[]"
                                                type="file"
                                                multiple
                                                accept="image/*"
                                                class="sr-only"
                                            >
                                        </label>
                                    </div>

                                    <!-- Image Preview -->
                                    <div class="mt-4">
                                        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">Selected Images</h4>
                                        <div id="selectedGrid" class="grid grid-cols-3 sm:grid-cols-4 gap-3 min-h-[100px]">
                                            <!-- Preview will appear here -->
                                        </div>
                                        <p id="noImagesMessage" class="text-sm text-gray-500 dark:text-gray-400 text-center py-4 border border-dashed border-gray-200 dark:border-gray-700 rounded-lg">
                                            No images selected yet
                                        </p>
                                    </div>

                                    @error('images')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                    @error('images.*')
                                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Tips Section -->
                                <div class="bg-amber-50 dark:bg-amber-900/10 border border-amber-200 dark:border-amber-800 rounded-lg p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-amber-800 dark:text-amber-300">Tips</h3>
                                            <div class="mt-2 text-sm text-amber-700 dark:text-amber-400">
                                                <ul class="list-disc pl-5 space-y-1">
                                                    <li>Upload high-quality images for better presentation</li>
                                                    <li>First image will be used as the main project image</li>
                                                    <li>You can upload multiple images at once</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-8 py-6 bg-gray-50 dark:bg-gray-900/50 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                            <a href="{{ route('projects.index') }}" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors w-full sm:w-auto">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                Back to Projects
                            </a>

                            <button type="submit" class="inline-flex items-center justify-center gap-2 px-6 py-3 text-sm font-medium text-white bg-[#fbbf24] hover:bg-amber-500 rounded-lg shadow-sm hover:shadow-md transition-all duration-200 w-full sm:w-auto">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                Create Project
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Image Preview Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('images');
            const grid = document.getElementById('selectedGrid');
            const noImagesMessage = document.getElementById('noImagesMessage');

            if (!input || !grid) return;

            input.addEventListener('change', function (e) {
                const files = Array.from(e.target.files || []);

                if (files.length === 0) {
                    grid.innerHTML = '';
                    noImagesMessage.classList.remove('hidden');
                    return;
                }

                grid.innerHTML = '';
                noImagesMessage.classList.add('hidden');

                files.forEach((file, idx) => {
                    if (!file.type.startsWith('image/')) return;

                    const reader = new FileReader();
                    reader.onload = function (ev) {
                        const wrapper = document.createElement('div');
                        wrapper.className = 'relative group rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700 bg-gray-100 dark:bg-gray-900';

                        // Image
                        const img = document.createElement('img');
                        img.src = ev.target.result;
                        img.alt = `Preview ${idx + 1}`;
                        img.className = 'w-full h-24 object-cover';

                        // Overlay with filename
                        const overlay = document.createElement('div');
                        overlay.className = 'absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-2';

                        const fileName = document.createElement('span');
                        fileName.className = 'text-xs text-white truncate';
                        fileName.textContent = file.name;

                        overlay.appendChild(fileName);

                        // Remove button
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = 'absolute top-1 right-1 bg-red-600 hover:bg-red-700 text-white rounded-full p-1 opacity-0 group-hover:opacity-100 transition-opacity focus:outline-none focus:ring-2 focus:ring-red-500';
                        btn.title = 'Remove this image';
                        btn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>';

                        btn.addEventListener('click', function () {
                            // Remove this file from input
                            const remaining = files.filter((_, i) => i !== idx);
                            const dataTransfer = new DataTransfer();
                            remaining.forEach(f => dataTransfer.items.add(f));
                            input.files = dataTransfer.files;

                            // Update preview
                            if (remaining.length === 0) {
                                noImagesMessage.classList.remove('hidden');
                            }
                            input.dispatchEvent(new Event('change'));
                        });

                        wrapper.appendChild(img);
                        wrapper.appendChild(overlay);
                        wrapper.appendChild(btn);
                        grid.appendChild(wrapper);
                    };
                    reader.readAsDataURL(file);
                });
            });
        });
    </script>
</x-layouts::app>
