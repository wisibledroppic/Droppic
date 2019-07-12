<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public function payments(){
        return $this->hasMany('App\Payment');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }
}
