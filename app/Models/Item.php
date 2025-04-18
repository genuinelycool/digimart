<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Item extends Model
{
    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    function subCategory() : BelongsTo
    {
        return $this->belongsTo(subCategory::class);
    }

    protected $casts = [
        'tags' => 'array',
        'screenshots' => 'array'
    ];
}
