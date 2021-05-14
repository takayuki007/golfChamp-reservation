<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = ['id'];

    //userのリレーション
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //timeのリレーション
    public function time()
    {
        return $this->belongsTo('App\Time');
    }

    //locationのリレーション
    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    //coachのリレーション
    public function coach()
    {
        return $this->belongsTo('App\Coach');
    }

    //evaluationのリレーション
    public function evaluation()
    {
        return $this->hasOne('App\Evaluation');
    }

}
