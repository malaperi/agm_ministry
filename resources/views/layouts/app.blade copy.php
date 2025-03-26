<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Meta -->
  <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="{{asset('assets/fonts/bootstrap/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}" />


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
   
  <!-- Auth wrapper starts -->

  @yield('content')
  <!-- Form ends -->

<!-- Auth wrapper ends -->

</body>


<!--  login MALAPERI [XR&CO'2014], Tue, 14 Jan 2025 13:05:32 GMT -->
</html>