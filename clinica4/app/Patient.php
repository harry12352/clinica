<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable = [
        'cnic', 'patient_name', 'age','gender','phone_no','path','address',
    ];


    public function pathis(){
       return $this->hasMany('App\PatientHistory');
    }

    public function appointments(){
       return $this->hasMany('App\Appointment');
    }

    public function prescriptions(){

        return $this->hasMany('App\Prescription');
    }

     public function updatehis(){

        return $this->hasMany('App\UpdateHistory');
    }



}
