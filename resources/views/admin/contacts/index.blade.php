<x-layouts::app :title="__('Contact Messages')">
    <div class="min-h-screen bg-gray-900 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-100 mb-2">Contact Messages</h1>
                    <p class="text-gray-400">Manage messages from your website visitors</p>
                </div>
                <div class="flex gap-3">
                    <form action="{{ route('admin.contacts.mark-all-read') }}" method="POST">
                        @csrf
                        <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-gray-300 bg-gray-700 hover:bg-gray-600 rounded-lg transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Mark All as Read
                        </button>
                    </form>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-400">Total Messages</p>
                            <p class="text-3xl font-bold text-white">{{ $stats['total'] }}</p>
                        </div>
                        <div class="p-3 bg-blue-900/30 rounded-full">
                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-400">Unread</p>
                            <p class="text-3xl font-bold text-yellow-400">{{ $stats['unread'] }}</p>
                        </div>
                        <div class="p-3 bg-yellow-900/30 rounded-full">
                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-400">Read</p>
                            <p class="text-3xl font-bold text-green-400">{{ $stats['read'] }}</p>
                        </div>
                        <div class="p-3 bg-green-900/30 rounded-full">
                            <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="bg-gray-800 rounded-lg p-4 mb-6 border border-gray-700">
                <div class="flex flex-wrap gap-4 items-center justify-between">
                    <div class="flex gap-2">
                        <a href="{{ route('admin.contacts.index') }}" class="px-3 py-1 text-sm rounded-lg {{ !request('filter') ? 'bg-[#fbbf24] text-black' : 'bg-gray-700 text-gray-300 hover:bg-gray-600' }} transition-colors">
                            All
                        </a>
                        <a href="{{ route('admin.contacts.index', ['filter' => 'unread']) }}" class="px-3 py-1 text-sm rounded-lg {{ request('filter') == 'unread' ? 'bg-[#fbbf24] text-black' : 'bg-gray-700 text-gray-300 hover:bg-gray-600' }} transition-colors">
                            Unread
                        </a>
                        <a href="{{ route('admin.contacts.index', ['filter' => 'read']) }}" class="px-3 py-1 text-sm rounded-lg {{ request('filter') == 'read' ? 'bg-[#fbbf24] text-black' : 'bg-gray-700 text-gray-300 hover:bg-gray-600' }} transition-colors">
                            Read
                        </a>
                    </div>

                    <form method="GET" class="flex gap-2">
                        <input type="hidden" name="filter" value="{{ request('filter') }}">
                        <input type="text" name="search" placeholder="Search by email, company, or message..." value="{{ request('search') }}" class="px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white text-sm focus:outline-none focus:ring-2 focus:ring-[#fbbf24] w-64">
                        <button type="submit" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition-colors">
                            Search
                        </button>
                        @if(request('search'))
                            <a href="{{ route('admin.contacts.index', ['filter' => request('filter')]) }}" class="px-4 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition-colors">
                                Clear
                            </a>
                        @endif
                    </form>
                </div>
            </div>

            <!-- Bulk Actions -->
            <div id="bulk-actions" class="hidden bg-gray-800 rounded-lg p-4 mb-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-sm text-gray-300">
                            <span id="selected-count">0</span> messages selected
                        </span>
                    </div>
                    <div class="flex gap-2">
                        <form id="bulk-delete-form" action="{{ route('admin.contacts.bulk-delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="ids" id="bulk-ids">
                            <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors" onclick="return confirm('Delete selected messages?')">
                                Delete Selected
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Messages Table -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-900/50 border-b border-gray-700">
                        <tr>
                            <th class="px-6 py-4 text-left">
                                <input type="checkbox" id="select-all" class="rounded border-gray-600 bg-gray-700 text-[#fbbf24] focus:ring-[#fbbf24]">
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Company</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">WhatsApp</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Message</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-4 text-right text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                        @forelse($contacts as $contact)
                            <tr class="hover:bg-gray-700/50 transition-colors {{ !$contact->is_read ? 'bg-yellow-900/10' : '' }}">
                                <td class="px-6 py-4">
                                    <input type="checkbox" class="contact-checkbox rounded border-gray-600 bg-gray-700 text-[#fbbf24] focus:ring-[#fbbf24]" data-id="{{ $contact->id }}">
                                </td>
                                <td class="px-6 py-4">
                                    @if(!$contact->is_read)
                                        <span class="inline-flex items-center gap-1 px-2 py-1 text-xs font-medium rounded-full bg-yellow-900/50 text-yellow-400">
                                            <span class="w-1.5 h-1.5 bg-yellow-400 rounded-full animate-pulse"></span>
                                            New
                                        </span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-700 text-gray-400">
                                            Read
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-200">{{ $contact->email }}</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300">
                                    {{ $contact->company ?? '-' }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300">
                                    {{ $contact->full_whatsapp }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-300 max-w-xs truncate" title="{{ $contact->message }}">
                                        {{ Str::limit($contact->message, 50) }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-400">
                                    {{ $contact->created_at->format('M d, Y H:i') }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('admin.contacts.show', $contact) }}" class="text-blue-400 hover:text-blue-300 transition-colors" title="View Details">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-300 transition-colors" title="Delete" onclick="return confirm('Are you sure you want to delete this message?')">
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
                                    <svg class="w-16 h-16 mx-auto text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p>No contact messages found.</p>
                                    @if(request('search'))
                                        <p class="text-sm mt-2">Try a different search term.</p>
                                    @endif
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            @if($contacts->hasPages())
                <div class="mt-6">
                    {{ $contacts->appends(request()->query())->links() }}
                </div>
            @endif
        </div>
    </div>

    <!-- Bulk Actions Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAll = document.getElementById('select-all');
            const checkboxes = document.querySelectorAll('.contact-checkbox');
            const bulkActions = document.getElementById('bulk-actions');
            const selectedCount = document.getElementById('selected-count');
            const bulkIds = document.getElementById('bulk-ids');

            function updateBulkActions() {
                const selected = document.querySelectorAll('.contact-checkbox:checked');
                const count = selected.length;

                if (count > 0) {
                    bulkActions.classList.remove('hidden');
                    selectedCount.textContent = count;

                    const ids = Array.from(selected).map(cb => cb.dataset.id);
                    bulkIds.value = ids.join(',');
                } else {
                    bulkActions.classList.add('hidden');
                }
            }

            if (selectAll) {
                selectAll.addEventListener('change', function() {
                    checkboxes.forEach(cb => cb.checked = this.checked);
                    updateBulkActions();
                });
            }

            checkboxes.forEach(cb => {
                cb.addEventListener('change', updateBulkActions);
            });

            updateBulkActions();
        });
    </script>
</x-layouts::app>
