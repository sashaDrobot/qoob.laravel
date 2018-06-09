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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="/admin/orders">Панель Администратора</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item">
                    <a class="nav-link" id="" href="/admin">
                        <i class="fas fa-user-circle" aria-hidden="true"></i>
                        <span class="nav-link-text">Администратор</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="orders" href="/admin/orders">
                        <i class="fas fa-list-ul"></i>
                        <span class="nav-link-text">Список заказов</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/processed">
                        <i class="fas fa-check"></i>
                        <span class="nav-link-text">Обработанные</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-home" aria-hidden="true"></i>
                        <span class="nav-link-text">На главную</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i><span class="nav-link-text">Выход</span>
                    </a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>

    @yield('content')

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>&copy; 2018, qoob</small>
            </div>
        </div>
    </footer>
</body>
</html>
