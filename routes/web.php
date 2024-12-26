<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::view('/shop', 'shop')->name('shop');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/login', function () {
    return view('login');
})->middleware(['auth', 'verified'])->name('login');

// Nanti dibawah sini hapus
Route::middleware('auth:sanctum')->group(function () {
    Route::view('/account', 'account.index');
    Route::view('/account/address', 'account.address');
    Route::view('/account/address/form', 'account.address-form');
    Route::view('/account/order', 'account.order');
    Route::view('/account/order/detail', 'account.order-detail');
    Route::view('/account/wishlist', 'account.wishlist');
    Route::view('/account/review', 'account.review');
    Route::view('/cart', 'cart.index');
    Route::view('/cart/confirm', 'cart.confirm');
    Route::view('/cart/checkout', 'cart.checkout');
    Route::view('/wishlist', 'wishlist');
    Route::view('/product', 'details');
});

require __DIR__ . '/auth.php';