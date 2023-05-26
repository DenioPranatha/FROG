<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Product;
use App\Models\PaymentDetail;
use App\Models\PaymentHeader;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

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
        $pg = 1;
        $popEvents = Event::latest();
        $events = Event::latest()->filter(request(['search-event', 'category-event']))->get();
        $c = count($events);
        $events = $events->take(10);
        if($c <= 10)$pg = -1;

        return response(view('events', [
            'events' => $events,
            'popular' => $popEvents->get(),
            'cat' => Category::limit(3)->get(),
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
        $products = Product::all()->where('event_id', $event->id);
        $this_payment = PaymentDetail::whereHas('product', function($p) use ($event){
            $p->where('event_id', $event->id);
        });

        $total = $this_payment
        ->addselect(PaymentDetail::raw('SUM(qty * item_price) as total'))
        ->addselect(PaymentDetail::raw('SUM(qty * item_modal) as modal'))
        ->groupBy('payment_header_id')
        ->get();

        $user_count = PaymentDetail::join('payment_headers', 'payment_details.payment_header_id', '=', 'payment_headers.id')
        ->whereHas('product', function($p) use ($event){
            $p->where('event_id', $event->id);
        })
        ->get();

        $user_total = PaymentDetail::join('payment_headers', 'payment_details.payment_header_id', '=', 'payment_headers.id')
        ->addselect(PaymentDetail::raw('SUM(qty * item_price) as total'))
        ->addselect('date')
        ->whereHas('product', function($p) use ($event){
            $p->where('event_id', $event->id);
        })
        ->groupBy('date')
        ->get();

        // dd(str($user_total));

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


        // dd($top);


        return response(view('eventDetail', [
            'event' => $event,
            'start' => $start,
            'end' => $end,
            'rn' => $rn,
            'products' => $products,
            'total' => $total,
            'user_total' => $user_total,
            'user_count' => $user_count,
            'top' => $top
        ]));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
