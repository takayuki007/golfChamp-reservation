<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function time()
    {
        return $this->belongsTo('App\Time');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function coach()
    {
        return $this->belongsTo('App\Coach');
    }
}
