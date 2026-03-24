{{-- resources/views/admin/cases/create.blade.php --}}
<x-layouts::app :title="__('Create New Case')">
    <div class="min-h-screen bg-gray-900 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-100 mb-2">Create New Case Study</h1>
                <p class="text-gray-400">Fill in the details below to create a new case study</p>
            </div>

            <!-- Main Card -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700">
                <form method="POST" action="{{ route('admin.cases.store') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Messages -->
                    @if ($errors->any())
                        <div class="m-6 mb-0">
                            <div role="alert" class="relative w-full rounded-lg border p-4 border-red-600 bg-red-900/20 text-red-400">
                                <ul class="text-sm list-disc pl-5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <!-- Form Content -->
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                            <!-- Left Column -->
                            <div class="space-y-6">
                                <!-- Title -->
                                <div class="space-y-2">
                                    <label for="title" class="block text-sm font-medium text-gray-300">
                                        Title <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                                           placeholder="Enter case study title" required
                                           class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-3 text-sm text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition">
                                    <p class="text-xs text-gray-400">This will be used to generate the URL slug automatically</p>
                                </div>

                                <!-- Category & Client Row -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label for="category" class="block text-sm font-medium text-gray-300">Category</label>
                                        <select id="category" name="category"
                                                class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-3 text-sm text-white focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition">
                                            <option value="" disabled {{ old('category') ? '' : 'selected' }}>Select category</option>
                                            <option value="HDPE Pipe" {{ old('category') == 'HDPE Pipe' ? 'selected' : '' }}>HDPE Pipe</option>
                                            <option value="HDPE Fittings" {{ old('category') == 'HDPE Fittings' ? 'selected' : '' }}>HDPE Fittings</option>
                                            <option value="PVC Pipe" {{ old('category') == 'PVC Pipe' ? 'selected' : '' }}>PVC Pipe</option>
                                            <option value="PVC Fittings" {{ old('category') == 'PVC Fittings' ? 'selected' : '' }}>PVC Fittings</option>
                                            <option value="FRP/GRP Pipe & Fittings" {{ old('category') == 'FRP/GRP Pipe & Fittings' ? 'selected' : '' }}>FRP/GRP Pipe & Fittings</option>
                                        </select>
                                    </div>
                                    <div class="space-y-2">
                                        <label for="client_name" class="block text-sm font-medium text-gray-300">Client Name</label>
                                        <input type="text" id="client_name" name="client_name" value="{{ old('client_name') }}"
                                               placeholder="Client name"
                                               class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-3 text-sm text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition">
                                    </div>
                                </div>

                                <!-- Location & Project Date Row -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label for="location" class="block text-sm font-medium text-gray-300">Location</label>
                                        <input type="text" id="location" name="location" value="{{ old('location') }}"
                                               placeholder="Project location"
                                               class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-3 text-sm text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition">
                                    </div>
                                    <div class="space-y-2">
                                        <label for="project_date" class="block text-sm font-medium text-gray-300">Project Date</label>
                                        <input type="date" id="project_date" name="project_date" value="{{ old('project_date') }}"
                                               class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-3 text-sm text-white focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition">
                                    </div>
                                </div>

                                <!-- Excerpt -->
                                <div class="space-y-2">
                                    <label for="excerpt" class="block text-sm font-medium text-gray-300">Excerpt</label>
                                    <textarea id="excerpt" name="excerpt" rows="3"
                                              placeholder="Brief summary of the case study"
                                              class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-3 text-sm text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition resize-none">{{ old('excerpt') }}</textarea>
                                </div>

                                <!-- Content -->
                                <div class="space-y-2">
                                    <label for="content" class="block text-sm font-medium text-gray-300">
                                        Content <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="content" name="content" rows="8"
                                              placeholder="Write your case study content here..."
                                              required
                                              class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-3 text-sm text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition resize-y">{{ old('content') }}</textarea>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-6">
                                <!-- Featured Image -->
                                <div class="space-y-2">
                                    <label for="featured_image" class="block text-sm font-medium text-gray-300">Featured Image</label>
                                    <div class="mt-2">
                                        <label for="featured_image_input" class="block cursor-pointer">
                                            <div class="flex flex-col items-center justify-center rounded-xl border-2 border-dashed border-gray-600 p-6 hover:border-[#fbbf24] transition-colors bg-gray-900/50">
                                                <svg class="h-8 w-8 text-[#fbbf24] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <p class="text-sm text-gray-300">Click to upload featured image</p>
                                                <p class="text-xs text-gray-400 mt-1">PNG, JPG up to 2MB</p>
                                            </div>
                                            <input id="featured_image_input" name="featured_image" type="file" accept="image/*" class="sr-only">
                                        </label>
                                    </div>
                                    <div id="featuredImagePreview" class="mt-2 hidden">
                                        <img id="featuredPreviewImg" class="w-full h-48 object-cover rounded-lg">
                                        <button type="button" id="removeFeaturedImage" class="mt-1 text-xs text-red-400 hover:text-red-300">Remove</button>
                                    </div>
                                </div>

                                <!-- Additional Images -->
                                <div class="space-y-4">
                                    <label class="block text-sm font-medium text-gray-300">Additional Images</label>
                                    <div class="mt-2">
                                        <label for="images" class="block cursor-pointer">
                                            <div class="flex flex-col items-center justify-center rounded-xl border-2 border-dashed border-gray-600 p-6 hover:border-[#fbbf24] transition-colors bg-gray-900/50">
                                                <svg class="h-8 w-8 text-[#fbbf24] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <p class="text-sm text-gray-300">Click to upload additional images</p>
                                                <p class="text-xs text-gray-400">PNG, JPG up to 2MB each</p>
                                            </div>
                                            <input id="images" name="images[]" type="file" multiple accept="image/*" class="sr-only">
                                        </label>
                                    </div>

                                    <div class="mt-4">
                                        <h4 class="text-sm font-medium text-gray-300 mb-3">Selected Images</h4>
                                        <div id="selectedGrid" class="grid grid-cols-3 gap-3 min-h-25">
                                            <!-- Preview will appear here -->
                                        </div>
                                        <p id="noImagesMessage" class="text-sm text-gray-400 text-center py-4 border border-dashed border-gray-700 rounded-lg">
                                            No images selected yet
                                        </p>
                                    </div>
                                </div>

                                <!-- Publish Settings -->
                                <div class="bg-gray-700/50 rounded-lg p-4 space-y-4">
                                    <div class="flex items-center justify-between">
                                        <label class="text-sm font-medium text-gray-300">Publish Status</label>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" name="is_published" value="1" class="sr-only peer" {{ old('is_published') ? 'checked' : '' }}>
                                            <div class="w-11 h-6 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#fbbf24]"></div>
                                            <span class="ml-3 text-sm text-gray-300">Publish immediately</span>
                                        </label>
                                    </div>

                                    <div class="space-y-2">
                                        <label for="published_at" class="block text-sm font-medium text-gray-300">Publish Date</label>
                                        <input type="datetime-local" id="published_at" name="published_at" value="{{ old('published_at') }}"
                                               class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-2 text-sm text-white focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition">
                                    </div>
                                </div>

                                <!-- SEO Fields -->
                                <div class="space-y-4">
                                    <div class="space-y-2">
                                        <label for="meta_title" class="block text-sm font-medium text-gray-300">Meta Title</label>
                                        <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title') }}"
                                               placeholder="SEO title (leave empty to use case title)"
                                               class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-2 text-sm text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition">
                                    </div>
                                    <div class="space-y-2">
                                        <label for="meta_description" class="block text-sm font-medium text-gray-300">Meta Description</label>
                                        <textarea id="meta_description" name="meta_description" rows="2"
                                                  placeholder="SEO description (max 160 characters)"
                                                  class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-2 text-sm text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition resize-none">{{ old('meta_description') }}</textarea>
                                    </div>
                                    <div class="space-y-2">
                                        <label for="meta_keywords" class="block text-sm font-medium text-gray-300">Meta Keywords</label>
                                        <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}"
                                               placeholder="SEO keywords separated by commas"
                                               class="w-full rounded-lg border border-gray-600 bg-gray-700 px-4 py-2 text-sm text-white placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fbbf24] focus:border-transparent transition">
                                    </div>
                                </div>

                                <!-- Slug Preview -->
                                <div class="bg-gray-700/50 rounded-lg p-4">
                                    <div class="flex items-start gap-3">
                                        <svg class="h-5 w-5 text-gray-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.102m1.102-4.486a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.102" />
                                        </svg>
                                        <div class="flex-1">
                                            <h4 class="text-sm font-medium text-gray-300">URL Preview</h4>
                                            <p class="text-xs text-gray-400 mt-1">Your case study will be accessible at:</p>
                                            <p class="text-sm text-[#fbbf24] font-mono mt-1" id="slugPreview">/cases/your-case-slug</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="px-8 py-6 bg-gray-900/50 border-t border-gray-700">
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                            <a href="{{ route('admin.cases.index') }}" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-white bg-gray-800 border border-gray-600 rounded-lg hover:bg-gray-700 transition-colors w-full sm:w-auto">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                Back to Cases
                            </a>
                            <button type="submit" class="inline-flex items-center justify-center gap-2 px-6 py-3 text-sm font-medium text-black bg-[#fbbf24] hover:bg-amber-500 rounded-lg shadow-sm hover:shadow-md transition-all duration-200 w-full sm:w-auto">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                Create Case Study
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Slug preview
            const titleInput = document.getElementById('title');
            const slugPreview = document.getElementById('slugPreview');

            function updateSlugPreview() {
                const title = titleInput.value.trim();
                if (title) {
                    const slug = title.toLowerCase()
                        .replace(/[^\w\s-]/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/--+/g, '-')
                        .trim();
                    slugPreview.textContent = `/cases/${slug}`;
                } else {
                    slugPreview.textContent = '/cases/your-case-slug';
                }
            }

            if (titleInput) {
                titleInput.addEventListener('input', updateSlugPreview);
                updateSlugPreview();
            }

            // Featured image preview
            const featuredInput = document.getElementById('featured_image_input');
            const featuredPreview = document.getElementById('featuredImagePreview');
            const featuredPreviewImg = document.getElementById('featuredPreviewImg');
            const removeFeatured = document.getElementById('removeFeaturedImage');

            if (featuredInput) {
                featuredInput.addEventListener('change', function(e) {
                    if (e.target.files && e.target.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(ev) {
                            featuredPreviewImg.src = ev.target.result;
                            featuredPreview.classList.remove('hidden');
                        };
                        reader.readAsDataURL(e.target.files[0]);
                    }
                });
            }

            if (removeFeatured) {
                removeFeatured.addEventListener('click', function() {
                    featuredInput.value = '';
                    featuredPreview.classList.add('hidden');
                });
            }

            // Additional images preview
            const imagesInput = document.getElementById('images');
            const grid = document.getElementById('selectedGrid');
            const noImagesMessage = document.getElementById('noImagesMessage');

            if (imagesInput) {
                imagesInput.addEventListener('change', function(e) {
                    const files = Array.from(e.target.files || []);

                    if (files.length === 0) {
                        if (grid) grid.innerHTML = '';
                        if (noImagesMessage) noImagesMessage.classList.remove('hidden');
                        return;
                    }

                    if (grid) grid.innerHTML = '';
                    if (noImagesMessage) noImagesMessage.classList.add('hidden');

                    files.forEach((file, idx) => {
                        if (!file.type.startsWith('image/')) return;

                        const reader = new FileReader();
                        reader.onload = function(ev) {
                            const wrapper = document.createElement('div');
                            wrapper.className = 'relative group rounded-lg overflow-hidden border border-gray-700 bg-gray-900';

                            const img = document.createElement('img');
                            img.src = ev.target.result;
                            img.alt = `Preview ${idx + 1}`;
                            img.className = 'w-full h-24 object-cover';

                            // Featured badge for first image
                            if (idx === 0) {
                                const badge = document.createElement('div');
                                badge.className = 'absolute top-1 left-1 bg-[#fbbf24] text-black text-xs font-bold px-2 py-0.5 rounded';
                                badge.textContent = 'FEATURED';
                                wrapper.appendChild(badge);
                            }

                            const btn = document.createElement('button');
                            btn.type = 'button';
                            btn.className = 'absolute top-1 right-1 bg-red-600 hover:bg-red-700 text-white rounded-full p-1 opacity-0 group-hover:opacity-100 transition-opacity';
                            btn.innerHTML = '<svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>';
                            btn.onclick = function() {
                                const remaining = files.filter((_, i) => i !== idx);
                                const dataTransfer = new DataTransfer();
                                remaining.forEach(f => dataTransfer.items.add(f));
                                imagesInput.files = dataTransfer.files;
                                imagesInput.dispatchEvent(new Event('change'));
                            };

                            wrapper.appendChild(img);
                            wrapper.appendChild(btn);
                            grid.appendChild(wrapper);
                        };
                        reader.readAsDataURL(file);
                    });
                });
            }
        });
    </script>
</x-layouts::app>
