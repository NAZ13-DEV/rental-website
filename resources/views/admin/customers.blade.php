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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                                            class="no-underline">Dashboard</a></li>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom-dashed border-bottom">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xl-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search"
                                                    placeholder="Search for customer, email, phone, status or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xl-6">
                                            <div class="row g-3">


                                                <div class="col-sm-4">
                                                    <div>
                                                        <button type="button" class="btn btn-primary w-100"
                                                            onclick="SearchData();"> <i
                                                                class="align-bottom ri-equalizer-fill me-2"></i>Filters</button>
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
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col" style="width: 50px;"></th>
                                                    <th class="sort" data-sort="customer_name">Customer</th>
                                                    <th class="sort asc" data-sort="email">Email</th>
                                                    <th class="sort" data-sort="phone">Phone</th>
                                                    <th class="sort" data-sort="date">Joining Date</th>
                                                    <th class="sort" data-sort="status">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @forelse ($users as $user)
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td class="customer_name">{{ $user->name }}</td>
                                                        <td class="email">{{ $user->email }}</td>
                                                        <td class="phone">{{ $user->phonenumber }}</td>
                                                        <td class="date">{{ $user->created_at->format('Y-m-d') }}</td>
                                                        <td class="status">
                                                            <span class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="7" class="text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted">No Users yet.</p>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        <div class="mt-4">
                                            {{ $users->links('vendor.pagination.default') }}
                                        </div>
                                    </div>



                                    <!-- Modal -->
                                    <!--end modal -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-ad-layout>
