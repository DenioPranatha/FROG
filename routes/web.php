<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/eventDetail', function () {
    return view('eventDetail');
})->name('eventDetail');

Route::get('/myevents', function () {
    return view('myEvents');
})->name('myEvents');

Route::get('/myEventDetail', function () {
    return view('myEventDetail');
})->name('myEventDetail');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


//bisa dihapus aja
Route::get('/coba', function () {
    return view('cobaEventDetail');
})->name('coba');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
