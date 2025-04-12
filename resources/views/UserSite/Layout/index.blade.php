<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DCN Media</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="DCN Media, music and photo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assetsUserSite/images/favicon.png">

    <base href="{{ URL::asset('/') }}" target="_top">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assetsUserSite/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assetsUserSite/css/vendor/pe-icon-7-stroke.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assetsUserSite/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assetsUserSite/css/plugins/animate.css">
    <link rel="stylesheet" href="assetsUserSite/css/plugins/aos.min.css">
    <link rel="stylesheet" href="assetsUserSite/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assetsUserSite/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assetsUserSite/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assetsUserSite/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assetsUserSite/css/style.min.css"> -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4920313017945857"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @yield('css')

</head>

<body>

    <div id="page" class="section">
    @include('UserSite.Layout.header')
    <!-- header-end -->

    <!-- slider_area_start -->
    {{-- @php
        use Illuminate\Support\Facades\Route;
    @endphp
    @if (Route::currentRouteName() == 'home')
        @include('layout.banner')
    @endif --}}

    <!-- slider_area_end -->

    @yield('content')
        <!-- footer start -->
    @include('UserSite.Layout.footer')
    <!--/ footer end  -->

        <!-- Scroll Top Start -->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!-- Scroll Top End -->

    </div>
    @include('UserSite.Layout.menuMobie')
    <!-- JS
    ============================================ -->
    @yield('scripts')
    <!-- Vendors JS -->
    <script src="assetsUserSite/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assetsUserSite/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assetsUserSite/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assetsUserSite/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assetsUserSite/js/plugins/aos.min.js"></script>
    <script src="assetsUserSite/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assetsUserSite/js/plugins/jquery.counterup.min.js"></script>
    <script src="assetsUserSite/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assetsUserSite/js/plugins/vivus.min.js"></script>
    <script src="assetsUserSite/js/plugins/svg-inject.min.js"></script>
    <script src="assetsUserSite/js/plugins/swiper.min.js"></script>
    <script src="assetsUserSite/js/plugins/waypoints.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assetsUserSite/js/vendor/vendor.min.js"></script>
    <script src="assetsUserSite/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="assetsUserSite/js/main.js"></script>
    <script>
        $(document).ready(function() {
            @if (Session::has('message'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.success("{{ session('message') }}");
            @endif
            @if (Session::has('success'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.success("{{ session('success') }}");
            @endif
            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.error("{{ session('error') }}");
            @endif

            @if (Session::has('info'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.info("{{ session('info') }}");
            @endif

            @if (Session::has('warning'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.warning("{{ session('warning') }}");
            @endif
        });
    </script>


</body>

</html>
