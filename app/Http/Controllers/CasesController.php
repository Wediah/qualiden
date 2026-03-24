<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CasesImages;
use App\Models\Cases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CasesController extends Controller
{
    public function index()
    {
        $cases = Cases::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.cases.index', compact('cases'));
    }

    public function create()
    {
        return view('admin.cases.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'category' => 'nullable',
            'client_name' => 'nullable',
            'project_date' => 'nullable|date',
            'location' => 'nullable',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
        ]);

        // Handle featured image
        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->file('featured_image');
            $featuredImageName = time().'_featured.'.$featuredImage->getClientOriginalExtension();
            $featuredImagePath = $featuredImage->storeAs('cases/featured', $featuredImageName, 'public');
            $validated['featured_image'] = $featuredImagePath;
        }

        $validated['slug'] = Str::slug($validated['title']);

        // Handle published_at
        if ($request->is_published && ! $request->published_at) {
            $validated['published_at'] = now();
        }

        $case = Cases::create($validated);

        // Handle multiple images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $order => $image) {
                $imageName = time().'_'.$order.'.'.$image->getClientOriginalExtension();
                $imagePath = $image->storeAs('cases/images', $imageName, 'public');

                CaseImages::create([
                    'case_id' => $case->id,
                    'image_path' => $imagePath,
                    'caption' => $request->captions[$order] ?? null,
                    'order' => $order,
                ]);
            }
        }

        return redirect()->route('admin.cases.index')->with('success', 'Case created successfully!');
    }

    public function edit(Cases $case)
    {
        return view('admin.cases.edit', compact('case'));
    }

    public function update(Request $request, Cases $case)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'category' => 'nullable',
            'client_name' => 'nullable',
            'project_date' => 'nullable|date',
            'location' => 'nullable',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
            'delete_images' => 'array',
            'delete_featured' => 'boolean',
        ]);

        // Handle featured image deletion
        if ($request->delete_featured && $case->featured_image) {
            Storage::disk('public')->delete($case->featured_image);
            $validated['featured_image'] = null;
        }

        // Handle new featured image
        if ($request->hasFile('featured_image')) {
            if ($case->featured_image) {
                Storage::disk('public')->delete($case->featured_image);
            }
            $featuredImage = $request->file('featured_image');
            $featuredImageName = time().'_featured.'.$featuredImage->getClientOriginalExtension();
            $featuredImagePath = $featuredImage->storeAs('cases/featured', $featuredImageName, 'public');
            $validated['featured_image'] = $featuredImagePath;
        }

        // Delete selected images
        if ($request->delete_images) {
            $imagesToDelete = CaseImages::whereIn('id', $request->delete_images)->get();
            foreach ($imagesToDelete as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }
        }

        // Handle new images
        if ($request->hasFile('images')) {
            $currentMaxOrder = $case->images()->max('order') ?? -1;
            foreach ($request->file('images') as $order => $image) {
                $imageName = time().'_'.($currentMaxOrder + $order + 1).'.'.$image->getClientOriginalExtension();
                $imagePath = $image->storeAs('cases/images', $imageName, 'public');

                CaseImages::create([
                    'case_id' => $case->id,
                    'image_path' => $imagePath,
                    'caption' => $request->captions[$order] ?? null,
                    'order' => $currentMaxOrder + $order + 1,
                ]);
            }
        }

        $case->update($validated);

        return redirect()->route('admin.cases.index')->with('success', 'Case updated successfully!');
    }

    public function destroy(Cases $case)
    {
        // Delete featured image
        if ($case->featured_image) {
            Storage::disk('public')->delete($case->featured_image);
        }

        // Delete all case images
        foreach ($case->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        $case->delete();

        return redirect()->route('admin.cases.index')->with('success', 'Case deleted successfully!');
    }

    // Public methods
    public function publicIndex()
    {
        $cases = Cases::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('cases.index', compact('cases'));
    }

    public function show(Cases $case)
    {
        if (! $case->is_published && ! auth()->check()) {
            abort(404);
        }

        $case->increment('views');

        $relatedCases = Cases::where('is_published', true)
            ->where('id', '!=', $case->id)
            ->where('category', $case->category)
            ->limit(3)
            ->get();

        return view('cases.show', compact('case', 'relatedCases'));
    }
}
