<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Http\Request;

class approvalController extends Controller
{
    //
    public function show(){

        $events = Event::where('status', 'waiting')->get();

        return view('approval',[
            'events' => $events
        ]);

    }

    public function detail(Event $event){

        return view('approvalDetail', [
            'event' => $event
        ]);

    }

    public function edit(Request $request, Event $event){

        $isApproved = $request->input('isApproved');
        if($isApproved == "1"){
            $duration = (int)$event->duration;
            $start = Carbon::now();
            $end = Carbon::now()->addDays($duration);

            $event->start_date = $start;
            $event->end_date = $end;
            $event->status = "accepted";
            $event->save();
        }else{
            $event->status = "rejected";
            $event->save();
        }

        $url = '/approval';

        return redirect($url)->with('success', 'Events updated successfully');

        // return view('approvalDetail', [
        //     'event' => $event
        // ]);

    }
}
