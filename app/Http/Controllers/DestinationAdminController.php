<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationAdminController extends Controller
{
    //
    public function index(){
        return view('admin.destinationAdmin', [
            'destinations' => Destination::all(),
            'categories' => Category::all()
        ]);
    }

    public function show(Destination $destination){
        return view('admin.destinationDetailAdmin',[
            'destination' => $destination
        ]);
    }

    public function create(){
        return view('admin.createDestinationAdmin');
    }
}
