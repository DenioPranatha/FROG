<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartDetail;
use App\Models\CartHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    //
    public function store(Request $request){
        // dd($request);
        // dd($request->checkedItems);
        // dd(json_decode($request->checkedItems));

        // return redirect('cart');

        if($request->isMethod('post')){

            $product_id = json_decode($request->checkedItems);
            $cart_header_id = json_decode($request->checkedHeaders);
            $eventCount = count(array_unique($cart_header_id));
            $cartHeaders = CartHeader::find($cart_header_id);

            if($eventCount == 0){
                return redirect('cart')->with('error','Please select at least one product!');
            }else{
                return view('checkout', [
                    'product_id' => $product_id,
                    'cart_header_id' => $cart_header_id,
                    'eventCount' => $eventCount,
                    'cartHeaders' => $cartHeaders,
                    'totalItem' => $request->totalItems,
                    'totalPayment' => $request->totalPayments,
                    // 'name' => auth()->user()->name,
                    // 'phone' => auth()->user()->phone,
                    // 'address' =>  auth()->user()->address
                ]);
            }

        } else{
            return redirect('cart');
        }

        // return redirect('/checkout')->with('product_id', $product_id)->with('cart_header_id', $cart_header_id)->with('eventCount', $eventCount)->with('cartHeaders', $cartHeaders)->with('totalItem', $request->totalItems)->with('totalPayment', $request->totalPayments);
        // return redirect('/checkout');

    }

    public function saveAddress(Request $request){
        // dump($request);
        // return view('index');
        dd($request);
        // if($request){
        //     $name = $request->name;
        //     $phone = $request->phone;
        //     $address = $request->address;
        // }
        // else{
        //     $name = auth()->user()->name;
        //     $phone = auth()->user()->phone;
        //     $address = auth()->user()->address;
        // }
        // Session::flash($name, $phone, $address);
        // return redirect('checkout')->with('name', $name)->with('phone', $phone)->with('address', $address);
    }
}
