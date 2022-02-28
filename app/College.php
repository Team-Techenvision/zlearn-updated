<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //

    public function Program_Namedemo(){
        return $this->belongsto('App\Program_Name', 'program_type', 'id');
    }
}


