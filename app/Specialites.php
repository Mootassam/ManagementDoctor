<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialites extends Model
{  

    public function doctor() {

        return $this->hasMany('App\Doctor') ;
    }
    //
}
