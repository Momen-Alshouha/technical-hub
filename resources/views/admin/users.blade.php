@extends('admin.layout')


@section('content')
    <h1 style="margin:30px">Users</h1>
    <hr>
    
    <div class="container-fluid">
        @if ($message = Session::get('message'))
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><form method="POST" action="{{route('user.destroy',$user->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
               @endforeach
            </tbody>
        </table>
    </div>
@endsection