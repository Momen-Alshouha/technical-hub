@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Add Roadmap</h1>
<hr>
<div class="add-form">
    <form action="{{route('admin.roadmap.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <select id="cat_id" name="cat_id" class="form-select">
            <option value="">
                Choose Roadmap Category
                </option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">
                    {{$category->name}}
                </option>
                @endforeach
            </select>
        </div><br>

        <div class="form-group">
            <label for="name">Roadmap Name</label>
            <input  name="name" type="text" class="form-control" id="name">
        </div><br>

        <div class="form-group">
            <label for="description">Roadmap Description</label>
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