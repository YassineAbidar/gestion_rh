<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CongetType extends Model
{
    public function congets(){
        return $this->hasMany('App\Conget');
    }
}
