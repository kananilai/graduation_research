<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="side">
            <ul class="sidebar">
                <li class="sidebar_item">
                    <a href="/top" class="sidebar_link"><i class="fas fa-home fa-2x"></i></a>
                </li>
                <li class="sidebar_item">
                    <a href="" class="sidebar_link"><i class="fas fa-running fa-2x"></i></a>
                </li>
                <li class="sidebar_item">
                    <a href="" class="sidebar_link"><i class="fas fa-utensils fa-2x"></i></a>
                </li>
                <li class="sidebar_item">
                    <a href="/weight" class="sidebar_link"><i class="fas fa-tachometer-alt fa-2x"></i></a>
                </li>
                <li class="sidebar_item">
                    <a href="" class="sidebar_link"><i class="fas fa-bed fa-2x"></i></a>
                </li>
                <li class="sidebar_item">
                    <a href="" class="sidebar_link"><i class="fas fa-user fa-2x"></i></a>
                </li>
                <li class="sidebar_item">
                    <a href="" class="sidebar_link"><i class="fas fa-lock fa-2x"></i></a>
                </li>
                <li class="sidebar_item">
                    <a href="" class="sidebar_link"><i class="fas fa-unlock fa-2x"></i></a>
                </li>
            </ul>
        </div>
        <div class="header">
            <div class="user_info">
                <p class="user_name">太郎さん</p>
            </div>
        </div>
        @yield('leftcontent')
        @yield('rightcontent')
        @yield('content')
    </div>

</body>
