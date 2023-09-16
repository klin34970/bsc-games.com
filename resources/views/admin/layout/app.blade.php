<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title', 'Crypto Airdrops - Find free aidrops and make money !')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('assets/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ URL::asset('assets/images/favicon/safari-pinned-tab.svg') }}" color="#3d5a80">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#f5f3dc">
    <meta name="msapplication-config" content="{{ URL::asset('assets/images/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#f5f3dc">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset(mix('assets/admin/css/app.css')) }}">
</head>
<body class="text-gray-800 antialiased">
<div class="relative md:ml-64 bg-gray-100">
    @include('admin.layout.parts.nav')
    @include('admin.layout.parts.header')
    @yield('content')
</div>
@yield('modal')
<script src="{{ URL::asset(mix('assets/admin/js/app.js')) }}"></script>
@yield('scripts')
</body>
</html>
