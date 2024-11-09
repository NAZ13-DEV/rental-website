<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Products</h4>
                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="text-gray-700 no-underline">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="border-0 card-header">
                                <div class="row g-4">
                                    <div class="col-sm-auto">
                                        <a href="{{ route('admin.create') }}" class="btn btn-success" id="addproduct-btn"><i class="align-bottom ri-add-line me-1"></i> Add Product</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all" role="tab">
                                                    All <span class="align-middle badge bg-danger-subtle text-danger rounded-pill ms-1">{{ count($products) }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content text-muted">
                                    <div class="tab-pane active show" id="productnav-all" role="tabpanel">
                                        <!-- Wrapping div with responsive overflow control -->
                                        <div class="overflow-x-auto md:overflow-x-visible table-card gridjs-border-none" id="table-product-list-all">
                                            <table class="table align-middle" id="customerTable">
                                                <thead class="table-light text-muted">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>In-Stock</th>
                                                        <th>Order</th>
                                                        <th>Category</th>
                                                        <th>Published</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="gridjs-tbody">
                                                    @forelse ($products as $product)
                                                        <tr class="gridjs-tr">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3">
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="mb-1 fs-14">
                                                                            <a href="{{ route('admin.viewProduct', $product->id) }}" class="no-underline text-body">{{ $product->name }}</a>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>₦{{ $product->price }}</td>
                                                            <td>{{ $product->stock }}</td>
                                                            <td>Order</td>
                                                            <td>{{ $product->category->name }}</td>
                                                            <td>{{ $product->created_at->format('Y-m-d') }}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="ri-more-fill"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="{{ route('admin.viewProduct', $product->id) }}"><i class="align-bottom ri-eye-fill me-2 text-muted"></i> View</a></li>
                                                                        <li><a class="dropdown-item edit-list" href="{{ route('admin.updateProduct', ['product' => $product->id]) }}"><i class="align-bottom ri-pencil-fill me-2 text-muted"></i> Edit</a></li>
                                                                        <li class="dropdown-divider"></li>
                                                                        <li><a class="dropdown-item remove-list" href="{{ route('admin.deleteProduct', $product->id) }}"><i class="align-bottom ri-delete-bin-fill me-2 text-muted"></i> Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="8" class="text-center">
                                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                <p class="text-muted">No products yet.</p>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                            <div class="mt-4">
                                                {{ $products->links('vendor.pagination.default') }}
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
