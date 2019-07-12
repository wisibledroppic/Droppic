<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function status(){
        return $this->belongsTo('App\Status');
    }
}
