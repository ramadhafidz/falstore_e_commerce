<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthController;

Route::view('/', 'index')->name('home');
Route::view('/shop', 'shop')->name('shop');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');


// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

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
Route::view('/login', 'auth.login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';