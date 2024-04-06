<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class RoadmapStep extends Model
{
    use HasFactory;
    protected $fillable = [
        'roadmap_id',
        'title',
        'description',
        'sequence',
    ];

    public function roadmapSteps(): HasMany
    {
        return $this->hasMany(RoadmapStep::class)->orderBy('sequence');
    }

    public static function stepsForRoadmapOrderedBySequence($roadmapId)
    {
        return static::where('roadmap_id', $roadmapId)->orderBy('sequence')->get();
    }
}
