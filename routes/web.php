<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
})->name('home');

// Autentikasi buat login, register, dll 
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/login', function () {
    return view('login');
})->middleware(['auth', 'verified'])->name('login');

// Wajib admin biar bisa masuk page-page ini
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/admin/dashboard', 'admin.index')->name('admin.dashboard');

    // Brand
    Route::get('/admin/brand', [AdminController::class, 'brands'])->name('admin.brands');
    Route::get('/admin/brand/add', [AdminController::class, 'add_brand'])->name('admin.brand.add');
    Route::post('/admin/brand/store', [AdminController::class, 'add_brand_store'])->name('admin.brand.store');
    Route::get('/admin/brand/{id}/edit', [AdminController::class, 'edit_brand'])->name('admin.brand.edit');
    Route::put('/admin/brand/update', [AdminController::class, 'update_brand'])->name('admin.brand.update');
    Route::view('/admin/brand/product', 'admin.products')->name('admin.brand.products');
    Route::delete('/admin/brand/{id}/delete', [AdminController::class, 'delete_brand'])->name('admin.brand.delete');

    // Kategori
    Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/admin/category/add', [AdminController::class, 'add_category'])->name('admin.category.add');
    Route::post('/admin/category/store', [AdminController::class, 'add_category_store'])->name('admin.category.store');
    Route::get('/admin/category/{id}/edit', [AdminController::class, 'edit_category'])->name('admin.category.edit');
    Route::put('/admin/category/update', [AdminController::class, 'update_category'])->name('admin.category.update');
    Route::delete('/admin/category/{id}/delete',[AdminController::class,'delete_category'])->name('admin.category.delete');

    // Produk
    Route::get('/admin/product/add',[AdminController::class,'add_product'])->name('admin.product.add');
});

// Wajib auth/login buat masuk ke sini
Route::middleware('auth:sanctum')->group(function () {
    // Akun
    Route::view('/account', 'account.index')->name('account');
    Route::view('/account/order', 'account.order')->name('order');
    Route::view('/account/address', 'account.address')->name('address');
    Route::view('/account/address/change', 'account.details')->name('change');
    Route::view('/account/address/form', 'account.address-form')->name('new');
    Route::view('/account/wishlist', 'account.wishlist')->name('awish');

    Route::view('/product/details', 'details')->name('products.details');

    Route::view('/shop', 'shop')->name('shop');
    Route::view('/about', 'about')->name('about');
    Route::view('/contact', 'contact')->name('contact');
    Route::view('/cart', 'cart.index')->name('cart');
    Route::view('/wishlist', 'wishlist')->name('wishlist');

    // Cart
    Route::view('/cart/checkout', 'cart.checkput')->name('cart.checkput');
    Route::view('/cart/checkout/complete', 'cart.confirm')->name('cart.complete');
});

require __DIR__ . '/auth.php';