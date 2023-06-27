<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function index(){
        return view('destination', [
            'destinations' => Destination::all(),
            'categories' => Category::all()
        ]);
    }

    public function result(){

        $destinations = Destination::all();


        return view('destinationResult', [
            'destinations' => $destinations,


        ]);
    }
}
