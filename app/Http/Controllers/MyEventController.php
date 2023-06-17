<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MyEventController extends Controller
{
    //
    public function index(){
        return view('myEvents');
    }

    public function show(){
        return view('myEventDetail', [
            'products' => Product::all()
        ]);
    }
}
