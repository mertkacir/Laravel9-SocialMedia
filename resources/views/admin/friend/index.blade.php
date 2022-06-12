@extends('layouts.adminbase')
@section('title','Friend List')
@section('content')
<!-- Content Start -->
<div class="content">
    <!-- Sale & Revenue Start -->
    <div class="col-sm-25 col-xl-20">
                        <div class="bg-light rounded h-100 p-4">

                            <h6 class="mb-4">Friend List</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">user_id_1</th>
                                        <th scope="col">user_id_2</th>
                                        <th scope="col">Approved</th>
                                        <th style="width : 5px">Edit</th>
                                        <th style="width : 5px">Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $user)


                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->user_id_1}}</td>
                                        <td>{{$user->user_id_2}}</td>
                                        <td>{{$user->approved}}</td>
                                        <td><a href="#" class="btn btn-primary rounded-pill m-2">Accept</a></td>
                                        <td><a href="{{route('admin.friend.destroy', $user->id)}}" class="btn btn-danger rounded-pill m-2">Decline</a></td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection
