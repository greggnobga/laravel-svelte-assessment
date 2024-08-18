<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>

    <body>
        <div class="wrapper">
            <header class="header">@include('includes.header')</header>

            <main class="main">@yield('content')</main>

            <footer class="footer">@include('includes.footer')</footer>
        </div>
        <script src="/public/js/main.js"></script>
    </body>
</html>
