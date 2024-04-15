@extends('admin.layout')

@section('content')
    <h1 style="margin:30px">Add Roadmap Category</h1>
    <hr>
    <div class="add-form">
        <form action="{{route('roadmap.category.store')}}" method="POST" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group" >
                <label for="name">Cateogry Name</label>
                <input name="name" type="text" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="description">Category Description</label>
                <input name="description" type="text" class="form-control" id="description">
            </div>
            <div class="form-group">
                <label for="image">Course Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection