<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>@yield("title")</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">

<link href="fonts/{{asset('assets')}}css/font-awesome.min.{{asset('assets')}}css" rel="stylesheet">
<link href="{{asset('assets')}}/css/animate.min.{{asset('assets')}}css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets')}}/css/main.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/color.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
@yield("head")
</head>
<body>
@include("home.header")


@section('sidebar')
    @include("home.sidebar")
@show
@yield('content')
@include("home.footer")
@yield('foot')
</body>
</html>
