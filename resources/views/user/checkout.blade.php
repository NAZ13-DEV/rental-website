
<x-us-layout>

    <main class="main main-test">
        <div class="container checkout-container">
            <ul class="flex-wrap checkout-progress-bar d-flex justify-content-center">
                <li class="active">
                    <a href="checkout.html">Checkout</a>
                </li>
            </ul>



            <div class="row">
                <div class="col-lg-7">
                    <ul class="checkout-steps">
                        <li>
                            <h2 class="step-title">shipping details</h2>

                            <form action="#" id="checkout-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name
                                                <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="pb-2 mb-1 form-group">
                                    <label>Street address
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" class="form-control" placeholder="House number and street name" required />
                                </div>




                                <div class="select-custom">
                                    <label>State / County <abbr class="required" title="required">*</abbr></label>
                                    <select name="orderby" class="form-control">
                                        <option value="" selected="selected">NY</option>
                                        <option value="1">Brunei</option>
                                        <option value="2">Bulgaria</option>
                                        <option value="3">Burkina Faso</option>
                                        <option value="4">Burundi</option>
                                        <option value="5">Cameroon</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Postcode / Zip
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label>Delivery Date
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="date" class="form-control" required />
                                </div>

                                <div class="form-group">
                                    <label>Phone <abbr class="required" title="required">*</abbr></label>
                                    <input type="tel" class="form-control" required />
                                </div>

                                <div class="form-group">
                                    <label>Email address
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="email" class="form-control" required />
                                </div>


                                <div class="form-group">
                                    <label class="order-comments">Order notes (optional)</label>
                                    <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- End .col-lg-8 -->

                <div class="col-lg-5">
                    <div class="order-summary">
                        <h3>YOUR ORDER</h3>

                        <table class="table table-mini-cart">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-col">
                                        <h3 class="product-title">
                                            Circled Ultimate 3D Speaker ×
                                            <span class="product-qty">4</span>
                                        </h3>
                                    </td>

                                    <td class="price-col">
                                        <span>$1,040.00</span>
                                    </td>
                                </tr>


                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <td>
                                        <h4>Subtotal</h4>
                                    </td>

                                    <td class="price-col">
                                        <span>$1,458.00</span>
                                    </td>
                                </tr>
                                <tr class="order-shipping">
                                    <td class="text-left" colspan="2">
                                        <h4 class="m-b-sm">Shipping</h4>

                                        <div class="form-group form-group-custom-control">
                                            <div class="custom-control custom-radio d-flex">
                                                <input type="radio" class="custom-control-input" name="radio" checked />
                                                <label class="custom-control-label">Pickup from Store</label>
                                            </div>
                                            <!-- End .custom-checkbox -->
                                        </div>
                                        <!-- End .form-group -->

                                        <div class="mb-0 form-group form-group-custom-control">
                                            <div class="mb-0 custom-control custom-radio d-flex">
                                                <input type="radio" name="radio" class="custom-control-input">
                                                <label class="custom-control-label">Door Delivery</label>
                                            </div>
                                            <!-- End .custom-checkbox -->
                                        </div>
                                        <!-- End .form-group -->
                                    </td>

                                </tr>

                                <tr class="order-total">
                                    <td>
                                        <h4>Total</h4>
                                    </td>
                                    <td>
                                        <b class="total-price"><span>$1,603.80</span></b>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>



                        <button type="submit" class="btn btn-dark btn-place-order btn-lg" form="checkout-form">
                            Place Order
                        </button>
                    </div>
                    <!-- End .cart-summary -->
                </div>
                <!-- End .col-lg-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </main>

</x-us-layout>
