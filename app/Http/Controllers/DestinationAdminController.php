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
        return view('admin.createDestinationAdmin', [
            'categories' => Category::all()
        ]);
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

    public function store(Request $request){
        $validatedData = $request->validate([
            'category_id' => 'required',
            'name' => 'required|min:3|max:45',
            'description' => 'required|max:750',
            'image' => 'required|image|file',
            'location' => 'required|min:3|max:50',
            'link' => 'required|url|min:3|max:500',
            'person_count' => 'required|numeric|min:1',
            'contact' => 'required|numeric|digits_between:9,13'
        ]);
        $validatedData['image'] = $request->file('image')->store('destination-images');
        Destination::create($validatedData);
        return redirect('/destinationAdmin')->with('success', 'New destination has been added!');
    }
}
