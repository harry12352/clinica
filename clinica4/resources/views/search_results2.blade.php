@extends('layouts/app1')
@section('content')

        <!-- PAGE CONTENT -->
        <div id="page-content">           

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <!-- <h6>Best medical solutions</h6> -->
                            <h2>Welcome to Clinica</h2>

                            <h3>Your Search for your query <b>{{$q}}</b></h3>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
               @foreach($clinic as $clinics)

            <div class="container">
             
                <div class="row">
                    <div class="col-md-6">

                        <div class="image-box">

                            <!-- <div class="image-box-thumbnail">
                                <a href="{{ url ('onprofile',$clinics->doctor_id)}}">


                                <img src="{{ url ('Doctorimages',$clinics->path)}}" alt=""
                            >
                        </a>
                            </div>
 -->
                           <h1>Clinic Name:<h3><b>{{$q}}</b></h3></h1> 
                           <br>



                               <h4>Working Doctor:</h4>

                            <h5><a href="{{ url ('onprofile',$clinics->doctor_id)}}"><b>{{$clinics->doctor_name}}</b></a></h5>

                            <!-- <p> Working at{{$clinics->clinic_name}}</p> -->

                    


                                <a class="btn btn-default waves" href="{{ url ('makeapp',$clinics->doctor_id)}}">Make an appointment</a>
    


                        </div>
                    </div>
                </div>
            </div>
                    @endforeach


        @endsection


