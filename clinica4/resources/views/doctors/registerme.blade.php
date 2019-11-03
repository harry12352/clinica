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

<table class="table css-serial" style=" border: 2px solid black;">
  <thead class="black white-text">
    <tr>
       <th scope="col">#</th>
      <th scope="col">Clinic Name</th>
      <th scope="col">Clinic address</th>
      <th scope="col">Clinic phone numer</th>
      <th scope="col">Register</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($clinic as $clinics)
    <tr>

      <td></td>


      <td>{{$clinics->clinic_name}}</td>
      <td>{{$clinics->address}}</td>
      <td>{{$clinics->contact_no}}</td>
      <td><a href="{{ url ('doregisteration',$clinics->id)}}">Register</a></td>
    </tr>
    @endforeach

  </tbody>
</table>


</div>


@endsection