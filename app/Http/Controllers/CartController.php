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
}
