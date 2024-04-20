@extends('layouts.layout')

@section('content')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">{{$roadmap->name}} Roadmap</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3 class="mb-5">{{$roadmap->description}}</h3>
    <div class="container">
        <h3 class="mb-3">Skills Needed to learn {{$roadmap->name}}</h3>
        @foreach($roadmapSteps as $step)
        <h4>{{$loop->index + 1}} - {{$step->title}}</h4>
        <p>
            {{$step->description}}
        </p>
        @endforeach
    </div>
</div>




@endsection