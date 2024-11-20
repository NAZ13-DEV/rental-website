<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/forgot-password', [UserController::class, 'forgotPassword'])->name('user.forgot-password');
Route::get('/user/login', [UserController::class, 'login'])->name('user.login');


Route::get('/admin/registersss', action: [AdminController::class, 'showAdminRegistrationForm'])->name('admin.register');
Route::post('/admin/registersss', [AdminController::class, 'adminRegister'])->name('admin.registersss');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', action: [AdminController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdminController::class, 'deleteAccount'])->name('profile.delete');
});


Route::middleware(['auth'])->group(function () {
    // Profile Update Route
    Route::patch('/profile', [AdminController::class, 'profileUpdate'])->name(name: 'admin.updateProfile');

    // Change Password Route
    Route::patch('/profile/change-password', [AdminController::class, 'changePassword'])->name(name: 'admin.changePassword');

    // Delete Account Route
    Route::delete('/profile/delete-account', [AdminController::class, 'deleteAccount'])->name(name:'admin.deleteAccount');
});


Route::middleware(['auth','role:admin'])->group( function(){
    Route::get("/admin/dashboard", [AdminController::class, 'index'])->name(name: 'admin.dashboard');
    Route::get("/admin/profile", [AdminController::class, 'profile'])->name(name: 'admin.profile');
    Route::get("/admin/products", action: [ProductController::class, 'products'])->name('admin.products');
    Route::get("/admin/create-product", [ProductController::class, 'create'])->name('admin.create');
    Route::get("/admin/orders", [AdminController::class, 'orders'])->name(name: 'admin.orders');
    Route::get("/admin/order-details", [AdminController::class, 'ShowOrder'])->name(name: 'admin.showOrder');
    Route::get("/admin/customers", [AdminController::class, 'customers'])->name(name: 'admin.customers');
    Route::get('/admin/{product}/edit-product', [ProductController::class, 'edit'])->name('admin.edit');
    Route::get('/admin/categories', [AdminController::class, 'showCategories'])->name('admin.categories');
    Route::get('/admin/view-product/{product}', [ProductController::class, 'ShowProduct'])->name('admin.viewProduct');
    Route::get('/admin/add-category', [AdminController::class, 'showAddCategory'])->name('admin.addCategory');
    Route::post('/admin/createcategory', [AdminController::class, 'storeCategory'])->name('admin.store.category');
    Route::get('/admin/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::get('/admin/locations', [AdminController::class, 'showLocations'])->name('admin.locations');
    Route::get('/admin/add-location', [AdminController::class, 'showAddLocation'])->name('admin.addLocation');
    Route::post('/admin/createlocation', [AdminController::class, 'storeLocation'])->name('admin.store.location');
    Route::get('/admin/deleteLocation/{id}', [AdminController::class, 'deleteLocation'])->name(name: 'admin.deleteLocation');

    Route::post('/admin/createProduct', action: [ProductController::class, 'storeProducts'])->name('admin.store.product');
    Route::get('/admin/deleteProduct/{id}', action: [ProductController::class, 'deleteProduct'])->name(name: 'admin.deleteProduct');
    Route::get('/admin/{product}/edit-product', [ProductController::class, 'edit'])->name('admin.updateProduct');
    Route::put('/admin/updateProduct/{product}', [ProductController::class, 'update'])->name('admin.update');
});



Route::middleware(['role:user','auth'])->group(function(){
    Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('user.dashboard');
});





require __DIR__.'/auth.php';
