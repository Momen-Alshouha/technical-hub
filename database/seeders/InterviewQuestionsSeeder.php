<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interview_Qustions;
use Carbon\Carbon;

class InterviewQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categories and Questions
        $categories = [
            1 => 'HTML',
            2 => 'Backend',
            3 => 'Frontend',
            4 => 'DevOps'
        ];

        $questions = [
            1 => [
                'What does HTML stand for?',
                'What is the purpose of the doctype declaration in HTML?',
                'What are the different types of heading tags in HTML?',
                'What is the use of the alt attribute in the <img> tag?',
                'What is the difference between <div> and <span> tags?',
                'What is the <meta> tag used for in HTML?',
                'What is the difference between <strong> and <b> tags?',
                'What are semantic elements in HTML?',
                'Explain the concept of HTML entities.',
                'What is the purpose of the href attribute in the <a> tag?',
            ],
            2 => [
                'What is MVC architecture?',
                'What is the difference between GET and POST methods?',
                'What is SQL injection and how can it be prevented?',
                'What are RESTful APIs?',
                'What is the purpose of middleware in Laravel?',
                'What are Eloquent relationships?',
                'What is CSRF protection and why is it important?',
                'What are the advantages of using Composer in PHP?',
                'Explain the concept of migrations in Laravel.',
                'What is the purpose of namespaces in PHP?',
            ],
            3 => [
                'What is the box model in CSS?',
                'What are the advantages of using CSS preprocessors like SASS or LESS?',
                'What is the difference between margin and padding?',
                'What are CSS frameworks and when would you use one?',
                'What is responsive web design?',
                'What are pseudo-classes in CSS?',
                'What is the difference between display: none and visibility: hidden?',
                'What is the purpose of the z-index property in CSS?',
                'What is the float property in CSS?',
                'Explain the concept of CSS specificity.',
            ],
            4 => [
                'What is Docker and how does it work?',
                'What is containerization and what are its benefits?',
                'Explain the concept of microservices architecture.',
                'What is continuous integration (CI) and continuous deployment (CD)?',
                'What are the advantages of using Kubernetes?',
                'What is a Dockerfile?',
                'What is the purpose of Docker-compose?',
                'What is the difference between Docker Swarm and Kubernetes?',
                'Explain the concept of Infrastructure as Code (IaC).',
                'What is a Jenkins pipeline?',
            ],
        ];

        // Answers
        $answers = [
            1 => [
                'HyperText Markup Language',
                'To specify which version of HTML the document is using',
                '<h1> to <h6>',
                'To specify alternative text for an image',
                '<div> is a block-level element, while <span> is an inline element',
                'To provide metadata about the HTML document',
                '<strong> indicates stronger emphasis than <b>',
                'Elements that provide meaning to the content, rather than just presentation',
                'Special characters that cannot be easily typed directly into a keyboard',
                'To specify the destination of a link',
            ],
            2 => [
                'Model-View-Controller',
                'GET requests data from a specified resource, while POST submits data to be processed',
                'A security vulnerability where attackers inject SQL code into an input field',
                'An architectural style for designing networked applications',
                'Middleware acts as a filter for HTTP requests entering the application',
                'Relationships between different database tables in Laravel',
                'Cross-Site Request Forgery protection, to prevent unauthorized commands',
                'Composer is a dependency manager for PHP, used to manage project dependencies',
                'A way to version control database schema changes in Laravel',
                'To avoid naming conflicts between different parts of code',
            ],
            3 => [
                'A model for rendering elements in web pages as a box',
                'They allow for faster and more efficient CSS coding',
                'Margins are the space outside the border, while padding is the space inside the border',
                'They provide pre-written CSS and JavaScript code to use in web projects',
                'Designing websites to adapt and display correctly on all devices and screen sizes',
                'Selectors that define a special state of an element',
                'display: none removes the element from the layout, while visibility: hidden hides the element but it still occupies space',
                'To specify the stacking order of elements',
                'Float is a CSS property used to push an element to the left or right, allowing other content to wrap around it',
                'A set of rules used by browsers to determine which CSS property values are the most relevant to an element',
            ],
            4 => [
                'A platform for developing, shipping, and running applications in containers',
                'The process of encapsulating an application in a container with its own operating environment',
                'An architectural style that structures an application as a collection of loosely coupled services',
                'Practices to merge code changes into a shared repository and automatically deploy applications',
                'Automates the deployment, scaling, and management of containerized applications',
                'A text document containing all the commands needed to assemble an image',
                'A tool for defining and running multi-container Docker applications',
                'Docker Swarm is Docker\'s native clustering and orchestration tool, while Kubernetes is a more comprehensive orchestration tool',
                'Managing and provisioning computer data centers through machine-readable definition files',
                'A set of tools and plugins used to automate the continuous integration and delivery process',
            ],
        ];

        // Create records for each category
        foreach ($categories as $categoryId => $categoryName) {
            for ($i = 0; $i < 10; $i++) {
                Interview_Qustions::create([
                    'cat_id' => $categoryId,
                    'qustion' => $questions[$categoryId][$i],
                    'answer' => $answers[$categoryId][$i],
                    'created_at' => Carbon::now()->subDays(rand(0, 30)),
                    'updated_at' => Carbon::now()->subDays(rand(0, 30)),
                ]);
            }
        }
    }
}
