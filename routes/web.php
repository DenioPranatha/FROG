<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MyEventDetailController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/index', [IndexController::class, 'index'])->name('index');
// Route::post('products', [IndexController::class, 'store']);

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/result', [ProductController::class, 'result']);
Route::get('/productDetail/{product:id}', [ProductController::class, 'detail'])->name('productDetail');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/result', [EventController::class, 'result']);
Route::get('/eventDetail/{event:id}', [EventController::class, 'show'])->name('eventDetail');

Route::get('/myevents', function () {
    return view('myEvents');
})->name('myEvents');

Route::get('/myEventDetail', [MyEventDetailController::class, 'index'])->name('myEventDetail');

Route::get('/cart', function () {
    return view('cart', [
        // 'cartHeaders' => CartHeader::where('user_id', 4)->get(),
        'cartHeaders' => CartHeader::all(),
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
