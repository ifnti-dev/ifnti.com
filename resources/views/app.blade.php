<!DOCTYPE html>
<html lang="fr">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>IFNTI </title>
{{-- <meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> --}}

<link rel="shortcut icon" href="{{ asset('vitrine/images/img/logoIfnti.png') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('images/img/logoIfnti.png') }}">

<link rel="stylesheet" href="{{ asset('vitrine/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('vitrine/style.css') }}">
<link rel="stylesheet" href="{{ asset('vitrine/css/versions.css') }}">
<link rel="stylesheet" href="{{ asset('vitrine/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('vitrine/css/custom.css') }}">

<script src="{{ asset('vitrine/js/modernizer.js') }}"></script>


</head>

<body class="host_version">
    @include('layout.shared.modal')
    @include('layout.shared.loader')
    @include('layout.shared.navbar')
    @yield('content')
    @include('layout.shared.footer')

    <script src="{{ asset('vitrine/js/all.js') }}"></script>
    <script src="{{ asset('vitrine/js/custom.js') }}"></script>
    @stack('js')

</body>

</html>
