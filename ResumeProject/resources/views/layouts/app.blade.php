<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title> @yield('title', 'my app') </title>
</head>
<body>
    <x-navbar />

    <div class="container">
        @yield('container')
    </div>

    <x-footer />
</body>
</html>