<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = [
        'address',
        'latitude',
        'longitude',
    ];

    public function dropper(){
        return $this->belongsTo('App\Dropper');
    }

    public function pickers(){
        return $this->hasMany('App\Picker');
    }
    

    public function status(){
        return $this->belongsTo('App\Status');
    }

}
