<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")" />
    <meta name="keywords" content="@yield("keywords")" />
	<meta name="author" content="Mert KACIR">
    <link rel="icon" href="{{asset('assets')}}/images/letter-s.png" type="image/png" sizes="16x16">
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
