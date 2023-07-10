<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Product;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        // ngambil 10 event dgn penjualan produk tertinggi
        $events = Event::select('events.*', DB::raw("SUM(payment_details.qty) as SUM"))
        ->join('products', 'events.id', '=', 'products.event_id')
        ->join('payment_details', 'products.id', '=', 'payment_details.product_id')
        ->where('events.status', '=', 'accepted')
        ->groupBy('events.id')
        ->orderBy('SUM', 'DESC')
        ->take(10)
        ->get();

        // ngambil 15 produk dgn penjualan tertinggi
        $rn = Carbon::now()->toDateString();
        $products = Product::with('event')->select('products.*', DB::raw("SUM(payment_details.qty) as SUM"))
            ->join('payment_details', 'products.id', '=', 'payment_details.product_id')
            ->join('events', 'events.id', '=', 'products.event_id')
            ->where('events.end_date', '>', $rn)
            ->where('products.stock', '>', 0)
            ->groupBy('products.id')
            ->orderBy('SUM', 'DESC')
            ->take(15)
            ->get();

        // ngambil 10 destination dgn events terbanyak
        $popDestinations = Destination::select('destinations.*', DB::raw("COUNT(events.id) as TOTAL"))
            ->join('events', 'events.destination_id', '=', 'destinations.id')
            ->groupBy('destinations.id')
            ->orderBy('TOTAL', 'DESC')
            ->take(10)
            ->get();

        // dd($events);
        // dd(Product::all());

        return view('index', [
            'events' => $events,
            'products' => $products,
            'destinations' => $popDestinations,
            'productCategories' => ProductCategory::all()
        ]);
    }

    // public function result(Request $request)
    // {
    //     $pg = (int)$request->query('pg');
    //     $pge = 10*$pg;
    //     $popEvents = Event::latest();
    //     $events = Event::latest()->filter(request(['search-event']))->get();
    //     $c = count($events);
    //     $events = $events->take($pge);
    //     // $popular = $popEvents->get();
    //     // $cat = Category::limit(3)->get();
    //     if($pge >= $c)$pg = -1;

    //     return view('searchResult', [
    //         'events' => $events,
    //         'pg' => $pg

    //     ]);
    // }

}



