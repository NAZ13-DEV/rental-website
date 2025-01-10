<x-us-layout>
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("home.index")}}" class="no-underline">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                My Account
                            </li>
                        </ol>
                    </div>
                </nav>

                <h1>My Account</h1>
            </div>
        </div>

        <div class="container account-container custom-account-container">
            <div class="row">
                <div class="mb-3 sidebar widget widget-dashboard mb-lg-0 col-lg-3 order-0">
                    <h2 class="text-uppercase">My Account</h2>
                    <ul class="mb-0 nav nav-tabs list flex-column" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="true">Orders</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="download-tab" data-toggle="tab" href="#download" role="tab" aria-controls="download" aria-selected="false">Downloads</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">Addresses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active show" id="edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit" aria-selected="true">Account
                                details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="shop-address-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="edit" aria-selected="false">Shopping Addres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="wishlist.html">Wishlist</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route("logout")}}" method="post">
                                @csrf
                                <button class="nav-link" >Logout</button>
                            </form>

                        </li>
                    </ul>
                </div>
                <div class="order-1 text-2xl col-lg-9 order-lg-last tab-content">
                    <div class="tab-pane fade" id="dashboard" role="tabpanel">
                        <div class="dashboard-content">
                            <p>
                                Hello <strong class="text-dark">Editor</strong> (not
                                <strong class="text-dark">Editor</strong>?
                                <a href="login.html" class="btn btn-link ">Log out</a>)
                            </p>

                            <p>
                                From your account dashboard you can view your
                                <a class="btn btn-link link-to-tab" href="#order">recent orders</a>,
                                manage your
                                <a class="btn btn-link link-to-tab" href="#address">shipping and billing
                                    addresses</a>, and
                                <a class="btn btn-link link-to-tab" href="#edit">edit your password and account
                                    details.</a>
                            </p>

                            <div class="mb-4"></div>

                            <div class="row row-lg">
                                <div class="col-6 col-md-4">
                                    <div class="pb-4 text-center feature-box">
                                        <a href="#order" class="link-to-tab"><i class="bi bi-dropbox"></i></a>
                                        <div class="feature-box-content">
                                            <h3>ORDERS</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="pb-4 text-center feature-box">
                                        <a href="#download" class="link-to-tab"><i class="bi bi-cloud-download"></i></a>
                                        <div class=" feature-box-content">
                                            <h3>DOWNLOADS</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="pb-4 text-center feature-box">
                                        <a href="#address" class="link-to-tab"><i class="bi bi-geo-alt-fill"></i></a>
                                        <div class="feature-box-content">
                                            <h3>ADDRESSES</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="pb-4 text-center feature-box">
                                        <a href="#edit" class="link-to-tab"><i class="icon-user-2"></i></a>
                                        <div class="p-0 feature-box-content">
                                            <h3>ACCOUNT DETAILS</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="pb-4 text-center feature-box">
                                        <a href="wishlist.html"><i class="bi bi-heart"></i></a>
                                        <div class="feature-box-content">
                                            <h3>WISHLIST</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="pb-4 text-center feature-box">
                                        <a href="login.html"><i class="bi bi-box-arrow-left"></i></a>
                                        <div class="feature-box-content">
                                            <h3>LOGOUT</h3>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .row -->
                        </div>
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="order" role="tabpanel">
                        <div class="order-content">
                            <h3 class="account-sub-title d-none d-md-block"><i class="mr-3 align-middle sicon-social-dropbox"></i>Orders</h3>
                            <div class="text-center order-table-container">
                                <table class="table text-left table-order">
                                    <thead>
                                        <tr>
                                            <th class="order-id">ORDER</th>
                                            <th class="order-date">DATE</th>
                                            <th class="order-status">STATUS</th>
                                            <th class="order-price">TOTAL</th>
                                            <th class="order-action">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-0 text-center" colspan="5">
                                                <p class="mt-5 mb-5">
                                                    No Order has been made yet.
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr class="pb-2 mt-0 mb-3">

                                <a href="category.html" class="btn btn-dark">Go Shop</a>
                            </div>
                        </div>
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="download" role="tabpanel">
                        <div class="download-content">
                            <h3 class="account-sub-title d-none d-md-block"><i class="mr-3 align-middle sicon-cloud-download"></i>Downloads</h3>
                            <div class="download-table-container">
                                <p>No downloads available yet.</p> <a href="category.html" class="mb-2 btn btn-primary text-transform-none">GO SHOP</a>
                            </div>
                        </div>
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="address" role="tabpanel">
                        <h3 class="mb-1 account-sub-title d-none d-md-block"><i class="mr-3 align-middle sicon-location-pin"></i>Addresses</h3>
                        <div class="addresses-content">
                            <p class="mb-4">
                                The following addresses will be used on the checkout page by
                                default.
                            </p>

                            <div class="row">
                                <div class="address col-md-6">
                                    <div class="heading d-flex">
                                        <h4 class="mb-0 text-dark">Billing address</h4>
                                    </div>

                                    <div class="address-box">
                                        You have not set up this type of address yet.
                                    </div>

                                    <a href="#billing" class="btn btn-default address-action link-to-tab">Add
                                        Address</a>
                                </div>

                                <div class="mt-5 address col-md-6 mt-md-0">
                                    <div class="heading d-flex">
                                        <h4 class="mb-0 text-dark">
                                            Shipping address
                                        </h4>
                                    </div>

                                    <div class="address-box">
                                        You have not set up this type of address yet.
                                    </div>

                                    <a href="#shipping" class="btn btn-default address-action link-to-tab">Add
                                        Address</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade active show" id="edit" role="tabpanel">
                        <h3 class="pt-1 mt-0 ml-1 account-sub-title d-none d-md-block"><i class="pr-1 mr-3 align-middle icon-user-2"></i>Account Details</h3>
                        <div class="account-content">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="acc-name">First name <span class="required">*</span></label>
                                            <input type="text" class="form-control" placeholder="Editor" id="acc-name" name="acc-name" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="acc-lastname">Last name <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="acc-lastname" name="acc-lastname" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-2 form-group">
                                    <label for="acc-text">Display name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="acc-text" name="acc-text" placeholder="Editor" required="">
                                    <p>This will be how your name will be displayed in the account section and
                                        in
                                        reviews</p>
                                </div>


                                <div class="mb-4 form-group">
                                    <label for="acc-email">Email address <span class="required">*</span></label>
                                    <input type="email" class="form-control" id="acc-email" name="acc-email" placeholder="editor@gmail.com" required="">
                                </div>

                                <div class="change-password">
                                    <h3 class="mb-2 text-uppercase">Password Change</h3>

                                    <div class="form-group">
                                        <label for="acc-password">Current Password (leave blank to leave
                                            unchanged)</label>
                                        <input type="password" class="form-control" id="acc-password" name="acc-password">
                                    </div>

                                    <div class="form-group">
                                        <label for="acc-password">New Password (leave blank to leave
                                            unchanged)</label>
                                        <input type="password" class="form-control" id="acc-new-password" name="acc-new-password">
                                    </div>

                                    <div class="form-group">
                                        <label for="acc-password">Confirm New Password</label>
                                        <input type="password" class="form-control" id="acc-confirm-password" name="acc-confirm-password">
                                    </div>
                                </div>

                                <div class="mt-3 mb-0 form-footer">
                                    <button type="submit" class="mr-0 btn btn-dark">
                                        Save changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="billing" role="tabpanel">
                        <div class="pt-2 mt-0 address account-content">
                            <h4 class="title">Billing address</h4>

                            <form class="mb-2" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name <span class="required">*</span></label>
                                            <input type="text" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name <span class="required">*</span></label>
                                            <input type="text" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Company </label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="select-custom">
                                    <label>Country / Region <span class="required">*</span></label>
                                    <select name="orderby" class="form-control">
                                        <option value="" selected="selected">British Indian Ocean Territory
                                        </option>
                                        <option value="1">Brunei</option>
                                        <option value="2">Bulgaria</option>
                                        <option value="3">Burkina Faso</option>
                                        <option value="4">Burundi</option>
                                        <option value="5">Cameroon</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Street address <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="House number and street name" required="">
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)" required="">
                                </div>

                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" class="form-control" required="">
                                </div>

                                <div class="form-group">
                                    <label>State / Country <span class="required">*</span></label>
                                    <input type="text" class="form-control" required="">
                                </div>

                                <div class="form-group">
                                    <label>Postcode / ZIP <span class="required">*</span></label>
                                    <input type="text" class="form-control" required="">
                                </div>

                                <div class="mb-3 form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="number" class="form-control" required="">
                                </div>

                                <div class="mb-3 form-group">
                                    <label>Email address <span class="required">*</span></label>
                                    <input type="email" class="form-control" placeholder="editor@gmail.com" required="">
                                </div>

                                <div class="mb-0 form-footer">
                                    <div class="form-footer-right">
                                        <button type="submit" class="py-4 btn btn-dark">
                                            Save Address
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="shipping" role="tabpanel">
                        <div class="pt-2 mt-0 address account-content">
                            <h4 class="mb-3 title">Shipping Address</h4>

                            <form class="mb-2" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name <span class="required">*</span></label>
                                            <input type="text" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name <span class="required">*</span></label>
                                            <input type="text" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Company </label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="select-custom">
                                    <label>Country / Region <span class="required">*</span></label>
                                    <select name="orderby" class="form-control">
                                        <option value="" selected="selected">British Indian Ocean Territory
                                        </option>
                                        <option value="1">Brunei</option>
                                        <option value="2">Bulgaria</option>
                                        <option value="3">Burkina Faso</option>
                                        <option value="4">Burundi</option>
                                        <option value="5">Cameroon</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Street address <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="House number and street name" required="">
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)" required="">
                                </div>

                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" class="form-control" required="">
                                </div>

                                <div class="form-group">
                                    <label>State / Country <span class="required">*</span></label>
                                    <input type="text" class="form-control" required="">
                                </div>

                                <div class="form-group">
                                    <label>Postcode / ZIP <span class="required">*</span></label>
                                    <input type="text" class="form-control" required="">
                                </div>

                                <div class="mb-0 form-footer">
                                    <div class="form-footer-right">
                                        <button type="submit" class="py-4 btn btn-dark">
                                            Save Address
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- margin -->
    </main>
</x-us-layout>
