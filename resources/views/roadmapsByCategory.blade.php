@extends('layouts.layout')

@section('content')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">{{$category->name}} Roadmaps</h1>
                <h4 style="color: aliceblue">{{$category->description}}</h4>
            </div>
        </div>
    </div>
</div>


@if(count($roadmapsByCategory))
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-12">
                <div class="row g-3">
                    @foreach($roadmapsByCategory as $roadmap)
                    <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a style="height: 100%;" class="position-relative d-block overflow-hidden" href="{{route('roadmap.roadmapSteps',$roadmap->id)}}">
                            <img title="{{$roadmap->description}}" style="width: 100%; height:100%; object-fit:cover;" class="img-fluid" src="{{asset('public/Image/roadmaps/'.$roadmap->image)}}" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                            <h5 class="roadmap m-0">{{$roadmap->name}}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container-fluid text-center">
<span class="container display-5">No Roadmaps Available</span>
</div>
@endif

@endsection