@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Edit Interview Qustion</h1>
<hr>
<div class="add-form">
    <form action="{{route('interview_qustions.update',$question->id)}}" method="POST">
        @csrf
        @METHOD('PUT')
        <div class="form-group">
            <label for="cat_id">Category</label>
            <select id="cat_id" name="cat_id" class="form-select">
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{$question->cat_id == $category->id ? 'selected' : ''}}>
                    {{$category->title}}
                </option>
                @endforeach
            </select>
        </div><br>
        <div class="form-group">
            <label for="qustion">Qustion</label>
            <input value="{{$question->qustion}}" name="qustion" type="text" class="form-control" id="qustion">
        </div><br>
        <div class="form-group">
            <label for="answer">Answer</label>
            <input value="{{$question->answer}}" type="text" name="answer" class="form-control" id="answer">
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection