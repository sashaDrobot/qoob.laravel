<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Наша компания предоставляет полный спектр услуг по разработке веб-сайтов. Нужен креативный дизайн и современный интерфейс? Наша команда профессионалов поможет вам реализовать любые ваши пожелания. Давайте создадим вашу мечту вместе! Qoob Studio - за гранью возможного... " />
    <!-- Our company provides a full range of services for the development of websites. Do you need a creative design and a modern interface? Our team of professionals will help you realize any of your wishes. Let's create your dream together! Qoob Studio - beyond the possible ... -->
    <meta name="Keywords" content="qoob, studio, qoob-studio, студия, web production studio, харьков, Харьков, веб-дизайн, сайт, создание сайта, создание сайта Харьков, веб студия Харьков, заказать сайт Харьков, дизайн, разработка веб сайтов, seo продвижение сайта, сайт визитка, цена продвижение сайта, цена, заказать создание сайта, продвижение сайта в поисковых системах, seo оптимизация сайта, студия создания сайтов, стоимость создания сайта, редизайн сайта, web, поддержка сайта, сделать сайт, создание интернет-магазина, создание корпоративного сайта, недорого создание сайтов, Харьков,Украина,в Харькове, лендиенг,landing, веб, интернет"/>
    <meta name="it-rating" content="it-rat-503587d2d83457447715b4ec3c551361" />
    <meta property = "business:contact_data:country_name" content = "Украина">
    <meta property = "business:contact_data:locality" content = "Харьков">

    <!-- Разметка JSON-LD Google -->
    <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "LocalBusiness",
          "name" : "qoob",
          "image" : "http://qoob-studio.com/img/qoobcolor_horizontal.png",
          "telephone" : "(095) 356 83 36",
          "email" : "info@qoob-studio.com",
          "address" : {
            "@type" : "PostalAddress",
            "streetAddress" : "ул. Плехановская 126/1",
            "addressLocality" : "Харьков",
            "addressCountry" : "Украина"
          }
        }
    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="head">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/qoobcolor_horizontal.png') }}" alt="qoob web production studio"></a>
        <div class="col-lg-12" id="menu-bg">
            <div class="col-sm-12 col-xs-12 col-lg-5 hidden-menu d-flex align-items-center" id="rightside-menu">
                <div class="menu-wrapper col-12">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/">Главная</a>
                    </div>
                  {{--  <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/about">О нас</a>
                    </div> --}}
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/portfolio">Портфолио</a>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/services">Услуги</a>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <a href="/contacts">Контакты</a>
                    </div>
                  {{--  <span class="lang-list list-group">
                        <a class="list-group-item list-group-item-action" href="/setlocale/en">EN</a>
                        <a class="list-group-item list-group-item-action" href="/setlocale/ru">RU</a>
                    </span> --}}
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
  {{--  <div class="society flex-column d-flex align-items-center justify-content-center">
        <div><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
        <div><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
        <div><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
    </div>
    <div class="languages flex-column d-flex align-items-center justify-content-center">
        <div><a href="/setlocale/en"><h5>EN</h5></a></div>
        <span class="h-line"></span>
        <div><a href="/setlocale/ru"><h5>RU</h5></a></div>
    </div>
    --}}
</header>

@yield('content')
<footer class="container-fluid">
    <div class="row copyright-qoob d-flex align-items-center justify-content-center">
        <div class="col-12 text-center">
            <h6>© qoob, 2018 | Все права защищены</h6>
        </div>
    </div>
</footer>

<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>