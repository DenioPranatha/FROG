<?php

use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DestinationAdminController;
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

// Route::get('/indexResult', [IndexController::class, 'result']);
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/index', [IndexController::class, 'index'])->name('index');
// Route::post('products', [IndexController::class, 'store']);

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/result', [ProductController::class, 'result']);
Route::get('/productDetail/{product:id}', [ProductController::class, 'show'])->name('productDetail');
Route::post('/cartAdd', [ProductController::class, 'add'])->middleware('auth');
Route::post('/buyNow', [ProductController::class, 'buy'])->middleware('auth');

Route::post('/addProduct', [ProductController::class, 'store'])->name('addProduct')->middleware('auth');
Route::get('/addProduct/{event:id}', [ProductController::class, 'create'])->name('addProduct')->middleware('auth');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/result', [EventController::class, 'result']);
Route::get('/eventDetail/{event:id}', [EventController::class, 'show'])->name('eventDetail');
Route::get('/eventDetail/{event:id}/result', [EventController::class, 'showProductDetail']);

Route::get('/myevents', [MyEventController::class, 'index'])->name('myEvents')->middleware('auth');
Route::get('/myEventDetail/{event:id}/{isEdit}', [MyEventController::class, 'show'])->name('myEventDetail')->middleware('auth');
Route::get('/myEventDetail/{event:id}/{isEdit}/result', [MyEventController::class, 'showProductDetail'])->middleware('auth');
Route::post('/myEventDetail/{event:id}/edit', [MyEventController::class, 'edit'])->middleware('auth');
Route::get('/createEvent', [EventController::class, 'createForm'])->name('createEvent')->middleware('auth');
Route::post('/createEvent', [EventController::class, 'create'])->middleware('auth');

Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/destinationResult', [DestinationController::class, 'result']);
Route::get('/destinationDetail/{destination:id}', [DestinationController::class, 'show'])->name('destinationDetail');

Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware('auth');
Route::post('/cartMinus', [CartController::class, 'minus'])->middleware('auth');
Route::post('/cartPlus', [CartController::class, 'plus'])->middleware('auth');
Route::post('/cartDelete', [CartController::class, 'destroy'])->middleware('auth');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

Route::get('/allHistory', function () {
    return view('allHistory');
})->name('allHistory');

Route::get('/signin', [SigninController::class, 'index'])->name('signin')->middleware('guest');
Route::post('/signin', [SigninController::class, 'authenticate'])->name('signin')->middleware('guest');
Route::post('/signout', [SigninController::class, 'signout'])->middleware('auth');

Route::get('/signup', [SignupController::class, 'index'])->name('signup')->middleware('guest');
Route::post('/signup', [SignupController::class, 'store'])->name('signup')->middleware('guest');

Route::get('/approval', [ApprovalController::class, 'show'])->name('approval')->middleware('admin');
Route::post('/approvalDetail/{event:id}/edit', [ApprovalController::class, 'edit'])->name('approvalDetail')->middleware('admin');
Route::get('/approvalDetail/{event:id}', [ApprovalController::class, 'detail'])->name('approvalDetail')->middleware('admin');

// Route::get('/approvalDetail', function () {
    //     return view('approvalDetail');
    // })->name('approvalDetail');

    // Route::get('/destinationDetail', function () {
        //     return view('destinationDetail');
        // })->name('destinationDetail');


Route::post('/destinationDelete', [DestinationAdminController::class, 'destroy'])->middleware('admin');
Route::get('/destinationAdmin', [DestinationAdminController::class, 'index'])->name('destinationAdmin')->middleware('admin');
Route::get('/destinationAdmin/result', [DestinationAdminController::class, 'result'])->name('destinationAdmin')->middleware('admin');
Route::get('/destinationDetailAdmin/{destination:id}', [DestinationAdminController::class, 'show'])->name('destinationDetailAdmin')->middleware('admin');
Route::get('/createDestinationAdmin', [DestinationAdminController::class, 'create'])->name('createDestinationAdmin')->middleware('admin');
Route::post('/createDestinationAdmin', [DestinationAdminController::class, 'store'])->name('createDestinationAdmin')->middleware('admin');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
