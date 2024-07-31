<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
    </body>

</html>
