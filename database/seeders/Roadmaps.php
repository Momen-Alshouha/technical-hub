<?php

namespace Database\Seeders;

use App\Models\Roadmap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Roadmaps extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roadmaps = [
            [
                'cat_id' => 1,
                'name' => 'Front-End Web Development',
                'description' => 'Frontend development involves creating the user interface (UI) and user experience (UX) of websites and web applications. It focuses on the visual aspects of a digital product, as well as its functionality and interaction with users.',
                'image' => 'frontend.png',
            ],
            [
                'cat_id' => 1,
                'name' => 'Back-End Web Development',
                'description' => 'Backend development refers to the server-side programming and functionality that powers websites, web applications, and other software systems. While frontend development focuses on what users interact with directly, backend development deals with the behind-the-scenes logic, database management, and server operations.',
                'image' => 'backend.png',
            ],
            [
                'cat_id' => 1,
                'name' => 'Full-Stack Web Development',
                'description' => 'Full-stack development involves working on both the frontend and backend components of web applications, covering the entire software stack from the user interface to the server-side logic and database management. Full-stack developers are proficient in both frontend and backend technologies, allowing them to build complete, end-to-end solutions.',
                'image' => 'fullstack.png',
            ],
            [
                'cat_id' => 2,
                'name' => 'Computer Vision',
                'description' => 'Computer vision focuses on enabling machines to interpret and understand visual information from the real world, such as images and videos.',
                'image' => 'Computer-Vision.jpg',
            ],
            [
                'cat_id' => 2,
                'name' => 'Natural Language Processing (NLP)',
                'description' => 'NLP involves teaching machines to understand, interpret, and generate human language in a way that is meaningful and contextually relevant.',
                'image' => 'NLP.jpg',
            ]
        ];

        foreach ($roadmaps as $roadmap) {
            Roadmap::create($roadmap);
        }
    }
}
