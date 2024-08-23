<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        @yield('css')
        <script src={{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}></script>
        <script src={{ asset('/js/podarki.js') }}></script>
        <script src={{ asset('/js/modal.js') }}></script>
        <script src="https://yastatic.net/share2/share.js"></script>
    </head>
    <body class="antialiased">
        @yield('content')
    </body>
</html>
