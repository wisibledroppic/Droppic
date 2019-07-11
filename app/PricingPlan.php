<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    public function pickers(){
        return $this->hasMany('App\Picker');
    }
}
