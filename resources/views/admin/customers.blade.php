<x-ad-layout>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Customers</h4>

                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}" class="no-underline">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Customers</li>
                                </ol>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card" id="customerList">
                            <div class="card-header border-bottom-dashed">

                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="mb-0 card-title">Customer List</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="flex-wrap gap-2 d-flex align-items-start">
                                            <button class="btn btn-soft-danger" id="remove-actions" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="align-bottom ri-add-line me-1"></i> Add Customer</button>
                                            <button type="button" class="btn btn-info"><i class="align-bottom ri-file-download-line me-1"></i> Import</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom-dashed border-bottom">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xl-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for customer, email, phone, status or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xl-6">
                                            <div class="row g-3">


                                                <div class="col-sm-4">
                                                    <div>
                                                        <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="align-bottom ri-equalizer-fill me-2"></i>Filters</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="mb-1 table-responsive table-card">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                    </th>

                                                    <th class="sort" data-sort="customer_name">Customer</th>
                                                    <th class="sort asc" data-sort="email">Email</th>
                                                    <th class="sort" data-sort="phone">Phone</th>
                                                    <th class="sort" data-sort="date">Joining Date</th>
                                                    <th class="sort" data-sort="status">Status</th>
                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all"><tr>
                                                    <th scope="row">
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="customer_name">Mary Cousar</td>
                                                    <td class="email">marycousar@velzon.com</td>
                                                    <td class="phone">580-464-4694</td>
                                                    <td class="date">06 Apr, 2021</td>
                                                    <td class="status"><span class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                                    </td>
                                                    <td>
                                                        <ul class="gap-2 mb-0 list-inline hstack">

                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Remove" data-bs-original-title="Remove">
                                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr></tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="mb-0 text-muted">We've searched more than 150+ customer We did not find any customer for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="gap-2 pagination-wrap hstack" style="display: none;">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Previous
                                            </a>
                                            <ul class="mb-0 pagination listjs-pagination"><li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li></ul>
                                            <a class="page-item pagination-next disabled" href="#">
                                                Next
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mt-2 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                    <div class="pt-2 mx-4 mt-4 fs-15 mx-sm-5">
                                                        <h4>Are you sure ?</h4>
                                                        <p class="mx-4 mb-0 text-muted">Are you sure you want to remove this record ?</p>
                                                    </div>
                                                </div>
                                                <div class="gap-2 mt-4 mb-2 d-flex justify-content-center">
                                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn w-sm btn-danger" id="delete-record">Yes, Delete It!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end modal -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-ad-layout>
