<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = [
        'timeslot',
    ];
    public function slots(){
       return $this->hasMany('App\Slot');
    }


}
