<header class="header">

    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
        <div class="container flex items-center justify-between px-4">
            <div class="flex items-center header-left">
                <button class="mr-2 mobile-menu-toggler text-primary" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{route('home.index')}}" class="py-4 ">
                    <img src="/default/assets/images/QTC_LOGO_PLAIN.png" alt="QTC Limited Logo" class="img-fluid" style="max-width: 60px;">

                </a>
            </div><!-- End .header-left -->

            <div class="flex items-center space-x-4 header-right ">

                <div class="mt-0 text-right header-icon header-search header-search-inline header-search-category w-lg-max" style="">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="#" method="get">
                        <div class=" header-search-wrapper sectionss" id="searchss">
                            <input type="search" class="form-control" name="" id="q"
                                placeholder="I'm searching for..." required="" >
                            <div class="select-custom ">
                                <select id="cat" name="cat">
                                    <option value="">All Categories</option>

                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">
                                            @if ($cat->parent_id)
                                                -
                                            @endif
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <button class="btn text-dark icon-magnifier" type="submit"></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div>


                <div class="items-center pl-4 pr-4 header-contact d-none d-md-flex ">
                    <img alt="phone" src="/template/assets/images/phone.png" width="30" height="30" class="pb-1">
                    <h6><span>Call us now</span><a href="tel:+2348023514545" class="no-underline text-dark font1">+234 802 351 4545 </a></h6>
                </div>

                @if (Auth::check())

                <form class="mt-5" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="mx-2 mt-4" data-key="" type="submit" title="logout" style="font-size: 24px;">
                        <i class="icon-user-2"></i>
                    </button>

                </form>



                @else
                <a href="{{ route("login")}}" class="no-underline header-icon" title="login"><i class="icon-user-2"></i></a>

                @endif


                <a href="{{ route("user.dashboard")}}" class="no-underline header-icon" title="Dashboard"><i class="bi bi-speedometer2 me-2"></i></a>

                <a href="{{ route('user.wishlist') }}" class="header-icon header-icon-wishlist" title="Wishlist"><i
                    class="icon-wishlist-2"></i></a>


                    <a class="position-relative dropdown-toggle cart-toggle" href="{{ route('user.cart') }}">
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
                    <li><a href="" class="no-underline">FAQ</a></li>
                    <li><a href="" class="no-underline">Shop</a></li>

                    <li><a href="{{ route("home.contactUs")}}" class="no-underline">Contact Us</a></li>
                    <li><a href="{{ route("home.aboutUs")}}" class="no-underline">About Us</a></li>

                </ul>
            </nav>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header>
