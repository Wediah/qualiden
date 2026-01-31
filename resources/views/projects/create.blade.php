<x-layouts::app :title="__('Create New Project')">
    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg shadow-sm max-w-4xl mx-auto text-gray-900 dark:text-gray-100">

        {{-- CardHeader --}}
        <div class="flex flex-col space-y-1.5 p-6 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-lg font-semibold leading-none tracking-tight">
                Create New Project
            </h3>
        </div>

        <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            @csrf

            {{-- Messages --}}
            @if (session('message'))
                <div class="p-6">
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
                <div class="p-6">
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

            {{-- CardContent --}}
            <div class="p-6 space-y-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Left Column --}}
                    <div class="space-y-6">
                        <div class="space-y-3">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Project Name <span class="text-red-500">*</span></label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Enter project name"
                                class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50"
                            >
                            @error('name')
                            <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-3">
                                <label for="client" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Client</label>
                                <input
                                    type="text"
                                    id="client"
                                    name="client"
                                    value="{{ old('client') }}"
                                    placeholder="Client name"
                                    class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 pl-7 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50"
                                >
                                @error('client')
                                <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-3">
                                <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                                <input
                                    type="text"
                                    id="status"
                                    name="status"
                                    value="{{ old('status') }}"
                                    placeholder="Status"
                                    class="flex h-10 w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 pr-12 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50"
                                >
                                @error('status')
                                <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Right Column --}}
                    <div class="space-y-6">
                        <div class="space-y-3">
                            <label for="bio" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description <span class="text-red-500">*</span></label>
                            <textarea
                                id="bio"
                                name="bio"
                                rows="6"
                                placeholder="Enter project description"
                                class="flex min-h-[80px] w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 px-3 py-2 text-sm placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition disabled:cursor-not-allowed disabled:opacity-50 text-gray-900 dark:text-gray-100"
                            >{{ old('bio') }}</textarea>
                            @error('bio')
                            <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-3">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Project Images</label>
                            <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 dark:border-gray-600 px-6 pb-6 pt-5 hover:border-gray-400 dark:hover:border-gray-500 bg-gray-50 dark:bg-gray-800 transition">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-10 w-10 text-gray-400 dark:text-gray-500" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm justify-center text-gray-600 dark:text-gray-400">
                                        <label for="images" class="relative cursor-pointer rounded-md font-medium text-indigo-600 dark:text-indigo-400 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 dark:focus-within:ring-indigo-500 focus-within:ring-offset-2 dark:focus-within:ring-offset-gray-900 hover:text-indigo-500 dark:hover:text-indigo-300">
                                            <span>Click to select images</span>
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
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF, SVG, WEBP up to 10MB</p>
                                </div>
                            </div>
                            @error('images')
                            <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                            @error('images.*')
                            <p class="mt-1 text-sm font-medium text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            {{-- CardFooter --}}
            <div class="flex items-center justify-between p-6 border-t border-gray-200 dark:border-gray-700">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-white dark:ring-offset-gray-900 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-gray-400 dark:focus-visible:ring-gray-600 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 h-10 px-4 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Projects
                </a>

                <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium bg-green-600 hover:bg-green-700 text-white cursor-pointer h-10 px-4 py-2 transition-colors duration-200 min-w-[150px]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                    </svg>
                    Create Project
                </button>
            </div>
        </form>
    </div>
</x-layouts::app>
