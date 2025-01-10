<header class="header">

    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
        <div class="container flex items-center justify-between px-4">
            <div class="flex items-center header-left">
                <button class="mr-2 mobile-menu-toggler text-primary" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{ route("home.index")}}"  class="text-xl font-bold text-blue-600 no-underline transition duration-300 ease-in-out qtc-logo logo fs-4 hover:text-blue-800 hover:underline hover:scale-105">
                    QTC LIMITED
                </a>
            </div><!-- End .header-left -->

            <div class="flex items-center space-x-4 header-right ">
                <div class="items-center pl-4 pr-4 header-contact d-none d-md-flex ">
                    <img alt="phone" src="/template/assets/images/phone.png" width="30" height="30" class="pb-1">
                    <h6><span>Call us now</span><a href="tel:+2348023514545" class="no-underline text-dark font1">+234 802 351 4545 </a></h6>
                </div>

                @if (Auth::check())

                <form class="mt-5" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="mx-2 mt-4" data-key="" type="submit" style="font-size: 24px;">
                        <i class="icon-user-2"></i>
                    </button>

                </form>



                @else
                <a href="{{ route("login")}}" class="no-underline header-icon" title="login"><i class="icon-user-2"></i></a>

                @endif


                <a href="{{ route("user.dashboard")}}" class="no-underline header-icon" title="Dashboard"><i class="bi bi-speedometer2 me-2"></i></a>

                <
                <a class="position-relative dropdown-toggle cart-toggle">
                    <i class="icon-cart-thick"></i>
                    <span class="text-white position-absolute d-flex align-items-center justify-content-center bg-danger rounded-circle"
                          style="width: 20px; height: 20px; font-size: 0.75rem; top: -10px; right: -10px;">
                        3
                    </span>
                </a>

            <!-- End .dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
        <div class="container">
            <nav class="mx-auto main-nav w-50">
                <ul class="flex justify-between space-x-6 menu">
                    <li><a href="{{ route("home.index")}}" class="no-underline">Home</a></li>
                    <li><a href="" class="no-underline">Categories</a></li>
                    <li><a href="" class="no-underline">FAQ</a></li>
                    <li><a href="" class="no-underline">Shop</a></li>

                    <li><a href="{{ route("home.contactUs")}}" class="no-underline">Contact Us</a></li>
                    <li><a href="{{ route("home.aboutUs")}}" class="no-underline">About Us</a></li>

                </ul>
            </nav>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header>
