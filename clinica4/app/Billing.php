<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $fillable = [
        'card_number','amount',
    ];

     public function accounts(){
       return $this->belongsToMany('App\Account');
    }


}
