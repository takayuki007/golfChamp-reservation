<?php

namespace App\Http\Controllers;

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
        $reservations = Auth::user()->reservations()->latest()->get();
        $profile = Profile::where('user_id', Auth::id())->first();
        return view('home', ['reservations'=>$reservations, 'profile'=>$profile]);
    }
}
