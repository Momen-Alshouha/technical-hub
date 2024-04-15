@extends('admin.layout')

@section('content')
    <h1 style="margin:30px">Edit Course</h1>
    <hr>
    <div class="add-form">
        <form action="{{route('courses.update',$course->id)}}" method="POST"> 
            @csrf
            @method('PUT')
            <div class="form-group" >
                <label for="title">Course Title</label>
                <input value="{{$course->title}}" name="title" type="text" class="form-control" id="title" >
            </div><br>
            <div class="form-group">
                <label for="description">Course Description</label>
                <input value="{{$course->description}}" name="description" type="text" class="form-control" id="description">
            </div><br>
            <div class="form-group">
                <label for="image">Course Link</label>
                <input value="{{$course->link}}" type="text" class="form-control" name="link" id="image">
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection