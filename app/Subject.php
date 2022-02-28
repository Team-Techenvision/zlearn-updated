<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //

    public function Standerd()
    {
        return $this->hasOne('App\Standerd');
    }
}
