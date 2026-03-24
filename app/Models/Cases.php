<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cases extends Model
{
    use HasFactory;

    protected $table = 'cases';

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'category',
        'client_name',
        'project_date',
        'location',
        'is_published',
        'published_at',
        'views',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'project_date' => 'date',
    ];

    public function images()
    {
        return $this->hasMany(CasesImages::class, 'case_id')->orderBy('order');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($case) {
            if (empty($case->slug)) {
                $case->slug = Str::slug($case->title);
            }
        });
    }
}
