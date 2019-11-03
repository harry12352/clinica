<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
     protected $fillable = [
        'name',
    ];

     public function doctors(){
       return $this->belongsToMany('App\Doctor');
    }
     public function diseases(){
       return $this->hasMany('App\Disease');
    }



}
