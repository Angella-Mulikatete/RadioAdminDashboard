<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;

class EventsController extends Controller
{
    public function index(){
        $events = events::all();
        return view('events.index', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $data = $request-> validate([
            'title' =>'required',
            'booking_url' =>'required',
            'start_date' =>'required | date',
            'end_date' => 'required | date',
            'location' =>'required',
            'description' =>'required'
        ]);

        $new_event = events::create($data);
        return redirect()->route('events.index');
    }

    public function edit(events $event){
        return view('events.edit', ['event' => $event]);
        // dd($event);
    }

    public function update(Request $request, events $event){
        $data = $request-> validate([
            'title' =>'required',
            'booking_url' =>'required',
           'start_date' =>'required | date',
            'end_date' => 'required | date',
            'location' =>'required',
            'description' =>'required'
        ]);

        $event->update($data);
        return redirect()->route('events.index')->with('success', 'Event successfully updated');
    }

    public function delete(events $event){
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event successfully deleted');
    }
}
