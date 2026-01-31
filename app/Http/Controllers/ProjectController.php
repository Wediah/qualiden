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

    /**
     * Create a new project and optionally store uploaded images.
     * @throws Throwable
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*' => 'file|image|max:5120', // max 5MB per image
        ]);

        DB::beginTransaction();
        try {
            $project = Project::create([
                'name' => $validated['name'],
                'status' => $validated['status'] ?? 'pending',
                'client' => $validated['client'] ?? null,
                'bio' => $validated['bio'] ?? null,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $path = $file->store("projects/{$project->id}", 'public');

                    $project->images()->create([
                        'path' => $path,
                    ]);
                }
            }


            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();

            // Attempt to clean up any files that may have been stored
            if (isset($project) && $project->images()->exists()) {
                foreach ($project->images as $img) {
                    try { Storage::disk($img->disk)->delete($img->path); } catch (Throwable $ex) { /* ignore */ }
                }
            }

            if ($request->wantsJson()) {
                return response()->json(['message' => 'Failed to create project'], 500);
            }

            return back()->withErrors('Failed to create project')->withInput();
        }

        if ($request->wantsJson()) {
            return response()->json($project, 201);
        }

        return redirect()->route('projects.index')->with('success', 'Project created.');
    }

    /**
     * Update an existing project and append any uploaded images.
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
            ], fn($v) => !is_null($v)));
            $project->save();

            if ($request->hasFile('images')) {
                $currentMax = $project->images()->max('order') ?? 0;

                foreach ($request->file('images') as $i => $file) {
                    $path = $file->store("projects/{$project->id}", 'public');

                    $project->images()->create([
                        'filename' => $file->getClientOriginalName(),
                        'path' => $path,
                        'disk' => 'public',
                        'mime_type' => $file->getClientMimeType(),
                        'size' => $file->getSize(),
                        'order' => $currentMax + $i + 1,
                    ]);
                }
            }

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();

            // cleanup newly stored files if any
            if (isset($project) && $project->images()->exists()) {
                foreach ($project->images as $img) {
                    try { Storage::disk($img->disk)->delete($img->path); } catch (Throwable $ex) { /* ignore */ }
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

        return redirect()->route('projects.index')->with('success', 'Project updated.');
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

        return redirect()->route('projects.index')->with('success', 'Project deleted.');
    }

    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('projects.create');
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
