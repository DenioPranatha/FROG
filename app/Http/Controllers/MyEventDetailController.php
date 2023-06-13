<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MyEventDetailController extends Controller
{
    //
    public function index(){
        return view('myEventDetail', [
            'products' => Product::all()
        ]);
    }
}
