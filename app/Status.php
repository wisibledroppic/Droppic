<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    protected  $primarykey = 'status_id';

    public function droppers(){
        return $this->hasMany('App\Dropper','status_id');
    }
    public function pickers(){
        return $this->hasMany('App\Picker');
    }
    

    public function billings(){
        return $this->hasMany('App\Billing');
    }

    public function locations(){
        return $this->hasMany('App\Location');
    }


    public function promotions(){
        return $this->hasMany('App\Promotion');
    }

    public function notifications(){
        return $this->hasMany('App\Notification');
    }

    public function payments(){
        return $this->hasMany('App\Payment');
    }
}
