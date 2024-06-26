@extends('layouts.layout')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


     
    
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="aboutimg img-fluid position-absolute w-100 h-100" src="https://img.freepik.com/free-vector/about-us-concept-illustration_114360-639.jpg?w=2000" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to TechnicalHUB</h1>
                    <p class="mb-4">TechnicalHUB is a Technical platform targeting job seekers whomwant to crack thier next coding inteview.</p>
                    <p class="mb-4">We also prvidve a clear technical roadmap for beginners, and do everything needed to make sure you get your dream job. </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Interview Questions</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Recommended Courses</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Technical Roadmaps</p>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection