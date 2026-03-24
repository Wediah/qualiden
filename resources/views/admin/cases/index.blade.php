{{-- resources/views/admin/cases/index.blade.php --}}
<x-layouts::app :title="__('Manage Cases')">
    <div class="min-h-screen bg-gray-900 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-100 mb-2">Manage Cases</h1>
                    <p class="text-gray-400">Create and manage your case studies</p>
                </div>
                <a href="{{ route('admin.cases.create') }}" class="inline-flex items-center gap-2 px-6 py-3 text-sm font-medium text-black bg-[#fbbf24] hover:bg-amber-500 rounded-lg shadow-sm hover:shadow-md transition-all duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Create New Case
                </a>
            </div>

            <!-- Messages -->
            @if (session('success'))
                <div class="mb-6">
                    <div role="alert" class="relative w-full rounded-lg border p-4 border-green-600 bg-green-900/20 text-green-400">
                        <div class="text-sm leading-relaxed">{{ session('success') }}</div>
                    </div>
                </div>
            @endif

            <!-- Cases Table -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-900/50 border-b border-gray-700">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Featured</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Category</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Client</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Views</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-4 text-right text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                        @forelse($cases as $case)
                            <tr class="hover:bg-gray-700/50 transition-colors">
                                <td class="px-6 py-4">
                                    @if($case->featured_image)
                                        <img src="{{ Storage::url($case->featured_image) }}" alt="{{ $case->title }}" class="w-12 h-12 object-cover rounded-lg">
                                    @else
                                        <div class="w-12 h-12 bg-gray-700 rounded-lg flex items-center justify-center">
                                            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-gray-200">{{ $case->title }}</div>
                                    <div class="text-xs text-gray-400">Slug: {{ $case->slug }}</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $case->category ?? '-' }}</td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $case->client_name ?? '-' }}</td>
                                <td class="px-6 py-4">
                                    @if($case->is_published)
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-900/50 text-green-400">Published</span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-700 text-gray-400">Draft</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $case->views }}</td>
                                <td class="px-6 py-4 text-sm text-gray-300">{{ $case->published_at ? $case->published_at->format('M d, Y') : $case->created_at->format('M d, Y') }}</td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('admin.cases.edit', $case) }}" class="text-blue-400 hover:text-blue-300 transition-colors" title="Edit">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.cases.destroy', $case) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-300 transition-colors" title="Delete" onclick="return confirm('Are you sure you want to delete this case study?')">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-12 text-center text-gray-400">
                                    No case studies found. Click "Create New Case" to get started.
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            @if($cases->hasPages())
                <div class="mt-6">
                    {{ $cases->links() }}
                </div>
            @endif
        </div>
    </div>
</x-layouts::app>
