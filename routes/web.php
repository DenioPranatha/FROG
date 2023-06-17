<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MyEventController;
use App\Http\Controllers\MyEventDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
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
// Route::resource('products', ProductController::class)->names([
//     'index' => 'users.index',
//     'create' => 'users.create',
//     'store' => 'users.store',
//     'show' => 'users.show',
//     'edit' => 'users.edit',
//     'update' => 'users.update',
//     'destroy' => 'users.destroy',
// ]);
Route::get('/products/result', [ProductController::class, 'result']);
Route::get('/productDetail/{product:id}', [ProductController::class, 'show'])->name('productDetail');

Route::get('/addProduct', [ProductController::class, 'create'])->name('addProduct');
Route::post('/addProduct', [ProductController::class, 'store'])->name('addProduct');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/result', [EventController::class, 'result']);
Route::get('/eventDetail/{event:id}', [EventController::class, 'show'])->name('eventDetail');
Route::get('/eventDetail/{event:id}/result', [EventController::class, 'chart']);
Route::get('/createEvent', function () {
    return view('createEvent');
})->name('createEvent');

Route::get('/myevents', [MyEventController::class, 'index'])->name('myEvents');
Route::get('/myEventDetail', [MyEventController::class, 'show'])->name('myEventDetail');

Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/createDestination', function () {
    return view('createDestination');
})->name('createDestination');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/allHistory', function () {
    return view('allHistory');
})->name('allHistory');

Route::get('/approval', function () {
    return view('approval', [
        'event' => Event::all(),
    ]);
})->name('approval');

Route::get('/approvalDetail', function () {
    return view('approvalDetail');
})->name('approvalDetail');

Route::get('/signin', [SigninController::class, 'index'])->name('signin');
Route::post('/signin', [SigninController::class, 'authenticate'])->name('signin');

Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'store'])->name('signup');
Route::get('/destinationAdmin', function(){
    return view('admin.destinationAdmin');
})->name('destinationAdmin');

Route::get('/approval', function(){
    return view('admin.waitingListAdmin');
})->name('approval');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
