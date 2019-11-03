<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Patient;
use App\Clinic;
use App\Doctor;
use App\Head;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function continue($user){

        if($user=='doctor'){
            return redirect('doctors/create');
        }
        elseif($user=='patient'){

            return redirect('patients/create');
        }
        else{
             return redirect('clinics/create');
        }


    }

    public function index()
    {
        $doctor=Doctor::whereUserId(Auth::id())->first();
         $patient=Patient::whereUserId(Auth::id())->first();
          $clinic=Clinic::whereUserId(Auth::id())->first();
          $head=Head::whereUserId(Auth::id())->first();



          if(!empty($patient->user_id)){
            return redirect('patients');
          }
          elseif(!empty($clinic->user_id)){
            return redirect('clinics');
          }

          elseif(!empty($head->user_id)){
            return redirect('head');
          }

          else{
            return redirect('doctors');
          }





        
       // return view('home');
    }

}
