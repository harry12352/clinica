<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'medicine_cost',
    ];

    public function prescriptions(){
       return $this->hasOne('App\Prescription');
    }

}

