<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
// Route::post("/admin-register");

Route::get('/admin/register', action: [AdminController::class, 'showAdminRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'adminRegister'])->name('admin.register.post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group( function(){
    Route::get("/admin/dashboard", [AdminController::class, 'index'])->name(name: 'admin.dashboard');
    Route::get("/admin/products", action: [ProductController::class, 'products'])->name('admin.products');
    Route::get("/admin/create-product", [ProductController::class, 'create'])->name('admin.create');
    Route::get("/admin/orders", [AdminController::class, 'orders'])->name(name: 'admin.orders');
    Route::get("/admin/order-details", [AdminController::class, 'ShowOrder'])->name(name: 'admin.showOrder');
    Route::get("/admin/customers", [AdminController::class, 'customers'])->name(name: 'admin.customers');
    Route::get("/admin/edit-product", [ProductController::class, 'edit'])->name(name: 'admin.edit');
    Route::get("/admin/view-product", [ProductController::class, 'ShowProduct'])->name(name: 'admin.ViewProduct');
    Route::get('/admin/categories', [AdminController::class, 'showCategories'])->name('admin.categories');
    Route::get('/admin/add-category', [AdminController::class, 'showAddCategory'])->name('admin.addCategory');
    Route::post('/admin/createcategory', [AdminController::class, 'storeCategory'])->name('admin.store.category');
    Route::get('/admin/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::get('/admin/locations', [AdminController::class, 'showLocations'])->name('admin.locations');
    Route::get('/admin/add-location', [AdminController::class, 'showAddLocation'])->name('admin.addLocation');
    Route::post('/admin/createlocation', [AdminController::class, 'storeLocation'])->name('admin.store.location');
    Route::get('/admin/deleteLocation/{id}', [AdminController::class, 'deleteLocation'])->name(name: 'admin.deleteLocation');
});





require __DIR__.'/auth.php';
