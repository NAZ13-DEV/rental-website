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

                    <!-- Display Success and Error Messages -->
                    <div class="col-lg-12">
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
                    </div>

                    <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate="" method="POST" action="{{ route('admin.update',$product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Product Title</label>
                                            <input type="text" class="form-control" name="name" id="product-title-input" value="{{ $product->name }}" placeholder="Enter product title" required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label>Product Description</label>
                                            <textarea name="description" class="form-control" rows="5" placeholder="Enter product description" required>{{ $product->description }}</textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

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
                                                    <label for="product-image-input" class="mb-0">
                                                        <div class="avatar-xs">
                                                            <div class="border cursor-pointer avatar-title bg-light rounded-circle text-muted">
                                                                <i class="ri-image-fill"></i>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <input class="form-control d-none" name="image" id="product-image-input" type="file" value="" accept="image/png, image/gif, image/jpeg" required>
                                                    <div class="mt-3 w-100">
                                                        <img src="{{ $product->image }}" id="product-img" class="h-auto rounded avatar-md" alt="Product Image Preview">
                                                    </div>
                                                </div>
                                            </div>
                                            @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 text-end">
                                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Product Stock</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="product-stock-input" class="form-label">Product Total Stock</label>
                                            <input type="number" name="stock" id="product-stock-input" class="form-control" value="{{ $product->stock }}" placeholder="Enter Stock Unit" min="0" required>
                                            @error('stock')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Product Categories</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-2 text-muted">
                                            <a href="{{ route('admin.addCategory') }}" class="no-underline float-end">Add New</a>
                                            Select product category
                                        </p>
                                        <select name="category_id" id="category" class="form-control" required >
                                            <option value="">Select a Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ (old('category_id') ?? $product->category_id) == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>



                                        @error('category')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Product Tags</h5>
                                    </div>
                                    <div class="card-body">
                                        <input class="form-control" name="tags" placeholder="Enter tags" type="text" value="{{ $product->tags }}" required>
                                        @error('tags')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 card-title">Product Price</h5>
                                    </div>
                                    <div class="card-body">
                                        <input class="form-control" name="price" placeholder="Price of product" type="number" step="0.01" min="0" value="{{ $product->price }}" required>
                                        @error('price')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Preview Script -->
    <script>
        document.getElementById("product-image-input").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                document.getElementById("product-img").src = URL.createObjectURL(file);
            }
        });
    </script>
</x-ad-layout>
