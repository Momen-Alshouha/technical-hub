@extends('layouts.layout')

@section('content')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">DevOps Roadmap</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3>DevOps Overview</h3>
    <p>
        DevOps combines development and operations to increase the efficiency, speed, and security of software development and delivery compared to traditional processes. A more nimble software development lifecycle results in a competitive advantage for businesses and their customers.
    </p>
    <h3>Now let's go through steps of the roadmap. </h3>

    <h4>1. Learning a programming language </h4>
    <p>
        You need to get a good grasp of a programming language. It doesn't matter which one, but it's needed for writing automation code. Automation is a key part of DevOps. You can learn Python, Java, Ruby, Golang etc.
    </p>
    <h4>2. Understand different OS concepts</h4>
    <p>
        As suggested in the roadmap, you need to learn about process management, threads & concurrency, sockets, I/O management, virtualization, memory system, etc.
    </p>
    <h4>3. Learn to Live in terminal  </h4>
    <p>
        Terminal commands are essential for a DevOps engineer, especially if you are working on linux. You need to learn commands for process monitoring, text manipulation, system performance, etc. When you practice these commands, you can become a master at shell scripting.
    </p>
    <h4>4. DOM Manipulation </h4>
    <p>
        With HTML, you can create web pages with static layouts easily. However, you might need to build dynamic web pages that can change the layout on the fly.  For example, you might want to add, remove, or edit HTML elements after the web page has been loaded or you might want to modify the CSS styles of an element only when an event occurs. Such dynamic manipulation of your web page can be done using the Document Object Model (DOM) API, which is a set of APIs to control HTML and styling information. DOM Manipulation is a good-to-have skill that will help you in creating applications capable of updating the data or the layout of the page without reloading. DOM Manipulation can be done using JavaScript.   
    </p>
    <h4>4. Network, Security & Protocols</h4>
    <p>
        You need to be familiar with various types of protocols which play a major role in communicating with different devices across the network like TCP/IP, HTTP, HTTPS, SMTP, FTP etc. 
    </p>
    <h4>5. What is and how to setup </h4>
    <p>
        In general, a DevOps engineer should know how to set up a web server like IIS, Nginx, Apache and Tomcat. They should also know about Caching Server, Load balancer, Reverse Proxy, and Firewall, etc. 
    </p>
    <h4>6. Learn Infrastructure as code </h4>
    <p>
        This is one of the most critical component in the learning path of a DevOps engineer. You need to learn about app containerization and have thorough understand of container tools like Docker and Kubernetes. Configuration management tools like Ansible, Chef, Salt & Puppet. Other areas include container orchestration and infrastructure provisioning.
    </p>
    <h4>7. Learn some Continuous Integration and Delivery (CI/CD) tools </h4>
    <p>
        Continuous Integration/Continuous Deployment is now a core part of setting a DevOps culture. So you should get familiar with CI/CD tools like Gitlab, Jenkins, Github actions etc. 
    </p>
    <h4>8. Learn to monitor software and infrastructure  </h4>
    <p>
        When you have thousands of services running, it's important to make sure that the system is running in fine health. Both your infrastructure and application should be continuously monitored. Tools like SigNoz can help you in setting up a robust monitoring system for your applications. 
    </p>
    <h4>9. Learn about Cloud Providers  </h4>
    <p>
        Most of the apps today are built as cloud-native. So you need to make yourself familiar with major cloud providers. AWS, Azure and Google Cloud are the leading players and they provide free courses about their tools too. 
    </p>
    
    <p>
        There is lot to learn in this field with constantly changing landscape. But with a good foundation and practice, you can build a solid career in this field which is growing very quickly.
    </p>
    <h4>You’re All Set</h4>
    <p>
        I hope this article gave you the idea of what steps you can follow to become a DevOps Engineer, and good luck on your journey! 

        Keep in mind that this roadmap to become front end developer is merely a guideline for learning, not concrete rules. The web tools and technologies keep on changing and it is essential to keep yourself up-to-date and update your skills. You can always choose the learning path that matches your schedule, finances, and skill level after doing your own research too! 
    </p>
</div>


@endsection