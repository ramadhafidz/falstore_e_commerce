<!DOCTYPE html>
<html lang="en">

<head>
  <<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/style.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('font/admin/fonts.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('icon/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/sweetalert.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/custom.css')}}">
  @stack('styles')
</head>

<body class="body">

  @yield('content')

  <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
  <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/admin/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('js/admin/sweetalert.min.js') }}"></script>
  <script src="{{ asset('js/admin/apexcharts/apexcharts.js') }}"></script>
  <script src="{{ asset('js/admin/main.js') }}"></script>
  @stack('scripts')
</body>

</html>
