<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIGiGATE | Landing page</title>

        {{-- Ionicons Through CDN --}}
        <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>

        {{-- Global Style Sheet --}}

        <link rel="stylesheet" href="{{asset('./assets/css/app.css')}}">

    </head>
    <body class="text-gray-800 font-normal bg-gray-100">
         @yield('header')
         @yield('side-bar')
         @yield('our-services')
         @yield('our-work')
         @yield('price-table')
         @yield('footer')
    </body>

    {{-- Scripts --}}
    <script src="{{asset('./assets/js/app.js')}}"></script>
</html>
