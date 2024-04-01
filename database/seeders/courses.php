<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course; 
use Carbon\Carbon;

class courses extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'title' => 'Introduction to Python Programming',
                'description' => 'Learn the basics of Python programming language, including syntax, data types, and control structures.',
                'link' => 'https://www.udemy.com/course/python-for-beginners/',
            ],
            [
                'title' => 'JavaScript Essentials',
                'description' => 'Master the essentials of JavaScript programming, covering topics such as variables, functions, and DOM manipulation.',
                'link' => 'https://www.udacity.com/course/javascript-basics--ud804',
            ],
            [
                'title' => 'Java Programming Masterclass',
                'description' => 'Take your Java skills to the next level with this comprehensive masterclass covering advanced topics such as multithreading and collections.',
                'link' => 'https://www.udemy.com/course/java-the-complete-java-developer-course/',
            ],
            [
                'title' => 'C# Programming for Beginners',
                'description' => 'Get started with C# programming language and build a solid foundation in object-oriented programming concepts.',
                'link' => 'https://www.udemy.com/course/csharp-tutorial-for-beginners/',
            ],
            [
                'title' => 'Ruby on Rails: An Introduction',
                'description' => 'Learn the basics of Ruby on Rails framework and build your first web application.',
                'link' => 'https://www.coursera.org/learn/ruby-on-rails-intro',
            ],
            [
                'title' => 'PHP Programming Basics',
                'description' => 'Get introduced to PHP programming language and understand its usage in web development projects.',
                'link' => 'https://www.codecademy.com/learn/learn-php',
            ],
            [
                'title' => 'Swift for iOS Development',
                'description' => 'Start your journey into iOS app development with Swift programming language.',
                'link' => 'https://www.udacity.com/course/swift-for-beginners--ud1022',
            ],
            [
                'title' => 'Android App Development with Kotlin',
                'description' => 'Learn Kotlin programming language and build Android apps from scratch.',
                'link' => 'https://www.udemy.com/course/the-complete-kotlin-developer-course/',
            ],
            [
                'title' => 'React Native: Building Mobile Apps',
                'description' => 'Discover how to build cross-platform mobile apps using React Native framework.',
                'link' => 'https://www.udemy.com/course/react-native-the-practical-guide/',
            ],
            [
                'title' => 'Data Structures and Algorithms in Python',
                'description' => 'Explore essential data structures and algorithms using Python programming language.',
                'link' => 'https://www.coursera.org/specializations/data-structures-algorithms',
            ],
        ];

        foreach ($courses as $course) {
            Course::create([
                'title' => $course['title'],
                'description' => $course['description'],
                'link' => $course['link'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
