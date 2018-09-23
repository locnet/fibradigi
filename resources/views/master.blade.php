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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Styles / Bootstrap import-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Smooth Scroll Efect -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.0.0/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
    <div id="app">
        <!-- Vue component MainMenu -->
        <app-main-menu
            main-url="{{ url('/') }}"
            home-url="{{ url('/') }}"
            digipack-url="{{ url('/paquete-fibra-mas-movil') }}"
            movil-url="{{ url('/booking') }}"
            checking-url="{{ url('/checking') }}"
            contact-url="{{ url('/contact') }}">              
        </app-main-menu>
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer style="background-color: #009df9; height: 300px">

    </footer>
    @yield('custom_js')
    
</body>
</html>
