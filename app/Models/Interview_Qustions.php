<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview_Qustions extends Model
{
    use HasFactory;
    protected $fillable = ['id','cat_id','qustion','answer'];
}
