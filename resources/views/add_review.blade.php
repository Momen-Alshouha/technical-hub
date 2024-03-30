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


     
    
    <!-- About Start -->
    <div style="display: flex; justify-content:center; background:rgb(250, 248, 248); border-radius:10px" class="container-xxl py-5">
      <form action="{{route('reviews.store')}}" method="POST">
        @csrf
        <input style="display: none" type="text" name="user_id" value="{{Auth::user()->id}}">
        <textarea class="form-control" name="description" id="" cols="50" rows="10" placeholder="write your review here..."></textarea> <br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <!-- About End -->

    
@endsection