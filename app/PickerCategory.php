<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickerCategory extends Model
{
    public $primarykey = 'picker_category_id';
    
    public function pickers(){
        return $this->hasMany('App\Picker');
    }
}
