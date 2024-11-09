<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg profile-setting-img">
                        <img src="/default/assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card mt-n5">
                            <div class="p-4 card-body">
                                <div class="text-center">
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @elseif(session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    <form action="{{ route('admin.updateProfile') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="mx-auto mb-4 profile-user position-relative d-inline-block">
                                            <img src="{{ $user->image ? $user->image : '/default/assets/images/users/user.png' }}"
                                                class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                                alt="user-profile-image">
                                            <div class="p-0 avatar-xs rounded-circle profile-photo-edit">
                                                <input id="profile-img-file-input" type="file" name="image"
                                                    class="profile-img-file-input">
                                                <label for="profile-img-file-input"
                                                    class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="ri-camera-fill"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="mb-1 fs-16">{{ $user->name }}</h5>
                                        <p class="mb-0 text-muted"> {{ $user->role }} </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-9">
                        <div class="card mt-xxl-n5">
                            <div class="card-header">
                                <ul class="my-12 rounded nav nav-tabs-custom card-header-tabs border-bottom-0"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails"
                                            role="tab">
                                            <i class="fas fa-home"></i> Personal Details
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                            <i class="far fa-user"></i> Change Password
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab">
                                            <i class="far fa-envelope"></i> Delete Account
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="p-4 card-body">
                                <div class="tab-content">
                                    <!-- Personal Details Tab -->
                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="firstnameInput" placeholder="Enter your name"
                                                        value="{{ old('name', $user->name) }}">
                                                    @error('name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Phone
                                                        Number</label>
                                                    <input type="text" class="form-control" name="phonenumber"
                                                        id="phonenumberInput" placeholder="Enter your phone number"
                                                        value="{{ old('phonenumber', $user->phonenumber) }}">
                                                    @error('phonenumber')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="emailInput" placeholder="Enter your email"
                                                        value="{{ old('email', $user->email) }}">
                                                    @error('email')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="gap-2 hstack justify-content-end">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    <button type="reset" class="btn btn-soft-success">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form> <!-- Closing form here after update button -->
                                    </div>

                                    <!-- Change Password Tab -->
                                    <div class="tab-pane" id="changePassword" role="tabpanel">
                                        <form action="{{ route('admin.changePassword') }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="row g-2">
                                                <div class="col-lg-4">
                                                    <label for="oldpasswordInput" class="form-label">Old
                                                        Password</label>
                                                    <input type="password" class="form-control"
                                                        name="current_password" id="oldpasswordInput"
                                                        placeholder="Enter current password">
                                                    @error('current_password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="newpasswordInput" class="form-label">New
                                                        Password</label>
                                                    <input type="password" class="form-control" name="new_password"
                                                        id="newpasswordInput" placeholder="Enter new password">
                                                    @error('new_password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="confirmpasswordInput" class="form-label">Confirm
                                                        Password</label>
                                                    <input type="password" class="form-control"
                                                        name="new_password_confirmation" id="confirmpasswordInput"
                                                        placeholder="Confirm password">
                                                    @error('new_password_confirmation')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success">Change
                                                            Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <!-- Delete Account Tab -->
                                    <!-- Delete Account Section -->
                                    <div class="tab-pane" id="privacy" role="tabpanel">
                                        <div>
                                            <h5 class="mb-3 card-title">Delete This Account:</h5>
                                            <p class="text-muted">To delete your account, enter your password below and
                                                confirm.</p>
                                            <form id="deleteAccountForm" action="{{ route('admin.deleteAccount') }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div>
                                                    <input type="password" class="form-control" name="password"
                                                        id="passwordInput" placeholder="Enter your password"
                                                        style="max-width: 265px;" required>
                                                    @error('password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="gap-2 mt-3 hstack">
                                                    <button type="button" id="openModalButton"
                                                        class="px-4 py-2 font-bold text-white no-underline bg-red-500 rounded hover:bg-red-700">
                                                        Close & Delete This Account
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Modal for Confirming Deletion -->
                                    <div id="deleteModal"
                                        class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
                                        <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-lg">
                                            <h3 class="text-lg font-semibold">Are you sure?</h3>
                                            <p class="mt-2 text-sm text-gray-600">Once you delete your account, it
                                                cannot be undone. Please confirm.</p>
                                            <div class="flex justify-end gap-4 mt-4">
                                                <button type="button" id="cancelButton"
                                                    class="px-4 py-2 text-gray-800 bg-gray-300 rounded hover:bg-gray-400">Cancel</button>
                                                <button type="submit" form="deleteAccountForm"
                                                    id="confirmDeleteButton"
                                                    class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">Yes,
                                                    Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- JavaScript to Handle Modal Logic -->
                                    <script>
                                        // Get modal, open button, and cancel button
                                        const modal = document.getElementById('deleteModal');
                                        const openModalButton = document.getElementById('openModalButton');
                                        const cancelButton = document.getElementById('cancelButton');

                                        // Open the modal when the delete button is clicked
                                        openModalButton.addEventListener('click', () => {
                                            modal.classList.remove('hidden');
                                        });

                                        // Close the modal when the cancel button is clicked
                                        cancelButton.addEventListener('click', () => {
                                            modal.classList.add('hidden');
                                        });
                                    </script>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-ad-layout>
