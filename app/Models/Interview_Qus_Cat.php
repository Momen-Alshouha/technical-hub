<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview_Qus_Cat extends Model
{
    use HasFactory;
    protected $fillable = ['id','title','description','image']; 

    public static function countCategories(){
        return self::count();
    }
}
