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
        $popEvents = Event::latest();

        return response(view('events', [
            'events' => Event::latest()->filter(request(['search-event', 'category-event']))->get(),
            'popular' => $popEvents->get(),
            'cat' => Category::limit(3)->get()
        ]));
    }

    public function coba(){
        // $popular
        $detail = PaymentDetail::all();
        //payment detail . paymentDetailQty diambil dan dijumlahin berdasarkan product ID
        dump($detail);
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

        $user_total = PaymentDetail::join('payment_headers', 'payment_details.payment_header_id', '=', 'payment_headers.id')
        ->whereHas('product', function($p) use ($event){
            $p->where('event_id', $event->id);
        })
        ->get();

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
