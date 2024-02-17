<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Translation extends Model
{
    use HasSlug;
    
    protected $fillable = [
        'parent_id',
        'text',
        'language_id',
        'slug', // Add 'slug' to the fillable array
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}
