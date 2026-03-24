<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // Public form submission
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'code' => 'nullable|string|max:10',
            'whatsapp' => 'required|string|max:20',
            'message' => 'nullable|string|max:1000',
        ]);

        // Create the contact record
        $contact = ContactUs::create([
            'email' => $validated['email'],
            'company' => $validated['company'],
            'whatsapp_code' => $validated['code'],
            'whatsapp_number' => $validated['whatsapp'],
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        // Optional: Send notification email
        // Mail::to('admin@qualiden.com')->send(new NewContactMessage($contact));

        // Return response
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for contacting us! We will get back to you soon.',
            ]);
        }

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    // Admin methods
    public function index(Request $request)
    {
        $query = ContactUs::query();

        // Filter by read status
        if ($request->has('filter')) {
            if ($request->filter === 'unread') {
                $query->unread();
            } elseif ($request->filter === 'read') {
                $query->where('is_read', true);
            }
        }

        // Search
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('email', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%")
                    ->orWhere('whatsapp_number', 'like', "%{$search}%")
                    ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $contacts = $query->latest()->paginate(15);

        $stats = [
            'total' => ContactUs::count(),
            'unread' => ContactUs::unread()->count(),
            'read' => ContactUs::where('is_read', true)->count(),
        ];

        return view('admin.contacts.index', compact('contacts', 'stats'));
    }

    public function show(Contact $contact)
    {
        if (! $contact->is_read) {
            $contact->markAsRead();
        }

        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact message deleted successfully.');
    }

    public function markAsRead(ContactUs $contact)
    {
        $contact->markAsRead();

        return redirect()->back()->with('success', 'Message marked as read.');
    }

    public function markAllAsRead()
    {
        ContactUs::unread()->update([
            'is_read' => true,
            'read_at' => now(),
        ]);

        return redirect()->back()->with('success', 'All messages marked as read.');
    }

    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:contacts,id',
        ]);

        ContactUs::whereIn('id', $request->ids)->delete();

        return redirect()->back()->with('success', 'Selected messages deleted successfully.');
    }
}
