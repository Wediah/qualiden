{{-- resources/views/admin/contacts/show.blade.php --}}
<x-layouts::app :title="__('Contact Message Details')">
    <div class="min-h-screen bg-gray-900 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-100 mb-2">Message Details</h1>
                    <p class="text-gray-400">View complete message information</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('admin.contacts.index', request()->query()) }}" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-gray-300 bg-gray-700 hover:bg-gray-600 rounded-lg transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to Messages
                    </a>
                </div>
            </div>

            <!-- Message Card -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700">
                <!-- Status Banner -->
                @if(!$contact->is_read)
                    <div class="bg-yellow-900/30 border-b border-yellow-700 px-6 py-3">
                        <div class="flex items-center gap-2 text-yellow-400">
                            <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                            <span class="text-sm font-medium">New Message - Not yet read</span>
                        </div>
                    </div>
                @else
                    <div class="bg-green-900/30 border-b border-green-700 px-6 py-3">
                        <div class="flex items-center gap-2 text-green-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-sm font-medium">Read on {{ $contact->read_at ? $contact->read_at->format('M d, Y H:i') : 'Read' }}</span>
                        </div>
                    </div>
                @endif

                <!-- Contact Information -->
                <div class="p-6 border-b border-gray-700">
                    <h2 class="text-lg font-semibold text-white mb-4">Contact Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider">Email</label>
                            <p class="text-white mt-1">
                                <a href="mailto:{{ $contact->email }}" class="text-[#fbbf24] hover:underline">
                                    {{ $contact->email }}
                                </a>
                            </p>
                        </div>
                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider">Company</label>
                            <p class="text-white mt-1">{{ $contact->company ?? 'Not provided' }}</p>
                        </div>
                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider">WhatsApp</label>
                            <p class="text-white mt-1">
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->full_whatsapp) }}" target="_blank" class="text-[#fbbf24] hover:underline">
                                    {{ $contact->full_whatsapp }}
                                </a>
                            </p>
                        </div>
                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider">Submitted</label>
                            <p class="text-white mt-1">{{ $contact->created_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider">IP Address</label>
                            <p class="text-white mt-1">{{ $contact->ip_address ?? 'Not recorded' }}</p>
                        </div>
                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider">User Agent</label>
                            <p class="text-white mt-1 text-sm">{{ $contact->user_agent ?? 'Not recorded' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Message Content -->
                <div class="p-6">
                    <h2 class="text-lg font-semibold text-white mb-4">Message</h2>
                    <div class="bg-gray-900 rounded-lg p-6">
                        <p class="text-gray-300 leading-relaxed whitespace-pre-wrap">
                            {{ $contact->message ?? 'No message content provided.' }}
                        </p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="px-6 py-4 bg-gray-900/50 border-t border-gray-700 flex flex-wrap justify-between items-center gap-4">
                    <div>
                        @if(!$contact->is_read)
                            <form action="{{ route('admin.contacts.mark-read', $contact) }}" method="POST">
                                @csrf
                                <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-green-600 hover:bg-green-700 rounded-lg transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Mark as Read
                                </button>
                            </form>
                        @endif
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="mailto:{{ $contact->email }}?subject=Re: Your message from Qualiden Group" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-black bg-[#fbbf24] hover:bg-amber-500 rounded-lg transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Reply via Email
                        </a>

                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->full_whatsapp) }}?text=Hello, I'm responding to your message from Qualiden Group." target="_blank" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-green-600 hover:bg-green-700 rounded-lg transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Reply via WhatsApp
                        </a>

                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-lg transition-colors" onclick="return confirm('Are you sure you want to delete this message? This action cannot be undone.')">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Delete Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Quick Reply Section -->
            <div class="mt-8 bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700">
                <div class="p-6">
                    <h2 class="text-lg font-semibold text-white mb-4">Quick Reply</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-900 rounded-lg p-4">
                            <h3 class="text-sm font-medium text-gray-400 mb-2">Email Template</h3>
                            <p class="text-xs text-gray-500 mb-2">Copy and paste this template:</p>
                            <div class="bg-gray-800 rounded p-3">
                                <pre class="text-xs text-gray-300 whitespace-pre-wrap break-all">
Subject: Re: Your message from Qualiden Group

Hello,

Thank you for reaching out to Qualiden Group. We have received your message and will get back to you shortly.

Best regards,
Qualiden Group Team
                                </pre>
                            </div>
                        </div>
                        <div class="bg-gray-900 rounded-lg p-4">
                            <h3 class="text-sm font-medium text-gray-400 mb-2">WhatsApp Template</h3>
                            <p class="text-xs text-gray-500 mb-2">Copy and paste this template:</p>
                            <div class="bg-gray-800 rounded p-3">
                                <pre class="text-xs text-gray-300 whitespace-pre-wrap break-all">
Hello! Thank you for contacting Qualiden Group. We've received your message and will respond shortly.

Best regards,
Qualiden Group
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
