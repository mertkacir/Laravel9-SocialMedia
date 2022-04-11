@extends('layouts.adminbase')
@section('title','Category List')
@section('content')
<!-- Content Start -->
<div class="content">
    <!-- Sale & Revenue Start -->
    <div class="col-sm-25 col-xl-20">
    <a href="{{route('admin.category.create')}}" class="btn btn-primary rounded-pill m-2">Add Category</a>
                        <div class="bg-light rounded h-100 p-4">

                            <h6 class="mb-4">Category List</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Parent</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Status</th>
                                        <th style="width : 5px">Edit</th>
                                        <th style="width : 5px">Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $rs)


                                    <tr>
                                        <th scope="row">{{$rs->id}}</th>
                                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 40px;">

                                            @endif
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.category.edit',['id'=> $rs->id])}}" class="btn btn-primary rounded-pill m-2">Edit</a></td>
                                        <td><a href="{{route('admin.category.destroy',['id'=> $rs->id])}}" class="btn btn-danger rounded-pill m-2">Delete</a></td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection
