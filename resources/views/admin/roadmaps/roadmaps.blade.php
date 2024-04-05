@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Roadmaps</h1>
<hr>
<div class="container-fluid">
    @if ($message = Session::get('message'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @endif

    @if(count($roadmaps))
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roadmaps as $roadmap)
            <tr>
                <th scope="row">{{$roadmap->id}}</th>
                <td>{{$roadmap->name}}</td>
                <td>{{$roadmap->description}}</td>
                <td>{{$roadmap->category->name}}</td>
                <td><img src="{{asset('public/Image/roadmaps/'.$roadmap->image)}}" style="height: 150px; width: 150px;"></td>
                <td>
                    <form class="d-inline m-1" action="{{ route('admin.roadmap.edit', $roadmap->id) }}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>


                    <form class="d-inline" action="{{route('admin.roadmap.delete',$roadmap->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<span class="container display-5">No Roadmaps Available</span>
@endif

@endsection