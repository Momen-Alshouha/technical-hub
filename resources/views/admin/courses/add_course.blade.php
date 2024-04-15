@extends('admin.layout')

@section('content')
    <h1 style="margin:30px">Add Course</h1>
    <hr>
    <div class="add-form">
        <form action="{{route('courses.store')}}" method="POST"> 
            @csrf
            <div class="form-group" >
                <label for="title">Course Title</label>
                <input name="title" type="text" class="form-control" id="title" >
            </div>
            <div class="form-group">
                <label for="description">Course Description</label>
                <input name="description" type="text" class="form-control" id="description">
            </div>
            <div class="form-group">
                <label for="image">Course Link</label>
                <input type="text" class="form-control" name="link" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection