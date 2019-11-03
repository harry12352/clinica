<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
     protected $fillable = [
        'cnic', 'doctor_name', 'age','gender','phone_no','path','address','experience','status',
    ];

     public function specializations(){
       return $this->belongsToMany('App\Specialization');
    }

      public function educations(){
       return $this->hasMany('App\Education');
    }

     public function practices(){
       return $this->hasMany('App\Practice');
    }

    public function accounts(){

    	return $this->morphOne('App\Account','imageable');
    }

    public function appointments(){

      return $this->hasMany('App\Appointment');
    }



}
