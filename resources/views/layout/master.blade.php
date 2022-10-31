<!doctype html>
<html class="no-js" lang="en" data-hosturl="http://127.0.0.1:3000">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.svg') }}">
    <link rel="stylesheet" type="text/css" href="/assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    <script src="/assets/js/jquery.js"></script>
    @yield('styles')
</head>
<body class="_load_before">
@yield('content')
<script src="/assets/js/app.js"></script>
@yield('script')
</body>
</html>
