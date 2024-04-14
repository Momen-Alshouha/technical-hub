<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'is_admin',
        'age',
        'gender',
        'bio',
        'phone_number',
        'address',
        'profile_pic',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public static function countUsers () {
        return self::count();
    }

    public static function getUser($id) {
        return User::find($id);
    }

    public static function checkIfLastAdminExists() : bool {
     $adminsCount = User::where('is_admin',1)->count();
      return $adminsCount>1 ? false: true;
    }

     /**
     * Get the reviews for the user.
     */
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
