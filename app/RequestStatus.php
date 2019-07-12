<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestStatus extends Model
{
    
    public function requests(){
        return $this->hasMany('App\Request');
    }
}
