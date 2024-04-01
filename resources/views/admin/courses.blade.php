@extends('admin.layout')

@section('content') 
    <h1 style="margin:30px">Courses</h1>
    <hr>
    <div class="container-fluid">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif
            
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course Title</th>
                    <th scope="col">Course Description</th>
                    <th scope="col">Course link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($courses as $course)
            <tr>
                <th scope="row">{{$course->id}}</th>
                <td>{{$course->title}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->link}}</td>
                <td><form action="{{route('courses.destroy',$course->id)}}"  method="POST">
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