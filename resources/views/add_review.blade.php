@extends('layouts.layout')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h3 class="display-7 text-white animated slideInDown">Welcome {{Auth::user()->name}}</h3>

                <h1 class="display-3 text-white animated slideInDown">Add Your Review</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


@if (isset($success))
<div class="container alert alert-success" role="alert">
    {{ $success }}
</div>
@endif


<!-- About Start -->
<div style=" border-radius:10px" class="py-3 container">
    
<form action="{{route('reviews.store')}}" method="POST">
        @csrf
        <input style="display: none" type="text" name="user_id" value="{{Auth::user()->id}}">
        <textarea class="text-area-review form-control" name="description" id="description" cols="50" rows="10" placeholder="write your review here..."></textarea> <br />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!-- About End -->


@endsection