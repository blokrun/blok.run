<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Page extends Model
{
    use HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'text',
        'is_active',
        'category_id',
        'language_id',
        'description',
        'logo_url',
        'website_url'
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

    public function page_category()
    {
        return $this->belongsTo(PageCategory::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
