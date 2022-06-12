@extends('layouts.adminwindow')

@section('title','Show Message: ' .$data->title,)

@section('content')


            <!--PAGE CONTENT -->
            <div class="col-lg-20">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3>Detail Message Data</h3>

                    </div>
                    <div class="panel-body">
                        <div class="table-responsive" >
                            <table class="table table-striped table-bordered table-hover" >
                                <tr>
                                    <th>Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th>Question </th>
                                    <td>{{$data->question}}</td>
                                </tr>
                                <tr>
                                    <th>Answer</th>
                                    <td>{!! $data->answer !!}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
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
                                    <th>Admin Note:</th>
                                    <td>
                                        <form role="form" action="{{route('admin.faq.update',['id'=>$data->id ])}}" method="post" >
                                            @csrf

                                       <textarea    cols="100"  id="note" name="note" >
                                                            {{$data->note}}
                                       </textarea>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-info"> Update Note</button>
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
