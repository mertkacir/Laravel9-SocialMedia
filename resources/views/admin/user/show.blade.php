@extends('layouts.adminwindow')

@section('title','User Detail ' .$data->title,)

@section('content')


            <!--PAGE CONTENT -->
            <div class="col-lg-20">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3>Detail User Data</h3>
                    <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}"
                        class="text-decoration-none">Users</a></li>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive" >
                            <table class="table table-striped table-bordered table-hover" >
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th>Name & Surname </th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>

                                <tr>
                                    <th>Roles</th>
                                    <td>@foreach ($data->roles as $role )
                                        {{$role->name}}
                                        <a href="{{route('admin.user.destroyrole',['uid'=> $data->id, 'rid' => $role->id])}}">[x]</a>

                                    @endforeach</td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Add Role to User</th>
                                    <td>
                                        <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id ])}}" method="post" >
                                            @csrf
                                            <select name="role_id">
                                                @foreach ($roles as $role )
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-info"> Add Role</button>
                                            </div>

                                        </form>
                                    </td>
                                </tr>




                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </div>

@endsection
