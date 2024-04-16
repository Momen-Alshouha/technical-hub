<?php

namespace Database\Seeders;

use App\Models\RoadmapStep;
use Illuminate\Database\Seeder;

class RoadmapsSteps extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roadmapSteps = [
            // Front-End Web Development Steps
            [
                'roadmap_id' => 1,
                'title' => 'HTML Basics',
                'description' => 'Learn the basics of HTML including tags, attributes, and document structure.',
                'sequence' => 1,
            ],
            [
                'roadmap_id' => 1,
                'title' => 'CSS Fundamentals',
                'description' => 'Understand CSS syntax, selectors, box model, and layout techniques.',
                'sequence' => 2,
            ],
            [
                'roadmap_id' => 1,
                'title' => 'Responsive Web Design',
                'description' => 'Learn how to create responsive layouts using media queries and flexible grids.',
                'sequence' => 3,
            ],
            [
                'roadmap_id' => 1,
                'title' => 'JavaScript Basics',
                'description' => 'Master the fundamentals of JavaScript including variables, data types, control structures, and functions.',
                'sequence' => 4,
            ],
            [
                'roadmap_id' => 1,
                'title' => 'DOM Manipulation',
                'description' => 'Understand how to manipulate the Document Object Model (DOM) using JavaScript.',
                'sequence' => 5,
            ],
            [
                'roadmap_id' => 1,
                'title' => 'AJAX and Fetch API',
                'description' => 'Learn how to make asynchronous requests to a server using AJAX and Fetch API.',
                'sequence' => 6,
            ],
            [
                'roadmap_id' => 1,
                'title' => 'CSS Layout Techniques',
                'description' => 'Explore advanced CSS layout techniques such as flexbox and grid for building complex web layouts.',
                'sequence' => 7,
            ],
            [
                'roadmap_id' => 1,
                'title' => 'Responsive Frameworks',
                'description' => 'Learn popular responsive frameworks like Bootstrap or Foundation to streamline responsive web design.',
                'sequence' => 8,
            ],
            [
                'roadmap_id' => 1,
                'title' => 'CSS Preprocessors',
                'description' => 'Master CSS preprocessors like Sass or Less to write maintainable and modular CSS code.',
                'sequence' => 9,
            ],
            [
                'roadmap_id' => 1,
                'title' => 'Build Tools and Task Runners',
                'description' => 'Learn about build tools like Webpack and task runners like Gulp to automate repetitive tasks and optimize web assets.',
                'sequence' => 10,
            ],

            // Back-End Web Development Steps
            [
                'roadmap_id' => 2,
                'title' => 'Introduction to PHP',
                'description' => 'Learn the basics of PHP including variables, operators, and control structures.',
                'sequence' => 1,
            ],
            [
                'roadmap_id' => 2,
                'title' => 'Database Basics',
                'description' => 'Understand database concepts, SQL queries, and database design principles.',
                'sequence' => 2,
            ],
            [
                'roadmap_id' => 2,
                'title' => 'Building RESTful APIs',
                'description' => 'Learn how to design and build RESTful APIs using PHP frameworks like Laravel or Symfony.',
                'sequence' => 3,
            ],
            [
                'roadmap_id' => 2,
                'title' => 'Authentication and Authorization',
                'description' => 'Implement user authentication and authorization using techniques like sessions, cookies, and JWT.',
                'sequence' => 4,
            ],
            [
                'roadmap_id' => 2,
                'title' => 'Testing and Debugging',
                'description' => 'Learn testing methodologies and debugging techniques for PHP applications.',
                'sequence' => 5,
            ],
            [
                'roadmap_id' => 2,
                'title' => 'Object-Oriented PHP',
                'description' => 'Learn object-oriented programming concepts in PHP such as classes, objects, inheritance, and polymorphism.',
                'sequence' => 6,
            ],
            [
                'roadmap_id' => 2,
                'title' => 'ORMs and Eloquent',
                'description' => 'Understand Object-Relational Mapping (ORM) and use Eloquent ORM for interacting with databases in Laravel.',
                'sequence' => 7,
            ],
            [
                'roadmap_id' => 2,
                'title' => 'RESTful API Authentication',
                'description' => 'Implement authentication mechanisms for RESTful APIs using methods like JWT or OAuth.',
                'sequence' => 8,
            ],
            [
                'roadmap_id' => 2,
                'title' => 'API Documentation and Testing',
                'description' => 'Document APIs using tools like Swagger and test them using tools like Postman or Insomnia.',
                'sequence' => 9,
            ],
            [
                'roadmap_id' => 2,
                'title' => 'Microservices Architecture',
                'description' => 'Understand the principles of microservices architecture and how to design and implement microservices-based systems.',
                'sequence' => 10,
            ],

            // Full-Stack Web Development Steps
            [
                'roadmap_id' => 3,
                'title' => 'Version Control with Git',
                'description' => 'Understand the basics of version control using Git and GitHub.',
                'sequence' => 1,
            ],
            [
                'roadmap_id' => 3,
                'title' => 'Front-End Frameworks',
                'description' => 'Learn popular front-end frameworks like React, Vue.js, or Angular.',
                'sequence' => 2,
            ],
            [
                'roadmap_id' => 3,
                'title' => 'Server-Side Frameworks',
                'description' => 'Explore server-side frameworks such as Laravel, Express.js, or Django.',
                'sequence' => 3,
            ],
            [
                'roadmap_id' => 3,
                'title' => 'Database Management',
                'description' => 'Learn advanced database management techniques including migrations, seeding, and optimization.',
                'sequence' => 4,
            ],
            [
                'roadmap_id' => 3,
                'title' => 'Deployment and Hosting',
                'description' => 'Understand deployment strategies and host web applications on platforms like Heroku or AWS.',
                'sequence' => 5,
            ],
            [
                'roadmap_id' => 3,
                'title' => 'Testing Front-End Applications',
                'description' => 'Learn testing frameworks and methodologies for testing front-end applications, including unit testing and end-to-end testing.',
                'sequence' => 6,
            ],
            [
                'roadmap_id' => 3,
                'title' => 'API Authentication and Authorization',
                'description' => 'Implement authentication and authorization mechanisms for APIs using techniques like JWT and OAuth.',
                'sequence' => 7,
            ],
            [
                'roadmap_id' => 3,
                'title' => 'Continuous Integration and Deployment (CI/CD)',
                'description' => 'Set up CI/CD pipelines for automating the build, test, and deployment processes of web applications.',
                'sequence' => 8,
            ],
            [
                'roadmap_id' => 3,
                'title' => 'Containerization with Docker',
                'description' => 'Learn containerization concepts and use Docker to containerize applications for easy deployment and scalability.',
                'sequence' => 9,
            ],
            [
                'roadmap_id' => 3,
                'title' => 'Serverless Computing',
                'description' => 'Explore serverless computing platforms like AWS Lambda and Azure Functions for building and deploying serverless applications.',
                'sequence' => 10,
            ],

            // Computer Vision Steps
            [
                'roadmap_id' => 4,
                'title' => 'Image Preprocessing',
                'description' => 'Learn techniques for preprocessing images including resizing, normalization, and data augmentation.',
                'sequence' => 1,
            ],
            [
                'roadmap_id' => 4,
                'title' => 'Feature Extraction',
                'description' => 'Extract features from images using techniques like SIFT, SURF, or CNNs.',
                'sequence' => 2,
            ],
            [
                'roadmap_id' => 4,
                'title' => 'Object Detection',
                'description' => 'Learn how to detect objects within images using techniques like Haar cascades or deep learning approaches.',
                'sequence' => 3,
            ],
            [
                'roadmap_id' => 4,
                'title' => 'Image Segmentation',
                'description' => 'Understand image segmentation techniques for identifying and delineating objects and boundaries within images.',
                'sequence' => 4,
            ],
            [
                'roadmap_id' => 4,
                'title' => 'Semantic Segmentation',
                'description' => 'Dive deeper into image segmentation with techniques that assign semantic labels to each pixel in an image.',
                'sequence' => 5,
            ],
            [
                'roadmap_id' => 4,
                'title' => 'Object Recognition',
                'description' => 'Learn techniques for recognizing objects within images, including advanced deep learning models like YOLO (You Only Look Once).',
                'sequence' => 6,
            ],
            [
                'roadmap_id' => 4,
                'title' => 'Object Tracking',
                'description' => 'Explore techniques for tracking objects across frames in videos or image sequences.',
                'sequence' => 7,
            ],
            [
                'roadmap_id' => 4,
                'title' => 'Convolutional Neural Networks (CNNs)',
                'description' => 'Deep dive into CNNs, a class of deep neural networks commonly applied to analyzing visual imagery.',
                'sequence' => 8,
            ],
            [
                'roadmap_id' => 4,
                'title' => '3D Reconstruction',
                'description' => 'Learn techniques for reconstructing 3D models from 2D images or video sequences.',
                'sequence' => 9,
            ],
            [
                'roadmap_id' => 4,
                'title' => 'Image Generation',
                'description' => 'Explore generative models like GANs (Generative Adversarial Networks) for generating realistic images.',
                'sequence' => 10,
            ],

            // Natural Language Processing Steps
            [
                'roadmap_id' => 5,
                'title' => 'Text Preprocessing',
                'description' => 'Preprocess text data by removing noise, tokenization, and stemming.',
                'sequence' => 1,
            ],
            [
                'roadmap_id' => 5,
                'title' => 'Word Embeddings',
                'description' => 'Understand word embeddings techniques such as Word2Vec or GloVe.',
                'sequence' => 2,
            ],
            [
                'roadmap_id' => 5,
                'title' => 'Named Entity Recognition (NER)',
                'description' => 'Implement NER models to identify and classify named entities in unstructured text data.',
                'sequence' => 3,
            ],
            [
                'roadmap_id' => 5,
                'title' => 'Text Classification',
                'description' => 'Implement text classification algorithms such as Naive Bayes, SVM, or deep learning models.',
                'sequence' => 4,
            ],
            [
                'roadmap_id' => 5,
                'title' => 'Sentiment Analysis',
                'description' => 'Explore sentiment analysis techniques to determine the sentiment polarity of text data.',
                'sequence' => 5,
            ],
            [
                'roadmap_id' => 5,
                'title' => 'Text Generation',
                'description' => 'Explore text generation techniques such as recurrent neural networks (RNNs) and transformer models like GPT (Generative Pre-trained Transformer).',
                'sequence' => 6,
            ],
            [
                'roadmap_id' => 5,
                'title' => 'Machine Translation',
                'description' => 'Understand machine translation approaches and build models for translating text between languages.',
                'sequence' => 7,
            ],
            [
                'roadmap_id' => 5,
                'title' => 'Question Answering',
                'description' => 'Explore question answering techniques to automatically answer questions posed in natural language.',
                'sequence' => 8,
            ],
            [
                'roadmap_id' => 5,
                'title' => 'Text Summarization',
                'description' => 'Learn techniques for automatically summarizing long documents or articles into shorter versions.',
                'sequence' => 9,
            ],
            [
                'roadmap_id' => 5,
                'title' => 'Topic Modeling',
                'description' => 'Implement topic modeling algorithms like Latent Dirichlet Allocation (LDA) for discovering latent topics in text data.',
                'sequence' => 10,
            ],
        ];

        foreach ($roadmapSteps as $step) {
            RoadmapStep::create($step);
        }
    }
}
