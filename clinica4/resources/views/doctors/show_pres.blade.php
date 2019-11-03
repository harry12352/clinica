@extends('layouts.app1')

@section('content')
<style type="">
	
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


	 <h2><b>Prescription</b></h2>

<table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
        <th scope="col">#</th>
      <th scope="col">Prescription Id</th>
      <th scope="col"> Patient Name</th>
       <th scope="col">Address</th>
        <th scope="col">Age</th>       
          <th scope="col">Diagnosis</th>
           <th scope="col">Medicines</th>
            <th scope="col">Lab Test</th>
            
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <td></td>
  
          <td>{{$pres->prescription_id}}</td>
        <td>{{$pres->name}}</td>
 
        <td>{{$pres->address}}</td>
        <td>{{$pres->age}}</td>
     
        <td>{{$pres->diagnosis}}</td>
        <td>{{$pres->medicines}}</td>
        <td>{{$pres->lab_tests}}</td>
          
    </tr>
   


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

    <tr>
      <td></td>
          <td>{{$pres->prescription_id}}</td>
        <td>{{$pres->name}}</td>
         <td>{{$pres->notes}}</td>
    </tr>
   
  </tbody>
</table>



<br>
<br>

 <h2><b>Updated Prescription</b></h2>


 <table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
         <th scope="col">#</th>
      <th scope="col">Prescription Id</th>
      <th scope="col"> Patient Name</th>
       <th scope="col">Address</th>
        <th scope="col">Age</th>
      
          <th scope="col">Diagnosis</th>
           <th scope="col">Medicines</th>
            <th scope="col">Lab Test</th>
              
    </tr>
  </thead>
  <tbody>
    @foreach($uppres as $hist) 
    <tr>
      <td></td>
          <td>{{$hist->prescription_id}}</td>
        <td>{{$hist->name}}</td>
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
    @foreach($uppres as $hist)
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

@endsection