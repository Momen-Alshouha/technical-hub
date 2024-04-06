@extends('admin.layout')

@section('content')

<div class="container-fluid">
 

    @if(count($steps))
    <h1 style="margin:30px"> {{$steps[0]['roadmapName']}} Roadmap Steps</h1>
<hr>
@if ($message = Session::get('message'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
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
    <form class="d-inline m-1" action="{{ route('admin.roadmap.steps.destroy', $steps[0]['roadmapId']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete All Steps</button>
    </form>
</div>
@else
<span class="d-block mt-3 container display-5">No Roadmap Steps Available</span>
@endif

@endsection