<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return response($events, 200)->header('Content-Type', 'text/plain');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $event = new Event([
            'uuid' => Str::uuid(),
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'hostname' => $request->hostname
        ]);

        $event->save();
        return response(200)->header('Content-Type', 'text/plain');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::where('uuid', $id)->get();
        return response($event, 200)->header('Content-Type', 'text/plain');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::where('uuid', $id);

        if ($request->title && $request->description) {
            $event->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
        }else if ($request->title ) {
            $event->update(['title' => $request->title]);
        } else {
            $event->update(['description' => $request->description]);
        }

        return response(200)->header('Content-Type', 'text/plain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::where('uuid', $id);
        $event->delete();

        return response(200)->header('Content-Type', 'text/plain');
    }
}
