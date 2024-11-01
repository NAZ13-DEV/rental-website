<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
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
    Route::get("/admin/products", [AdminController::class, 'products'])->name('admin.products');
    Route::get("/admin/create-product", [AdminController::class, 'create'])->name('admin.create');
    Route::get("/admin/orders", [AdminController::class, 'orders'])->name(name: 'admin.orders');
    Route::get("/admin/order-details", [AdminController::class, 'ShowOrder'])->name(name: 'admin.showOrder');
    Route::get("/admin/customers", [AdminController::class, 'customers'])->name(name: 'admin.customers');
    Route::get("/admin/edit-product", [AdminController::class, 'edit'])->name(name: 'admin.edit');
    Route::get("/admin/view-product", [AdminController::class, 'ShowProduct'])->name(name: 'admin.ViewProduct');
});




require __DIR__.'/auth.php';
