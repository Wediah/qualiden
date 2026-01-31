<x-layouts::app :title="__('Create New Project')">
<div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm max-w-4xl
mx-auto text-gray-900 dark:text-gray-100">

    {{-- CardHeader --}}
    <div class="flex flex-col space-y-1.5 p-6 border-b border-gray-200 dark:border-gray-700">
        <h3 class="text-lg font-semibold leading-none tracking-tight">
           Create New Project
        </h3>
    </div>

    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
        @csrf
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

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Client</label>

                            <input type="text" id="client" wire:model="client" placeholder="0.00"
                                   class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 pl-7 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50">

                            @error('client') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-3">
                            <label for="size" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                                <input type="text" id="status" wire:model="status" placeholder="Size"
                                       class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 pr-12 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50">

                            @error('size') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>

                {{-- Right Column --}}
                <div class="space-y-6">
                    <div class="space-y-3">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description <span class="text-red-500">*</span></label>
                        <textarea id="bio" wire:model="bio" rows="6" placeholder="Enter project description"
                                  class="flex min-h-[80px] w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50 text-gray-900 dark:text-gray-100"></textarea>
                        @error('bio') <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p> @enderror
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
                                        <input id="images" name="images[]" type="file" multiple accept="image/*" class="sr-only">
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

                        {{-- Selected New Images Preview (client-side) --}}
                        <div id="selectedNewImages" class="mt-4">
                            <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Selected New Images (Preview):</h4>
                            <div id="selectedGrid" class="grid grid-cols-3 sm:grid-cols-4 gap-2"></div>
                        </div>
                    </div>
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
                    Create Project
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

    {{-- Inline script to handle previews for the standard file input --}}
    <script>
        (function () {
            const input = document.getElementById('images');
            const grid = document.getElementById('selectedGrid');
            if (!input || !grid) return;

            input.addEventListener('change', function (e) {
                grid.innerHTML = '';
                const files = Array.from(e.target.files || []);
                files.forEach((file, idx) => {
                    if (!file.type.startsWith('image/')) return;
                    const reader = new FileReader();
                    reader.onload = function (ev) {
                        const wrapper = document.createElement('div');
                        wrapper.className = 'relative group aspect-square';

                        const img = document.createElement('img');
                        img.src = ev.target.result;
                        img.alt = 'Preview ' + (idx + 1);
                        img.className = 'h-full w-full object-cover rounded-md border border-gray-200 dark:border-gray-600';

                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = 'absolute top-1 right-1 bg-red-600 text-white rounded-full p-0.5 opacity-0 group-hover:opacity-100 transition-opacity focus:outline-none focus:ring-2 focus:ring-red-500';
                        btn.title = 'Remove this image before upload';
                        btn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>';
                        btn.addEventListener('click', function () {
                            // remove file from FileList is hard; instead, clear input and rebuild excluding this index
                            const remaining = files.filter((f, i) => i !== idx);
                            const dataTransfer = new DataTransfer();
                            remaining.forEach(f => dataTransfer.items.add(f));
                            input.files = dataTransfer.files;
                            // re-trigger change to rebuild previews
                            const ev = new Event('change');
                            input.dispatchEvent(ev);
                        });

                        wrapper.appendChild(img);
                        wrapper.appendChild(btn);
                        grid.appendChild(wrapper);
                    };
                    reader.readAsDataURL(file);
                });
            });
        })();
    </script>
</div>
</x-layouts::app>
