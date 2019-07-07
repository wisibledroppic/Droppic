<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function request(){
        return $this->belongsTo('App\Request');
    }

    public function promotion(){
        return $this->belongsTo('App\Promotion');
    }

    public function bank(){
        return $this->belongsTo('App\Bank');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }
}
