<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadmapsCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    /**
     * Define the relationship between RoadmapsCategory and Roadmap.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roadmaps()
    {
        return $this->hasMany(Roadmap::class, 'cat_id');
    }
}
