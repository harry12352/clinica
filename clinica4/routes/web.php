<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Doctor;
use App\Specialization;
use Illuminate\Http\Request;
use App\User;
use App\Education;
use App\Clinic;
use App\Practice;
use App\Appointment;
use App\Patient;



Route::get('/',function(){

return view('index');

});

Route::get('news',function(){

return view('news');

});


Route::get('dashboard',function(){

$user=User::find(Auth::id());
$admin=$user->heads;
$doc=Doctor::all();
$pat=Patient::all();
$clinic=Clinic::all();
$app=Appointment::all();
return view('adminpanel',compact('admin','doc','pat','clinic','app'));

});




Route::get('contact',function(){

return view('contact');

});

Route::get('single',function(){
   return view('single');
});

// Route::get('search/results',function(){

// return view('search_results');

// });

//Search moving to profile
Route::get('onprofile/{id}','doctorcontroller@openit');

//Clinic delete

Route::get('deleteclinic/{id}','clinikcontroller@deleteme');





//Search

Route::get('search',function(){

return view('doctor_search');

});

Route::any('find',function(){



   $q = Input::get ( 'item' );

   $sp = Specialization::where('name','LIKE','%'.$q.'%')->first();

   $doc=Doctor::whereDoctorName($q)->first();

   $clinic=Practice::whereClinicName($q)->get();



   if(!empty($sp->doctors)){

     $pass=$sp->doctors;
}
elseif(!empty($doc)){

return view('search_results1',compact('doc','q'));

}
elseif(!empty($clinic)){
  if(count($clinic)>0){

  return view('search_results2',compact('clinic','q'));}

  else{
    return redirect('not_find');

  }

}
else
{
  return redirect('not_find');
}

//$pass=$sp->doctors;

    if(count($pass) > 0)
        return view('search_results')->withDetails($pass)->withQuery ( $q )->withSpecialize($sp);
   else return redirect('not_find');
});


Route::get('not_find',function(){

 return view('errors.no_search_found');

});




//add specialization  

Route::get('addspecialization',function(){

	$sp=Specialization::all();


      return view('doctors.addspecialization', compact('sp'));

});


Route::post('insertspecialization',function(Request $request){
	 // $user=User::find(Auth::id());

  //     $doctor=$user->doctors;

  $doctor=Doctor::whereUserId(Auth::id())->first();

  $specialization=Specialization::find($request->input('specialization'));

  $doctor->specializations()->save($specialization);

  $show=$doctor->specializations;

  return redirect('doctors');

 // return view('doctors.index',compact('doctor','show'));



});

//Education
Route::get('addeducation',function(){

  return view('doctors.addeducation');

});


Route::post('inserteducation',function(Request $request){
     // $user=User::find(Auth::id());

     //  $doctor=$user->doctors;

 $doctor=Doctor::whereUserId(Auth::id())->first();

// $show=$doctor->specializations;

$education=new Education();

$education->degree_name=$request->input('degree');
$education->institution_name=$request->input('institute');

$doctor->educations()->save($education);

$educations=$doctor->educations;

return redirect('doctors');

//return view('doctors.index',compact('doctor','show','educations'));


});

//Doctor registration at Clinic 

Route::get('registerme',function(){


  $clinic=Clinic::all();

  return view('doctors.registerme' ,compact('clinic'));

});

Route::get('doregisteration/{id}',function($id){
  $clinicId=$id;
  $doctor=Doctor::whereUserId(Auth::id())->first();

  $new=$doctor->id;

  $practice=Practice::whereDoctorId($new)
  ->where('clinic_id','LIKE','%'.$clinicId.'%')->first();


  if(!empty($practice)){

    return view('errors.already_registered_prompt');

    
   
  }
  else{

   return view('doctors.doctor_register',compact('clinicId'));
  
 }

});


