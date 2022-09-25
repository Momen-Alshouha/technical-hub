@extends('layouts.layout')

@section('content')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Front-End Roadmap</h1>
                <h4 style="color: white">This is front-End Web Development Roadmap.</h4>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3>What is Front-End Development ?</h3>
    <p>
        Front-end development, or client-side development, involves building the User Interface (UI) of a website or a web application, that determines how every part of a website will look and how it will work. The UI includes the visual part of the application and the user interactions. Whatever you see when you visit a website - the different types of buttons and other UI components, media, texts, forms, animations, etc. are all developed as a part of the front-end. 
    </p>
   <div class="container">
    <h3>Fundamentals of Front End </h3>
    <p>
        For stepping into Front-End Development, the most essential skills you should have are HTML, CSS, and JavaScript. These skills are the bare minimum to start with Front-End Development. Note that front-end web development is not just limited to these three skills, there are many more technologies that you will need to learn to excel as a Front-End Developer in 2022. 
    </p>
    <p>Let us look at these fundamental skills in detail.</p>
    <h4>1. HTML - HyperText Markup Language </h4>
    <p>HTML stands for HyperText Markup Language. It is used to form the “skeleton”, or the base, of any website. It lays out a website’s general structure and content. The elements that you see on the screen - buttons, images, sliders, date pickers, texts, lists, etc. are all added using HTML. 
    </p>
    <h4>2. CSS - Cascading Style Sheets  </h4>
    <p>CSS stands for Cascading Style Sheets using which you can add styles to your web pages like colors, fonts, layouts, and animations. With CSS, you can also make responsive websites that can change layout and styles according to the device resolution and orientation so that users have a seamless experience while using your website on devices of any size. CSS allows you to style multiple elements at once. It uses tag, class, and id selectors to target HTML elements that we want to style. We can then use these selectors to write style rules containing a property name like “font-size”, “background-color”, “margin-left”, etc. and values for these properties. 
    </p>
    <h4>3. JavaScript </h4>
    <p>
        Now that we have built the layout of our website using HTML and styled it using CSS, the next step is to add “actions” to our websites. This is done using the JavaScript programming language.  It improves the interactivity of your website. You can also create dynamic UI elements using JavaScript. JavaScript adds functionality to your website. For example, opening a menu on click of a button, updating the progress in a progress bar, sending a request containing your username and password to an authentication service after you click on the “Login” button to check if you are an authorized user, etc.  With the help of JavaScript, your website can respond to user activities on the page.  

        You may consider HTML, CSS, and JavaScript as an analogy to the body of humans.  The role of the skeleton and the organs is played by HTML. The role of the appearance and looks is played by CSS - height, eye color, hair color, skin color, skin texture, face structure, the shape of the hands, etc. The bodily functions are done using JavaScript - how the digestive system works, how the nervous system works, etc. 
        
        Now that we have seen the three fundamentals of front end development, let us look at a few other fundamental skills needed for a front end developer.
    </p>
    <h4>4. DOM Manipulation </h4>
    <p>
        With HTML, you can create web pages with static layouts easily. However, you might need to build dynamic web pages that can change the layout on the fly.  For example, you might want to add, remove, or edit HTML elements after the web page has been loaded or you might want to modify the CSS styles of an element only when an event occurs. Such dynamic manipulation of your web page can be done using the Document Object Model (DOM) API, which is a set of APIs to control HTML and styling information. DOM Manipulation is a good-to-have skill that will help you in creating applications capable of updating the data or the layout of the page without reloading. DOM Manipulation can be done using JavaScript.   
    </p>
    <h4>5. How the Web Works </h4>
    <p>
        As a front end developer, you should have a basic idea of the working of the web and the different protocols for communication over the web. It is good to have the basic idea of how the internet works, how clients and servers interact, the Domain Name Server (DNS) and the components of a website i.e code files and assets. While it is not important to know all the communication protocols in detail, the basic knowledge of these protocols will help you develop secure websites which are critical nowadays. HTTPS and SSL are two of the secure communication protocols that are good to know.   
    </p>
    <h4>6. Responsive Design</h4>
    <p>
        Responsive Web Design means creating websites that can be used on all types and sizes of devices. In today’s time where people use websites from all devices like laptops, large-screen computers, tablets as well as mobile phones, it becomes of utmost importance to develop responsive interfaces. This can be done using CSS Media Queries, where the style and layout of the web page change as per the device and screen size. Responsive Design automatically resizes, hides, shrinks or enlarges the components on a website.   
    </p>
   </div>
    <h4>You’re All Set</h4>
    <p>
        I hope this article gave you the idea of what steps you can follow to become a front end developer, and good luck on your journey to become an awesome Front End Developer! 

        Keep in mind that this roadmap to become front end developer is merely a guideline for learning, not concrete rules. The web tools and technologies keep on changing and it is essential to keep yourself up-to-date and update your skills. You can always choose the learning path that matches your schedule, finances, and skill level after doing your own research too! 
    </p>
</div>


@endsection