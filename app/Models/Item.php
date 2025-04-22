<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    function author() : BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    function histories() : HasMany
    {
        return $this->hasMany(ItemHistory::class)->latest();
    }

    protected $casts = [
        'tags' => 'array',
        'screenshots' => 'array'
    ];
}
