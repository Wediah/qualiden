<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectImages extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'project_id',
        'filename',  // Add this
        'path',
        'disk',
        'mime_type', // Add this
        'size',      // Add this
        'order',
        'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'order' => 'integer',
        'size' => 'integer',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
