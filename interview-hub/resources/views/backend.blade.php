@extends('layouts.layout')

@section('content')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Back-End Roadmap</h1>
                <h4>This is back-end Web Development Roadmap.</h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3>What is Back-End Development ?</h3>
    <p>
        Let us understand this with an example. The website you are currently on, reading this post, is nothing but the frontend part of a website. All the buttons, including the sign-in button, images, and texts, together make up the interface of this website.
    </p>
    <p>
        However, how can you view this web place in the first place? How do we get your information once you have signed in or signed up?
    </p>
    <p>
        Well, that is because backend developers are working behind the scenes. The data taken from the signup form is stored in the organization's database. Further, the organization can receive the data from the data set to send an email or recent update.
    </p>
    <p>
        In simple terms, a backend developer is a server-side developer responsible for collecting, storing, and modifying data. 
    </p>
   <div class="container">
    <h3>Skills Needed to  Become a Back-End Developer</h3><br>
    
    <h4>1. Knowledge of Web Server </h4>
    <p>
        The web server runs websites, it stores, processes, and delivers (response) web pages to the user’s request. An HTTP server comprises several components which can understand HTTP and URLs. When the user makes a request by the web server, it is accepted by an HTTP server which finds and sends back the content to the browser through HTTP. Some examples of web servers are Apache and NGINX which are open-source platforms used to deliver content as per requests made. 
    </p>
    <h4>2. Programming Languages and Their Frameworks.</h4>
    <p>
        You all would have come across the term Programming language which is the language implemented to be understood by the machine. And frameworks are a set of libraries that work together to simplify and make programming easier. Programming Languages are the backbone of a web page. Without the knowledge of programming languages with their frameworks, it is impossible to work as a back-end developer. There are many programming languages you can explore but there are few which are mostly recommended when it comes to backend development.
    </p>
    <p>
       <div class="container">
        <h5>A. [JS+NodeJS]</h5> – With JavaScript being the most demanding programming language, you can explore various new concepts and build a very amazing website. It is used to build interactive and dynamic websites. For JS, we have a framework which is NodeJS, which is designed with real-time, push-based architectures, the single-threaded model used for backend API services. NodeJS allows you to run JavaScript on the server. <br><br>
        <h5>B. [Python+Django]</h5> – Python is the easiest of all programming languages and with Django, it plays a perfect combination to build a website. With less code, you can build better and more easy web applications. Python is most commonly used for developing websites and it performs quicker implementations. Django is the most secure and scalable framework one should work with. <br><br>
        <h5>C. [PHP+Laravel]</h5> – PHP (HyperText Preprocessor) is a general-purpose scripting language well suited for web development. It is a fast, flexible, and pragmatic language which powers everything from blogs to the most popular websites. Laravel is an open-source framework used to build a wide range of web applications. It is purely a server-side framework that manages data and uses MVC (Model View Controller) to break an application’s back-end architecture into logical parts making it easier to build. 
    </p><br>
       </div>
    <h4>3. Version Control System (Git) </h4>
    <p>
        Version control system helps in maintaining and tracking changes incode changes be used for future implementations. They are software tools that help in managing changes in source code over time. Git which is free and open-source can be the best choice as a version control system because of its secure, flexible, and easy-to-edit features. Using a Version control system is the best practice every developer should follow even for a small project because whenever you want to update its feature or bring advancement to it, you can quickly edit the source code and come out with an optimized application.
    </p>
    <h4>4. APIs(Application Programming Interface)</h4>
    <p>
        An API is a set of functions that perform accessing data and interacting with external software components, microservices, and OS. In short, it delivers users’ responses to the system and sends responses back to the user. It is because of APIs (which act as a software intermediary) that two applications talk to each other. APIs are used by backend developers to create connections between services or applications to initiate communication to improve user experience. Express is a good choice for a server to create and expose APIs to have client-server communication. Some of the APIs you should know about are:
        <ul>
            <li>REST</li>
            <li>JSON</li>
            <li>SOAP</li>
        </ul>
    </p>
   </div>
    <h4>You’re All Set</h4>
    <p>
        I hope this article gave you the idea of what steps you can follow to become a back end developer, and good luck on your journey to become an awesome Back End Developer! 

        Keep in mind that this roadmap to become back end developer is merely a guideline for learning, not concrete rules. The web tools and technologies keep on changing and it is essential to keep yourself up-to-date and update your skills. You can always choose the learning path that matches your schedule, finances, and skill level after doing your own research too! 
    </p>
</div>




@endsection