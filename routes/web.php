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

    // Brands CRUD
    Route::get('/admin/brands', [AdminController::class, 'brands'])->name('admin.brands');
    Route::get('/admin/brand/add', [AdminController::class, 'add_brand'])->name('admin.brand.add');
    Route::post('/admin/brand/store', [AdminController::class, 'brand_store'])->name('admin.brand.store');
    Route::get('/admin/brand/edit/{id}', [AdminController::class, 'brand_edit'])->name('admin.brand.edit');
    Route::put('/admin/brand/update/{id}', [AdminController::class, 'brand_update'])->name('admin.brand.update');
    Route::delete('/admin/brand/delete/{id}', [AdminController::class, 'brand_delete'])->name('admin.brand.delete');

    // Categories CRUD
    Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/admin/category/add', [AdminController::class, 'add_category'])->name('admin.category.add');
    Route::post('/admin/category/store', [AdminController::class, 'category_store'])->name('admin.category.store');
    Route::get('/admin/category/edit/{id}', [AdminController::class, 'category_edit'])->name('admin.category.edit');
    Route::put('/admin/category/update/{id}', [AdminController::class, 'category_update'])->name('admin.category.update');
    Route::delete('/admin/category/delete/{id}', [AdminController::class, 'category_delete'])->name('admin.category.delete');

    // Products CRUD
    Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/admin/product/add', [AdminController::class, 'add_product'])->name('admin.product.add');
    Route::post('/admin/product/store', [AdminController::class, 'product_store'])->name('admin.product.store');
    Route::get('/admin/product/edit/{id}', [AdminController::class, 'product_edit'])->name('admin.product.edit');
    Route::put('/admin/product/update/{id}', [AdminController::class, 'product_update'])->name('admin.product.update');
    Route::delete('/admin/product/delete/{id}', [AdminController::class, 'product_delete'])->name('admin.product.delete');

    // Users
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');

    // Settings
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
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
    Route::view('/cart/checkout', 'cart.checkput')->name('cart.checkout');
    Route::view('/cart/checkout/complete', 'cart.confirm')->name('cart.complete');
    Route::view('/wishlist', 'wishlist')->name('wishlist');

    // Cart
    Route::view('/cart/checkout', 'cart.checkput')->name('cart.checkput');
    Route::view('/cart/checkout/complete', 'cart.confirm')->name('cart.complete');
});

require __DIR__ . '/auth.php';