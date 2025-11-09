<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DR Election</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('app-assets/images/logo/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('app-assets/images/logo/apple-icon-60x60.png') }}" >
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('app-assets/images/logo/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('app-assets/images/logo/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('app-assets/images/logo/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('app-assets/images/logo/apple-icon-120x120.png') }}" >
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('app-assets/images/logo/apple-icon-144x144.png') }}" >
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('app-assets/images/logo/apple-icon-152x152.png') }}"  >
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app-assets/images/logo/apple-icon-180x180.png') }}" >
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('app-assets/images/logo/android-icon-192x192.png') }}" >
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('app-assets/images/logo/favicon-32x32.png') }}" >
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('app-assets/images/logo/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('app-assets/images/logo/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('app-assets/images/logo/manifest.json') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        @yield('content')
    </div>


    @yield('custom-js')

</body>
</html>
