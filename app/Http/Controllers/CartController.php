<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\CartHeader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    //
    public function index(){
        return view('cart', [
            'cartHeaders' => CartHeader::all(),
            'cartDetails' => CartDetail::all(),
        ]);
    }

    public function minus(Request $request){
        // dd($request);
        $validatedData['qty'] = $request->num;
        CartDetail::where('cart_header_id', $request->cart_header_id)->where('product_id', $request->product_id)->update($validatedData);

        return redirect()->back();
    }

    public function plus(Request $request){
        // dd($request);
        $validatedData['qty'] = $request->num;
        CartDetail::where('cart_header_id', $request->cart_header_id)->where('product_id', $request->product_id)->update($validatedData);

        return redirect()->back();
    }
}
