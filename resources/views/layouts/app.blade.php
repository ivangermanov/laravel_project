<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config("app.name")}} - @yield('title')</title>

    <!-- CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- JavaScript -->
    <script src="{{asset('/js/app.js')}}"></script>

    @yield('head')
</head>

<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
    {{-- @include('inc.footer') --}}
    <script src="{{url('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>

</html>