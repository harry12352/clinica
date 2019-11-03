@extends('layouts.app1')
@section('content')

<style type="text/css">
  body{
    background-color: #F1F1F1;
  }
</style>

<!-- <center style="margin-top: 100px;">
      <h2 style="font-family: courier;">
        Login As
      </h2>
    </center>
 -->
 <center>
 <h2 style="font-family: courier;">Login</h2>
</center>
 <div class="container" style="background-color: white;">
  
	<div style=" margin-bottom: 50px; text-align: justify; border: 1px solid black; padding: 20px;" class="row">

  <div class="col-xs-4 col-sm-4 col-lg-4">

    
  	<center>
      <h3 style="font-family: courier;" class="heading-1">For Doctors
      </h3>
    </center>
    <br>
  <!--   <p  style="font-family: courier;"  >
  	<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br> <br> 
    </p>
 -->  	<center>
  		<a href="{{ url ('go',$doctor)}}"><button  type="button" class="btn btn-success">Continue As Doctor</button>
  			</a>
  	</center>
  </div>


 <div class="col-xs-4 col-sm-4 col-lg-4">

  	<center>
  		<h3 style="font-family: courier;" class="heading-1">For Patients
  		</h3>
  	</center>
  	<br>
   <!--  <p style="font-family: courier;">
 	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br><br>
  </p>
 --> 	<center>
 		<a href="{{ url ('go',$patient)}}">
  		<button type="button" class="btn btn-info">Continue As Patient</button>
  		</a>
  	</center>
</div>
 <div class="col-xs-4 col-sm-4 col-lg-4">
 	<center>
  		<h3 style="font-family: courier;" class="heading-1">For Clinics
  		</h3>
  	</center>
  	<br>
  <!--   <p style="font-family: courier;">
 	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
<br><br>
</p> -->
 	<center>
 		<a href="{{ url ('go',$clinic)}}">
  		<button  type="button" class="btn btn-danger">Continue As Clinic</button>
  		</a>
  	</center>
 </div>
</div>
</div>


@endsection