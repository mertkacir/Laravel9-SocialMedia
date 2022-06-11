@extends('layouts.frontbase')
@section('title',$user->name)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <img src="{{ $user->profile_picture }}" alt="">
                             {{ $user->name }} Profile
                            <div class="pull-right">
                                <a href="{{route('addfriend',['name'=> $user->name])}}" class="btn btn-link">Add Friend</a>
                                <a href="#" class="btn btn-link">View Friends</a>
                            </div>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href= "#posts" aria-controls="posts"
                                        role="tab" data-toggle="tab" style="padding:20px">Your Posts</a></li>
                                <li role="presentation"><a href="#comments" aria-controls="comments" role="tab"
                                        data-toggle="tab" style="padding:20px">Comments</a></li>
                                <li role="presentation"><a href="#categories" aria-controls="categories" role="tab"
                                        data-toggle="tab" style="padding:20px">Categories</a></li>
                                <li role="presentation"><a href="#likes" aria-controls="likes" role="tab"
                                        data-toggle="tab">Liked Posts</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade in" id="posts">
                                    {{ $user->posts()->count() }} Posts created
                                    @foreach ($user->posts as $post)
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    {{ $post->title }}
                                                    <div class="pull-right">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                role="button" aria-expanded="false">
                                                                <span class="caret"></span>
                                                            </a>

                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="{{ route('post.show', [$post->id]) }}">Show
                                                                        Post</a></li>
                                                                <li><a href="{{ route('post.edit', [$post->id]) }}">Edit
                                                                        Post</a></li>
                                                                <li>
                                                                    <a href="#"
                                                                        onclick="document.getElementById('delete').submit()">Delete
                                                                        Post</a>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="panel-body">
                                                {{ $post->body }}
                                                <br />
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="comments">
                                    {{ $user->comments()->count() }} Comments created
                                    @foreach ($user->comments as $comment)
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="col-sm-9">
                                                    {{ $comment->comment }}
                                                </div>
                                                <div class="col-sm-3">
                                                    <small><a href="{{ route('post.show', [$comment->post->id]) }}">View
                                                            Post</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="likes">
                                    @foreach ($user->likes as $like)
                                        @if ($like->like)
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                        Created by {{ $like->post->user->username }},
                                                        {{ $like->post->title }}
                                                        <div class="pull-right">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                    role="button" aria-expanded="false">
                                                                    <span class="caret"></span>
                                                                </a>

                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a
                                                                            href="{{ route('post.show', [$like->post->id]) }}">Show
                                                                            Post</a></li>
                                                                    <li><a
                                                                            href="{{ route('post.edit', [$like->post->id]) }}">Edit
                                                                            Post</a></li>
                                                                    <li>
                                                                        <a href="#"
                                                                            onclick="document.getElementById('delete').submit()">Delete
                                                                            Post</a>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </h3>
                                                </div>
                                                <div class="panel-body">
                                                    {{ $like->post->body }}
                                                    @if ($like->post->image != null)
                                                        <img src="/images/{{ $like->post->image }}" alt="Image"
                                                            width="100%" height="600">
                                                    @endif
                                                    <br />

                                                </div>
                                                <div class="panel-footer" data-postid="{{ $like->post->id }}">
                                                    <a href="#" class="btn btn-link like active-like">Like</a>
                                                    <a href="#" class="btn btn-link like">Dislike</a>
                                                    <a href="{{ route('post.show', [$like->post->id]) }}"
                                                        class="btn btn-link">Comment</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
