@extends('layouts.adminbase')
@section('title','Edit Content')
@section('content')
<!-- Content Start -->
<div class="content">
    <h1 class="mb-4">Edit Content: {{$data->title}}</h1>
<h6 class="mb-4">Basic Form</h6>
     <form role="form" action="{{route('admin.content.update',['id'=> $data->id])}}" method="POST" enctype="multipart/form-data">
         @csrf
                                    <div class="form-group">
                                        <label>Parent Category</label>

                                        <select class="form-control select2" name="category_id">
                                        <option value="0" selected="selected">Main Content</option>
                                    @foreach ($datalist as $rs)
                                        <option value="{{ $rs->id }}" @if($rs->id == $data->category_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>

                                    @endforeach

                                    </select>
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
                                <input class="form-control" type="file" name="image" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
            </form>
@endsection
@section('foot')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(function () {
    $('.textarea').summernote();
  });
</script>

@endsection
