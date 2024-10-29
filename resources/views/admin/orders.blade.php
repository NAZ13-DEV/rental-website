<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Orders</h4>

                        <div class="page-title-right">
                            <ol class="m-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route("admin.dashboard")}}" class="no-underline">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="orderList">
                            <div class="border-0 card-header">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <h5 class="mb-0 card-title">Order History</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-dashed card-body border-end-0 border-start-0">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xxl-5 col-sm-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for order ID, customer, order status or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <!--end col-->
                                        <div class="col-xxl-2 col-sm-4">
                                            <div>
                                                <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                                    <option value="">Status</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Delivered">Delivered</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <!--end col-->
                                        <div class="col-xxl-1 col-sm-4">
                                            <div>
                                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="align-bottom ri-equalizer-fill me-1"></i>
                                                    Filters
                                                </button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="pt-0 card-body">
                                <div>
                                    <ul class="mb-3 nav nav-tabs nav-tabs-custom nav-success" role="tablist">
                                        <li class="nav-item">
                                            <a class="py-3 nav-link active All" data-bs-toggle="tab" id="All" href="#home1" role="tab" aria-selected="true">
                                                <i class="align-bottom ri-store-2-fill me-1"></i> All Orders
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="py-3 nav-link Delivered" data-bs-toggle="tab" id="Delivered" href="#delivered" role="tab" aria-selected="false">
                                                <i class="align-bottom ri-checkbox-circle-line me-1"></i> Delivered
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="mb-1 table-responsive table-card">
                                        <table class="table align-middle table-nowrap" id="orderTable">
                                            <thead class="text-muted table-light">
                                                <tr class="text-uppercase">
                                                    <th scope="col" style="width: 25px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                        </div>
                                                    </th>
                                                    <th class="sort" data-sort="id">Order ID</th>
                                                    <th class="sort" data-sort="customer_name">Customer</th>
                                                    <th class="sort" data-sort="product_name">Product</th>
                                                    <th class="sort" data-sort="date">Order Date</th>
                                                    <th class="sort" data-sort="amount">Amount</th>
                                                    <th class="sort" data-sort="status">Delivery Status</th>
                                                    <th class="sort" data-sort="city">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="customer_name">Frank Hook</td>
                                                    <td class="product_name">Puma Tshirt</td>
                                                    <td class="date">20 Dec, 2021, <small class="text-muted">02:21 AM</small></td>
                                                    <td class="amount">$654</td>
                                                    <td class="status"><span class="badge bg-warning-subtle text-warning text-uppercase">Pending</span>
                                                    </td>
                                                    <td>
                                                        <ul class="gap-2 mb-0 list-inline hstack">
                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                <a href="{{ route("admin.showOrder")}}" class="text-primary d-inline-block">
                                                                    <i class="ri-eye-fill fs-16"></i>
                                                                </a>
                                                            </li>

                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <!-- Modal -->
                                <!--end modal -->
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
            </div>
        </div>
    </div>



</x-ad-layout>
