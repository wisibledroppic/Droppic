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

    public function customers(){
        return $this->hasMany('App\Customer');
    }

    public function sellers(){
        return $this->hasMany('App\Seller');
    }

    public function couriers(){
        return $this->hasMany('App\Courier');
    }
    
}
