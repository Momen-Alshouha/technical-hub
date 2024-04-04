<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadmapStep extends Model
{
    use HasFactory;
    protected $fillable = [
        'roadmap_id',
        'title',
        'description',
        'sequence',
    ];
}
