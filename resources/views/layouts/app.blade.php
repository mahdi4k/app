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

</head>
<body>
<div id="app">
    <div class="h-auto">
        <header class="top-header">
            <div class="mx-4 mt-2  d-flex justify-content-between   align-items-center">
                <span id="sidebarCollapse" class="  sidebarCollapse">
                  <i class="cplapceIcon fa  fa-align-justify"></i>
               </span>
                 {{-- mobile button--}}
                 <i style="color:#26b8e4;display: none" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" class="navbar-toggle offcanvas-toggle fa  fa-align-justify"></i>
                {{--end mobile button--}}
                <img class="mx-2 centered-logo"  alt="car management" src="{{url('img/logoHeader.png')}}">
                <p style="font-size: 12px;border-bottom: 1px dashed #0066ffb8;color: #2d2d2d;"> شماره تماس : ۸۴۱۲۰۱۶-۰۳۵۳</p>
            </div>

         </header>
        <div class="container-fluid h-100">

            <div class="row h-100">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{url('js/sweetalert2.all.js')}}"></script>
<script src="{{ url('js/panelcustom.js') }}"></script>
@include('sweet::alert')
@yield('script')
</html>
