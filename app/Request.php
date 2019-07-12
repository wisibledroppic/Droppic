<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function picker(){
        return $this->belongsTo('App\Picker');
    }
    
    public function request_status(){
        return $this->belongsTo('App\RequestStatus');
    }

    public function payments(){
        return $this->hasMany('App\Payment');
    }
}
