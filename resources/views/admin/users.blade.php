@extends('admin.layout')


@section('content')
<h1 style="margin:30px">Users</h1>
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
                <th scope="col">Admin</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_admin ? 'yes' : 'No'}}</td>
                <td>
                    <form method="POST" action="{{route('user.destroy',$user->id)}}" id="deleteForm{{$user->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger delete-btn" data-id="{{$user->id}}" data-toggle="modal" data-target="#confirmDeleteModal">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection