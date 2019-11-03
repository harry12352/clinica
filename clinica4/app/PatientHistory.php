<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientHistory extends Model
{
      protected $fillable = [

      	  'name','address','age','notes','diagnosis','medicines','lab_tests',
    ];

}
