<?php

namespace App\Http\Controllers;
use App\Event;
//use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function loadEvents()
    {
       $events=Event::all();
       return response()->json($events);
    }


  public function store(Request $req)
    {
    	Event::create($req->all());
      	return response()->json(true);
    }

    public function update(Request $req)
    {
    	$event=Event::where('id',$req->id)->first();
    	$event->fill($req->all());
    	$event->save();
    	return response()->json(true);
    }

    public function destroy(Request $req){
    	Event::where('id',$req->id)->delete();
    	return response()->json(true);
    }
}
