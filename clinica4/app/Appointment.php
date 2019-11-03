<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'clinic_name','date_time','country','region','name','address',
    ];

     public function billings(){
       return $this->hasOne('App\Billing');
    }

    public function prescriptions(){

    	return $this->hasOne('App\Prescription');
    }

}
