<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class headcontroller extends Controller
{
    public function __construct(){

    	$this->middleware('heads');
    }

    public function index(){
    	echo "you are in moderator view";
    }

}
