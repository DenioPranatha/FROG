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

Route::get('/eventDetail', function () {
    return view('eventDetail');
})->name('eventDetail');

// Route::get('/events/product', function () {
//     return view('product');
// })->name('product');

Route::get('/myevents', function () {
    return view('myevents');
})->name('myevents');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
