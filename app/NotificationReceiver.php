<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationReceiver extends Model
{
    public function courier(){
        return $this->belongsTo('App\Courier');
    }

    public function seller(){
        return $this->belongsTo('App\Seller');
    }

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function dropper(){
        return $this->belongsTo('App\Dropper');
    }
}
