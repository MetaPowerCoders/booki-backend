<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use BookingDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($event_id)
    {
        $bookings = Booking::where('event_id', $event_id)->get();
        $dates_by_event = DB::select( DB::raw("SELECT date, count(date) AS count FROM bookings WHERE event_id = $event_id group by date"));
        $total_attendees = DB::select( DB::raw("SELECT username, count(username) AS count, date FROM bookings WHERE event_id = $event_id group by username"));
        $response = [];

        for($i = 0; $i < count($bookings); $i++){
            $date = $this->findObjectByDate($bookings[$i]->date,  $dates_by_event);
            //$response[] = new BookingDTO($bookings[$i]->id, $bookings[$i]->username, $event_id, $bookings[$i]->date, ($date->count*100) / count($bookings));
            $response[] = [
                'id' => $bookings[$i]->id,
                'username' => $bookings[$i]->username,
                'date' => $bookings[$i]->date,
                'percentage' =>($date->count*100) / count($total_attendees)
            ];
        }

        return response($total_attendees, 200)->header('Content-Type', 'text/plain');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $event_id)
    {

        for($i = 0; $i < count($request->timestamps); $i++){
            $booking = new Booking([
                'username' => $request->username,
                'event_id' => $event_id,
                'date' => $request->timestamps($i)
            ]);

            $booking->save();
        }
        return response(200)->header('Content-Type', 'text/plain');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $event_id)
    {
        // Booking::where('event_id', $event_id)->delete();

        Booking::where(['event_id', $event_id],['username', $request->username])->delete();

        for($i = 0; $i < count($request->timestamps); $i++){
            $booking = new Booking([
                'username' => $request->username,
                'event_id' => $event_id,
                'date' => $request->timestamps($i)
            ]);

            $booking->save();
        }
        return response(200)->header('Content-Type', 'text/plain');
    }

    function findObjectByDate($date, $array){
        foreach ( $array as $element ) {
            if ( $date == $element->date) {
                return $element;
            }
        }

        return false;
    }
}
