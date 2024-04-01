<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interview_Qus_Cat;
class interviewQusCats extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $interviewQusCats = [
            [
                'title' => 'HTML',
                'description' => 'HTML Interview Questions!',
                'image' => 'html.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Back-End',
                'description' => 'Back-End Interview Questions!',
                'image' => 'backend.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Front-End',
                'description' => 'Front-End Interview Questions!',
                'image' => 'frontend.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Database',
                'description' => 'Database Interview Questions',
                'image' => 'database.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($interviewQusCats as $category) {
            Interview_Qus_Cat::create($category);
        }
    }

}
