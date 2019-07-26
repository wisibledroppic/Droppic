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
    protected $guard= 'picker';
    protected  $primaryKey = 'picker_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email',  'password','pname','pcnic','pcontact'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function status(){
        return $this->belongsTo('App\Status','status_id','status_id');
    }

    public function location(){
        return $this->belongsTo('App\Location');
    }

    public function pricing_plan(){
        return $this->belongsTo('App\PricingPlan','pricing_plan_id','pricing_plan_id');
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

    public function picker_category(){
        return $this->belongsTo('App\PickerCategory','picker_category_id','picker_category_id');
    }
}
