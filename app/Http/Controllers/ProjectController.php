<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ProjectController extends Controller
{
    /**
     * Display a listing of the projects.
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();

        return view('projects.index', compact('projects'));
    }

    public function search(Request $request)
    {
        // Get the search term from the URL query string (?q=...)
        $query = $request->input('q');

        // Start with all projects
        $projects = Project::query();

        // If there is a search term, filter by name, description, or location
        if ($query) {
            $projects->where(function ($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%")
                    ->orWhere('location', 'like', "%{$query}%");
            });
        }

        // Order by newest first and paginate
        $projects = $projects->orderBy('created_at', 'desc')->paginate(12);

        // Return the view with results and the original query (to show "Results for...")
        return view('projects.search', compact('projects', 'query'));
    }

    public function clientProjects(Request $request)
    {
        $category = $request->get('category');

        // Get all unique categories for the filter sidebar
        $categories = Project::whereNotNull('category')
            ->distinct()
            ->pluck('category')
            ->toArray();

        // Start the query
        $query = Project::with('images')->orderBy('created_at', 'desc');

        // Apply filter ONLY if a category is selected
        if ($category) {
            $query->where('category', $category);
        }

        // Execute pagination
        $projects = $query->paginate(9);

        // Get counts for each category (Optional: useful for UI badges)
        $categoryCounts = [];
        foreach ($categories as $cat) {
            $categoryCounts[$cat] = Project::where('category', $cat)->count();
        }

        return view('projects', compact('projects', 'categories', 'categoryCounts', 'category'));
    }

    public function create()
    {
        return view('projects.create');
    }

    /**
     * Create a new project and optionally store uploaded images.
     *
     * @throws Throwable
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'images' => 'nullable|array',
            'images.*' => 'file|image|max:5120',
        ]);

        DB::beginTransaction();
        try {
            $project = Project::create([
                'name' => $validated['name'],
                'category' => $validated['category'] ?? null,
                'client' => $validated['client'] ?? null,
                'description' => $validated['description'] ?? null,
                'location' => $validated['location'] ?? null,
                'completion_date' => $validated['completion_date'] ?? null,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $file) {
                    $originalName = $file->getClientOriginalName();
                    $mimeType = $file->getMimeType();
                    $size = $file->getSize();
                    $extension = $file->getClientOriginalExtension();
                    $filename = time().'_'.$index.'.'.$extension;
                    $path = $file->storeAs("projects/{$project->id}", $filename, 'public');

                    // Include all required fields
                    $project->images()->create([
                        'project_id' => $project->id,
                        'filename' => $filename,
                        'path' => $path,
                        'disk' => 'public',
                        'mime_type' => $mimeType,
                        'size' => $size,
                        'order' => $index,
                        'is_featured' => $index === 0,
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('dashboard')->with('success', 'Project created successfully!');

        } catch (Throwable $e) {
            DB::rollBack();

            return back()->withErrors('Failed to create project: '.$e->getMessage())->withInput();
        }
    }

    /**
     * Update an existing project and append any uploaded images.
     *
     * @throws Throwable
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'status' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*' => 'file|image|max:5120',
        ]);

        DB::beginTransaction();
        try {
            $project->fill(array_filter([
                'name' => $validated['name'] ?? null,
                'status' => $validated['status'] ?? null,
                'client' => $validated['client'] ?? null,
                'bio' => $validated['bio'] ?? null,
            ], fn ($v) => ! is_null($v)));
            $project->save();

            if ($request->hasFile('images')) {
                $currentMax = $project->images()->max('order') ?? 0;

                foreach ($request->file('images') as $i => $file) {
                    $path = $file->store("projects/{$project->id}", 'public');

                    $project->images()->create([
                        'path' => $path,
                    ]);
                }
            }

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();

            // cleanup newly stored files if any
            if ($project->images()->exists()) {
                foreach ($project->images as $img) {
                    try {
                        Storage::disk($img->disk)->delete($img->path);
                    } catch (Throwable $ex) { /* ignore */
                    }
                }
            }

            if ($request->wantsJson()) {
                return response()->json(['message' => 'Failed to update project'], 500);
            }

            return back()->withErrors('Failed to update project')->withInput();
        }

        if ($request->wantsJson()) {
            return response()->json($project);
        }

        return redirect()->route('projects')->with('success', 'Project updated.');
    }

    /**
     * Delete a project and its image files from storage.
     */
    public function destroy(Project $project)
    {
        // delete files from storage first
        foreach ($project->images as $image) {
            try {
                if (Storage::disk($image->disk)->exists($image->path)) {
                    Storage::disk($image->disk)->delete($image->path);
                }
            } catch (\Exception $e) {
                // ignore file deletion errors
            }
        }

        $project->delete();

        if (request()->wantsJson()) {
            return response()->noContent();
        }

        return redirect()->route('projects')->with('success', 'Project deleted.');
    }

    /**
     * Display the specified project.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
}
