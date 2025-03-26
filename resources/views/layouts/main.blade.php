<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/bootstrap/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/main.min.css')}}" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/overlay-scroll/OverlayScrollbars.min.css')}}" />
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body>
    <div class="page-wrapper">

        <!-- Main container starts -->
        <div class="main-container">

           @include('layouts.partials.sidebar')
            <!-- App container starts -->
            <div class="app-container">

               @include('layouts.partials.header')
                <!-- App body starts -->
                <div class="app-body">

                @yield('content')>

                </div>
                <!-- App body ends -->

              @include('layouts.partials.footer')
            </div>
            <!-- App container ends -->

        </div>
        <!-- Main container ends -->

    </div>

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/moment.min.js')}}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{asset('backend/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/overlay-scroll/custom-scrollbar.js')}}"></script>

    <!-- Apex Charts -->
    <script src="{{asset('backend/assets/vendor/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/apex/custom/crm/invoices.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/apex/custom/crm/deals.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/apex/custom/crm/tickets.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/apex/custom/crm/leads.js')}}"></script>

    <!-- Custom JS files -->
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>
</body>

</html>