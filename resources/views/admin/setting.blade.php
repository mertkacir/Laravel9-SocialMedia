@extends('layouts.adminbase')
@section('title','Settings')
@section('content')
<!-- Content Start -->
<div class="content">
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3"style="width:80%">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <div class="ms-3">
                                <h1>Settings</h1>
                            <form role="form" action="{{route('admin.setting.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="bg-light rounded h-100 p-4">
                                    <h6 class="mb-4">Basic Navs &amp; Tabs</h6>
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Social Media</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">About Us</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">References</button>
                                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                                        </div>
                                    </nav>
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
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
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">About Us</label>
                                        <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Contact</label>
                                        <textarea id="aboutus" name="aboutus">{{$data->contact}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">References</label>
                                        <textarea id="aboutus" name="aboutus">{{$data->references}}</textarea>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

                                    <script>
                                        $(document).ready(function(){
                                            $('#aboutus').summernote();
                                            $('#contact').summernote();
                                            $('#references').summernote();

                                        });
                                    </script>
                                    <button type="submit" class="btn btn-primary">Update Setting</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
