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
                    <img loading="lazy" class="img-fluid position-absolute w-150 h-100" src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="programming" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Technical Roadmaps</h6>
                <h1 class="mb-4">Welcome to Technical roadmaps</h1>
                <p class="mb-4">TechnicalHUB is a platform to test your knowlege for technology jobs and review the most asked interview quistions.</p>
                <p class="mb-4">We also get you connected with the right companies worldwide based on your skills and preferences, and do everything needed to make sure you get your dream job. </p>
                <div class="row gy-2 gx-4 mb-4">
                    @foreach($roadmapsCategories as $category)
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><a href="">{{$category->name}}</a></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5 category">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-12">
                <div class="row g-3">
                    @foreach($roadmapsCategories as $category)
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a style="height: 100%;" class="position-relative d-block overflow-hidden" href="{{route('fullstack')}}">
                            <img title="{{$category->description}}" style="width: 100%; height:100%; object-fit:cover;" class="img-fluid" src="{{asset('public/Image/roadmaps_categories/'.$category->image)}}" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="roadmap m-0">{{$category->name}}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection