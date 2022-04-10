@extends('layouts.adminbase')
@section('title','Edit Category')
@section('content')
<!-- Content Start -->
<div class="content">
    <h1 class="mb-4">Edit Category: {{$data->title}}</h1>
<h6 class="mb-4">Basic Form</h6>
     <form role="form" action="{{route('admin.category.update',['id'=> $data->id])}}" method="POST">
         @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{$data->email}}" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}" aria-describedby="title">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" aria-describedby="keywords">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}" aria-describedby="description">
                                </div>

                                <div class="mb-3 form-check">
                                <h6 class="mb-3">Status</h6>
                                    <select class="form-select form-select-sm mb-3" name="status">
                                        <option selected="">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                            <div class="col-sm-12 col-xl-6">

                            <h6 class="mb-3">Image</h6>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
            </form>
@endsection
