<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Product;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        return view('index', [
            'events' => Event::all(),
            'products' => Product::all(),
            'destinations' => Destination::all(),
            'productCategories' => ProductCategory::all()
        ]);
    }

}
