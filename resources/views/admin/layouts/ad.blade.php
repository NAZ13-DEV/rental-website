<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/default/assets/images/favicon.ico">

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

    <div class="customizer-setting d-none d-md-block">
        <div class="p-2 shadow-lg btn-info rounded-pill btn btn-icon btn-lg" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="border-0 offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="p-3 d-flex align-items-center bg-primary bg-gradient offcanvas-header">
            <h5 class="m-0 text-white me-2">Theme Customizer</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="p-0 offcanvas-body">
            <div data-simplebar class="h-100">
                <div class="p-4">
                    <h6 class="mb-0 fw-semibold text-uppercase">Layout</h6>
                    <p class="text-muted">Choose your layout</p>

                    <div class="row gy-3">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout01">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout02">
                                    <span class="gap-1 d-flex h-100 flex-column">
                                        <span class="gap-1 p-1 bg-light d-flex align-items-center">
                                            <span class="p-1 rounded d-block bg-primary-subtle me-1"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle ms-auto"></span>
                                            <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                        </span>
                                        <span class="p-1 bg-light d-block"></span>
                                        <span class="p-1 mt-auto bg-light d-block"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout03">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 mb-2 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Two Column</h5>
                        </div>
                        <!-- end col -->

                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout04" name="data-layout" type="radio" value="semibox" class="form-check-input">
                                <label class="p-0 form-check-label avatar-md w-100" for="customizer-layout04">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0 p-1">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="pt-1 d-flex h-100 flex-column pe-2">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Semi Box</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color Scheme</h6>
                    <p class="text-muted">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                    <label class="p-0 form-check-label avatar-md w-100" for="layout-mode-light">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio dark">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                    <label class="p-0 form-check-label avatar-md w-100 bg-dark" for="layout-mode-dark">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-white bg-opacity-10 d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 bg-white rounded d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-white bg-opacity-10 d-block"></span>
                                                    <span class="p-1 mt-auto bg-white bg-opacity-10 d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-visibility">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Visibility</h6>
                        <p class="text-muted">Choose show or Hidden sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-show" value="show">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-visibility-show">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0 p-1">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="pt-1 d-flex h-100 flex-column pe-2">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Show</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-hidden" value="hidden">
                                    <label class="p-0 px-2 form-check-label avatar-md w-100" for="sidebar-visibility-hidden">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-grow-1">
                                                <span class="px-2 pt-1 d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Hidden</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Width</h6>
                        <p class="text-muted">Choose Fluid or Boxed layout.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                    <label class="p-0 form-check-label avatar-md w-100" for="layout-width-fluid">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                    <label class="p-0 px-2 form-check-label avatar-md w-100" for="layout-width-boxed">
                                        <span class="gap-1 d-flex h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Position</h6>
                        <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Topbar Color</h6>
                    <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                <label class="p-0 form-check-label avatar-md w-100" for="topbar-color-light">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                <label class="p-0 form-check-label avatar-md w-100" for="topbar-color-dark">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-primary d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="mt-2 text-center fs-13">Dark</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Size</h6>
                        <p class="text-muted">Choose a size of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-default">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-compact">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-small">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 mb-2 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Small (Icon View)</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-size-small-hover">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 mb-2 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar View</h6>
                        <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-view-default">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-view-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="gap-1 p-1 px-2 bg-light d-flex align-items-center">
                                                <span class="p-1 rounded d-block bg-primary-subtle me-1"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle ms-auto"></span>
                                                <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                            </span>
                                            <span class="gap-1 p-1 px-2 d-flex h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                        <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                        <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                        <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="p-1 px-2 mt-auto bg-light d-block"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Color</h6>
                        <p class="text-muted">Choose a color of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-color-light">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-white border-end d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                    <label class="p-0 form-check-label avatar-md w-100" for="sidebar-color-dark">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-primary d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 bg-white rounded d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                    <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Dark</h5>
                            </div>
                            <div class="col-4">
                                <button class="p-0 overflow-hidden border btn btn-link avatar-md w-100 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="gap-1 d-flex h-100">
                                        <span class="flex-shrink-0">
                                            <span class="gap-1 p-1 bg-vertical-gradient d-flex h-100 flex-column">
                                                <span class="p-1 px-2 mb-2 bg-white rounded d-block bg-opacity-10"></span>
                                                <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                                <span class="p-1 px-2 pb-0 bg-white d-block bg-opacity-10"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="p-1 bg-light d-block"></span>
                                                <span class="p-1 mt-auto bg-light d-block"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="mt-2 text-center fs-13">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="flex-wrap gap-2 p-2 px-3 rounded d-flex img-switch bg-light">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                    <label class="p-0 form-check-label avatar-xs rounded-circle" for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="p-0 form-check-label avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="p-0 form-check-label avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="p-0 form-check-label avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Images</h6>
                        <p class="text-muted">Choose a image of Sidebar.</p>

                        <div class="flex-wrap gap-2 d-flex img-switch">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-none">
                                    <span class="w-auto avatar-md bg-light d-flex align-items-center justify-content-center">
                                        <i class="ri-close-fill fs-20"></i>
                                    </span>
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-01">
                                    <img src="/default/assets/images/sidebar/img-1.jpg" alt="" class="w-auto avatar-md object-fit-cover">
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-02">
                                    <img src="/default/assets/images/sidebar/img-2.jpg" alt="" class="w-auto avatar-md object-fit-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-03">
                                    <img src="/default/assets/images/sidebar/img-3.jpg" alt="" class="w-auto avatar-md object-fit-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                <label class="h-auto p-0 form-check-label avatar-sm" for="sidebarimg-04">
                                    <img src="/default/assets/images/sidebar/img-4.jpg" alt="" class="w-auto avatar-md object-fit-cover">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="preloader-menu">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Preloader</h6>
                        <p class="text-muted">Choose a preloader.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                    <label class="p-0 form-check-label avatar-md w-100" for="preloader-view-custom">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <!-- <div id="preloader"> -->
                                        <div id="status" class="d-flex align-items-center justify-content-center">
                                            <div class="m-auto spinner-border text-primary avatar-xxs" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Enable</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                    <label class="p-0 form-check-label avatar-md w-100" for="preloader-view-none">
                                        <span class="gap-1 d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="gap-1 p-1 bg-light d-flex h-100 flex-column">
                                                    <span class="p-1 px-2 mb-2 rounded d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                    <span class="p-1 px-2 pb-0 d-block bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="p-1 bg-light d-block"></span>
                                                    <span class="p-1 mt-auto bg-light d-block"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="mt-2 text-center fs-13">Disable</h5>
                            </div>
                        </div>

                    </div>
                    <!-- end preloader-menu -->

                </div>
            </div>

        </div>
        <div class="p-3 text-center offcanvas-footer border-top">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

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
