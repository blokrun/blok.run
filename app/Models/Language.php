<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Language extends Model
{
    use HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'code',
        'slug_en',
        'name_en',
        'is_active'
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
    // Optionally, you can define additional properties, relationships, or configuration here.
}

