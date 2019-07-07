<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function location(){
        return $this->belongsTo('App\Location');
    }

    public function pricing_plan(){
        return $this->belongsTo('App\PricingPlan');
    }

    public function billings(){
        return $this->hasMany('App\Billing');
    }

    public function requests(){
        return $this->hasMany('App\Request');
    }
}
