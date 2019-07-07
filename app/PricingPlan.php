<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
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
