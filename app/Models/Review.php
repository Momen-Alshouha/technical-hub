<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','description'];

    public static function countReviews() {
        return self::count();
    }

     /**
     * Get the user that owns the review
     */

     public function user(){
        return $this->belongsTo(User::class);
     }
}
