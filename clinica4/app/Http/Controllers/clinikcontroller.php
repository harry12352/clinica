<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Clinic;
use App\Appointment;


class clinikcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::find(Auth::id());

        $clinic=$user->clinics;

        $clinics=Clinic::whereUserId(Auth::id())->first();
        $details=$clinics->practices;

        $clininName=$clinics->clinic_name;

        $search=Appointment::whereClinicName( $clininName)->get();

        return view('clinics.index',compact('clinic','details','search'));

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clinics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=User::find(Auth::id());

        $clinic=new Clinic();

        $clinic->clinic_name=$user->name;
        $clinic->email=$user->email;
        $clinic->password=$user->password;
        $clinic->address=$request->input('address');
        $clinic->contact_no=$request->input('phone');

        $user->clinics()->save($clinic);


        return redirect('clinics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $clinic=Clinic::find($id);

        $userid=$clinic->user_id;

        $user=User::find($userid);

        return view('clinics.edit',compact('clinic','user'));


    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $Id=$id;
         $user=$request->input('id');


         $clinic=Clinic::find($Id);
         $userr=User::find($user);


         $name=$request->input('name');
         $email=$request->input('email');
         $password=$request->input('password');
         $address=$request->input('address');
         $phone=$request->input('phone');



         $userr->name=$name;
         $userr->email=$email;
         $userr->password=$password;

         $userr->save();


         $clinic->clinic_name=$name;
         $clinic->email=$email;
         $clinic->password=$password;
         $clinic->address=$address;
         $clinic->contact_no=$phone;

         $userr->clinics()->save($clinic);

         return redirect('clinics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function deleteme($id){

        $clinicid=$id;

        $clinic=Clinic::find($clinicid);

        $clinic->delete();








    }
}