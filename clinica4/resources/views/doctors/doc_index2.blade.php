@include('include.header')
<style type="">
  
  .css-serial {
  counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Increment the serial number counter */
  content: counter(serial-number); 

   /* Display the counter */

  /* th{
    font-size: 40px;

   }
*/
}

th{
  font-size: 16px;
}
</style>
        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div id="page-header" class="parallax" data-stellar-background-ratio="0.3"
                 style="background-image: url(assets/images/backgrounds/page-header-4.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>Dr.{{$doctor->doctor_name}}</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                        <p class="text-center mb-5"><img src="{{ url ('Doctorimages',$doctor->path) }}" alt='no image' height="200px" width="500px"></p>

                    </div><!-- col -->
                    <div class="col-lg-7 col-xl-6 ml-auto">

                        <h2 class="mb-0"><b>{{$doctor->doctor_name}}</b></h2>
                        <p class="text-uppercase text-default-color"></p>

                        <br>
                        <p>
                            {{$doctor->experience}}
                        </p>


                      
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
            <div class="container">

            <a class="btn btn-default waves" href="{{ url ('makeapp',$doctor->id)}}">Make an appointment</a>
            </div>
            <br>


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
      <div class="col-12">
    <!--   <h6 style="color: gray" class="mt-4 mb-4">Contact Information <button type="button" class="btn btn-light" style="color: #0080ff;"></button></h6>
 -->      <!-- <h6 class="mb-3">Phone:<span class="mr-5"></span>{{$doctor->phone_no}}</h6>
      <h6 class="mb-3">Address:<span class="mr-5"></span>{{$doctor->address}}</h6>
      <h6 class="mb-3">E-mail:<span class="mr-5"></span> <span class="pl-1"></span>{{$doctor->email}}</h6>
 -->      <!-- <h6 class="mb-3">Site:<span class="mr-5"></span>  <span class="pl-4"></span> www.edu.pk</h6> -->
      
 <!--      <h6 style="color: gray" class="mt-4 mb-4">Basic Information </h6>
      <h6 class="mb-3">Birthday:<span class="mr-5"></span> June 5, 1992</h6> -->
  <!--     <h6 class="mb-3">Gender:<span class="mr-5"></span> <span class="pl-2"></span>{{$doctor->gender}}</h6>
      <h6 class="mb-3">Add specilization<span class="mr-5"></span> <span class="pl-2"></span><a href="addspecialization">add</a></h6>
 -->
 <h2><b>My Personal Details</b></h2>

      <table class="table table-striped css-serial" style=" border: 2px solid black">
  <thead>
    <tr>
        <th scope="col" class="new">#</th>
      <th scope="col">Name</th>
      <th scope="col">Cnic</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">E-mail</th>
      <th scope="col">Gender</th>
      <th scope="col">Age</th>
      <th scope="col">Specilaizations</th>
      <!-- <th scope="col"> Add Specilizations</th> -->
       <!-- <th scope="col">Edit</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td>{{$doctor->doctor_name}}</td>
      <td>{{$doctor->cnic}}</td>
      <td>{{$doctor->phone_no}}</td>
      <td>{{$doctor->address}}</td>
      <td>{{$doctor->email}}</td>
      <td>{{$doctor->gender}}</td>
      <td>{{$doctor->age}}</td>
      <td>@foreach($show as $shows)

        {{$shows->name,}}

@endforeach
      </td>
  
      <!-- <td><a href="addspecialization">Add Specialization</a></td> -->
     <!--  <td>
        <a href="{{ route ('doctors.edit',$doctor->id)}}">Edit</a>
      </td> -->
    </tr>
     </tbody>
</table>
<br>
<br>


<h2><b>My Education <!-- (<ins><a href="addeducation">Add Education</a></ins>) --></b></h2>

 <table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
        <th scope="col">#</th>
      <th scope="col">Degree</th>
      <th scope="col">Institute Name</th>
    
         </tr>
  </thead>
  <tbody>
    @foreach($educations as $education)
    <tr>
      <td></td>
      <td>{{$education->degree_name}}</td>
      <td>{{$education->institution_name}}</td>
         </tr>
         @endforeach
     </tbody>
</table>

<br>
<br>


<h2><b>Present Working at Clinics</b></h2>



<table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>
       <th scope="col">#</th>
      <th scope="col">Clinic Name</th>
      <th scope="col">Fee</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $datas)
    <tr>
      <td></td>
         <td>{{$datas->clinic_name}}</td>
      <td>{{$datas->fee}}</td>
      <td>{{$datas->status}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<br>
<br>


<h2><b>My Appointments</b></h2>


<table class="table table-striped css-serial" style=" border: 2px solid black;">
  <thead>
    <tr>


      <th scope="col">#</th>
       <th scope="col">Clinic Name</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Patient Address</th>
       <th scope="col">Country</th>
        <th scope="col">Region</th>
        <th scope="col">Date and Time</th>
          <!-- <th scope="col">Add Prescription</th> -->


         </tr>
  </thead>
  <tbody>
     @foreach($appointments as $appointment)
    <tr>
      <td></td>
      
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
      </div>
    </div>
  </div>
  
  @include('include.footer')


         
