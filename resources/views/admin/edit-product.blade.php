<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Edit Product</h4>

                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                                            class="no-underline text-tertiary">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Edit Product</li>
                                </ol>
                            </div>

                        </div>
                    </div>

                    <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Product Title</label>
                                            <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                value="add">
                                            <input type="text" class="form-control d-none" id="product-id-input">
                                            <input type="text" class="form-control" id="product-title-input"
                                                value="" placeholder="Enter product title" required="">
                                            <div class="invalid-feedback">Please Enter a product title.</div>
                                        </div>
                                        <div>
                                            <label>Product Description</label>


                                            <div class="ck ck-reset ck-editor ck-rounded-corners" role="application"
                                                dir="ltr" lang="en"
                                                aria-labelledby="ck-editor__label_eb369a3ab109b6bbbdf1333ff6702ae77">
                                                <div class="ck ck-editor__top ck-reset_all" role="presentation">
                                                    <div class="ck ck-sticky-panel">
                                                        <div class="ck ck-sticky-panel__placeholder"
                                                            style="display: none;"></div>

                                                    </div>
                                                </div>
                                                <div class="ck ck-editor__main" role="presentation">
                                                    <div class="ck-blurred ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline"
                                                        lang="en" dir="ltr" role="textbox"
                                                        aria-label="Editor editing area: main"
                                                        {{-- style="height: 200px; --}}
                                                        ">
                                                    <textarea name="" id="" cols="30" rows="10" class="col-lg-12"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Product Gallery</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <h5 class="mb-1 fs-14">Product Image</h5>
                                            <p class="text-muted">Add Product main Image.</p>
                                            <div class="text-center">
                                                <div class="position-relative d-inline-block">
                                                    <div class="position-absolute top-100 start-100 translate-middle">
                                                        <label for="product-image-input" class="mb-0"
                                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                                            aria-label="Select Image"
                                                            data-bs-original-title="Select Image">
                                                            <div class="avatar-xs">
                                                                <div
                                                                    class="border cursor-pointer avatar-title bg-light rounded-circle text-muted">
                                                                    <i class="ri-image-fill"></i>
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <input class="form-control d-none" value=""
                                                            id="product-image-input" type="file"
                                                            accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                    <div class="avatar-lg">
                                                        <div class="rounded avatar-title bg-light">
                                                            <img src="" id="product-img"
                                                                class="h-auto avatar-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1 fs-14">Product Gallery</h5>
                                            <p class="text-muted">Add Product Gallery Images.</p>

                                            <div class="dropzone dz-clickable">

                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                    </div>

                                                    <h5>Drop files here or click to upload.</h5>
                                                </div>
                                            </div>

                                            <ul class="mb-0 list-unstyled" id="dropzone-preview">

                                            </ul>
                                            <!-- end dropzon-preview -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <!-- end card -->
                                <div class="mb-3 text-end">
                                    <button type="submit" class="btn btn-success w-sm">Update</button>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">

                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Publish Schedule</h5>
                                    </div>
                                    <!-- end card body -->
                                    <div class="card-body">
                                        <div>
                                            <label for="datepicker-publish-input" class="form-label">Publish Date
                                                &amp; Time</label>
                                            <input type="text" id="datepicker-publish-input" class="form-control"
                                                placeholder="Enter publish date" data-provider="flatpickr"
                                                data-date-format="d.m.y" data-enable-time="">
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Product Categories</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-2 text-muted"> <a href="#"
                                                class="float-end text-decoration-underline">Add
                                                New</a>Select product category</p>
                                        <select class="form-select" id="choices-category-input"
                                            name="choices-category-input" data-choices=""
                                            data-choices-search-false="">
                                            <option value="Appliances">Appliances</option>
                                            <option value="Automotive Accessories">Automotive Accessories</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Grocery">Grocery</option>
                                            <option value="Kids">Kids</option>
                                            <option value="Watches">Watches</option>
                                        </select>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Product Tags</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="gap-3 hstack align-items-start">
                                            <div class="flex-grow-1">
                                                <input class="form-control" data-choices=""
                                                    data-choices-multiple-remove="true" placeholder="Enter tags"
                                                    type="text" value="Cotton">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Product Short Description</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-2 text-muted">Add short description for product</p>
                                        <textarea class="form-control" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-ad-layout>

