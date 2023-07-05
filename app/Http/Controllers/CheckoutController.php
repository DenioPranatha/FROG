<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\CartHeader;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    //
    public function index(){
        return view('checkout');
    }

    public function store(Request $request){
        // dd($request);
        // dd($request->checkedItems);
        // dd(json_decode($request->checkedItems));

        $product_id = json_decode($request->checkedItems);
        $cart_header_id = json_decode($request->checkedHeaders);
        $eventCount = count(array_unique($cart_header_id));
        $cartHeaders = CartHeader::find($cart_header_id);

        return view('/checkout', [
            'product_id' => $product_id,
            'cart_header_id' => $cart_header_id,
            'eventCount' => $eventCount,
            'cartHeaders' => $cartHeaders,
            'totalItem' => $request->totalItems,
            'totalPayment' => $request->totalPayments
        ]);
        // return redirect('/checkout')->with('product_id', $product_id)->with('cart_header_id', $cart_header_id)->with('eventCount', $eventCount)->with('cartHeaders', $cartHeaders)->with('totalItem', $request->totalItems)->with('totalPayment', $request->totalPayments);
        // return redirect('/checkout');

    }

    public function saveAddress(Request $request){
        // dump($request);
        // return view('index');
        dd($request);
    }
}
