<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Reservation;

class DetailController extends Controller
{
    //詳細ページを表示
    public function index($id){
        $reservation = Reservation::where('id', $id)->first();
        $evaluation = Evaluation::where('reservation_id', $id)->first();
        return view('detail',['reservation'=>$reservation, 'evaluation'=>$evaluation]);
    }
}
