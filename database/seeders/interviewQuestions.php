<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interview_Qustions;
use Carbon\Carbon;

class interviewQuestions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
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
            [
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
             [
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
             [
                'What is a database and what are its main functions?',
                'What is SQL and what is its role in database management?',
                'Explain the difference between a relational database and a non-relational (NoSQL) database.',
                'What is normalization and why is it important in database design?',
                'What are indexes in databases and why are they used?',
                'What is a primary key and why is it necessary in a database table?',
                'What is a foreign key and how is it used to establish relationships between tables?',
                'What are ACID properties in database transactions?',
                'Explain the concept of database replication and its benefits.',
                'What is the role of database transactions in ensuring data integrity?',
            ],            
        ];

     
        $answers = [
            [
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
           [
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
           [
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
            [
                'A database is a structured collection of data that is organized in a way that facilitates efficient retrieval, insertion, updating, and deletion of data. Its main functions include data storage, retrieval, manipulation, and management.',
                'SQL (Structured Query Language) is a standard programming language used for managing relational databases. Its role in database management includes defining database structure, querying and updating data, and controlling access to the database.',
                'A relational database organizes data into tables with rows and columns, and relationships between tables are defined using keys. In contrast, a non-relational (NoSQL) database uses a variety of data models for storage, such as document, key-value, or graph, and does not necessarily require a fixed schema.',
                'Normalization is the process of organizing data in a database to reduce redundancy and dependency. It is important in database design to improve data integrity, minimize storage space, and facilitate efficient querying and updating of data.',
                'Indexes in databases are data structures that improve the speed of data retrieval operations on tables. They are used to quickly locate rows in a table based on the values of one or more columns. Indexes enhance query performance but may require additional storage space and maintenance overhead.',
                'A primary key is a unique identifier for each record in a database table. It ensures that each row in the table is uniquely identifiable and serves as a reference point for establishing relationships with other tables. A primary key is necessary to enforce data integrity and support efficient data retrieval operations.',
                'A foreign key is a column or a set of columns in one table that references the primary key in another table. It is used to establish relationships between tables by enforcing referential integrity. Foreign keys ensure that the values in the referencing table correspond to valid values in the referenced table.',
                'ACID (Atomicity, Consistency, Isolation, Durability) properties are the four key properties that guarantee the reliability of database transactions. Atomicity ensures that transactions are indivisible and either complete or do not occur at all. Consistency ensures that transactions maintain the integrity of the database constraints. Isolation ensures that transactions are executed independently of each other. Durability ensures that the effects of committed transactions persist even in the event of system failures.',
                'Database replication is the process of creating and maintaining multiple copies of a database across different locations or servers. It provides redundancy and fault tolerance, improves data availability, and facilitates load balancing and disaster recovery.',
                'Database transactions ensure data integrity by enforcing the ACID properties. They provide a mechanism for grouping multiple database operations into a single logical unit of work. Transactions ensure that database modifications are performed atomically and consistently, preserving the integrity and reliability of the data.',
            ],            
        ];

        for ($j = 0; $j < 4; $j++) {
            for ($i = 0; $i < 10; $i++) {
                Interview_Qustions::create([
                    'cat_id' => $j+1,
                    'qustion' => $questions[$j][$i],
                    'answer' => $answers[$j][$i],
                    'created_at' => Carbon::now()->subDays(rand(0, 30)),
                    'updated_at' => Carbon::now()->subDays(rand(0, 30)),
                ]);
            }
        }
    }
}
