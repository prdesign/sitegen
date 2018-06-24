<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/webflow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>@yield('title')</title>
</head>
<body>
@yield('content')
<script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
@yield('jsscript')
</body>
</html>
