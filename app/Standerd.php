<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standerd extends Model
{
    //

    public function Subject()
    {
        return $this->hasMany('App\Subject');
    }
}
