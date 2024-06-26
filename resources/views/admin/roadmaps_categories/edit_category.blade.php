@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Edit Roadmap Category</h1>
<hr>
<div class="add-form">
    <form action="{{route('roadmap.category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @METHOD('PUT')
        <div class="form-group">
            <label for="name">Cateogry Name</label>
            <input value="{{$category->name}}" name="name" type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="description">Category Description</label>
            <input value="{{$category->description}}" name="description" type="text" class="form-control" id="description">
        </div>
        <div class="form-group current-image">
            <label for="image">Current Image</label>
            @if ($category->image)
            <img src="{{asset('public/Image/roadmaps_categories/'.$category->image)}}" alt="Current Image" style="max-width: 320px;">
            @else
            <p>No image available</p>
            @endif
        </div>
        <div class="form-group">
            <label for="image">Update Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection