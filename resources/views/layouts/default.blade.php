<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','second APP')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
@include('layouts._header')
<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared._message')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>