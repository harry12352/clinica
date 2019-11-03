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

            <div class="container">
             
                <div class="row">
                    <div class="col-md-6">

                        <div class="image-box">

                            <div class="image-box-thumbnail">
                                <a href="{{ url ('onprofile',$doc->id)}}">


                                <img src="{{ url ('Doctorimages',$doc->path)}}" alt=""
                            >
                        </a>
                            </div><!-- image-box-thumbnail -->

                            <h4></h4>
                            <h5><b>{{$doc->doctor_name}}</b></h5>

                            <p>{{$doc->experience}}</p>

                    


                                <a class="btn btn-default waves" href="{{ url ('makeapp',$doc->id)}}">Make an appointment</a>
    


                        </div>
                    </div>
                </div>
            </div>
            


        @endsection


