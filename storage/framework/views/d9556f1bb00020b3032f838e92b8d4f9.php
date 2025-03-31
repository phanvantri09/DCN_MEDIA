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

    <base href="<?php echo e(URL::asset('/')); ?>" target="_top">

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
    <?php echo $__env->yieldContent('css'); ?>

</head>

<body>

    <div id="page" class="section">
    <?php echo $__env->make('UserSite.Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    

    <!-- slider_area_end -->

    <?php echo $__env->yieldContent('content'); ?>
        <!-- footer start -->
    <?php echo $__env->make('UserSite.Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/ footer end  -->

        <!-- Scroll Top Start -->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!-- Scroll Top End -->

    </div>
    <?php echo $__env->make('UserSite.Layout.menuMobie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- JS
    ============================================ -->
    <?php echo $__env->yieldContent('scripts'); ?>
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
            <?php if(Session::has('message')): ?>
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.success("<?php echo e(session('message')); ?>");
            <?php endif; ?>
            <?php if(Session::has('success')): ?>
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.success("<?php echo e(session('success')); ?>");
            <?php endif; ?>
            <?php if(Session::has('error')): ?>
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.error("<?php echo e(session('error')); ?>");
            <?php endif; ?>

            <?php if(Session::has('info')): ?>
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.info("<?php echo e(session('info')); ?>");
            <?php endif; ?>

            <?php if(Session::has('warning')): ?>
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.warning("<?php echo e(session('warning')); ?>");
            <?php endif; ?>
        });
    </script>


</body>

</html>
<?php /**PATH A:\laragon\www\laravel\resources\views/UserSite/Layout/index.blade.php ENDPATH**/ ?>