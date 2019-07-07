<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function dropper(){
        return $this->belongsTo('App\Dropper');
    }
}
