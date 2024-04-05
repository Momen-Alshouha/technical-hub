@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Roadmaps Categories</h1>
<hr>
<div class="container-fluid">
    @if ($message = Session::get('message'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @endif

    @if(count($roadmapsCategories))
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roadmapsCategories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td><img src="{{asset('public/Image/roadmaps_categories/'.$category->image)}}" style="height: 150px; width: 150px;"></td>
                <td>
                    <form class="d-inline m-1" action="{{ route('roadmap.category.edit', $category->id) }}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>


                    <form class="d-inline" action="{{route('roadmap_category.destroy',$category->id)}}" method="POST">
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
<span class="container display-5">No Roadmaps Categories Available</span>
@endif

@endsection