<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'name','address','age','notes','diagnosis','medicines','lab_tests',
    ];
     public function pathis(){
       return $this->hasOne('App\PatientHistory');
    }

    public function medicines(){
       return $this->hasOne('App\Medicine');
    }
    public function lab_tests(){
       return $this->belongsToMany('App\LabTest');
    }

    public function updatehis(){
       return $this->hasMany('App\UpdateHistory');
    }



}
