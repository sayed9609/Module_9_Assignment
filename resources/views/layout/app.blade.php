<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Page Title -->
    <title>Davis - Personal Portfolio</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" />
    <!-- Stylesheets -->

    <link rel="stylesheet" href="{{asset('assets/css')}}/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css')}}/fontawesome.css" />
    <link rel="stylesheet" href="{{asset('assets/css')}}/slick.css" />
    <link rel="stylesheet" href="{{asset('assets/css')}}/lightgallery.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css')}}/animate.css" />
    <link rel="stylesheet" href="{{asset('assets/css')}}/style.css" />
</head>

<body id="home">

    {{-- Header --}}

    @include('layout.header')

    {{-- End Header --}}

    {{-- Yield --}}

    @yield('home')
    @yield('about')
    @yield('service')
    @yield('resume')
    @yield('portfolio')
    @yield('blog')
    @yield('contact')

    {{-- End Yield --}}

    {{-- Footer --}}

    @include('layout.footer')

    {{-- End Footer --}}

    <!-- Scripts -->
    <script src="{{asset('assets/js')}}/jquery-1.12.4.min.js"></script>
    <script src="{{asset('assets/js')}}/jquery.slick.min.js"></script>
    <script src="{{asset('assets/js')}}/lightgallery.min.js"></script>
    <script src="{{asset('assets/js')}}/wow.min.js"></script>
    <script src="{{asset('assets/js')}}/ripples.min.js"></script>
    <script src="{{asset('assets/js')}}/main.js"></script>
</body>

</html>
