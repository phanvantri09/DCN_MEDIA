<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gymate - Gym Fitness Bootstrap 5 Template</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Try out Gymate Gym Fitness Bootstrap 5 Template today because this awesome fitness related website template comes completely free of any cost.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assetsUsersite/images/logo/logo.jpg')}}">
    <base href="{{ URL::asset('/') }}" target="_top">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('assetsUserSite/css/vendor/font-awesome-pro.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsUserSite/css/vendor/pe-icon-7-stroke.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('assetsUserSite/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsUserSite/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsUserSite/css/plugins/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsUserSite/css/plugins/magnific-popup.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assetsUserSite/css/style.css') }}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assetsUserSite/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assetsUserSite/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assetsUserSite/css/style.min.css"> -->

</head>

<body>
    <div id="page" class="section">
        <!-- Header Section Start -->
        @include('front.layout.header')
        <!-- Header Section End -->

        @yield('content')

        @include('front.layout.footer')

        <!-- Scroll Top Start -->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!-- Scroll Top End -->

    </div>
    @include('front.layout.menuMobile')
    <!-- JS
    ============================================ -->

    <!-- Vendors JS -->
    @yield('scripts')
    <script src="{{ asset('assetsUserSite/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assetsUserSite/js/plugins/aos.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/plugins/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/plugins/vivus.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/plugins/svg-inject.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('assetsUserSite/js/plugins/waypoints.min.js') }}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assetsUserSite/js/vendor/vendor.min.js"></script>
    <script src="assetsUserSite/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="{{ asset('assetsUserSite/js/main.js') }}"></script>



</body>

</html>
