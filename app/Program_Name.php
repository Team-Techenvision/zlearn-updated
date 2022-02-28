<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program_Name extends Model
{
    //
    protected $table = 'program_name';

    public function College(){
        return $this->hasOne('App\College');
    }
}
