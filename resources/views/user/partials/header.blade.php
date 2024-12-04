<header class="header">

    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
        <div class="container flex items-center justify-between px-4">
            <div class="flex items-center header-left">
                <button class="mr-2 mobile-menu-toggler text-primary" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="" class="text-xl font-bold text-blue-600 no-underline transition duration-300 ease-in-out qtc-logo logo fs-4 hover:text-blue-800 hover:underline hover:scale-105">
                    QTC LIMITED
                </a>
            </div><!-- End .header-left -->

            <div class="flex items-center space-x-4 header-right ">
                <div class="items-center pl-4 pr-4 header-contact d-none d-md-flex ">
                    <img alt="phone" src="/template/assets/images/phone.png" width="30" height="30" class="pb-1">
                    <h6><span>Call us now</span><a href="tel:+2348023514545" class="no-underline text-dark font1">+234 802 351 4545 </a></h6>
                </div>

                <a href="{{ route("login")}}" class="no-underline header-icon" title="login"><i class="icon-user-2"></i></a>

                <a href="{{ route("user.dashboard")}}" class="no-underline header-icon" title="Dashboard"><i class="bi bi-speedometer2 me-2"></i></a>

                <a href="" class="no-underline header-icon" title="Cart"> <i class="minicart-icon"></i>
                    <span class="cart-count badge-circle">3</span></a>

            <!-- End .dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
        <div class="container">
            <nav class="main-nav w-100">
                <ul class="flex space-x-6 menu">
                    <li><a href="demo4.html" class="no-underline">Home</a></li>
                    <li><a href="category.html" class="no-underline">Categories</a></li>
                    <li><a href="product.html" class="no-underline">About Us</a></li>
                    <li class="active">
                        <a href="#" class="no-underline">Pages</a>
                        <ul>
                            <li><a href="wishlist.html" class="no-underline">Wishlist</a></li>
                            <li><a href="cart.html" class="no-underline">Shopping Cart</a></li>
                            <li><a href="checkout.html" class="no-underline">Checkout</a></li>
                            <li><a href="dashboard.html" class="no-underline">Dashboard</a></li>
                            <li><a href="about.html" class="no-underline">About Us</a></li>
                            <li><a href="#" class="no-underline">Blog</a>
                                <ul>
                                    <li><a href="blog.html" class="no-underline">Blog</a></li>
                                    <li><a href="single.html" class="no-underline">Blog Post</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html" class="no-underline">Contact Us</a></li>
                            <li><a href="login.html" class="no-underline">Login</a></li>
                            <li><a href="forgot-password.html" class="no-underline">Forgot Password</a></li>
                        </ul>
                    </li>

                    <li><a href="contact.html" class="no-underline">Contact Us</a></li>
                </ul>
            </nav>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header>
