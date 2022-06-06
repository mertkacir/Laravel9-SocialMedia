@extends('layouts.frontbase')

@section('title','Frequently Asked Questions | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

    @section('content')
        <div class="top-area">
        <ul class="main-menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">About us</li>
        </ul>
        </div>

        <div class="page-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-25 col-xl-10">
                        <div class="text-lg">
                            <h1>Frequently Asked Questions</h1>
                            <div id="accordion">
                          @foreach($datalist as $rs)
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                              <h3>{{$rs->question}}</h3>
                                            </a>
                                        </div>
                                        <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                            <div class="card-body">
                              <p>{!! $rs->answer !!}</p>
                                            </div>
                                        </div>


                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

    @endsection



