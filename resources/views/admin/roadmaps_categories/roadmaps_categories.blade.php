@extends('admin.layout')

@section('content')
<h1 style="margin:30px">Roadmaps Categories</h1>
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
                <td><img src="{{asset('public/Image/roadmaps_categories/'.$category->image)}}" height="200px" width="200px" style="object-fit: cover;"></td>
                <td style="display: flex; align-items:center;">
                    <form class="d-inline m-1" action="{{ route('roadmap.category.edit', $category->id) }}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>


                    <form class="d-inline" action="{{route('roadmap_category.destroy',$category->id)}}" method="POST" id="deleteForm{{$category->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger delete-btn" data-id="{{$category->id}}" data-target="#confirmDeleteModal" data-toggle="modal">Delete</button>
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