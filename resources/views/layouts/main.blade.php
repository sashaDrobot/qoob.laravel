<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <title>{{ $title }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="head">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/qoobcolor_horizontal.png') }}"></a>
        <div class="col-lg-12" id="menu-bg">
            <div class="col-sm-12 col-xs-12 col-lg-5 hidden-menu d-flex align-items-center" id="rightside-menu">
                <div class="menu-wrapper col-12">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/">Main</a>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/about">About</a>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/portfolio">Portfolio</a>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/services">Services</a>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/contacts">Contacts</a>
                    </div>
                </div>

            </div>
        </div>
        <div id="main-menu">
            <div class="text-right" id="main-hum">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <div class="society flex-column d-flex align-items-center justify-content-center">
        <div><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
        <div><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
        <div><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
    </div>
    <div class="languages flex-column d-flex align-items-center justify-content-center">
        <div><a href="/setlocale/en"><h5>EN</h5></a></div>
        <span class="h-line"></span>
        <div><a href="/setlocale/ru"><h5>RU</h5></a></div>
    </div>

</header>

@yield('content')

<script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>