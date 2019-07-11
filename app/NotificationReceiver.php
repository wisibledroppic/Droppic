<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationReceiver extends Model
{
    public function picker(){
        return $this->belongsTo('App\Picker');
    }

    public function dropper(){
        return $this->belongsTo('App\Dropper');
    }
}
