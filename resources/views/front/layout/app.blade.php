<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title', '' . env('APP_NAME') . ' - Play games on Binance Smart Chain !')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('assets/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ URL::asset('assets/images/favicon/safari-pinned-tab.svg') }}" color="#3d5a80">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#f5f3dc">
    <meta name="msapplication-config" content="{{ URL::asset('assets/images/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#f5f3dc">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset(mix('assets/css/app.css')) }}">

</head>
<body class="leading-normal tracking-normal flex flex-col">
<x-status :status="session('status')" />
<x-errors :errors="$errors" />
@include('front.layout.parts.nav')
<div class="flex-1">
    @yield('content')
</div>
@include('front.layout.parts.footer')
<script src="{{ URL::asset(mix('assets/js/app.js')) }}"></script>
@yield('scripts')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LPD8ZVTZRK"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LPD8ZVTZRK');
</script>
</body>
</html>
