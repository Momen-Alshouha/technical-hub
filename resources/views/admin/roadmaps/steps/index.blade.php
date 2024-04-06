@extends('admin.layout')

@section('content')
<h1 style="margin:30px"> {{$steps[0]['roadmapName']}} Roadmap Steps</h1>
<hr>
<div class="container-fluid">
    @if ($message = Session::get('message'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @endif

    @if(count($steps))
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($steps as $step)
            <tr>
                <th scope="row">{{$step['sequence']}}</th>
                <td>{{$step['title']}}</td>
                <td>{{$step['description']}}</td>
                <!-- <td>
                    <form class=" text-white d-inline" action="{{route('admin.roadmap.steps',$step['id'])}}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-success">Steps</button>
                    </form>

                    <form class="d-inline m-1" action="{{ route('admin.roadmap.edit', $step['id']) }}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>


                    <form class="d-inline" action="{{route('admin.roadmap.delete',$step['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td> -->
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
@else
<span class="container display-5">No Roadmaps Available</span>
@endif

@endsection