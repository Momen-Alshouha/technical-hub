@extends('layouts.layout')

@section('content')
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                  
                        <h1 class="display-3 text-white animated slideInDown">{{$categoryTitle}} Questions</h1>
         
                </div>
            </div>
        </div>
    </div>

    @if(count($qustionsByCategory) > 0)
        <div class="container-xxl py-5 category">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 col-md-4">
                        <div class="row g-3 justify-content-center">
                            @php
                                $counter = 0;
                            @endphp
                            @foreach ($qustionsByCategory as $qustion)
                                <div class="col-lg-5 col-md-12 wow zoomIn card m-4 p-0">
                                    <div class="bg-white text-center bottom-0 end-0" style="margin: 1px;">
                                        <h4 class="card-header">Q{{++$counter}}: {{$qustion->qustion}}</h4>
                                        <p class="m-3 text-primary">{{$qustion->answer}}</p>
                                    </div>  
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container py-5 text-center">
            <h3>No Questions Available For {{$categoryTitle}} Category!</h3>
        </div>
    @endif
@endsection
