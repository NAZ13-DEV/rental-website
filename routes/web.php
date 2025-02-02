<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Auth\RegisteredUserController;


// Route::get('/', function () {
//     return view('index');
// });




Route::get('/user/forgot-password', [UserController::class, 'forgotPassword'])->name('user.forgot-password');
Route::get('/user/login', [UserController::class, 'login'])->name('user.login');



Route::middleware('auth')->group(function () {
    Route::get('/user/wishlist', [WishlistController::class, 'wishlist'])->name('user.wishlist');
    Route::post('/user/wishlist', [WishlistController::class, 'add'])->name('user.wishlistAdd');
    Route::delete('/user/wishlist/{id}', [WishlistController::class, 'remove'])->name('user.wishlistRemove');


    Route::get('/user/cart', [CartController::class, 'index'])->name('user.cart');
    Route::patch('/user/update-cart', [CartController::class, 'updateCart'])->name('user.updateCart');
    Route::get('/user/cart/{id}', [CartController::class, 'addToCart'])->name('user.cartAdd');
    Route::delete('/user/cart', [CartController::class, 'cartDelete'])->name('user.cartDelete');


});

Route::get('/user/checkout', [UserController::class, 'checkout'])->name('user.checkout');


Route::get('/admin/registersss', action: [AdminController::class, 'showAdminRegistrationForm'])->name('admin.register');
Route::post('/admin/registersss', [AdminController::class, 'adminRegister'])->name('admin.registersss');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', action: [AdminController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminController::class, 'update'])->name(name: 'profile.update');
    Route::delete('/profile', [AdminController::class, 'deleteAccount'])->name('profile.delete');
});


Route::middleware(['auth'])->group(function () {
    Route::patch('/profile', [AdminController::class, 'profileUpdate'])->name(name: 'admin.updateProfile');
    Route::patch('/profile/change-password', [AdminController::class, 'changePassword'])->name(name: 'admin.changePassword');
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home/aboutUs', [HomeController::class, 'aboutUs'])->name(name: 'home.aboutUs');
Route::get('/home/contactUs', [HomeController::class, 'contactUs'])->name('home.contactUs');




require __DIR__.'/auth.php';
