<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use function PHPUnit\Framework\isEmpty;

class MyEventController extends Controller
{
    //
    public function index(){
        return view('myEvents');
    }

    public function show(){
        $event = Event::find(1);
        $start = new \DateTime($event->start_date);
        $end = new \DateTime($event->end_date);
        $rn = new \DateTime();

        // //tanggal start nya graph
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

        return response(view('myEventDetail', [
            'event' => $event,
            'start' => $start,
            'end' => $end,
            'rn' => $rn,
            'products' => $products,
            'total' => $total,
            'user_total' => $user_total,
            'user_count' => $user_count,
            'top' => $top,
            'graph_start' => $graph_start
        ]));


    }

    public function edit(Request $request){
        $event = Event::find(1);
        $event->name = $request->input('new-name');
        $event->description = $request->input('new-caption');
        $event->save();

        return redirect('/myEventDetail')->with('success', 'Events updated successfully');
    }
}
