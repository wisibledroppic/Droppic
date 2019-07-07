<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function droppers(){
        return $this->hasMany('App\Dropper');
    }
    public function customers(){
        return $this->hasMany('App\Customer');
    }

    public function couriers(){
        return $this->hasMany('App\Courier');
    }

    public function sellers(){
        return $this->hasMany('App\Sellerr');
    }

    public function requests(){
        return $this->hasMany('App\Request');
    }

    public function payments(){
        return $this->hasMany('App\Payment');
    }
}
