<x-us-layout>
    <main class="main">
        <div class="container">
            <ul class="flex-wrap checkout-progress-bar d-flex justify-content-center">
                <li class="active">
                    <a href="{{ route('user.cart') }}">Shopping Cart</a>
                </li>
            </ul>

            @php
            $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity * $item->rental_days);
            @endphp


@if ($cartItems->isEmpty())
            <div>
                <p class="mb-32 text-3xl text-center">Your Cart is empty.</p>
            </div>
                @else

            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table-container">
                        <table class="table table-cart">
                            <thead>
                                <tr>
                                    <th class="thumbnail-col"></th>
                                    <th class="product-col">Product</th>
                                    <th class="price-col">Price</th>
                                    <th class="qty-col">Quantity</th>
                                    <th class="qty-col">Rental Days</th>
                                    <th class="text-right">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                <tr class="product-row" data-id="{{ $item->product->id }}">
                                    <td>
                                        <figure class="product-image-container">
                                            <a href="" class="product-image">
                                                <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}">
                                            </a>
                                            <button type="submit" class="btn-remove icon-cancel remove-from-cart" title="Remove Product"></button>
                                        </figure>
                                    </td>
                                    <td class="product-col">
                                        <h5 class="product-title">
                                            <a href="">{{ $item->product->name }}</a>
                                        </h5>
                                    </td>
                                    <td>₦{{ number_format($item->product->price, 2) }}</td>


                                    <td>
                                        <div class="product-single-qty">
                                            <input class="horizontal-quantity form-control quantity update-cart" type="text" value="{{ $item->quantity }}">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-single-qty">
                                            <input class="horizontal-quantity form-control rental update-cart" type="number" value="{{ $item->rental_days }}">
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <span class="subtotal-price">₦ {{ $item->product->price * $item->quantity * $item->rental_days }}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h3>CART TOTALS</h3>
                        <table class="table table-totals">
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td id="cart-subtotal">₦{{ $total }}</td>
                                </tr>


                                <tr>
                                    <td colspan="2" class="text-left">
                                        <h4>Shipping</h4>




                                        <form action="" >

                                            <div class="form-group form-group-sm">
                                                <div class="select-custom">
                                                    <select class="form-control form-control-sm" name="location_id" required>
                                                        <option value="">Select a location</option>
                                                        @foreach ($location as $loc)
                                                            <option value="{{ $loc->id }}">
                                                                {{ $loc->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div><!-- End .select-custom -->
                                            </div><!-- End .form-group -->

                                        </form>

                                    </td>
                                </tr>

                            </tbody>




                            <tfoot>
                                <tr>
                                    <td>Total</td>
                                    <td id="cart-total">₦{{ $total + $loc->price }}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="checkout-methods">
                            <a href="" class="btn btn-block btn-dark">Proceed to Checkout
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="mb-6"></div>
    </main>

    @section('scripts')
    <script type="text/javascript">
        $(document).on("change", ".update-cart", function (e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ route('user.updateCart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val(),
                    rental_days: ele.parents("tr").find(".rental").val()
                },
                success: function () {
                    window.location.reload();
                }
            });
        });
        $(document).on("click", ".remove-from-cart", function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure you want to remove this item?")) {
                $.ajax({
                    url: '{{ route('user.cartDelete') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function () {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</x-us-layout>
