@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Edit Step {{$step->title}}</h1>
<hr>

<div class="add-form">
    @if ($message = Session::get('message'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @endif

    <form action="{{route('admin.roadmap.step.update',$step->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @METHOD('PUT')
        <div class="form-group">
            <label for="title">Step Title</label>
            <input value="{{$step->title}}" name="title" type="text" class="form-control" id="title">
        </div><br>

        <div class="form-group">
            <label for="description">Step Description</label>
            <input value="{{$step->description}}" name="description" type="text" class="form-control" id="description">
        </div><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection