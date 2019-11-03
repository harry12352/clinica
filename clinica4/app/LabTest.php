<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = [
        'description',
    ];

    public function prescriptions(){
       return $this->hasOne('App\Prescription');
    }

}
