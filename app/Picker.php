<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Picker extends Authenticatable
{

    use Notifiable;
    
    protected $table = 'pickers';
    public $primarykey = 'picker_id';
    protected $guard= 'picker';

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

    public function notification_receivers(){
        return $this->hasMany('App\NotificationReceiver');
    }

    public function picker_categories(){
        return $this->belongsTo('App\PickerCategory');
    }
}
