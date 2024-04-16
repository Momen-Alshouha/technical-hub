<?php

namespace Database\Seeders;

use App\Models\RoadmapsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoadmapsCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roadmapsCategories = [
            [
                'name' => 'Web Development',
                'description' => 'A web development roadmap outlines the journey a beginner or experienced developer can take to learn and master the skills needed to build websites and web applications. ',
                'image' => 'web_development.jpg',
            ],
            [
                'name' => 'Artificial Intelligence',
                'description' => 'An AI roadmap serves as a guide for individuals interested in learning about artificial intelligence (AI) and its various applications.',
                'image' => 'ai.png',
            ]
        ];

        foreach ($roadmapsCategories as $category) {
            RoadmapsCategory::create($category);
        }
    }
}
