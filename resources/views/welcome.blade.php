<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel with Vue</title>
    </head>
    <body>
        <app></app>
        <script src="{{ asset('/js/vue-main.js?v=2') }}"></script>
    </body>
</html>
