@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Edit Roadmap</h1>
<hr>
<div class="add-form">
    <form action="{{route('admin.roadmap.update',$roadmap->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <select id="cat_id" name="cat_id" class="form-select">
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{$roadmap->cat_id == $category->id ? 'selected' : ''}}>
                    {{$category->name}}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="title">Roadmap Name</label>
            <input value="{{$roadmap->name}}" name="name" type="text" class="form-control" id="name">
        </div>

        <div class="form-group">
            <label for="description">Roadmap Description</label>
            <input value="{{$roadmap->description}}" name="description" type="text" class="form-control" id="description">
        </div>

        <div class="form-group current-image">
            <label for="image">Current Image</label>
            @if ($roadmap->image)
            <img src="{{ asset('public/Image/roadmaps/' . $roadmap->image) }}" alt="Current Image" style="max-width:320px;">
            @else
            <p>No image available</p>
            @endif
        </div>

        <div class="form-group">
            <label for="image">Upload New Image</label>
            <input class="form-control" type="file" name="image" id="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection