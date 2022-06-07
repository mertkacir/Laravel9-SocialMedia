@extends('layouts.frontbase')

@section('title','User Register')



@section('content')

<div class="top-area">
    <ul class="main-menu">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">User Register</li>
    </ul>
</div>

<div class="row">
    <div class="col-sm-5 col-xl-12">
        @include('auth.register')
    </div>
</div>
@endsection
