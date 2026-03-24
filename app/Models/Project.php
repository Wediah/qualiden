<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category',
        'client',
        'description',
        'location',
        'completion_date',
        'is_featured',
        'order',
        'path',
        'project_id',
        'filename',
        'disk',
        'mime_type',
        'size',
    ];

    protected $casts = [
        'completion_date' => 'date',
    ];

    public function images(): Project|HasMany
    {
        return $this->hasMany(ProjectImages::class);
    }

    // Get featured image (first image)
    public function getFeaturedImageAttribute(): ?string
    {
        $image = $this->images()->first();
        return $image ? Storage::url($image->path) : null;
    }

    // Auto-generate slug when creating
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->name);
            }
        });

        static::updating(function ($project) {
            if ($project->isDirty('name')) {
                $project->slug = Str::slug($project->name);
            }
        });
    }

    // Get unique categories for filtering
    public static function getCategories(): array
    {
        return self::whereNotNull('category')
            ->distinct()
            ->pluck('category')
            ->toArray();
    }

    // Route binding using slug instead of id
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
