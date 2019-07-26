<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{

    protected $table = 'pricing_plans';
    protected  $primaryKey = 'pricing_plan_id';


    public function pickers(){
        return $this->hasMany('App\Picker','pricing_plan_id','pricing_plan_id');
    }
}
