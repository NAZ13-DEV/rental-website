<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gx-lg-5">
                                    <div class="mx-auto col-xl-4 col-md-8">
                                        <div class="product-img-slider sticky-side-div">
                                            <div class="p-2 rounded swiper product-thumbnail-slider bg-light">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset($product->image) }}"
                                                            alt="{{ $product->name }}" class="img-fluid d-block" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="mt-5 mt-xl-0">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h4>{{ $product->name }}</h4>
                                                    <div class="flex-wrap gap-3 hstack">
                                                        <div class="text-muted">Published: <span
                                                                class="text-body fw-medium">{{ $product->created_at->format('d M, Y') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div>
                                                        <a href="{{ route('admin.update', ['product' => $product->id]) }}"
                                                            class="btn btn-light" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit"><i
                                                                class="align-bottom ri-pencil-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="bg-transparent rounded avatar-title text-success fs-24">
                                                                    <i class="ri-money-dollar-circle-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="mb-1 text-muted">Price:</p>
                                                                <h5 class="mb-0">
                                                                    ₦{{ number_format($product->price, 2) }}
                                                                </h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="bg-transparent rounded avatar-title text-success fs-24">
                                                                    <i class="ri-file-copy-2-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="mb-1 text-muted">No. of Orders:</p>
                                                                <h5 class="mb-0">8</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="bg-transparent rounded avatar-title text-success fs-24">
                                                                    <i class="ri-inbox-archive-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="mb-1 text-muted">Total Revenue:</p>
                                                                <h5 class="mb-0">
                                                                    ₦{{ number_format($product->price, 2) }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 text-muted">
                                                <h5 class="fs-14">Description:</h5>
                                                <p>{{ $product->description }}</p>
                                            </div>

                                            <div class="mt-5 product-content">
                                                <h5 class="mb-3 fs-14">Product Description:</h5>
                                                <nav>
                                                    <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="nav-detail-tab"
                                                                data-bs-toggle="tab" href="#nav-detail" role="tab"
                                                                aria-controls="nav-detail"
                                                                aria-selected="true">Details</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <div class="p-4 border tab-content border-top-0" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-detail"
                                                        role="tabpanel" aria-labelledby="nav-detail-tab">
                                                        <div>
                                                            <h5 class="mb-3 font-size-16">{{ $product->name }}</h5>
                                                            <p>{{ $product->description }}</p>
                                                            <div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-ad-layout>
