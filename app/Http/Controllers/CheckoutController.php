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

        // dd(CartHeader::find($cart_header_id));

        // $products = array();

        // foreach($product_id as $prod){
        //     $products['product_id'] = $prod[$loop]
        // }

        // $products = CartDetail::where('product_id', $product_id)->where('cart_header_id', $cart_header_id)->get();

        // $products = Product::find($product_id);
        // $details = CartDetail::where($checkedItems);
        // $headers = ;

        // dd($headers);

        // dd($products);
        // dd(DB::raw('Distinct(count($product_id))'));
        // dd(count(array_unique($cart_header_id)));
        // dd($cart_header_id::distinct()->count('cart_header_id'));
        return view('/checkout', [
            'product_id' => $product_id,
            'cart_header_id' => $cart_header_id,
            'eventCount' => $eventCount,
            'cartHeaders' => $cartHeaders,
            'totalItem' => $request->totalItems,
            'totalPayment' => $request->totalPayments
        ]);
        // return redirect('/checkout');

    }
}
