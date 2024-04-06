@extends('admin.layout')

@section('content')
    <h1 style="margin:30px">Add Interview Qustion Category</h1>
    <hr>
    <div class="add-form container">
        <form action="{{route('interview_qustions_category.store')}}" method="POST" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group" >
                <label for="title">Category Title</label>
                <input name="title" type="text" class="form-control" id="title" >
            </div><br>
            <div class="form-group">
                <label for="description">Description</label>
                <input name="description" type="text" class="form-control" id="description">
            </div><br>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input class="form-control" type="file" name="image" id="image">
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection