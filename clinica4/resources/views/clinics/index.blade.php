@extends('layouts.app1')
@section('content')
<style>
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

  
</style>

<div class="container">
   <h2><b>Clinic Details</b></h2>

<table class="table table-striped css-serial" style="  border: 2px solid black;">
  <thead>
    <tr>
       <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
       <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td>{{$clinic->id}}</td>
      <td>{{$clinic->clinic_name}}</td>
      <td>{{$clinic->email}}</td>
       <td>{{$clinic->address}}</td>
        <td>{{$clinic->contact_no}}</td>
        <td>
          <a href="{{ route ('clinics.edit',$clinic->id)}}">Edit</a>
        </td>

    </tr>

  </tbody>
</table>

<br>
<br>


     <h2><b>Registered Doctors</b></h2>



  <table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
         <th scope="col">#</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Fee</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($details as $clinic)
    <tr>
      <td></td>
      <td>{{$clinic->doctor_name}}</td>
      <td>{{$clinic->fee}}</td>
      <td>{{$clinic->status}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
</table>

<br>



   <h2><b>Apointments</b></h2>


<table class="table table-striped css-serial" style="  border: 2px solid black;">
  <thead>
    <tr>


      <th scope="col">#</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Patient Address</th>
       <th scope="col">Country</th>
        <th scope="col">Region</th>
        <th scope="col">Date and Time</th>
        <th scope="col">Add prescription</th>
          <th scope="col">Update prescription</th>
           <th scope="col">Show prescription</th>
        <th scope="col">Action</th>



         </tr>
  </thead>
  <tbody>
     @foreach($search as $appointment)
    <tr>
      <td></td>
      
      <td>{{$appointment->doctor_name}}</td>
        <td>{{$appointment->name}}</td>
          <td>{{$appointment->address}}</td>
            <td>{{$appointment->country}}</td>
              <td>{{$appointment->region}}</td>
                <td>{{$appointment->date_time}}</td>
                 <td><a href="{{ route ('addpres',[$appointment->id,$appointment->patient_id,$appointment->doctor_id,$appointment->clinic_name]) }}">Add</a></td>
                 <td>
                   <a href="{{ route ('updatepres',[$appointment->id,$appointment->patient_id,$appointment->doctor_id,$appointment->clinic_name]) }}">Update</a>

           </td>
           <td>
             <a href="{{ route ('showpres',[$appointment->id,$appointment->patient_id,$appointment->doctor_id,$appointment->clinic_name]) }}">Show</a>
           </td>
                <td><a href="{{ url ('deleteapp',$appointment->id)}}">Delete</a></td>
                
    </tr>

    @endforeach
  </tbody>
</table>









</div>
@endsection

