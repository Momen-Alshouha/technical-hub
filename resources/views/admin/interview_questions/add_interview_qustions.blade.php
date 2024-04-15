@extends('admin.layout')

@section('content')
    <h1 style="margin:30px">Add Interview Qustion</h1>
    <hr>
    <div class="add-form">
        <form action="{{route('interview_qustions.store')}}" method="POST">
            @csrf
            <div class="form-group" >
                <label for="cat_id">Category</label>
               <select id="cat_id" name="cat_id" class="form-select">
                    <option selected>Open this select menu</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
               </select>
            </div>
            <div class="form-group">
                <label for="qustion">Qustion</label>
                <input name="qustion" type="text" class="form-control" id="qustion">
            </div>
            <div class="form-group">
                <label for="answer">Answer</label>
                <input type="text" name="answer" class="form-control" id="answer">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection