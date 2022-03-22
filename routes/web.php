<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/shop', function () {
    return view('Shop', [
        "title" => "Shop"
    ]);
});

Route::get('/wishlist', function () {
    return view('Wishlist', [
        "title" => "Wishlist"
    ]);
});

Route::get('/cart', function () {
    return view('Cart', [
        "title" => "Cart"
    ]);
});

Route::get('/checkout', function () {
    return view('Checkout', [
        "title" => "Checkout"
    ]);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
