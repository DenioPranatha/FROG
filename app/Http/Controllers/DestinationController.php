<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function index(){
        return view('destination', [
            'destinations' => Destination::all()
        ]);
    }
}
