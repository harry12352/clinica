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

                            <h3>Your Search for your query <b>{{$specialize->name}}</b></h3>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
               @foreach($details as $detail)

            <div class="container">
             
                <div class="row">
                    <div class="col-md-6">

                        <div class="image-box">

                            <div class="image-box-thumbnail">
                                <a href="{{ url ('onprofile',$detail->id)}}">


                                <img src="{{ url ('Doctorimages',$detail->path)}}" alt=""
                            >
                        </a>
                            </div><!-- image-box-thumbnail -->

                            <h4>{{$specialize->name}}</h4>
                            <h5><b>{{$detail->doctor_name}}</b></h5>

                            <p>{{$detail->experience}}</p>

                    


                                <a class="btn btn-default waves" href="{{ url ('makeapp',$detail->id)}}">Make an appointment</a>
    


                        </div>
                    </div>
                </div>
            </div>
                    @endforeach


        @endsection


