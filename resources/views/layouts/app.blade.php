<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'House Of Grace Eldoret') }}</title>
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- CSS
      ================================================== -->
    <link href="{{ asset('files/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('files/css/bootstrap-theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('files/css/style.css') }}" rel="stylesheet" type="text/css">
    {{--<link href="{{ asset('files/css/font-awesome.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ asset('files/css/line-icons.css') }}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{ asset('files/css/animations.css') }}" rel="stylesheet" type="text/css">--}}
    <link href="{{ asset('files/vendor/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('files/vendor/mediaelement/mediaelementplayer.css') }}" rel="stylesheet" type="text/css">
    <!-- Nivo Slider Styles -->
    <link rel="stylesheet" href="{{ asset('files/vendor/nivoslider/themes/default/default.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('files/vendor/nivoslider/nivo-slider.css') }}" type="text/css" media="screen" />

    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="{{ asset('css/ie.css') }}" media="screen" /><![endif]-->
    <link href="{{ asset('files/css/custom.css') }}" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
    <!-- Color Style -->
    <link class="alt" href="{{ asset('files/colors/color1.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('files/style-switcher/css/style-switcher.css') }}" rel="stylesheet" type="text/css">
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">--}}
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <!-- SCRIPTS
      ================================================== -->
    <script src="{{ asset('files/js/modernizr.js') }}"></script><!-- Modernizr -->
    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">--}}

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body class="home">
        <div class="body">
            <!-- Start Site Header -->
            @include('partials._header')
            <!-- End Site Header -->

            <!-- Start Site Body -->
            @yield('content')
            <!-- End Site Body -->

            <!-- Start site footer -->
            @include('partials._footer')
            <!-- End site footer -->


        </div>
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--</li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--<main class="py-4">--}}
            {{--@yield('content')--}}
        {{--</main>--}}
    {{--</div>--}}
<script src="{{ asset('files/js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call -->
<script src="{{ asset('files/vendor/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin -->
<script src="{{ asset('files/js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
<script src="{{ asset('files/js/bootstrap.js') }}"></script> <!-- UI -->
<script src="{{ asset('files/js/init.js') }}"></script> <!-- All Scripts -->
<script src="{{ asset('files/js/home.js') }}"></script> <!-- All Scripts -->
<script src="{{ asset('files/vendor/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->
<script src="{{ asset('files/vendor/countdown/js/jquery.countdown.min.js') }}"></script> <!-- Jquery Timer -->
        <script src="{{ asset('files/vendor/nivoslider/jquery.nivo.slider.js') }}"></script> <!-- NivoSlider -->
<script src="{{ asset('files/vendor/mediaelement/mediaelement-and-player.min.js') }}"></script> <!-- MediaElements -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-SpgMgJfnYGQYrkDIYKMuw0keyeNtqL0"></script>--}}
<script src="{{ asset('files/style-switcher/js/jquery_cookie.js') }}"></script>
<script src="{{ asset('files/style-switcher/js/script.js') }}"></script>

</body>
</html>
