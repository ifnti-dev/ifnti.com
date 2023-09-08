<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="{{asset('aws/css/all.min.css')}}">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />

    <!-- Scripts -->
    @vite([ 'resources/css/login.css', 'resources/css/dash.css', 'resources/css/dataTable.css', 'resources/css/dossier.css','resources/css/style_dossier.css'])

</head>

<body>


    <main>
        @yield('content')
    </main>
    @vite(['resources/js/dash.js', 'resources/js/jquery.min.js'])
    @stack('js')
</body>

</html>
