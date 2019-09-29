<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>سامانه مدیریت خودرو</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/panel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/Chart.min.css')}}">
</head>
<body>
    <div class="h-100"  >
             @yield('content')
    </div>
</body>
<script src="{{ asset('js/app.js') }}" ></script>
<script src="{{url('js/sweetalert2.all.js')}}"></script>
<script src="{{ url('js/panelcustom.js') }}"></script>
<script src="{{ url('js/highcharts.js') }}"></script>
@yield('script')
</html>
