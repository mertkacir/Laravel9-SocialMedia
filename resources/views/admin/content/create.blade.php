@extends('layouts.adminbase')
@section('title','Add Content')
@section('content')
<!-- Content Start -->
<div class="content">
    <h1 class="mb-4">Add Content</h1>
<h6 class="mb-4">Basic Form</h6>
     <form role="form" action="{{route('admin.content.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
                                <div class="form-group">
                                    <label>Parent Content</label>

                                    <select class="form-control select2" name="category_id">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach ($data as $rs)
                                        <option value="{{ $rs->id }}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>

                                    @endforeach

                                    </select>
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
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                            <div class="col-sm-12 col-xl-6">

                            <h6 class="mb-3">Image</h6>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Add Image</label>
                                <input class="form-control" type="file" name="image" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </div>
            </form>
@endsection
