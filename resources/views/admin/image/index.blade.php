@extends('layouts.adminwindow')
@section('title', 'Content Image Gallery')
@section('content')
    <!-- Content Start -->
    <div class="content">
        <h2>{{$content->title}}</h2>
        <form role="form" action="{{ route('admin.image.store',['pid'=>$content->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="title">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                    <button type="submit" class="btn btn-primary float-right" style = "top:50px;">Upload</button>
                </div>
            </div>
    </div>
    </form>
    <!-- Sale & Revenue Start -->
    <div class="col-sm-25 col-xl-20">
        <div class="bg-light rounded h-100 p-4">

            <h6 class="mb-4">Content Image List</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th style="width : 5px">Update</th>
                        <th style="width : 5px">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $rs)
                        <tr>
                            <th scope="row">{{ $rs->id }}</th>
                            <td>{{ $rs->title }}</td>
                            <td>
                                @if ($rs->image)
                                    <img src="{{ Storage::url($rs->image) }}" style="height: 40px;">
                                @endif
                            </td>
                            <td><a href="{{ route('admin.image.update', ['pid' => $content->id,'id' => $rs->id]) }}"
                                    class="btn btn-primary rounded-pill m-2">Edit</a></td>
                            <td><a href="{{ route('admin.image.destroy', ['pid' => $content->id,'id' => $rs->id]) }}"
                                    class="btn btn-danger rounded-pill m-2 "
                                    onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
