<header class="header header-transparent">
    <div class=" header-middle sticky-header">
        <div class="container">
            <div class=" header-left">
                <button class="mobile-menu-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>

                <a href="{{ route('home.index') }}" class="py-4 logo">
                    <img src="/default/assets/images/QTC_LOGO_PLAIN.png" alt="QTC Limited Logo" class="img-fluid"
                        style="max-width: 60px;">

                </a>

                <nav class="main-nav font2">
                    <ul class="menu">
                        <li class="active">
                            <a href="{{ route('home.index') }}">Home</a>
                        </li>

                        <li>
                            <a href="">FAQ</a>
                        </li>
                        <li>
                            <a href="">Shop</a>
                        </li>




                        <li class="active">
                            <a href="{{ route('home.aboutUs') }}">About Us</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('home.contactUs') }}">Contact Us</a>
                        </li>



                    </ul>
                </nav>
            </div><!-- End .header-left -->

            <div class="header-right">
                <div class="header-search header-search-popup header-search-category d-none d-sm-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                    <form action="#" method="get">
                        <div class=" header-search-wrapper sectionss" id="searchss">
                            <input type="search" class="form-control" name="" id="q"
                                placeholder="I'm searching for..." required="">
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

                <a href="{{ route('login') }}" class="header-icon header-icon-user" title="Login"><i
                        class="icon-user-2"></i></a>

                <a href="{{ route('user.wishlist') }}" class="header-icon header-icon-wishlist" title="Wishlist"><i
                        class="icon-wishlist-2"></i></a>

                {{-- @php
                        // Fetch the cart from the session
                        $cart = session('cart', []);
                        $cartCount = array_sum(array_column($cart, 'quantity'));
                    @endphp

                        <a class="position-relative dropdown-toggle cart-toggle" href="{{ route('user.cart') }}">
                            <i class="icon-cart-thick"></i>
                            <span class="text-white position-absolute d-flex align-items-center justify-content-center bg-danger rounded-circle"
                                  style="width: 20px; height: 20px; font-size: 0.75rem; top: -10px; right: -10px;">
                               {{$cartCount}}
                            </span>
                        </a> --}}

                @php
                    // Fetch the cart items count for the authenticated user
                    $cartCount = \App\Models\Cart::where('user_id', auth()->id())->sum('quantity');
                @endphp

                <a class="position-relative dropdown-toggle cart-toggle" href="{{ route('user.cart') }}">
                    <i class="icon-cart-thick"></i>
                    <span
                        class="text-white position-absolute d-flex align-items-center justify-content-center bg-danger rounded-circle"
                        style="width: 20px; height: 20px; font-size: 0.75rem; top: -10px; right: -10px;">
                        {{ $cartCount }}
                    </span>
                </a>



            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header>
