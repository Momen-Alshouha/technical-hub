@extends('admin.layout')

@section('content') 
    <h1 style="margin:30px">Interview Qustions Categories</h1>
    <hr>
    <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif
            
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Category ID</th>
                    <th scope="col">Category Title</th>
                    <th scope="col">Category Description</th>
                    <th scope="col">Category Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->title}}</td>
                <td>{{$category->description}}</td>
                <td><img src="{{asset('public/Image/'.$category->image)}}" style="height: 150px; width: 150px;"></td>
                <td><form action="{{route('interview_qustions_category.destroy',$category->id)}}"  method="POST">
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