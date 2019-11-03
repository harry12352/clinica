<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Billing;
use App\Doctor;
use App\Practice;
use App\Appointment;
use App\Patient;
use App\Clinic;

class appointmentcontroller extends Controller
{

    public function __construct(){

        $this->middleware('apps');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!empty(Auth::id())){
        return view('appointments.create');
    }
    else{
        echo "You need to login first";
    }
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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

    public function makeapp($id){
        $Id=$id;
        $patient=Patient::whereUserId(Auth::id())->first();


       $doctor=Doctor::whereId($Id)->first();

       $clinic= $doctor->practices;


        return view('appointments.create',compact('doctor','clinic','patient'));


    }


     






    public function submitapp(Request $request,$id){


         $timeslot=$request->input('time');

         $check=Appointment::whereDateTime($timeslot)->first();

        if(!empty($check)){

            return view('errors.full_timeslots');
        }

        else{
        $Id=$id;

        $doc=Doctor::whereId($Id)->first();
        $name=$doc->doctor_name;
        $patient=Patient::whereUserId(Auth::id())->first();

        $clinic=Clinic::whereId($request->input('clinic'))->first();

        $clinicId=$clinic->id;

        $clinicName=$clinic->clinic_name;

        $appointment= new Appointment();

        $appointment->name=$request->input('name');

         $appointment->address=$request->input('address');

          $appointment->region=$request->input('region');

           $appointment->country=$request->input('country');

           $appointment->date_time=$request->input('time');

           $appointment->clinic_name=$clinicName;

            $appointment->doctor_id=$Id;
               $appointment->doctor_name=$name;

            $patient->appointments()->save($appointment);

            $app=Appointment::whereDateTime($timeslot)->first();

            $practice=Practice::whereDoctorId($Id)
            ->where('clinic_id','LIKE','%'.$clinicId.'%')->first();

            $fee=$practice->fee;

            return view('appointments.confirmapp',compact('app','fee'));

}

    }

    public function confirm($id,$fee){


        $Id=$id;
        $Fee=$fee;

        return view('appointments.billing',compact('Id','Fee'));

        

    }


    public function cancelapp($id){

        $app=Appointment::find($id);
        $app->delete();

        return redirect('patients');


    }


    public function billing(Request $request,$id){


        $Id=$id;

        $cardno=$request->input('no');

        $fee=$request->input('fee');


        $appo=Appointment::find($Id);

        $billing=new Billing();


        $billing->card_number=$cardno;

        $billing->amount=$fee;

        $appo->billings()->save($billing);


        return redirect('patients');


    }








}
