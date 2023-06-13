<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Product;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Models\PaymentDetail;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index(){
        // ngambil 10 event dgn penjualan produk tertinggi
        $events = Event::select('events.*', DB::raw("SUM(payment_details.qty) as SUM"))
        ->join('products', 'events.id', '=', 'products.event_id')
        ->join('payment_details', 'products.id', '=', 'payment_details.product_id')
        ->groupBy('events.id')
        ->orderBy('SUM', 'DESC')
        ->take(10)
        ->get();

        // ngambil 15 produk dgn penjualan tertinggi
        $products = Product::select('products.*', DB::raw("SUM(payment_details.qty) as SUM"))
            ->join('payment_details', 'products.id', '=', 'payment_details.product_id')
            ->groupBy('products.id')
            ->orderBy('SUM', 'DESC')
            ->take(15)
            ->get();

        // dd($events);
        // dd(Product::all());

        return view('index', [
            'events' => $events,
            'products' => $products,
            'destinations' => Destination::all(),
            'productCategories' => ProductCategory::all()
        ]);
    }

}
