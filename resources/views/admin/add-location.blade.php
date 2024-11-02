<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Add Category</h4>
                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route("admin.dashboard")}} " class="no-underline">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Create Location</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <form method="POST" action="{{ route('admin.store.location') }}" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="product-title-input">Location Name</label>
                                        {{-- <input type="hidden" class="form-control" id="formAction" name="formAction" value="add"> --}}
                                        <input type="text" class="form-control" id="product-title-input" name="name" placeholder="Enter Location name" required>
                                        <label class="form-label" for="product-title-input">Location price</label>
                                        <input type="text" class="form-control" id="product-title-input" name="price" placeholder="Enter Location price" required>
                                        @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-success w-sm">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</x-ad-layout>
