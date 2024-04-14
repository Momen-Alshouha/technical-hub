@extends('admin.layout')


@section('content')
<h1 style="margin:30px">Reviews</h1>
<hr>

<div class="container-fluid">
    @if ($message = Session::get('success'))
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $index => $review)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{$review->user->name}}</td>
                <td>{{$review->description}}</td>
                <td>
                    <form method="POST" action="{{route('reviews.destroy',$review->id)}}">
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
@endsection