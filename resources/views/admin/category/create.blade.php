@extends('layouts.adminbase')
@section('title','Add Category')
@section('content')
<!-- Content Start -->
<div class="content">
    <h1 class="mb-4">Add Category</h1>
<h6 class="mb-4">Basic Form</h6>
     <form role="form" action="/admin/category/store" method="POST">
         @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" aria-describedby="title">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" id="keywords" aria-describedby="keywords">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" id="description" aria-describedby="description">
                                </div>

                                <div class="mb-3 form-check">
                                <h6 class="mb-3">Status</h6>
                                    <select class="form-select form-select-sm mb-3" name="status">
                                        <option selected="">Open this select menu</option>
                                        <option value="1">True</option>
                                        <option value="2">False</option>
                                    </select>
                                </div>

                            <div class="col-sm-12 col-xl-6">

                            <h6 class="mb-3">Image</h6>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </div>
            </form>
@endsection
