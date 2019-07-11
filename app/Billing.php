<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    public function picker(){
        return $this->belongsTo('App\Picker');
    }
    
}
