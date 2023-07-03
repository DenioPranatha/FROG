<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index(){
        return view('checkout');
    }

    public function store(Request $request){
        // dd($request->checkedItems);
        // dd(json_decode($request->checkedItems));

        $checkedItems = json_decode($request->checkedItems);
        $products = Product::find($checkedItems);
        // dd($products);

    }
}
