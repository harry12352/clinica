@extends('layouts/app1')
@section('content')
        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div id="page-header" class="parallax" data-stellar-background-ratio="0.3"
                 style="background-image: url(assets/images/backgrounds/page-header-4.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">



                            <h1>Appointment</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>Best medical solutions</h6>
                            <h2>Make an appointment</h2>


                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12">

                        <form name="appointment-form" method="POST" action="{{ url ('submitapp',$doctor->id)}}">
                            @csrf
                            <fieldset>

                                <div class="row">
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="first_name" type="text" name="name" value="{{$patient->patient_name}}">
                                            <span></span>
                                            <label for="name"><b> Name</b></label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" type="text" name="address" value="{{$patient->address}}">
                                            <span></span>
                                            <label for="address"><b>Address</b></label>
                                        </p>

                                    </div>


                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" type="text" name="country" placeholder="" required>
                                            <span></span>
                                            <label for="address"><b>country</b></label>
                                        </p>

                                    </div>

                                     <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" type="text" name="region" placeholder="" required>
                                            <span></span>
                                            <label for="address"><b>region</b></label>
                                        </p>

                                    </div>


                                     <div class="col-md-6 col-lg-3">

                                        <p>
                                             <input type="datetime-local" name="time" class="col-12">
                                            <span></span>
                                            <label for="time"><b>date&time(8AM-6PM)</b></label>
                                        </p>

                                    </div>




















                                    <!--





                                    

                                     col
                                     <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="email" type="text" name="email" placeholder="" required>
                                            <span></span>
                                            <label for="email">E-mail</label>
                                        </p>

                                    </div> --><!-- col -->
<!--                                     <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="phone" type="text" name="phone" placeholder="" required>
                                            <span></span>
                                            <label for="phone">Phone</label>
                                        </p>

                                    </div> --><!-- col -->
<!--                                     <div class="col-md-6 col-lg-3">

                                        <p>
                                            <select class="col-12" id="speciality" name="speciality">
                                                <option value="-1" disabled selected>Choose a speciality</option>
                                                <option value="1">Cardiology</option>
                                                <option value="2">Neurology</option>
                                                <option value="3">Surgery</option>
                                                <option value="4">Gynaecology</option>
                                                <option value="5">Ophthalmology</option>
                                                <option value="6">Stomatology</option>
                                            </select>
                                            <span></span>
                                            <i class="fa fa-angle-down"></i>
                                            <label for="speciality">Speciality</label>
                                        </p>

                                    </div> --><!-- col -->
                                   <!--  <div class="col-md-6 col-lg-3">
                                        Clinic Name

                                    
                                            @foreach($clinic as $clinics)
                                            <select class="col-12" id="doctor" name="clinic">
                                                <option value="{{$clinics->id}}" name="clinic">{{$clinics->clinic_name}}</option>
                                    
                                             </select>
                                             @endforeach
                                            <span></span>
                                            <i class="fa fa-angle-down"></i>
                                            <label for="doctor">Doctor</label>
                                        

                                    </div>
 -->
                                        <div class="wrap-input100 input100-select">
                    <span class="label-input100"><b>Clinic Name</b></span>
                    <div>
                        <select class="selection-2" name="clinic">
                            @foreach($clinic as $clinics)

                            <option value="{{$clinics->clinic_id}}" name="clinic">{{$clinics->clinic_name}}</option>

                            @endforeach

                        
                            <!-- <option>eCommerce Bussiness</option>
                            <option>UI/UX Design</option>
                            <option>Online Services</option>
 -->                        </select>
                    </div>
                    <span class="focus-input100"></span>
                </div>




                                    <!-- col
                                     <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="date" type="date" name="date" required>
                                            <span></span>
                                            <label for="date">Date</label>
                                        </p>

                                    </div> --><!-- col -->
<!--                                     <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="hours" type="time" name="hours" required>
                                            <span></span>
                                            <label for="hours">Hours</label>
                                        </p>

                                    </div> col -->
                               <!--  </div>

                                <p>
 --><!--                                     <textarea class="col-12" id="observations" name="observations" rows="5" cols="25" placeholder="" required></textarea>
                                    <span></span>
                                    <label for="observations">Observations</label>
                                </p> -->

                            </div>

            


                               <button class="btn btn-default waves" id="submit" type="submit" name="submit" value="">Make appointment</button>

                            </fieldset>
                        </form>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- PAGE CONTENT -->

@endsection
