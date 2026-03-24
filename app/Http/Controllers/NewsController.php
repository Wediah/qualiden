<?php

// app/Http/Controllers/Admin/NewsController.php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'category' => 'nullable',
            'author' => 'nullable',
            'tags' => 'nullable|array',
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
            $featuredImagePath = $featuredImage->storeAs('news/featured', $featuredImageName, 'public');
            $validated['featured_image'] = $featuredImagePath;
        }

        $validated['slug'] = Str::slug($validated['title']);

        // Handle tags
        if ($request->tags) {
            $validated['tags'] = array_filter($request->tags);
        }

        // Handle published_at
        if ($request->is_published && ! $request->published_at) {
            $validated['published_at'] = now();
        }

        $news = News::create($validated);

        // Handle multiple images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $order => $image) {
                $imageName = time().'_'.$order.'.'.$image->getClientOriginalExtension();
                $imagePath = $image->storeAs('news/images', $imageName, 'public');

                NewsImages::create([
                    'news_id' => $news->id,
                    'image_path' => $imagePath,
                    'caption' => $request->captions[$order] ?? null,
                    'order' => $order,
                ]);
            }
        }

        return redirect()->route('admin.news.index')->with('success', 'News created successfully!');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'category' => 'nullable',
            'author' => 'nullable',
            'tags' => 'nullable|array',
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
        if ($request->delete_featured && $news->featured_image) {
            Storage::disk('public')->delete($news->featured_image);
            $validated['featured_image'] = null;
        }

        // Handle new featured image
        if ($request->hasFile('featured_image')) {
            if ($news->featured_image) {
                Storage::disk('public')->delete($news->featured_image);
            }
            $featuredImage = $request->file('featured_image');
            $featuredImageName = time().'_featured.'.$featuredImage->getClientOriginalExtension();
            $featuredImagePath = $featuredImage->storeAs('news/featured', $featuredImageName, 'public');
            $validated['featured_image'] = $featuredImagePath;
        }

        // Delete selected images
        if ($request->delete_images) {
            $imagesToDelete = NewsImages::whereIn('id', $request->delete_images)->get();
            foreach ($imagesToDelete as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }
        }

        // Handle tags
        if ($request->tags) {
            $validated['tags'] = array_filter($request->tags);
        }

        // Handle new images
        if ($request->hasFile('images')) {
            $currentMaxOrder = $news->images()->max('order') ?? -1;
            foreach ($request->file('images') as $order => $image) {
                $imageName = time().'_'.($currentMaxOrder + $order + 1).'.'.$image->getClientOriginalExtension();
                $imagePath = $image->storeAs('news/images', $imageName, 'public');

                NewsImages::create([
                    'news_id' => $news->id,
                    'image_path' => $imagePath,
                    'caption' => $request->captions[$order] ?? null,
                    'order' => $currentMaxOrder + $order + 1,
                ]);
            }
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully!');
    }

    public function destroy(News $news)
    {
        // Delete featured image
        if ($news->featured_image) {
            Storage::disk('public')->delete($news->featured_image);
        }

        // Delete all news images
        foreach ($news->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully!');
    }

    // Public methods
    public function publicIndex()
    {
        $news = News::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        if (! $news->is_published && ! auth()->check()) {
            abort(404);
        }

        $news->increment('views');

        $relatedNews = News::where('is_published', true)
            ->where('id', '!=', $news->id)
            ->where('category', $news->category)
            ->limit(3)
            ->get();

        return view('news.show', compact('news', 'relatedNews'));
    }
}
