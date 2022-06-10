@extends('layouts.frontbase')
@section('title','Add Post')
@section('content')
<!-- Content Start -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form method="post" action="{{ route('post.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="label">Post Title: </label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="mb-3">
                            <label class="label">Post Body: </label>
                            <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                            <div class="attachments">
                                <ul>
                                    <li>
                                        <i class="fa fa-music"></i>
                                        <label class="fileContainer">
                                            <input type="file">
                                        </label>
                                    </li>
                                    <li>
                                        <i class="fa fa-image"></i>
                                        <label class="fileContainer">
                                            <input type="file">
                                        </label>
                                    </li>
                                    <li>
                                        <i class="fa fa-video-camera"></i>
                                        <label class="fileContainer">
                                            <input type="file">
                                        </label>
                                    </li>
                                </ul>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
