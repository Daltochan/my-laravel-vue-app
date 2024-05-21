<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="all">
    <title>Laravel + Vue</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
<div id="app">
    <map-component></map-component>
</div>
@vite('resources/js/app.js')
</body>
</html>
