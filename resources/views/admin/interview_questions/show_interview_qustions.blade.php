@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Interview Qustions</h1>
    <div class="container-fluid">
        @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif
        
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Title</th>
                <th scope="col">Qustion</th>
                <th scope="col">Answer</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($qustions as $qustion)
        <tr>
            <th scope="row">{{$qustion->id}}</th>
            <td>{{$qustion->title}}</td>
            <td>{{$qustion->qustion}}</td>
            <td>{{$qustion->answer}}</td>
            <td class="d-flex gap-1">

            <form method="POST" action="{{route('interview_qustions.edit',$qustion->id)}}">
            @csrf
            @method('GET')
            <button type="submit" class="btn btn-primary">Update</button>
            </form>

            <form method="POST" action="{{route('interview_qustions.destroy',$qustion->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection