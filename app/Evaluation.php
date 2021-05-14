<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $guarded = ['id'];

    //reservationのリレーション
    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }

}