Route::post('doneregisteration/{clinicId}',function(Request $request,$id){

   $Id=$id;

   $clinic=Clinic::whereId($id)->first();
   $clinicName=$clinic->clinic_name;
   // return view('doctors.doctor_register',compact('clinicId'));

  $degree=$request->input('degree');
  $experience=$request->input('experience');
  $contract=$request->input('contract');
  $fee=$request->input('fee');
  $status=$request->input('status');
  $idcode=$request->input('password');


  if(($degree=='Mbbs'||$degree=='Bds')&& ($experience=='5 year'|| $experience=='10 year') &&($contract=='3 year'|| $contract=='4 year')&&($fee>=1000||$fee<3000)&&($status=='Active') ){

     $doctor=Doctor::whereUserId(Auth::id())->first();

     $doctorName=$doctor->doctor_name;
     $practice=new Practice();




     $practice->clinic_id=$Id;
     $practice->fee=$fee;
     $practice->status=$status;
     $practice->id_code=$idcode;
     $practice->clinic_name=$clinicName;
     $practice->doctor_name=$doctorName;
     $doctor->practices()->save($practice);


     return redirect('doctors');

    //  echo $clinic=Clinic::whereId($Id)->first();
    // echo $clinic->practices;
     
  }
  else{
    return view('errors.not_match');
  }

  // if($degree=='Mbbs'){
  //   echo 'done';
  // }

});

//deleting Doctor

Route::get('deletedoc/{id}','doctorcontroller@deleteme');


//Appoinment


Route::get('makeapp/{id}','appointmentcontroller@makeapp');
Route::post('submitapp/{id}','appointmentcontroller@submitapp');
Route::get('confirm/{id}/{fee}',[
  'uses'=>'appointmentcontroller@confirm',
  'as'=>'confirm'

]);

Route::get('cancel/{id}','appointmentcontroller@cancelapp');

Route::post('billing/{id}','appointmentcontroller@billing');




Route::get('deleteapp/{id}',function($id){
  $Id=$id;

  $app=Appointment::find($Id);

  $app->delete();

  return redirect('clinics');


});

Route::get('notlogin',function(){

  return view('errors.login_first');
});



//Patient History

Route::get('addpres/{id}/{Id}/{ID}/{clinic}',[
  'uses'=>'patientcontroller@addpres',
  'as'=>'addpres'

]);
Route::get('checkdoc/{id}/{Id}/{doc}/{clinicid}',[
  'uses'=>'patientcontroller@checkdoc',
  'as'=>'checkdoc'

]);


Route::post('submitpres/{id}/{Id}',[
  'uses'=>'patientcontroller@submitpres',
  'as'=>'submitpres'

]);

//Patient History Update

Route::get('updatepres/{id}/{Id}/{ID}/{clinic}',[
  'uses'=>'patientcontroller@updatepres',
  'as'=>'updatepres'
]);

Route::get('checkdocup/{id}/{Id}/{doc}/{clinicid}',[
  'uses'=>'patientcontroller@checkdocup',
  'as'=>'checkdocup'

]);

Route::post('submitupdatepres/{id}/{Id}',[
  'uses'=>'patientcontroller@submitupdatepres',
  'as'=>'submitupdatepres'

]);

//show Prescription
Route::get('showpres/{id}/{Id}/{ID}/{clinic}',[
  'uses'=>'patientcontroller@showpres',
  'as'=>'showpres'

]);

Route::get('checkpres/{docid}/{clinicid}/{patid}/{appid}',[
  'uses'=>'patientcontroller@checkpres',
  'as'=>'checkpres'

]);




//delete Patient

Route::get('deletepat/{id}','patientcontroller@deleteme');


//Register and Login
Route::get('continue',function(){

$doctor='doctor';
$patient='patient';
$clinic='clinic';

return view('continue',compact('doctor','patient','clinic'));


});

Route::get('go/{doctor}', 'HomeController@continue');
Route::get('go/{patient}', 'HomeController@continue');
Route::get('go/{clinic}', 'HomeController@continue');
Route::resource('doctors','doctorcontroller');
Route::resource('patients','patientcontroller');
Route::resource('clinics','clinikcontroller');
Route::resource('appointments','appointmentcontroller');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Managerial Routes

Route::get('head','headcontroller@index');
Route::get('now',function(){

  echo 'ok';
});
