<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function droppers(){
        return $this->hasMany('App\Dropper');
    }
    public function pickers(){
        return $this->hasMany('App\Picker');
    }
    
    public function requests(){
        return $this->hasMany('App\Request');
    }

    public function payments(){
        return $this->hasMany('App\Payment');
    }
}
