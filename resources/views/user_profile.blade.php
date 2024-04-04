@extends('layouts.layout')

@section('content')

<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">{{$user->name}} Profile</h1>
            </div>
        </div>
    </div>
</div>

<section>  
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img class="userAvatar" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg&ga=GA1.1.1224184972.1711843200&semt=sph" alt="">
                  <h3 class="my-3">{{$user->name}}</h3>
                  <p class="text-muted mb-4">{{$user->address}}</p>
                  <p class="text-muted mb-4">{{$user->bio}}</p>
                  <a class="btn btn-primary" href="{{route('user.edit',Auth::user()->id)}}">Edit Profile</a>
                </div>
              </div>
             
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Gender</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$user->gender}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Age</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$user->age}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$user->email}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$user->phone_number}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Admin</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$user->is_admin ? 'Yes':'No'}}</p>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
    </div>
  </section>

@endsection