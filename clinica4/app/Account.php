<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
     protected $fillable = [
        'account_no',
    ];
     public function billings(){
       return $this->belongsToMany('App\Billings');
    }

    public function imageable(){
       return $this->morphTo();
    }



}
