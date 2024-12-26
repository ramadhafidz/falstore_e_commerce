<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})->name('home');
// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/login', function () {
    return view('login');
})->middleware(['auth', 'verified'])->name('login');

// Nanti dibawah sini hapus
Route::middleware('auth:sanctum')->group(function () {
    // Account
    
Route::view('/shop', 'shop')->name('shop');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/cart', 'cart.index')->name('cart');
Route::view('/wishlist', 'wishlist')->name('wishlist');
Route::view('/account', 'account.index')->name('account');
Route::view('/account/order', 'account.order')->name('order');
Route::view('/account/address', 'account.address')->name('address');
Route::view('/account/address/change', 'account.details')->name('change');
Route::view('/account/address/form', 'account.address-form')->name('new');
Route::view('/account/wishlist', 'account.wishlist')->name('awish');
});

require __DIR__ . '/auth.php';