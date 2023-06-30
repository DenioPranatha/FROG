<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationController extends Controller
{
    //
    public function index(){
        // ngambil 10 destinations dgn events terbanyak
        $popDestinations = Destination::select('destinations.*', DB::raw("COUNT(events.id) as TOTAL"))
        ->join('events', 'events.destination_id', '=', 'destinations.id')
        ->groupBy('destinations.id')
        ->orderBy('TOTAL', 'DESC')
        ->take(10)
        ->get();

        return view('destination', [
            'popDestinations' => $popDestinations,
            'destinations' => Destination::all(),
            'categories' => Category::all(),
            'isAdmin' => 0,
        ]);
    }

    public function result(Request $request){

        $destinations = Destination::filter(request(['search-destination', 'category-destination']))
        ->get();

        return view('destinationResult', [
            'destinations' => $destinations,
            'isAdmin' => 0,
        ]);
    }

    public function show(Destination $destination)
    {
        //
        return view('destinationDetail', [
            // ini buat destination detailnya
            'destination' => $destination
        ]);
    }
}
