<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Doctor;
use App\Specialization;
use App\Practice;
use App\Clinic;

class doctorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user=User::find(Auth::id());

        $doctor=Doctor::whereUserId(Auth::id())->first();

          $doctor=$user->doctors;
           $show=$doctor->specializations;
           $educations=$doctor->educations;
           $data=$doctor->practices;
           $appointments=$doctor->appointments;


         return view('doctors.index',compact('doctor','show','educations','data','appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
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

        $doctor=new Doctor();

         $file=$request->file('file');
            $name=$file->getClientOriginalName();
       $file->move('Doctorimages',$name);
    

        $doctor->user_id=Auth::id();
        $doctor->cnic=$request->input('cnic');
        $doctor->doctor_name=$user->name;
        $doctor->email=$user->email;
        $doctor->password=$user->password;
        $doctor->age=$request->input('age');
        $doctor->gender=$request->input('gender');
        $doctor->phone_no=$request->input('phone');
        $doctor->address=$request->input('address');
        $doctor->path=$name;
        $doctor->experience=$request->input('experience');
        $doctor->status=$request->input('status');

        $user->doctors()->save($doctor);

        return redirect('doctors');

        
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
        $user=User::find(Auth::id());
        $doctor=Doctor::find($id);

        return view('doctors.edit',compact('doctor','user'));


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
        $doctorId=$id;

        $userId=$request->input('id');


        $doctor=Doctor::find($doctorId);

        $user=User::find($userId);


        $user->name=$request->input('name');

        $user->email=$request->input('email');

        $user->password=$request->input('password');


        $user->save();


        $doctor->doctor_name=$request->input('name');

        $doctor->email=$request->input('email');

        $doctor->password=$request->input('password');

         $doctor->cnic=$request->input('cnic');

        $doctor->age=$request->input('age');

        $doctor->address=$request->input('address');

        $doctor->phone_no=$request->input('phone');

        $doctor->experience=$request->input('experience');

       // $doctor->status=$request->input('status');

        //$doctor->age=$request->input('age');


        $file=$request->file('file');

        $name=$file->getClientOriginalName();

        $file->move('Doctorimages',$name);

        $doctor->path=$name;


        $user->doctors()->save($doctor);


        return redirect('doctors');



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


    public function openit($id){

       // $user=User::find(Auth::id());

        $doctorId=$id;

       $doctor=Doctor::find($doctorId);

           $show=$doctor->specializations;
           $educations=$doctor->educations;
           $data=$doctor->practices;
           $appointments=$doctor->appointments;


         return view('doctors.doc_index2',compact('doctor','show','educations','data','appointments'));





    }

    public function deleteme($id){
        $docid=$id;

        $doc=Doctor::find( $docid);

        $doc->delete();
        return redirect('dashboard');
    }









}
