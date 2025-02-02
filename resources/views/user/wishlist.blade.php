<x-us-layout>
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                        </ol>
                    </div>
                </nav>

                <h1>Wishlist</h1>
            </div>
        </div>

        <div class="container">
            <div class="wishlist-title">
                <h2 class="p-2 mb-16">My wishlist on QTC Events</h2>
            </div>


            @if ($wishlistItems->isEmpty())
            <div>
                <p class="mb-32 text-3xl text-center">Your wishlist is empty.</p>
            </div>
                @else



                <div class="wishlist-table-container">
                    <table class="table mb-0 table-wishlist">
                        <thead>
                            <tr>
                                <th class="thumbnail-col"></th>
                                <th class="product-col">Product</th>
                                <th class="price-col">Price</th>
                                <th class="status-col">Stock Status</th>
                                <th class="action-col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>




                            @foreach ($wishlistItems as $item)
                                <tr class="product-row">
                                    <td>
                                        <figure class="product-image-container">
                                            <a  class="product-image">
                                                <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}">
                                            </a>
                                            <form action="{{ route('user.wishlistRemove', $item->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-remove icon-cancel" title="Remove Product"></button>
                                            </form>
                                        </figure>
                                    </td>
                                    <td>
                                        <h5 class="product-title">
                                            <a href="">{{ $item->product->name }}</a>
                                        </h5>
                                    </td>
                                    <td class="price-box">{{ $item->product->price }}</td>
                                    <td>
                                        <span class="stock-status">In stock</span>
                                    </td>
                                    <td class="action">
                                        <a href="" class="mt-1 btn btn-quickview mt-md-0" title="Quick View">Quick View</a>
                                        <a class="btn btn-dark btn-add-cart product-type-simple btn-shop" href="{{ route('user.cartAdd', $item->product->id) }}">
                                            ADD TO CART
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- End .wishlist-table-container -->
            @endif
        </div><!-- End .container -->
    </main>
</x-us-layout>
