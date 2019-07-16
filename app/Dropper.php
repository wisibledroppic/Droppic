<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class Dropper extends Authenticatable
{

    use Notifiable;
    
    protected $table = 'droppers';
    protected $guard= 'dropper'; 
    protected $primaryKey = 'dropper_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email',  'password','dname','dcnic','davail_hrs','dcontact'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ]; 


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function location(){
        return $this->hasOne('App\Location'); 
    }

    public function status(){
        return $this->belongsTo('App\Status','status_id','status_id');
    }

    public function notification_receivers(){
        return $this->hasMany('App\NotificationReceiver');
    }

    
}
