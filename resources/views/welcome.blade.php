<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{url('css/app.css')}}">
        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">

    </head>
    <body>
        @include('./partials/header')
        @include('./partials/about')
        @include('./partials/offer')
        @include('./partials/compteur')
        @include('./partials/gallerie')
        @include('./partials/contacts')
        @include('./partials/footer')
    </body>

    <script src="js/app.js"></script>
    {{-- <script src="jquery-3.3.1.js"></script> --}}
</html>
