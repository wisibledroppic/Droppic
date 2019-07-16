<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{

    protected $table = 'pricing_plans';
    protected  $primarykey = 'pricing_plan_id';


    public function pickers(){
        return $this->hasMany('App\Picker','pricing_plan_id');
    }
}
