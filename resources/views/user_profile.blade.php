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
  @if ($message = Session::get('success'))
  <div class="container alert alert-success" role="alert">
    {{$message}}
  </div>
  @endif

  <!-- Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="edit-profile-form" action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input value="{{ $user->name }}" name="name" type="text" class="form-control" id="name">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input value="{{ $user->email }}" name="email" type="email" class="form-control" id="email">
                    </div>

                    <!-- Age -->
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input value="{{ $user->age }}" name="age" max="100" type="number" class="form-control" id="age">
                    </div>

                    <!-- Gender -->
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control" id="gender">
                            <option {{ $user->gender == 'male' ? 'selected' : '' }} value="male">Male</option>
                            <option {{ $user->gender == 'female' ? 'selected' : '' }} value="female">Female</option>
                        </select>
                    </div>

                    <!-- Bio -->
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <input multiple class="form-control" id="bio" value="{{$user->bio}}" name="bio" type="text">
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input value="{{ $user->phone_number }}" name="phone_number" type="text" class="form-control" id="phone_number">
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input value="{{ $user->address }}" name="address" type="text" class="form-control" id="address">
                    </div>

                    <!-- Profile Picture -->
                    <div class="form-group">
                        <label for="profile_pic">Profile Picture</label>
                        @if ($user->profile_pic)
                            <div>
                                <img class="userAvatar" src="{{ asset('public/Image/users_profiles_pics/' . $user->profile_pic) }}" alt="">
                            </div>
                        @else
                            <div class="my-1">
                                <img class="userAvatar" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg&ga=GA1.1.1224184972.1711843200&semt=sph" alt="Default Avatar">
                            </div>
                        @endif
                        <input name="profile_pic" type="file" class="form-control my-2" id="profile_pic">
                    </div>

                   <div class="d-flex gap-3 edit-profile-actions">
                   <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img class="userAvatar" src="{{asset('public/Image/users_profiles_pics/'.$user->profile_pic)}}" alt="avatar">
            <h3 class="my-3">{{$user->name}}</h3>
            <p class="text-muted mb-4">{{$user->address}}</p>
            <p class="text-muted mb-4">{{$user->bio}}</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">
              Edit Profile
            </button>
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