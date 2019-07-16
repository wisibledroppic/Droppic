<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickerCategory extends Model
{
    protected $table = 'picker_categories';
    public $primarykey = 'picker_category_id';
    
    public function pickers(){
        return $this->hasMany('App\Picker'); 
    }
}
