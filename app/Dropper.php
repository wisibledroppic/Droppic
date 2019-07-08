<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Dropper extends Model
{

    
    protected $table = 'droppers';

    protected $fillable = ['email',  'password','dname','dcnic','davail_hrs','dcontact'];

    protected $hidden = ['password'];

    public function location(){
        return $this->hasOne('App\Location'); 
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function notification_receivers(){
        return $this->hasMany('App\NotificationReceiver');
    }

    
}
