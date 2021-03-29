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
    <body class="text-gray-800">
        <h1 class="font-weight-bolder text-4xl"> 
            This test for tailwindcss and ion iocons
            <ion-icon name="heart"></ion-icon>
        </h1>
        <h3 class="font-weight-bolder text-4xl"> 
            This test for tailwindcss and ion iocons
            <ion-icon name="heart"></ion-icon>
        </h3>
        <h5 class="font-weight-bolder text-4xl"> 
            This test for tailwindcss and ion iocons
            <ion-icon name="heart"></ion-icon>
        </h5>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, labore quisquam cupiditate nulla aspernatur laudantium quo placeat fuga at alias culpa consequatur sit, suscipit, obcaecati itaque eius magni provident impedit!</p>
    </body>

    {{-- Scripts --}}
    <script src="{{asset('./assets/js/app.js')}}"></script>
</html>
