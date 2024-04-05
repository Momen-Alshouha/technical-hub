<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_id',
        'name',
        'description',
        'image',
    ];

    /**
     * Get roadmaps along with their associated categories.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getRoadmapsWithCategories()
    {
        return Roadmap::with('category')->get();
    }

    /**
     * Define the inverse relationship between Roadmap and RoadmapsCategory.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(RoadmapsCategory::class, 'cat_id');
    }
}
