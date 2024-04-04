@extends('layouts.layout')

@section('content')
<div class="container-fluid bg-primary py-1 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-6 text-white animated slideInDown">{{$user->name}} Edit Profile</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <form class="edit-profile-form" action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{$user->name}}" name="name" type="text" class="form-control" id="name">
        </div><br>
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{$user->email}}" name="email" type="email" class="form-control" id="email">
        </div><br>
        <div class="form-group">
            <label for="age">Age</label>
            <input value="{{$user->age}}" name="age" max="100" type="number" class="form-control" id="age">
        </div><br>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" id="gender">
                <option class="{{$user->gender =='Male' ? 'selected' : ''}}" value="male">Male</option>
                <option class="{{$user->gender =='Male' ? 'selected' : ''}}" value="female">Female</option>
            </select>
        </div><br>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" class="form-control" id="bio">{{$user->bio}}</textarea>
        </div><br>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input value="{{$user->phone_number}}" name="phone_number" type="text" class="form-control" id="phone_number">
        </div><br>
        <div class="form-group">
            <label for="address">Address</label>
            <input value="{{$user->address}}" name="address" type="text" class="form-control" id="address">
        </div><br>
        <div class="form-group">
            <p>Current Profile Picture</p>
            @if ($user->profile_pic)
            <div>
            <img class="userAvatar" src="{{asset('public/Image/users_profiles_pics/'.$user->profile_pic)}}" alt="">
            </div>
            @else
            <div class="my-1">
                <img class="userAvatar" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg&ga=GA1.1.1224184972.1711843200&semt=sph" alt="Default Avatar">
            </div>
            @endif
            <input name="profile_pic" type="file" class="form-control my-2" id="profile_pic">
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection