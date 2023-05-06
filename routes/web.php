<?php

use App\Models\CartDetail;
use App\Models\CartHeader;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Event;
use App\Models\PaymentDetail;
use App\Models\PaymentHeader;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
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
    return view('index', [
        'events' => Event::all(),
        'destinations' => Destination::all(),
        'productCategories' => ProductCategory::all()
    ]);
})->name('index');

Route::get('/index', function () {
    return view('index', [
        'events' => Event::all(),
        'destinations' => Destination::all(),
        'productCategories' => ProductCategory::all()
    ]);
})->name('index');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/productDetail', function () {
    return view('productDetail');
})->name('productDetail');

Route::get('/events', function () {
    return view('events');
})->name('events');

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
    return view('cart', [
        'cartHeaders' => CartHeader::where('user_id', 1)->get(),
        'cartDetails' => CartDetail::all(),
        // 'count' => 0
        // 'cartDetails' => CartDetail::where('cart_header_id', 1)->get()
    ]);
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/destination', function () {
    return view('destination');
})->name('destination');

Route::get('/addProduct', function () {
    return view('addProduct');
})->name('addProduct');

Route::get('/allHistory', function () {
    return view('allHistory');
})->name('allHistory');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
