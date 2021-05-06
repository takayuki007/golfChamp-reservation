<?php

namespace App\Http\Controllers;

use App\Coach;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reservation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //マイページを表示
    public function index()
    {
        $reservations = Auth::user()->reservations()->latest()->paginate(3);
        $profile = Profile::where('user_id', Auth::id())->first();
        $coaches = Coach::get();
        return view('home', ['reservations'=>$reservations, 'profile'=>$profile, 'coaches'=>$coaches]);
    }

    //検索後のマイページを表示
    public function search(Request $request)
    {
        $coach_id = $request->coach_id;
        if (empty($coach_id)){
            return redirect('home');
        }
        $reservations = Reservation::where('user_id', Auth::id())->where('coach_id', $coach_id)->latest()->paginate(3);
        $profile = Profile::where('user_id', Auth::id())->first();
        $coaches = Coach::get();
        return view('search', ['reservations'=>$reservations, 'profile'=>$profile, 'coaches'=>$coaches]);
    }

}
