<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app-assets/css-rtl/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css-rtl/app.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css-rtl/pages/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}">


    @yield('customcss')
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


@include('inc.navbar')

<!-- Main Sidebar Container -->

@include('inc.sidebaruser')




@yield('content')

@include('inc.footer')

<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/customizer.js') }}"></script>
@yield('customjs')

</body>
</html>
