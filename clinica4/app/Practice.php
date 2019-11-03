<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $fillable = [
        'fee','status',
    ];
     public function slots(){
       return $this->hasMany('App\Slot');
    }


}
