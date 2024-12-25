<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
});


Route::get('/product', function () {
    return view('product');
}); 

Route::get('/checkout', function () {
    return view('checkout');
}); 

Route::get('/products', function () {
    return view('products');
}); 

// Route untuk halaman Home (index)
Route::get('/', function () {
    return view('home'); // Halaman 'home.blade.php'
})->name('home');

// Route untuk halaman Best Seller
Route::get('/best-seller', function () {
    return view('best-seller'); // Halaman 'best-seller.blade.php'
})->name('best-seller');

// Route untuk halaman New Arrival
Route::get('/new-arrival', function () {
    return view('new-arrival'); // Halaman 'new-arrival.blade.php'
})->name('new-arrival');

// Route untuk halaman Index
Route::get('/index', function () {
    return view('index'); // Halaman 'index.blade.php'
});

// Route untuk halaman Cart
Route::get('/cart', function () {
    return view('cart'); // Halaman 'cart.blade.php'
});

// Route untuk halaman Product
Route::get('/product', function () {
    return view('product'); // Halaman 'product.blade.php'
});