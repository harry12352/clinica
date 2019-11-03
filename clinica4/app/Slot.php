<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    public function apointments(){
       return $this->hasOne('App\Appointment');
    }

}
