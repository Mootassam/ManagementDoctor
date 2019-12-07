<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function appointments()
    {
        return $this->hasMany('App\Appointments');
    }
    //
}
