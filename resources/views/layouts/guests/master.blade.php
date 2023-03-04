<!DOCTYPE html>
<!-- Template Name: Clip-One - Frontend | Build with Twitter Bootstrap 3 | Version: 1.0 | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->

<head>
    <title>Clip-One - Front End</title>
    <!-- start: META -->
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link href="{{ asset('assets/frontend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main-responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme_blue.css')}}" type="text/css" id="skin_color">
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/revolution_slider/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/flex-slider/flexslider.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/colorbox/example2/colorbox.css')}}">
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: HTML5SHIV FOR IE8 -->
    <!--[if lt IE 9]>
		<script src="{{ asset('assets/frontend/plugins/html5shiv.js')}}"></script>
		<![endif]-->
    <!-- end: HTML5SHIV FOR IE8 -->
</head>
<!-- end: HEAD -->

<body>

    <!-- start: HEADER -->
    @include('layouts.guests.partials.header')
    <!-- end: HEADER -->

    <!-- start: MAIN CONTAINER -->
    @yield('content')
    <!-- end: MAIN CONTAINER -->

    <!-- start: FOOTER -->
    @include('layouts.guests.partials.footer')
    <!-- end: FOOTER -->
    <a id="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js')}}"></script>
    <!--<![endif]-->
    <script src="{{ asset('assets/frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/plugins/jquery.transit/jquery.transit.js')}}"></script>
    <script src="{{ asset('assets/frontend/plugins/hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/plugins/jquery.appear/jquery.appear.js')}}"></script>
    <script src="{{ asset('assets/frontend/plugins/blockUI/jquery.blockUI.js')}}"></script>
    <script src="{{ asset('assets/frontend/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/main.js')}}"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="{{ asset('assets/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js')}}">
    </script>
    <script
        src="{{ asset('assets/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}">
    </script>
    <script src="{{ asset('assets/frontend/plugins/flex-slider/jquery.flexslider.js')}}"></script>
    <script src="{{ asset('assets/frontend/plugins/stellar.js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/index.js')}}"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function () {
            Main.init();
            Index.init();
            $.stellar();
        });

    </script>
</body>

</html>
