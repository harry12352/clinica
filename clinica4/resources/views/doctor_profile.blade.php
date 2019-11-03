@extends('layouts/app1')
@section('content')
        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div id="page-header" class="parallax" data-stellar-background-ratio="0.3"
                 style="background-image: url(assets/images/backgrounds/page-header-3.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>Team</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                        <p class="text-center mb-5"><img src="{{ asset ('assets/images/about/image-2.jpg')}}" alt=""></p>

                    </div><!-- col -->
                    <div class="col-lg-7 col-xl-6 ml-auto">

                        <h2 class="mb-0">Chris Martin</h2>
                        <p class="text-uppercase text-default-color">Neurologist</p>

                        <br>

                        <p>In hac habitasse platea dictumst. Sed pret ium a sem non aliquam. Morbi elementum eros quis sapien lobortis faucibus. Morbi
                            rhoncus, nisi ac suscipit consectetur, arcu felis vulput ate tortor, nec semper dolor odio eget orci. Aliquam commodo phasellus
                            sed metus at ligula tincidunt condimentum.</p>

                        <p>Vivamus dictum dignissim tellus, ut condimentum mauris tempus ut. Donec lacinia, turpis eget tempor ultricies, odio metus
                            ultrices massa, non interdum purus lectus id tortor. Phasellus eleifend odio.</p>

                        <p>Aenean sed est in velit rutrum congue. Quisque aliquam eleifend ultrices. Aliquam molestie nibh id risus laoreet pulvinar.
                            Nullam dictum sagittis dui sed dignissim</p>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h5 class="text-uppercase mt-5"><strong>Make an appointment</strong></h5>

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
                                            <input class="col-12" id="speciality" type="text" name="speciality" placeholder="" value="Neurology"
                                                   required readonly>
                                            <span></span>
                                            <label for="speciality">Speciality</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="doctor" type="text" name="doctor" placeholder="" value="Chris Martin" required readonly>
                                            <span></span>
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
                                    <textarea class="col-12" id="observations" name="observations" rows="3" cols="25" placeholder="" required></textarea>
                                    <span></span>
                                    <label for="observations">Observations</label>
                                </p>

                                <button class="btn btn-default waves" id="submit" type="submit" name="submit" value="">Make appointment</button>

                            </fieldset>
                        </form>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <section class="full-section dark-section parallax" id="section-6" data-stellar-background-ratio="0.3">

                <div class="full-section-overlay-color"></div>

                <div class="full-section-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <h1 class="text-center">Best medical solutions</h1>

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                    <br>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-10 ml-auto mr-auto">

                                <p class="text-center">Aliquam erat volutpat. Quisque facilisis neque cursus eros pharetra, id hendrerit nunc porta. Sed ut
                                    nulla lobortis, accumsan arcu vitae, semper justo. Praesent ante leo, feugiat in lacus non, posuere ultricies nibh.</p>

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                </div><!-- full-section-container -->
            </section><!-- full-section -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>Who I am</h6>
                            <h2>My Practice Areas</h2>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12">

                        <div class="timeline">
                            <div class="row align-items-start">
                                <div class="col-md-5 mr-auto timeline-item wow fadeInUp">

                                    <h4>Child Neurology</h4>
                                    <p>Etiam nec odio vestibulum est mattis efficitu r vel ut magna. Pellentesque sit amet
                                        tellus blandit nec odio vestibulum est mattis efficitu.</p>

                                </div><!-- col -->
                                <div class="col-md-5 ml-auto timeline-item wow fadeInUp">

                                    <h4>Clinical Neurophysiology</h4>
                                    <p>Maecenas eget euismod nulla, sit amet dignissim lacus. Phasellus nec nunc convallis, feugiat ante eget, laoreet
                                        metus. Maecenas lacinia elit vel dolor fringilla.</p>

                                </div><!-- col -->
                            </div><!-- row -->
                            <div class="row align-items-start">
                                <div class="col-md-5 mr-auto timeline-item wow fadeInUp">

                                    <h4>Neurodevelopmental Disabilities</h4>
                                    <p>Nulla et elit molestie, vehicula turpis quis, placerat dolor. Cras quis ipsum quis ipsum iaculis tincidunt.
                                        Suspendisse lacinia arcu tortor, ut vulputate neque pharetra quis.</p>

                                </div><!-- col -->
                                <div class="col-md-5 ml-auto timeline-item wow fadeInUp">

                                    <h4>Neuromuscular Medicine</h4>
                                    <p>Duis posuere orci a tellus tincidunt malesuada. Suspendisse tincidunt blandit est at sodales. Sed at vehicula mi.
                                        Vivamus elementum sapien dui, a tincidunt.</p>

                                </div><!-- col -->
                            </div><!-- row -->
                            <div class="row align-items-start">
                                <div class="col-md-5 mr-auto timeline-item wow fadeInUp">

                                    <h4>Vascular Neurology</h4>
                                    <p>Suspendisse urna nibh, pellentesque ac tincidunt egestas, luctus non nulla. Aliquam cursus vitae elit eget mollis.
                                        Duis accumsan rhoncus nunc, sed ultricies velit.</p>

                                </div><!-- col -->
                                <div class="col-md-5 ml-auto timeline-item wow fadeInUp">

                                    <h4>Clinical Neuromuscular Pathology</h4>
                                    <p>Aliquam erat volutpat. Quisque facilisis neque cursus eros pharetra, id hendrerit nunc porta. Sed ut nulla lobortis,
                                        accumsan arcu vitae, semper justo.</p>

                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- timline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- PAGE CONTENT -->

@endsection