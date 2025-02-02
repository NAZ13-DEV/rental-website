<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>QTC LIMITED</title>

    <meta name="description" content="QTC LIMITED">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/default/assets/images/QTC_LOGO_PLAIN.png">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '/template/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="/template/assets/css/bootstrap.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="/template/assets/css/demo3.min.css">
    <link rel="stylesheet" type="text/css" href="/template/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="/template/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
    @vite(['resources/css/app.css', 'resources/css/bootstrap.min.css', 'resources/js/app.js', 'resources/js/bootstrap.bundle.min.js'])

    <style>
        a {
            text-decoration: none;
        }
    </style>


</head>

<body class="no-underline full-screen-slider">
    <div class="page-wrapper">

        @include('home.partials.header');
        <!-- End .header -->



        {{ $slot }}

        <!-- End .main -->



        @include('home.partials.footer');

    </div><!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li>
                        <a href="">FAQ</a>
                    </li>
                    <li>
                        <a href="{{route("login")}}">Login</a>
                    </li>
                    <li>
                        <a href="{{route("user.wishlist")}}">Wishlist</a>
                    </li>
                    <li><a href="{{route("user.cart")}}">Cart</a></li>

                    <li>
                        <a href="{{route('user.dashboard')}}">My Account</a>
                    </li>
                    <li><a href="{{route("home.contactUs")}}">Contact Us</a></li>
                    <li><a href="{{route("home.aboutUs")}}">About Us</a></li>


                </ul>

            </nav><!-- End .mobile-nav -->

            <form class="mb-2 search-wrapper" action="#">
                <input type="text" class="mb-0 form-control" placeholder="Search..." required />
                <button class="p-0 text-white bg-transparent btn icon-search" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="{{ route('home.index') }}">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{route("user.wishlist")}}" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{route("user.dashboard")}}" class="">
                <i class="bi bi-bag"></i>Shop
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{route("user.dashboard")}}" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{route("user.cart")}}" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>


    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>


    <div class="row mt-3">
        <div class="col-md-10 offset-md-1">
            @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</div>

@yield('scripts')

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/template/assets/js/jquery.min.js"></script>
    <script src="/template/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/template/assets/js/plugins.min.js"></script>
    <script src="/template/assets/js/jquery.appear.min.js"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        @endif
    </script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> --}}
    <!-- Main JS File -->
    <script src="/template/assets/js/main.min.js"></script>
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 12:43:29 GMT -->

</html>
