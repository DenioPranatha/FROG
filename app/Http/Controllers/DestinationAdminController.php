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
            'categories' => Category::all(),
            'isAdmin' => 1
        ]);
    }

    public function show(Destination $destination){
        return view('admin.destinationDetailAdmin',[
            'destination' => $destination,
        ]);
    }

    public function create(){
        return view('admin.createDestinationAdmin');
    }

    public function result(Request $request){

        $destinations = Destination::filter(request(['search-destination', 'category-destination']))
        ->get();

        return view('destinationResult', [
            'destinations' => $destinations,
            'isAdmin' => 1,
        ]);
    }

    public function destroy(Request $request){
        // dd($request);
        $delete = Destination::find($request->id);
        $delete->delete();
        return redirect('/destinationAdmin')->with('deleted','destination deleted successfully');
    }
}
