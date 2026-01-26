<div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm max-w-4xl
mx-auto text-gray-900 dark:text-gray-100">

    {{-- CardHeader --}}
    <div class="flex flex-col space-y-1.5 p-6 border-b border-gray-200 dark:border-gray-700">
        <h3 class="text-lg font-semibold leading-none tracking-tight">
           Create New Project
        </h3>
    </div>

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        {{-- CardContent --}}
        <div class="p-6 space-y-8">
            {{-- Success Message --}}
            @if (session()->has('message'))
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
            @endif

            {{-- Error Message --}}
            @if (session()->has('error'))
                <div role="alert" class="relative w-full rounded-lg border p-4 border-red-300 dark:border-red-600 bg-red-50 dark:bg-red-900/20 text-red-800 dark:text-red-400">
                    <span class="absolute left-4 top-4 text-current">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <div class="pl-9">
                        <div class="text-sm leading-relaxed">{{ session('error') }}</div>
                    </div>
                </div>
            @endif

            {{-- Warning Message --}}
            @if (session()->has('warning'))
                <div role="alert" class="relative w-full rounded-lg border p-4 border-yellow-300 dark:border-yellow-600 bg-yellow-50 dark:bg-yellow-900/20 text-yellow-800 dark:text-yellow-400">
                    <span class="absolute left-4 top-4 text-current">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </span>
                    <div class="pl-9">
                        <div class="text-sm leading-relaxed">{{ session('warning') }}</div>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Left Column --}}
                <div class="space-y-6">
                    <div class="space-y-3">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Project
                            Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" wire:model.lazy="name" placeholder="Enter project name"
                               class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600
                               bg-white dark:bg-gray-800 px-3 py-2 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500
                               focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50">
                        @error('name') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-3">
                        <label for="project_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Project Type <span class="text-red-500">*</span></label>
                        <select id="project_type" wire:model="project_type"
                                class="flex h-10 w-full appearance-none items-center justify-between rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50">
                            <option value="">Select Project Type</option>
                            <option value="realEstate">Real Estate</option>
                            <option value="construction">Construction</option>
                            <option value="architecture">Architecture</option>
                        </select>
                        @error('project_type') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-3">
                        <label for="location" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Location</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <input type="text" id="location" wire:model="location" placeholder="Project location"
                                   class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 pl-10 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50">
                        </div>
                        @error('location') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Price</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 dark:text-gray-400 text-sm">$</span>
                                </div>
                                <input type="text" id="price" wire:model="price" placeholder="0.00"
                                       class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 pl-7 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50">
                            </div>
                            @error('price') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-3">
                            <label for="size" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Size</label>
                            <div class="relative">
                                <input type="text" id="size" wire:model="size" placeholder="Size"
                                       class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 pr-12 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 dark:text-gray-400 text-sm">sq ft</span>
                                </div>
                            </div>
                            @error('size') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label for="partners" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Partners</label>
                        <input type="text" id="partners" wire:model="partners" placeholder="Project partners (comma separated)"
                               class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50">
                        @error('partners') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                    </div>
                </div>

                <input id="imagesText" class="sr-only" wire:model="images" />


                {{-- Right Column --}}
                <div class="space-y-6">
                    <div class="space-y-3">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description <span class="text-red-500">*</span></label>
                        <textarea id="description" wire:model="description" rows="6" placeholder="Enter project description"
                                  class="flex min-h-[80px] w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50 text-gray-900 dark:text-gray-100"></textarea>
                        @error('description') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-3">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Project Images</label>

                        {{-- File Upload Dropzone --}}
                        <div x-data="{ isUploading: false, progress: 0 }"
                             x-on:livewire-upload-start="isUploading = true"
                             x-on:livewire-upload-finish="isUploading = false; progress = 0"
                             x-on:livewire-upload-error="isUploading = false; progress = 0"
                             x-on:livewire-upload-progress="progress = $event.detail.progress"
                             class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 dark:border-gray-600 px-6 pb-6 pt-5 hover:border-gray-400 dark:hover:border-gray-500 bg-gray-50 dark:bg-gray-800 transition">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-10 w-10 text-gray-400 dark:text-gray-500" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm justify-center text-gray-600 dark:text-gray-400">
                                    <label for="images" class="relative cursor-pointer rounded-md font-medium text-indigo-600 dark:text-indigo-400 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 dark:focus-within:ring-indigo-500 focus-within:ring-offset-2 dark:focus-within:ring-offset-gray-900 hover:text-indigo-500 dark:hover:text-indigo-300">
                                        <span>Click to select images</span>
                                        <input id="images" name="images" type="file"  onchange="(function onChange(e){
                                            const files = e.target.files;

                                            Object.keys(files).forEach(function(i){

                                                const reader = new FileReader();

                                                reader.onload = function (ev){
                                                    const result = ev.target.result;
                                                    const el = document.getElementById('imagesText');
                                                    const vals = el.value || '';
                                                    const arr = vals.split('#').filter(function(item){ return item });
                                                    arr.push(result);
                                                    const val = arr.join('#');
                                                    el.value = val;

                                                    try {
                                                        if (window.Livewire && typeof Livewire.emit === 'function') {
                                                            Livewire.emit('setImages', val);
                                                        } else if (window.livewire && typeof window.livewire.emit === 'function') {
                                                            window.livewire.emit('setImages', val);
                                                        }
                                                    } catch (err) {
                                                        // ignore if Livewire isn't available
                                                    }
                                                    el.dispatchEvent(new Event('input'));
                                                }

                                                const file = files[i];
                                                reader.readAsDataURL(file);
                                            })

                                        })(event);" multiple class="sr-only">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF, SVG, WEBP up to 10MB</p>
                                {{-- Alpine.js Progress Bar --}}
                                <div x-show="isUploading" class="w-full bg-gray-200 dark:bg-gray-700 rounded-full mt-2">
                                    <div class="bg-indigo-600 text-xs font-medium text-indigo-100 text-center p-0.5 leading-none rounded-full" :style="`width: ${progress}%`" x-text="`${progress}%`"></div>
                                </div>
                            </div>
                        </div>

                        {{-- Livewire Loading Indicator --}}
                        <div wire:loading wire:target="images" class="text-sm text-indigo-600 dark:text-indigo-400 mt-2 flex items-center">
                            <svg class="animate-spin mr-2 h-4 w-4 text-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Uploading...
                        </div>
                        @error('images.*') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                        @error('images') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror

                        {{-- Selected New Images Preview --}}
                        @if ($images)
                            <div class="mt-4">
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Selected New Images (Preview):</h4>
                                <div class="grid grid-cols-3 sm:grid-cols-4 gap-2">
                                    @foreach (explode("#", $images) as $index => $image)
                                        <div class="relative group aspect-square">
                                            <img src="{{ $image }}" alt="Preview {{ $index + 1 }}" class="h-full w-full object-cover rounded-md border border-gray-200 dark:border-gray-600">
                                            <button type="button" wire:click="removeSelectedImage({{ $index }})" title="Remove this image before upload" class="absolute top-1 right-1 bg-red-600 text-white rounded-full p-0.5 opacity-0 group-hover:opacity-100 transition-opacity focus:outline-none focus:ring-2 focus:ring-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    {{-- Current Images (for edit mode) --}}
                    @if ($project_id && !empty($current_images))
                        <div class="space-y-3 rounded-md border border-gray-200 dark:border-gray-600 p-4 bg-gray-50 dark:bg-gray-800">
                            <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300">Current Saved Images:</h3>
                            <div class="grid grid-cols-3 sm:grid-cols-4 gap-3">
                                @foreach ($current_images as $index => $image)
                                    <div class="relative group aspect-square">
                                        <img src="{{ $image['image_path'] }}" alt="Project image {{ $index + 1 }}" class="h-full w-full object-cover rounded-md border border-gray-200 dark:border-gray-600">
                                        <div class="absolute inset-0 bg-black/70 rounded-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                            <button
                                                type="button"
                                                wire:click="markImageForDeletion({{ $image['id'] }})"
                                                title="Mark for deletion"
                                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-red-500 focus-visible:ring-offset-2 dark:focus-visible:ring-offset-gray-900 disabled:pointer-events-none disabled:opacity-50 hover:bg-red-100 dark:hover:bg-red-900/50 hover:text-red-600 dark:hover:text-red-400 text-red-500 dark:text-red-400 h-8 w-8 p-0">
                                                <span class="sr-only">Mark image {{ $image['id'] }} for deletion</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if (!empty($deleteImages))
                                <p class="mt-2 text-xs text-yellow-600 dark:text-yellow-400">
                                    {{ count($deleteImages) }} image(s) marked for deletion. Changes will apply upon saving the project.
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- CardFooter --}}
        <div class="flex items-center justify-between p-6 border-t border-gray-200 dark:border-gray-700">
            {{-- Back Button --}}
            <a href="{{ route('projects.index') }}"
               class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-white dark:ring-offset-gray-900 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-gray-400 dark:focus-visible:ring-gray-600 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 h-10 px-4 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Projects
            </a>

            {{-- Submit Button --}}
            <button type="submit"
                    wire:loading.attr="disabled"
                    wire:target="save, images"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium
               bg-green-600 hover:bg-green-700 text-white cursor-pointer
               h-10 px-4 py-2 transition-colors duration-200
               min-w-[150px]">
                <span wire:loading.remove wire:target="save, images" class="flex flex-row items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                    </svg>
                    {{ $project_id ? 'Update Project' : 'Create Project' }}
                </span>
                <span wire:loading wire:target="save, images" class="flex flex-row items-center">
                    <svg class="animate-spin h-3 w-3 mr-2 text-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing...
                </span>
            </button>
        </div>
    </form>
</div>
