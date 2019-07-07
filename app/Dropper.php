<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dropper extends Model
{
    public function location(){
        return $this->hasOne('App\Location'); 
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function notification_receivers(){
        return $this->hasMany('App\NotificationReceiver');
    }
    
}
