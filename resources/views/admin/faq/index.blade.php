@extends('layouts.adminbase')
@section('title','FAQ List')
@section('content')
<!-- Content Start -->
<div class="content">
    <!-- Sale & Revenue Start -->
    <div class="col-sm-25 col-xl-20">
                        <div class="bg-light rounded h-100 p-4">
                            <a href="{{route('admin.faq.create')}}" class="btn btn-primary rounded-pill m-2">Add Question</a>

                            <h6 class="mb-4">FAQ List</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Answer</th>
                                        <th scope="col">Status</th>
                                        <th style="width: 50px">Edit</th>
                                        <th style="width: 50px">Show</th>
                                        <th style="width: 50px">Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $rs)


                                    <tr>
                                        <th scope="row">{{$rs->id}}</th>
                                        <th scope="row">{{$rs->question}}</th>
                                        <th scope="row">{!! $rs->answer !!}</th>
                                        <th scope="row">{{$rs->status}}</th>
                                        <td><a href="{{route('admin.faq.edit',['id'=> $rs->id])}}" class="btn btn-primary rounded-pill m-2">Edit</a></td>
                                        <td><a href="{{route('admin.faq.show',['id'=> $rs->id])}}" class="btn btn-primary rounded-pill m-2">Show</a></td>
                                        <td><a href="{{route('admin.faq.destroy',['id'=> $rs->id])}}" class="btn btn-danger rounded-pill m-2" onclick="return confirm('Deleting !! Are you sure ?!')">Delete</a></td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection
