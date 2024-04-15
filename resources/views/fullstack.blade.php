@extends('layouts.layout')

@section('content')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Full-Stack Roadmap</h1>
                <h4 style="color: white">This is Full-Stack Web Development Roadmap.</h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3>What is Full-Stack Development ?</h3>
    <p>
        It refers to the development of both front end(client side) and back end(server side) portions of web application. 
    </p>
</div>
   <div class="container">
    <h3>Who is Full stack web Developers ?</h3>
    <p>
        Full stack web developers have the ability to design complete web applications and websites. They work on the frontend, backend, database and debugging of web applications or websites. 
    </p>
    <h3>Technology related to full stack development:</h3>
    <h3>1. Front-End</h3>
   <div class="container">
        <h4>A. HTML - HyperText Markup Language </h4>
        <p>HTML stands for HyperText Markup Language. It is used to form the “skeleton”, or the base, of any website. It lays out a website’s general structure and content. The elements that you see on the screen - buttons, images, sliders, date pickers, texts, lists, etc. are all added using HTML. 
        </p>
        <h4>B. CSS - Cascading Style Sheets  </h4>
        <p>CSS stands for Cascading Style Sheets using which you can add styles to your web pages like colors, fonts, layouts, and animations. With CSS, you can also make responsive websites that can change layout and styles according to the device resolution and orientation so that users have a seamless experience while using your website on devices of any size. CSS allows you to style multiple elements at once. It uses tag, class, and id selectors to target HTML elements that we want to style. We can then use these selectors to write style rules containing a property name like “font-size”, “background-color”, “margin-left”, etc. and values for these properties. 
        </p>
        <h4>C. JavaScript </h4>
        <p>
            Now that we have built the layout of our website using HTML and styled it using CSS, the next step is to add “actions” to our websites. This is done using the JavaScript programming language.  It improves the interactivity of your website. You can also create dynamic UI elements using JavaScript. JavaScript adds functionality to your website. For example, opening a menu on click of a button, updating the progress in a progress bar, sending a request containing your username and password to an authentication service after you click on the “Login” button to check if you are an authorized user, etc.  With the help of JavaScript, your website can respond to user activities on the page.  

            You may consider HTML, CSS, and JavaScript as an analogy to the body of humans.  The role of the skeleton and the organs is played by HTML. The role of the appearance and looks is played by CSS - height, eye color, hair color, skin color, skin texture, face structure, the shape of the hands, etc. The bodily functions are done using JavaScript - how the digestive system works, how the nervous system works, etc. 
            
            Now that we have seen the three fundamentals of front end development, let us look at a few other fundamental skills needed for a front end developer.
        </p>
   </div>
    <h3>2. Back-End</h3>
   <div class="container">
        <h4>A. PHP </h4>
        <p>
            PHP is a server-side scripting language designed specifically for web development. Since, PHP code executed on server side so it is called server side scripting language.
        </p>
        <h4>B. JAVA  </h4>
        <p>
            Java is one of the most popular and widely used programming language and platform. It is highly scalable. Java components are easily available.
        </p>
        <h4>C. JavaScript </h4>
        <p>
            Javascript can be used as both (front end and back end) programming languages.
        </p>
        <h4>D. Node.JS </h4>
        <p>
            Node.js is an open source and cross-platform runtime environment for executing JavaScript code outside of a browser. You need to remember that NodeJS is not a framework and it’s not a programming language.s.
        </p>
   </div>
    <h4>3. Database </h4>
    <p>
        Database is the collection of inter-related data which helps in efficient retrieval, insertion and deletion of data from database and organizes the data in the form of tables, views, schemas, reports etc.
    </p>
    <div class="container">
        <h4>Oracle</h4>
        <p>
            Oracle database is the collection of data which is treated as a unit. The purpose of this database is to store and retrieve information related to the query. It is a database server and used to manages information.
        </p>
        <h4>MongoDB</h4>
        <p>
            MongoDB, the most popular NoSQL database, is an open source document-oriented database. The term ‘NoSQL’ means ‘non-relational’. It means that MongoDB isn’t based on the table-like relational database structure but provides an altogether different mechanism for storage and retrieval of data.
        </p>
        <h4>SQL</h4>
        <p>
            Structured Query Language is a standard Database language which is used to create, maintain and retrieve the relational database.
        </p>
   </div>
   <div class="container">
    <h4>Popular Stacks</h4>
    <ul>MEAN Stack: MongoDB, Express, AngularJS and Node.js.</ul>
    <ul>MERN Stack: MongoDB, Express, ReactJS and Node.js</ul>
    <ul>Django Stack: Django, python and MySQL as Database.</ul>
    <ul>Rails or Ruby on Rails: Uses Ruby, PHP and MySQL.</ul>
    <ul>LAMP Stack: Linux, Apache, MySQL and PHP.</ul>
    <h4>You’re All Set</h4>
    <p>
        I hope this article gave you the idea of what steps you can follow to become a full-stack developer, and good luck on your journey to become an awesome full-stack Developer! 

        Keep in mind that this roadmap is merely a guideline for learning, not concrete rules. The web tools and technologies keep on changing and it is essential to keep yourself up-to-date and update your skills. You can always choose the learning path that matches your schedule, finances, and skill level after doing your own research too! 
    </p>
   </div>
</div>


@endsection