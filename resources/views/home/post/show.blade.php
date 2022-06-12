@extends('layouts.frontbase')
@section('title','Show Posts')
<style>
    .display-comment .display-comment {
        margin-left: 100px
    }
</style>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="mb-3">
                    <p style="color:blue;font-size:18px;">{{ $post->title }}</p>
                    <p style="font-size:15px;">
                        {{ $post->body }}
                    </p>
                    <td>
                        @if ($post->image)
                            <img src="{{Storage::url($post->image)}}" style="height: 300px; width:300px;">

                        @endif
                    </td>

                    <hr />
                    <h4>Display Comments</h4>
                    @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comment.store') }}">
                        @csrf
                        <div class="we-comment">
                            <input type="text" name="comment_body" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-warning" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
