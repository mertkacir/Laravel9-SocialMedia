@extends('layouts.frontbase')

@section('title','About Us',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)


@section('content')

<div class="top-area">
    <ul class="main-menu">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">About us</li>
    </ul>
</div>

<div class="row">
    <div class="col-sm-25 col-xl-6">
    {!! $setting -> aboutus !!}
    </div>
</div>
@endsection
