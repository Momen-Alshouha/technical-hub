@extends('layouts.layout')

@section('content')
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Interview Qustions Categories</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-12 col-md-4">
                    <div class="row g-3">
                       
                        @foreach ($categories as $category)
                            <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                <a class="position-relative d-block overflow-hidden" href="qustion_categories/{{$category->id}}">
                                    <img class="img-fluid" src="{{asset('public/Image/'.$category->image)}}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0">{{$category->title}}</h5>
                                        <small class="text-primary">{{$category->description}}</small>
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