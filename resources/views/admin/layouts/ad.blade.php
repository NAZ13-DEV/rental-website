<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>QTC LIMITED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="/default/assets/images/favicon.ico"> --}}
    <link rel="shortcut icon" href="/default/assets/images/QTC_LOGO_PLAIN.png">

    <!-- jsvectormap css -->
    <link href="/default/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="/default/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="/default/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/default/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/default/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/default/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="/default/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">



    @vite(['resources/css/app.css','resources/css/bootstrap.min.css', 'resources/js/app.js', 'resources/js/bootstrap.bundle.min.js'])
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.partials.header')



        <!-- ========== App Menu ========== -->
      @include('admin.partials.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        {{ $slot }}

        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <!-- Theme Settings -->

    <!-- JAVASCRIPT -->
    <script src="/default/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/default/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/default/assets/libs/node-waves/waves.min.js"></script>
    <script src="/default/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/default/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/default/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="/default/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="/default/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="/default/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="/default/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="/default/assets/js/pages/dashboard-ecommerce.init.js"></script>


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


    <!-- App js -->
    <script src="/default/assets/js/app.js"></script>
</body>

</html>
