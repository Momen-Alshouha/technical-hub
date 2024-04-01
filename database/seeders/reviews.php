<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Review;
use Carbon\Carbon;

class reviews extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Get all user IDs
         $userIds = User::pluck('id');

         // Create 10 rviews
         for ($i = 0; $i < 10; $i++) {
             Review::create([
                 'user_id' => $userIds->random(),
                 'description' => 'This is a review description.',
                 'created_at' => Carbon::now()->subDays(rand(0, 30)),
                 'updated_at' => Carbon::now()->subDays(rand(0, 30)),
             ]);
         }
    }
}
