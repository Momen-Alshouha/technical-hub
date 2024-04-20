@extends('layouts.layout')

@section('content')
     <!-- Carousel Start -->
     <div class="container-fluid p-0 mb-md-5 mb-0" >
        <div  class="owl-carousel header-carousel position-relative">
            
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('img/carousel-1.png')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">The Best Online Technical Platform</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Every thing you need to crack your Technical Interview</p>
                               @if (!Auth::check())
                               <a href="{{route('register')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Join Now</a>
                               @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('img/carousel-2.png')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">TechnicalHUB is your best choice</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Increase your chances in getting the job</p>
                                @if ((!Auth::check()))
                                <a href="{{route('register')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Join Now</a>
                                    
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    
    
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Welcome to TechnicalHUB</h1>
                    <p class="mb-4">TechnicalHUB is a Technical platform targeting job seekers whomwant to crack thier next coding inteview.</p>
                    <p class="mb-4">We also prvidve a clear technical roadmap for beginners, and do everything needed to make sure you get your dream job. </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Interview Questions</p>
                        </div>              
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Technical Roadmaps</p>
                        </div> 
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Recomended Courses</p>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


     <!-- Service Authenticated Start -->
   
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center">
                        <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                        <h1 class="mb-5">Check Our Services!</h1>
                    </div>
                    <div class="row g-4">
                        <div src="www.google.com" class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                                    <h5 class="mb-3">Recommended Courses</h5>
                                    <p>We provide you a recomended courses to start your learning path</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                    <h5 class="mb-3">Interview quistions</h5>
                                    <p>The Most Asked Interview Qustions.Help you crack your next interview</p>
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <i class="fa fa-3x fa-question-circle text-primary mb-4"></i>
                                    <h5 class="mb-3">Technical Roadmaps</h5>
                                    <p>Start Learn programming with a clear technical roadmap.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
 
<!-- Service Authenticated end -->



    
    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Recommended Courses</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                    <div class="row g-3">
                        @foreach ($courses as $course)
                            <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                <a target="_blank" class="position-relative d-block overflow-hidden" href="{{$course->link}}">
                                    <img class="img-fluid" src="https://scholarship-positions.com/wp-content/uploads/2020/02/Free-Online-Course.jpg" alt="">
                                    <div class="card bg-white text-center position-absolute bottom-0 end-0 py-2 px-3">
                                        <h5 class="m-0">{{$course->title}}</h5>
                                        <small class="text-primary">{{$course->description}}</small>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Users Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">

                @foreach ($reviews as $review)
                <div class="testimonial-item text-center">
                <i class="fa fa-user-circle fa-3x text-primary mb-3"></i>
                    <h5 class="mb-0">{{$review->name}}</h5>
                    <p></p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">{{$review->description}}</p>
                    </div>
                </div>
                @endforeach
            </div><br/><br/>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection