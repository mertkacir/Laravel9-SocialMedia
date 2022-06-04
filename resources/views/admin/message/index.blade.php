@extends('layouts.adminbase')
@section('title','Message List')
@section('content')
<!-- Content Start -->
<div class="content">
    <!-- Sale & Revenue Start -->
    <div class="col-sm-25 col-xl-20">
                        <div class="bg-light rounded h-100 p-4">

                            <h6 class="mb-4">Message List</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Status</th>
                                        <th style="width : 5px">Edit</th>
                                        <th style="width : 5px">Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $rs)


                                    <tr>
                                        <th scope="row">{{$rs->id}}</th>
                                        <th scope="row">{{$rs->name}}</th>
                                        <th scope="row">{{$rs->phone}}</th>
                                        <th scope="row">{{$rs->email}}</th>
                                        <th scope="row">{{$rs->subject}}</th>
                                        <th scope="row">{{$rs->status}}</th>
                                        <td><a href="{{route('admin.message.show',['id'=> $rs->id])}}" class="btn btn-primary rounded-pill m-2">Show</a></td>
                                        <td><a href="{{route('admin.message.destroy',['id'=> $rs->id])}}" class="btn btn-danger rounded-pill m-2">Delete</a></td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection
