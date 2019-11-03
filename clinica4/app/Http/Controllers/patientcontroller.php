<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Patient;
use App\Prescription;
use App\Appointment;
use App\Doctor;
use App\PatientHistory;
use App\UpdateHistory;
use Illuminate\Support\Facades\Hash;
use App\Practice;
use App\Clinic;
//use App\Doctor;



class patientcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient=Patient::whereUserId(Auth::id())->first();
        $appointments=$patient->appointments;
        $his=$patient->pathis;
        $updatehis=$patient->updatehis;
        return view('patients.index',compact('patient','appointments','his','updatehis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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

        $patient=new Patient();

         $file=$request->file('file');
        //echo $name=$file->getClientOriginalName();
      
        if($file->isValid()){
            $name=$file->getClientOriginalName();
            $file->move('Patientimages',$name);
        }

        $patient->user_id=Auth::id();
        $patient->cnic=$request->input('cnic');
        $patient->patient_name=$user->name;
        $patient->email=$user->email;
        $patient->password=$user->password;
        $patient->age=$request->input('age');
        $patient->gender=$request->input('gender');
        $patient->phone_no=$request->input('phone');
        $patient->address=$request->input('address');
        $patient->path=$name;
        // $patient->experience=$request->input('experience');
        // $patient->status=$request->input('status');

        $user->patients()->save($patient);

        return redirect('patients');
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
        $Id=$id;
        $user=User::find(Auth::id());

        $patient=Patient::find($Id);

        return view('patients.edit',compact('user','patient'));
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
                $patientId=$id;

        $userId=$request->input('id');


        $patient=patient::find($patientId);

        $user=User::find($userId);


        $user->name=$request->input('name');

        $user->email=$request->input('email');

        $user->password=$request->input('password');


        $user->save();


        $patient->patient_name=$request->input('name');

        $patient->email=$request->input('email');

        $patient->password=$request->input('password');

         $patient->cnic=$request->input('cnic');

        $patient->age=$request->input('age');

        $patient->address=$request->input('address');

        $patient->phone_no=$request->input('phone');

       // $patient->experience=$request->input('experience');

       // $patient->status=$request->input('status');

        //$patient->age=$request->input('age');


        $file=$request->file('file');

        $name=$file->getClientOriginalName();

        $file->move('Patientimages',$name);

        $patient->path=$name;


        $user->patients()->save($patient);


        return redirect('patients');

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



    public function  addpres($id,$Id,$ID,$clinic){

        $appid=$id;

        $patid=$Id;

        $docid=$ID;
        $Cname=$clinic;

       $clinic=Clinic::whereClinicName($Cname)->first();

        $clinicid=$clinic->id;



        $doc=Doctor::whereId($docid)->first();

        $check=Prescription::whereAppoinmentId($appid)->first();

        $doctor=Doctor::whereUserId(Auth::id())->first();

        $patient=Patient::whereId($patid)->first();

        if(!empty($doctor)){


        if(!empty($check)){

            return view('errors.already_made_presciption');
        }

        else{


        $patient=Patient::whereId($patid)->first();

        return view('doctors.addprescription',compact('appid','patient','patid'));
            }

          }


          else{


            return view('doctors.check_me',compact('appid','patid','doc','clinicid'));
          }

    }

    public function checkdoc(Request $request,$id,$ID,$doc,$clinicid){




      $appid=$id;

      $patid=$ID;

      $doctorId=$doc;
      $clinicId=$clinicid;

      $clinic=Clinic::whereId($clinicId)->first();

      $doctor=Doctor::whereId($doctorId)->first();

      $check=Prescription::whereAppoinmentId($appid)->first();

      $n=$request->input('password');

      $practice=Practice::whereDoctorId($doctorId)->whereClinicId($clinicId)->whereIdCode($n)->first();

       if(!empty($practice)){


        if(!empty($check)){

            return view('errors.already_made_presciption');
        }

        else{


        $patient=Patient::whereId($patid)->first();

        return view('doctors.addprescription',compact('appid','patient','patid'));
            }


        }

        else{

          return view('errors.doc_prompt');
        }

    }

    public function submitpres(Request $request,$id,$Id){

        $appid=$id;

        $patid=$Id;

        // $check=Prescription::whereAppoinmentId($appid)->first();

        // if(!empty($check)){

        //     echo "prescription already made";
        // }

        // else{

            $doc=Appointment::whereId($appid)->first();

            $h=$doc->doctor_id;

            $docs=Doctor::where('id','LIKE','%'.$h.'%')->first();

            echo $docName=$docs->doctor_name;

            $patient=Patient::whereId($patid)->first();

            $prescription=new Prescription();

            $prescription->appoinment_id=$appid;

            $prescription->name=$patient->patient_name;

            $prescription->address=$patient->address;

            $prescription->age=$patient->age;

            $prescription->notes=$request->input('notes');

            $prescription->diagnosis=$request->input('diagnosis');

            $prescription->medicines=$request->input('medicine');

            $prescription->lab_tests=$request->input('lab');

            $patient->prescriptions()->save($prescription);





            $prescriptions=Prescription::whereAppoinmentId($appid)->first();

            $pathis=new PatientHistory;

            $pathis->patient_id=$patid;

            $pathis->name=$patient->patient_name;

            $pathis->age=$patient->age;

             $pathis->address=$patient->address;

            $pathis->notes=$request->input('notes');

            $pathis->diagnosis=$request->input('diagnosis');

            $pathis->medicines=$request->input('medicine');

            $pathis->lab_tests=$request->input('lab');

            $pathis->doctor_treated=$docName;

            $prescriptions->pathis()->save($pathis);

            $doctor=Doctor::whereUserId(Auth::id())->first();

            if(!empty($doctor)){

                return redirect('doctors');
            }

            else{


            return redirect('clinics');

        }


        }


        public function updatepres($id,$Id,$ID,$clinic){


              $appid=$id;

              $patid=$Id;

              $docid=$ID;

           $Cname=$clinic;

       $clinic=Clinic::whereClinicName($Cname)->first();

        $clinicid=$clinic->id;


              $doc=Doctor::whereId($docid)->first();

              $check=Prescription::whereAppoinmentId($appid)->first();

              $doctor=Doctor::whereUserId(Auth::id())->first();

              if(!empty($doctor)){


              if(!empty($check)){

                   $diagnosis=$check->diagnosis;

                   $patient=Patient::whereId($patid)->first();



                return view('doctors.updatepres',compact('appid','patid','patient','diagnosis'));

              }
              else{

                return view('errors.updatepres_prompt');
              
              }

            }

            else{

               return view('doctors.check_me1',compact('appid','patid','doc','clinicid'));

            }
        }

        public function checkdocup(Request $request,$id,$ID,$doc,$clinicid){


      $appid=$id;

      $patid=$ID;

      $doctorId=$doc;

      $clinicId=$clinicid;

      $doctor=Doctor::whereId($doctorId)->first();

      $check=Prescription::whereAppoinmentId($appid)->first();

      $n=$request->input('password');

     $practice=Practice::whereDoctorId($doctorId)->whereClinicId($clinicId)->whereIdCode($n)->first();

       if(!empty($practice)){


        if(!empty($check)){

                   $diagnosis=$check->diagnosis;

                   $patient=Patient::whereId($patid)->first();



                return view('doctors.updatepres',compact('appid','patid','patient','diagnosis'));

              }
              else{

                return view('errors.updatepres_prompt');
              
        }

        }
        else{

          return view('errors.doc_prompt');
        }

      }




        public function submitupdatepres(Request $request,$id,$Id){


             $appid=$id;

             $patid=$Id;


            $doc=Appointment::whereId($appid)->first();

            $h=$doc->doctor_id;

            $docs=Doctor::where('id','LIKE','%'.$h.'%')->first();

            $docName=$docs->doctor_name;

            $patient=Patient::whereId($patid)->first();


            $prescriptions=Prescription::whereAppoinmentId($appid)->first();

            $updatehis=new UpdateHistory;

            $updatehis->patient_id=$patid;

            $updatehis->name=$patient->patient_name;

            $updatehis->age=$patient->age;

            $updatehis->address=$patient->address;

            $updatehis->notes=$request->input('notes');

            $updatehis->diagnosis=$request->input('diagnosis');

            $updatehis->medicines=$request->input('medicine');

            $updatehis->lab_tests=$request->input('lab');

            $updatehis->doctor_treated=$docName;

            $prescriptions->updatehis()->save($updatehis);

            
            $doctor=Doctor::whereUserId(Auth::id())->first();

            if(!empty($doctor)){

                return redirect('doctors');
            }

            else{


            return redirect('clinics');

        }

         

        }


        public function showpres($id,$Id,$ID,$clinic){

        $appid=$id; 
        $patid=$Id;

           $docid=$ID;

           $Cname=$clinic;

       $clinic=Clinic::whereClinicName($Cname)->first();

        $clinicid=$clinic->id;


              $doc=Doctor::whereId($docid)->first();

         $pres=Prescription::whereAppoinmentId($appid)->first();

        $presid=$pres->id;

        $doctor=Doctor::whereUserId(Auth::id())->first();

        if(!empty($doctor)){

          $pres=PatientHistory::wherePrescriptionId($presid)->wherePatientId($patid)->first();

          $uppres=UpdateHistory::wherePrescriptionId($presid)->wherePatientId($patid)->get();

           return view('doctors.show_pres',compact('pres','uppres'));
        }
           else{


            return view('doctors.check_me2',compact('doc','clinicid','patid','appid'));
          }


        }


        public function checkpres(Request $request,$docid,$clinicid,$patid,$appid){

          $Docid=$docid;
          $Clinicid=$clinicid;
          $Patid=$patid;
          $Appid=$appid;

             $pres=Prescription::whereAppoinmentId($Appid)->first();

        $presid=$pres->id;


         $n=$request->input('password');

      $practice=Practice::whereDoctorId($Docid)->whereClinicId($Clinicid)->whereIdCode($n)->first();

       if(!empty($practice)){


          $pres=PatientHistory::wherePrescriptionId($presid)->wherePatientId($Patid)->first();

          $uppres=UpdateHistory::wherePrescriptionId($presid)->wherePatientId($Patid)->get();

           return view('doctors.show_pres',compact('pres','uppres'));}

           else{

                return view('errors.doc_prompt');


           }



        }

        public function deleteme($id){

            $patid=$id;

            $pat=Patient::find($patid);

            $pat->delete();
        }

}
