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

                        <form id="contact-form" name="appointment-form" method="post" action="#">
                            <fieldset>

                                <div class="row">
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="first_name" type="text" name="first_name" placeholder="" required>
                                            <span></span>
                                            <label for="first_name">First Name</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="last_name" type="text" name="last_name" placeholder="" required>
                                            <span></span>
                                            <label for="last_name">Last Name</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="email" type="text" name="email" placeholder="" required>
                                            <span></span>
                                            <label for="email">E-mail</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="phone" type="text" name="phone" placeholder="" required>
                                            <span></span>
                                            <label for="phone">Phone</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

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

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <select class="col-12" id="doctor" name="doctor">
                                                <option value="-1" disabled selected>Choose a doctor</option>
                                                <option value="1">Chris Martin</option>
                                                <option value="2">Marisa Carter</option>
                                                <option value="3">John William</option>
                                                <option value="4">Martha Davis</option>
                                                <option value="5">Maria Johnson</option>
                                                <option value="6">John Haynes</option>
                                            </select>
                                            <span></span>
                                            <i class="fa fa-angle-down"></i>
                                            <label for="doctor">Doctor</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="date" type="date" name="date" required>
                                            <span></span>
                                            <label for="date">Date</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="hours" type="time" name="hours" required>
                                            <span></span>
                                            <label for="hours">Hours</label>
                                        </p>

                                    </div><!-- col -->
                                </div><!-- row -->

                                <p>
                                    <textarea class="col-12" id="observations" name="observations" rows="5" cols="25" placeholder="" required></textarea>
                                    <span></span>
                                    <label for="observations">Observations</label>
                                </p>

                                <button class="btn btn-default waves" id="submit" type="submit" name="submit" value="">Make appointment</button>

                            </fieldset>
                        </form>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- PAGE CONTENT -->

@endsection
