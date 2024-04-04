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
}
