<?php

namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;
use App\Time;
use App\Location;
use App\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    //予約ページを表示
    public function index()
    {
        $times = Time::get();
        $locations = Location::get();
        $coaches = Coach::get();
        return view('reservation',['times'=>$times, 'locations'=>$locations, 'coaches'=>$coaches]);
    }

    //予約処理
    public function store(Request $request)
    {
        $request->validate([
            'date'=>'required|string|max:200',
            'time_id'=>'required',
            'coach_id'=>'required',
            'location_id'=>'required'
        ]);

        $reservation = new Reservation;
        $reservation->date = $request->date;
        $reservation->time_id = $request->time_id;
        $reservation->coach_id = $request->coach_id;
        $reservation->location_id = $request->location_id;
        $reservation->user_id = Auth::id();

        $reservation->save();

        return redirect('/done');
    }
}
