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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                                            class="text-gray-700 no-underline">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- end col -->

                    <div class="col-xl-12 col-lg-12">
                        <div>
                            <div class="card">
                                <div class="border-0 card-header">
                                    <div class="row g-4">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a href="{{ route("admin.create")}}" class="btn btn-success"
                                                    id="addproduct-btn"><i class="align-bottom ri-add-line me-1"></i>
                                                    Add Product</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active fw-semibold" data-bs-toggle="tab"
                                                        href="#productnav-all" role="tab">
                                                        All <span
                                                            class="align-middle badge bg-danger-subtle text-danger rounded-pill ms-1">12</span>
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                        <div class="col-auto">
                                            <div id="selection-element">
                                                <div class="my-n1 d-flex align-items-center text-muted">
                                                    Select <div id="select-content" class="px-1 text-body fw-semibold">
                                                    </div> Result <button type="button"
                                                        class="p-0 btn btn-link link-danger ms-3" data-bs-toggle="modal"
                                                        data-bs-target="#removeItemModal">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card header -->
                                <div class="card-body">

                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active show" id="productnav-all" role="tabpanel">
                                            <dFiv id="table-product-list-all" class="table-card gridjs-border-none">
                                                <div role="complementary" class="gridjs gridjs-container"
                                                    style="width: 100%;">
                                                    <div class="gridjs-wrapper" style="height: auto;">
                                                        <table role="grid" class="gridjs-table"
                                                            style="height: auto;">
                                                            <thead class="gridjs-thead">
                                                                <tr class="gridjs-tr">
                                                                    <th data-column-id="#"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 40px;">
                                                                        <div class="gridjs-th-content">#</div><button
                                                                            tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="product"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 360px;">
                                                                        <div class="gridjs-th-content">Product</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>

                                                                    <th data-column-id="price"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 101px;">
                                                                        <div class="gridjs-th-content">Price</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="orders"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 84px;">
                                                                        <div class="gridjs-th-content">Orders</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="published"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 220px;">
                                                                        <div class="gridjs-th-content">Published</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="action"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 80px;">
                                                                        <div class="gridjs-th-content">Action</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="gridjs-tbody">
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="#" class="gridjs-td"><span>
                                                                            <div
                                                                                class="form-check checkbox-product-list">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="1"
                                                                                    id="checkbox-1"> <label
                                                                                    class="form-check-label"
                                                                                    for="checkbox-1"></label> </div>
                                                                        </span></td>
                                                                    <td data-column-id="product" class="gridjs-td">
                                                                        <span>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <div
                                                                                        class="p-1 rounded avatar-sm bg-light">
                                                                                        <img src="assets/images/products/img-1.png"
                                                                                            alt=""
                                                                                            class="img-fluid d-block">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <h5 class="mb-1 fs-14"><a
                                                                                            href="apps-ecommerce-product-details.html"
                                                                                            class="no-underline text-body">Half
                                                                                            Sleeve Round Neck
                                                                                            T-Shirts</a></h5>

                                                                                </div>
                                                                            </div>
                                                                        </span></td>

                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>$215.00</span></td>
                                                                    <td data-column-id="orders" class="gridjs-td">48
                                                                    </td>

                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span>12 Oct, 2021<small
                                                                                class="text-muted ms-1">10:05
                                                                                AM</small></span></td>
                                                                    <td data-column-id="action" class="gridjs-td">
                                                                        <span>
                                                                            <div class="dropdown"><button
                                                                                    class="btn btn-soft-secondary btn-sm dropdown"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="ri-more-fill"></i></button>
                                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                                    style="">
                                                                                    <li><a class="dropdown-item"
                                                                                            href="{{ route("admin.ViewProduct")}}"><i
                                                                                                class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                                                            View</a></li>
                                                                                    <li><a class="dropdown-item edit-list"
                                                                                            data-edit-id="1"
                                                                                            href="{{ route("admin.edit")}}"><i
                                                                                                class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                                                            Edit</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item remove-list"
                                                                                            href="#"
                                                                                            data-id="1"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#removeItemModal"><i
                                                                                                class="align-bottom ri-delete-bin-fill me-2 text-muted"></i>
                                                                                            Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </dFiv>
                                        </div>
                                        <!-- end tab pane -->

                                        <div class="tab-pane" id="productnav-published" role="tabpanel">
                                            <div id="table-product-list-published"
                                                class="table-card gridjs-border-none">
                                                <div role="complementary" class="gridjs gridjs-container"
                                                    style="width: 100%;">

                                                    <div class="gridjs-footer">
                                                        <div class="gridjs-pagination">
                                                            <div role="status" aria-live="polite"
                                                                class="gridjs-summary" title="Page 1 of 1">Showing
                                                                <b>1</b> to <b>5</b> of <b>5</b> results</div>
                                                            <div class="gridjs-pages"><button tabindex="0"
                                                                    role="button" disabled="" title="Previous"
                                                                    aria-label="Previous"
                                                                    class="">Previous</button><button
                                                                    tabindex="0" role="button"
                                                                    class="gridjs-currentPage" title="Page 1"
                                                                    aria-label="Page 1">1</button><button
                                                                    tabindex="0" role="button" disabled=""
                                                                    title="Next" aria-label="Next"
                                                                    class="">Next</button></div>
                                                        </div>
                                                    </div>
                                                    <div id="gridjs-temp" class="gridjs-temp"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->

                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>



            </div>
        </div>
    </div>


</x-ad-layout>
