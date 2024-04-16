<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\reviews;
use Database\Seeders\interviewQusCats;
use Database\Seeders\users;
use Database\Seeders\courses;
use Database\Seeders\interviewQuestions;
use Database\Seeders\RoadmapsCategories;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(users::class);
        $this->call(interviewQusCats::class);
        $this->call(interviewQuestions::class);
        $this->call(reviews::class);
        $this->call(courses::class);
        $this->call(RoadmapsCategories::class);
        $this->call(Roadmaps::class);
        $this->call(RoadmapsSteps::class);
    }
}
