<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    //reservationのリレーション
    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
