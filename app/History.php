<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'golf_histories';

    //profilerのリレーション
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

}
