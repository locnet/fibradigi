<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=" @yield('meta_description') ">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    
    <!-- Styles / Bootstrap import-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Vue component MainMenu -->
        <app-main-menu
            main-url="{{ url('/') }}"
            home-url="{{ url('/') }}"
            hotel-url="{{ url('/hotel') }}"
            booking-url="{{ url('/booking') }}"
            checking-url="{{ url('/checking') }}"
            contact-url="{{ url('/contact') }}">              
        </app-main-menu>
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('custom_js')
</body>
</html>
