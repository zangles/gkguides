<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icon -->
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" />
    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Youplay -->
    <link rel="stylesheet" type="text/css" href="{{ asset('youplay/css/youplay.min.css') }}" />
    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />
    <!-- <link rel="stylesheet" type="text/css" href="../assets/youplay/css/youplay-rtl.css" /> -->
</head>


<body>

<!-- Preloader -->
<div class="page-preloader preloader-wrapp">
    <img src="{{ asset('images/Logo1.png') }}" alt="">
    <div class="preloader"></div>
</div>
<!-- /Preloader -->

@include('navbar.index')

<!-- Main Content -->
    @yield('content')
<!-- /Main Content -->


<!-- jQuery -->
<script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Hexagon Progress -->
<script type="text/javascript" src="{{ asset('bower_components/HexagonProgress/jquery.hexagonprogress.min.js') }}"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Smooth Scroll -->
<script type="text/javascript" src="{{ asset('bower_components/smoothscroll-for-websites/SmoothScroll.js') }}"></script>
<!-- Youplay -->
<script type="text/javascript" src="{{ asset('youplay/js/youplay.min.js') }}"></script>

<!-- init youplay -->
<script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            // enable parallax
            parallax:         true,

            // set small navbar on load
            navbarSmall:      false,

            // enable fade effect between pages
            fadeBetweenPages: true,

            // twitter and instagram php paths
            php: {
                twitter: './php/twitter/tweet.php',
                instagram: './php/instagram/instagram.php'
            }
        });
    }
</script>
</body>
</html>
