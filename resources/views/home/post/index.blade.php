@extends('layouts.frontbase')
@section('title','Post List')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Show Post</a>
                        @if(\Illuminate\Support\Facades\Auth::id()==$post->user_id)
                        <a href="{{route('post.destroy', $post->id)}}" class="btn btn-danger">Delete Post</a>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
