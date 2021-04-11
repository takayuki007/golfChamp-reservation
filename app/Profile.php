<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //userのリレーション
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Historyのリレーション
    public function history()
    {
        return $this->hasOne('App\History');
    }

}
