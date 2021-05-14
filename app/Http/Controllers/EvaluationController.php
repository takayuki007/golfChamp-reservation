<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Reservation;

class EvaluationController extends Controller
{
    //詳細ページを表示
    public function good($id)
    {
        $reservation_id = $id;
        $evaluation = new Evaluation;
        $evaluation->evaluation = 0;
        $evaluation->reservation_id = $reservation_id;
        $evaluation->save();
    }
    public function bad($id)
    {
        $reservation_id = $id;
        $evaluation = new Evaluation;
        $evaluation->evaluation = 1;
        $evaluation->reservation_id = $reservation_id;
        $evaluation->save();
    }
}
