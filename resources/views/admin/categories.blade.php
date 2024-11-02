<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Categories</h4>

                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Categories</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="customerList">
                            <div class="card-header border-bottom-dashed">

                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="mb-0 card-title">Categories List</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div>
                                    <div class="mb-1 table-responsive table-card">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th class="sort" data-sort="customer_name">Name</th>
                                                    <th class="sort" data-sort="date">Date Created</th>
                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td class="id" style="display:none;"><a
                                                                href="javascript:void(0);"
                                                                class="fw-medium link-primary">#{{ $category->id }}</a>
                                                        </td>
                                                        <td class="customer_name">{{ $category->name }}</td>
                                                        <td class="date">{{ $category->created_at }}</td>
                                                        <td>
                                                            <ul class="gap-2 mb-0 list-inline hstack">

                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a class="text-white text-danger d-inline-block remove-item-btn btn btn-danger"
                                                                        onclick='return confirm("Are you sure you want to delete this category?")'
                                                                        href="{{ route('admin.deleteCategory', $category->id) }}">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif

                                            @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif

                                        </table>
                                        @if (count($categories) === 0)
                                            <div class="noresult">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                        trigger="loop" colors="primary:#405189,secondary:#0ab39c"
                                                        style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted">No category yet.</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function confirmation(e) {
            var urlToredirect = e.currentTarget.getAttribute('href');
            swal({
                    title: "Are you sure to remove this category",
                    text: "You will not be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willcancel) => {
                    if (willcancel) {
                        window.location.href = urlToredirect;
                    }
                });
        }
    </script>
</x-ad-layout>
