<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use App\Models\PaymentHeader;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Faker\Provider\ar_EG\Payment;
use function PHPUnit\Framework\isEmpty;
use App\Models\Destination;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //pg adalah jumlah batch see more
        //pg = -1 ketika see more engga butuh
        //pg = 1 ketika sekarang ada di batch pertama dan see more dibutuhin
        //pg = 2 ketika sekarang ada di batch kedua dan see more dibutuhin, dst
        //pg akan bertambah ketika see more diklik
        $pg = 1;
        // ngambil 10 event dgn penjualan produk tertinggi
        $popEvents = Event::select('events.*', DB::raw("SUM(payment_details.qty) as SUM"))
        ->join('products', 'events.id', '=', 'products.event_id')
        ->join('payment_details', 'products.id', '=', 'payment_details.product_id')
        ->groupBy('events.id')
        ->orderBy('SUM', 'DESC')
        ->take(10)
        ->get();

        //masukin events yang difilter berdasarkan search-event dan category-event
        //function filter bisa diliat di scopeFilter Event.php
        $events = Event::filter(request(['search-event', 'category-event']))
        ->where('status', 'accepted')
        ->get();
        //panjang smua events sekarang
        $c = count($events);
        //ambil 10 dari smue events
        $events = $events->take(10);

        //jika panjang smua kurang dari atau sama dengan 10, maka $pg = -1
        if($c <= 10)$pg = -1;

        return response(view('events', [
            'events' => $events,
            'popular' => $popEvents,
            'cat' => Category::all(),
            'pg' => $pg
        ]));
    }

    public function result(Request $request)
    {
        //
        $pg = (int)$request->query('pg');
        $pge = 10*$pg;
        $popEvents = Event::latest();
        $events = Event::latest()->filter(request(['search-event', 'category-event']))->get();
        $c = count($events);
        $events = $events->take($pge);
        $popular = $popEvents->get();
        $cat = Category::limit(3)->get();
        if($pge >= $c)$pg = -1;

        $eventsHtml = view('eventsResult', compact('events', 'popular', 'cat', 'pg'))->render();

        return $eventsHtml;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // return $request->file('image')->store('event-image');

        $validatedData = $request->validate([
            'destination-id' => 'required',
            'name' => 'required|max:40',
            'duration' => 'required|integer',
            'description' => 'required|max:450',
            'image' => 'required|image|file|max:1024'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('event-images');
        }

        $i = auth()->user()->id;
        $duration = $validatedData['duration'];
        $cropped = substr($validatedData['name'], 21);
        $start = Carbon::now();
        $end = Carbon::now()->addDays($duration);

        Event::create([
            'destination_id' => $validatedData['destination-id'],
            'user_id' => $i,
            'name' => $validatedData['name'],
            'slug' => $cropped,
            'start_date' => $start,
            'end_date' => $end,
            'duration' => $duration,
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
            'status' => "waiting"
        ]);

        return redirect('/myevents')->with('success', 'Sign up successful! Please login!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $start = new \DateTime($event->start_date);
        $end = new \DateTime($event->end_date);
        $rn = new \DateTime();
        $graph_start = $start->format('Y-m-d');
        $graph_start = new \DateTime($graph_start);

        //produk yang dimiliki event tsb
        $products = Product::all()->where('event_id', $event->id);
        //pembayaran pembayaran terkait event ini
        $this_payment = PaymentDetail::whereHas('product', function($p) use ($event){
            $p->where('event_id', $event->id);
        });

        //cari sum total dan modal per payment header
        $total = $this_payment
        ->addselect(PaymentDetail::raw('SUM(qty * item_price) as total'))
        ->addselect(PaymentDetail::raw('SUM(qty * item_modal) as modal'))
        ->groupBy('payment_header_id')
        ->get();

        //kelompokkan transaksi terkait event ini. Alasan dimerge sama p header adalah kita pengen grup berdasar user id nya
        $user_count = PaymentDetail::join('payment_headers', 'payment_details.payment_header_id', '=', 'payment_headers.id')
        ->whereHas('product', function($p) use ($event){
            $p->where('event_id', $event->id);
        })
        ->get();

        //mencari total pemasukan per hari
        $user_total = PaymentDetail::join('payment_headers', 'payment_details.payment_header_id', '=', 'payment_headers.id')
        ->addselect(PaymentDetail::raw('SUM(qty * item_price) as total'))
        ->addselect('date')
        ->whereHas('product', function($p) use ($event){
            $p->where('event_id', $event->id);
        })
        ->groupBy('date')
        ->get();

        //mencari top product
        $top = PaymentDetail::
        addselect(PaymentDetail::raw('SUM(qty) as quantity'))
        ->addselect(PaymentDetail::raw('product_id as pid'))
        ->whereHas('product', function($p) use ($event){
            $p->where('event_id', $event->id);
        })
        ->groupBy('product_id')
        ->get();
        if(!isEmpty($top)){
            $top = $top->where('quantity', $top->max('quantity'));
            $top = Product::find($top[0]['pid']);
        }

        $pg = 1;
        $count = count($products);
        $products = $products->take(10);

        //jika panjang smua kurang dari atau sama dengan 25, maka $pg = -1
        if($count <= 10) $pg = -1;

        return response(view('eventDetail', [
            'event' => $event,
            'start' => $start,
            'end' => $end,
            'rn' => $rn,
            'products' => $products,
            'total' => $total,
            'user_total' => $user_total,
            'user_count' => $user_count,
            'top' => $top,
            'graph_start' => $graph_start,
            'pg' => $pg
        ]));

    }

    public function chart(Event $event, Request $request)
    {
        $start = new \DateTime($event->start_date);
        $graph_start = new \DateTime($request->query('graph-start'));

        //mencari total pemasukan per hari
        $user_total = PaymentDetail::join('payment_headers', 'payment_details.payment_header_id', '=', 'payment_headers.id')
        ->addselect(PaymentDetail::raw('SUM(qty * item_price) as total'))
        ->addselect('date')
        ->whereHas('product', function($p) use ($event){
            $p->where('event_id', $event->id);
        })
        ->groupBy('date')
        ->get();

        return response(view('chartResult', [
            'event' => $event,
            'start' => $start,
            'user_total' => $user_total,
            'graph_start' => $graph_start
        ]));

    }

    public function showProductDetail(Request $request, Event $event)
    {
        // kalo pencet see more
        $products = Product::all()->where('event_id', $event->id);

        $pg = (int)$request->input('pg');
        $pge = 10*$pg;
        $c = count($products);
        if($pge >= $c)$pg = -1;

        return view('productsResult', [
            'products' => $products->take($pge),
            'pg' => $pg
        ]);

    }

    public function createForm(){
        $destinations = Destination::all();

        return view('createEvent', [
            'destinations' => $destinations
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
