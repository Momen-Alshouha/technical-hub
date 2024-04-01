@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Edit Interview Qustion Category</h1>
<hr>
<div class="add-form container">
    <form action="{{ route('interview_qustions_category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Category Title</label>
            <input value="{{ $category->title }}" name="title" type="text" class="form-control" id="title">
        </div><br>

        <div class="form-group">
            <label for="description">Description</label>
            <input value="{{ $category->description }}" name="description" type="text" class="form-control" id="description">
        </div><br>

        <div class="form-group">
            <label for="image">Current Image</label><br>
            @if ($category->image)
            <img src="{{ asset('public/Image/' . $category->image) }}" alt="Current Image" style="max-width: 200px;">
            @else
            <p>No image available</p>
            @endif
        </div><br>

        <div class="form-group">
            <label for="image">Upload New Image</label>
            <input type="file" name="image" id="image">
        </div><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection