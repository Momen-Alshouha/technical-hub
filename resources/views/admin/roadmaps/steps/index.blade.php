@extends('admin.layout')

@section('content')

<h1 style="margin:30px"> {{$roadmap->name}} Roadmap Steps</h1>
<h4 style="margin:30px">{{$roadmap->description}}</h4>
<hr>

<div class="container-fluid">
    @if ($message = Session::get('message'))
    <div class="container alert alert-success" role="alert">
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
<span class="d-block mt-3 container display-5">No Roadmap Steps Available</span>
@endif
<div class="m-3 actions">
    <form class="d-inline m-1" action="{{ route('admin.roadmap.step.create', $roadmap->id) }}" method="POST">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-primary">Add Step</button>
    </form>
    @if(count($steps))
    <form class="d-inline m-1" action="{{ route('admin.roadmap.steps.destroy', $roadmap->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete All Steps</button>
    </form>
    @endif
</div>
@endsection