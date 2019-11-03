<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
      protected $fillable = [
        'clinic_name','address','contact_no'
    ];

     public function doctors(){
       return $this->hasMany('App\Doctors');
    }
     public function practices(){
       return $this->hasMany('App\Practice');
    }
    public function accounts(){

    	return $this->morphOne('App\Account','imageable');
    }



}
