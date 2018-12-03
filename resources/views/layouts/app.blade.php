<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config("app.name")}} - @yield('title')</title>
    <!-- CSRF token -->
    
    <!-- JavaScript -->
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <!-- CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('inc.footer')
</body>

</html>