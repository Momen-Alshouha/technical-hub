@extends('layouts.layout')

@section('content')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Technical Roadmaps</h1>
                <h4 style="color: aliceblue">Here is the list of available roadmaps.</h4>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-150 h-100" src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20220424231007/Web-Development-Roadmap-2022.png" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Technical Roadmaps</h6>
                <h1 class="mb-4">Welcome to Technical roadmaps</h1>
                <p class="mb-4">TechnicalHUB is a platform to test your knowlege for technology jobs and review the most asked interview quistions.</p>
                <p class="mb-4">We also get you connected with the right companies worldwide based on your skills and preferences, and do everything needed to make sure you get your dream job. </p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>front-end web development</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>back-end web development</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>DevOps Engineering</p>
                    </div>                       
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>full-stack web development</p>
                    </div>                       
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5 category">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="{{route('frontend')}}">
                            <img class="img-fluid" src="https://e3arabi.com/wp-content/uploads/2020/12/Front-End-Development-Bundle.jpg">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Front-End Web Development</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="{{route('backend')}}">
                            <img class="img-fluid" src="https://images.unsplash.com/photo-1613068687893-5e85b4638b56?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YmFjayUyMGVuZCUyMGRldmVsb3BtZW50fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Back-End Web Develpoment</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="{{route('fullstack')}}">
                            <img class="img-fluid" src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Full-Stack Web Development</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="{{route('devops')}}">
                    <img class="img-fluid position-absolute w-100 h-100" src="https://pimages.toolbox.com/wp-content/uploads/2021/08/10123613/DevOps-Philosophy.png" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">DevOps</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection