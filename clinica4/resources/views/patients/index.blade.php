<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Clinica</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
​
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @include('include.headerpat')
  
  <style>
      .line {
    height: 1px;
    width: 420px;
    background-color:grey;
    
    display: inline-block;
   
  }
  .line1 {
    height: 1px;
    width: 310px;
    background-color:grey;
    
    display: inline-block;
   
  }
  .css-serial {
  counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Increment the serial number counter */
  content: counter(serial-number);  /* Display the counter */
}

th{
  font-size: 16px;
}

​
  </style>
</head>
  
  <body>
      <div class="container" style="border:60px solid #0080ff;" >
      <div class="container pt-5" >
      
      <div class="row mt-4">
          <div class="col-lg-4">
              <img src="{{ url ('Patientimages',$patient->path)}}" alt="" width="300px" height="350px">
          </div>
          <div class="col-lg-5">
              <h2 ><b>{{$patient->patient_name}}</b> <small style="font-size:14px; opacity: 0.6; font-weight: 600;" class="ml-3"><i class="fa fa-map-marker" style="font-size:20px;  opacity: 0.6;" aria-hidden="true"></i>{{$patient->address}}</small></h2>
              <!-- <p style="color: #0080ff;">General Physician</p> -->
​
             <!--  <small style="opacity: 0.6">RANKINGS</small>
              <h2>8,6 <i class="fa fa-star" style="font-size:20px; color:#0080ff;"></i>
                <i class="fa fa-star" style="font-size:20px; color:#0080ff;"></i>
                <i class="fa fa-star" style="font-size:20px; color:#0080ff;"></i>
                <i class="fa fa-star" style="font-size:20px; color:#0080ff;"></i>
                <i class="fa fa-star-o" style="font-size:20px;"></i>
            </h2>
 -->         <!--  <p>  <button type="button" class="btn btn-light mt-5"><i class="fa fa-envelope pr-1" aria-hidden="true"></i> Book appointment</button>
 -->  <br>
  <br>
  <br>
          <p>  <i class="fa fa-check pr-1" aria-hidden="true"></i>Contact Number:<b> {{$patient->phone_no}}</b>
          </p>

            <!-- <button type="button" class="btn btn-light mt-5" style="opacity: 0.6"> Report user</button>   </p>       -->
            
          <!--   <button type="button" class="btn mt-5 mr-2" style="opacity: 0.6"><i class="fa fa-eye pr-1" aria-hidden="true"></i> Appointment</button>
            <button type="button" class="btn mt-5" ><i class="fa fa-user pr-1" aria-hidden="true"></i> About</button> -->
           <!--  <span class="line"></span> -->
        </div>
      </div>
  </div>
​
  <div class="container">
    <div class="row">
     <!--  <div class="col-4">
        <h6 class="mt-4 mb-4" style="color: gray">Work......................................................</h6>
       <h4>XYZ CLINICS <button type="button" class="btn btn-light" style="color: #0080ff;"> primary</button></h4>
       <h6 style="color: gray">ABC square<br> New York, Nk 10038-778-8977</h6>
       
       
      <h4 class="mt-4">Metropolitian<br>CLinics </h4>
      <h6 style="color: gray">525 68th Street<br>New York, Nk 10038-778-8977</h6>
​
      <h6 class="mt-4 mb-4" style="color: gray">
      Practices......................................................</h6>
      <h6>General illness</h6>
      <h6>abc</h6>
      <h6>xyz</h6>
      <h6 class="mb-5">ENT</h6>
​
      </div> -->
  
      <div class="col-md-12" >
           <h2 style="margin-left: 320px;"><b>Personal Details</b></h2>
      <!-- <h6 style="color: gray" class="mt-4 mb-4">Contact Information <button type="button" class="btn btn-light" style="color: #0080ff;"> secondary</button></h6>
      <h6 class="mb-3">Phone:<span class="mr-5"></span>{{$patient->phone_no}}</h6>
      <h6 class="mb-3">Address:<span class="mr-5"></span>{{$patient->address}}</h6>
      <h6 class="mb-3">E-mail:<span class="mr-5"></span> <span class="pl-1"></span>{{$patient->email}}</h6> -->
      <!-- <h6 class="mb-3">Site:<span class="mr-5"></span>  <span class="pl-4"></span> www.edu.pk</h6> -->
      
 <!--      <h6 style="color: gray" class="mt-4 mb-4">Basic Information </h6>
      <h6 class="mb-3">Birthday:<span class="mr-5"></span> June 5, 1992</h6> -->
<!--       <h6 class="mb-3">Gender:<span class="mr-5"></span> <span class="pl-2"></span>{{$patient->gender}}</h6> -->

<table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
         <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Cnic</th>
       <th scope="col">Name</th>
      <th scope="col">Email </th>
      <th scope="col">Address</th>
      <th scope="col">Phone number</th>
        <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td>{{$patient->id}}</td>
      <td>{{$patient->cnic}}</td>
      <td>{{$patient->patient_name}}</td>
      <td>{{$patient->email}}</td>
      <td>{{$patient->address}}</td>
      <td>{{$patient->phone_no}}</td>
      <td><a href="{{ route ('patients.edit',$patient->id)}}">Edit</a></td>
    </tr>

  </tbody>
</table>

<br>
<br>
​
      </div>
    </div>


    <h2 style="margin-left: 320px;"><b>My Appoinments</b></h2>

    <table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
         <th scope="col">#</th>
       <th scope="col">Doctor Name</th>
      <th scope="col">Clinic Name</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Patient Address</th>
       <th scope="col">Country</th>
        <th scope="col">Region</th>
        <th scope="col">Date and Time</th>
    </tr>
  </thead>
  <tbody>

    @foreach($appointments as $appointment)
    <tr>
      <td></td>
      <td>{{$appointment->doctor_name}}</td>
      <td>{{$appointment->clinic_name}}</td>
        <td>{{$appointment->name}}</td>
          <td>{{$appointment->address}}</td>
            <td>{{$appointment->country}}</td>
              <td>{{$appointment->region}}</td>
                <td>{{$appointment->date_time}}</td>
    </tr>

    @endforeach

  </tbody>
</table>

<br>
<br>

 <h2 style="margin-left: 340px;"><b>My History</b></h2>


 <table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
        <th scope="col">#</th>
      <th scope="col">Prescription Id</th>
      <th scope="col">Name</th>
      <th scope="col">Doctor Treated By</th>
       <th scope="col">Address</th>
        <th scope="col">Age</th>       
          <th scope="col">Diagnosis</th>
           <th scope="col">Medicines</th>
            <th scope="col">Lab Test</th>
            
    </tr>
  </thead>
  <tbody>
    @foreach($his as $hist) 
    <tr>
      <td></td>
  
          <td>{{$hist->prescription_id}}</td>
        <td>{{$hist->name}}</td>
        <td>{{$hist->doctor_treated}}</td>
        <td>{{$hist->address}}</td>
        <td>{{$hist->age}}</td>
     
        <td>{{$hist->diagnosis}}</td>
        <td>{{$hist->medicines}}</td>
        <td>{{$hist->lab_tests}}</td>
          
    </tr>
    @endforeach


  </tbody>
</table>
<table  class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
        <th scope="col">#</th>
       <th scope="col">Prescription Id</th>
          <th scope="col">Patient name</th>
       <th scope="col">Notes</th>

    </tr>
  </thead>
  <tbody>
    @foreach($his as $hist)
    <tr>
      <td></td>
          <td>{{$hist->prescription_id}}</td>
        <td>{{$hist->name}}</td>
         <td>{{$hist->notes}}</td>
    </tr>
    @endforeach
  </tbody>
</table>



<br>
<br>

 <h2 style="margin-left: 340px;"><b>My Updated History</b></h2>


 <table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
         <th scope="col">#</th>
      <th scope="col">My Id</th>
      <th scope="col">Prescription Id</th>
      <th scope="col">Name</th>
      <th scope="col">Doctor Treated By</th>
       <th scope="col">Address</th>
        <th scope="col">Age</th>
      
          <th scope="col">Diagnosis</th>
           <th scope="col">Medicines</th>
            <th scope="col">Lab Test</th>
              
    </tr>
  </thead>
  <tbody>
    @foreach($updatehis as $hist) 
    <tr>
      <td></td>
        <td>{{$hist->patient_id}}</td>
          <td>{{$hist->prescription_id}}</td>
        <td>{{$hist->name}}</td>
        <td>{{$hist->doctor_treated}}</td>
        <td>{{$hist->address}}</td>
        <td>{{$hist->age}}</td>
    
        <td>{{$hist->diagnosis}}</td>
        <td>{{$hist->medicines}}</td>
        <td>{{$hist->lab_tests}}</td>
         
    </tr>
    @endforeach
  

  </tbody>
</table>

<table  class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
        <th scope="col">#</th>
       <th scope="col">Prescription Id</th>
          <th scope="col">Patient name</th>
       <th scope="col">Notes</th>

    </tr>
  </thead>
  <tbody>
    @foreach($updatehis as $hist)
    <tr>
      <td></td>
          <td>{{$hist->prescription_id}}</td>
        <td>{{$hist->name}}</td>
         <td>{{$hist->notes}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>
@include('include.footer')
   </body>
</html>




