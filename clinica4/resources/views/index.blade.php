<!doctype html>
<html>


<!-- Mirrored from smart-pixel.tech/smartmed/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 10:54:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Clinica</title>

    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-180x180.png">
    <meta name="msapplication-TileImage" content="mstile.png">
    <meta name="msapplication-TileColor" content="#02a9ff">
    <meta name="theme-color" content="#02a9ff">

    <!-- FONTS -->
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/bootstrap/css/bootstrap.min.css')}}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset ('assets/fonts/fontawesome/css/font-awesome.min.css')}}">

    <!-- JUSTICE ICONS -->
    <link rel="stylesheet" href="{{ asset ('assets/fonts/smartmed-icons/css/smartmed-icons.min.css')}}">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/fancybox/jquery.fancybox.min.css')}}">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/owl-carousel/owl.carousel.min.css')}}">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.html')}}">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/animations/animate.min.css')}}">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="{{ asset ('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/pages-style.css')}}">

    <!-- THEME OPTIONS -->
    <!-- <link rel="stylesheet" href="{{ asset ('assets/plugins/theme-options/theme-options.css')}}"> -->

    <!-- ALTERNATIVE STYLES -->
    <link rel="stylesheet" href="#" data-style="styles">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



</head>

<body class="sticky-header header-center footer-parallax">

    <div id="main-container">

        <!-- HEADER -->
        <header id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <!-- MENU -->
                        <nav>

                            <a class="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>

                            <ul class="menu clearfix" id="menu-left">
                                <li class="dropdown active">
                                    <a href="/">Home</a>
                                    <!-- <ul>
                                        <li><a class="waves" href="index.html">Home 1</a></li>
                                        <li><a class="waves" href="index-2.html">Home 2</a></li>
                                        <li><a class="waves" href="index-3.html">Home 3</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdown">
                                    <a href="contact">Contact</a>
                                    <!-- <ul>
                                        <li><a class="waves" href="about.html">About 1</a></li>
                                        <li><a class="waves" href="about-2.html">About 2</a></li>
                                    </ul> -->
                                </li>
<!--                                 <li class="dropdown">
                                    <a href="services.html">Services</a> -->
                                    <!-- <ul>
                                        <li><a class="waves" href="services.html">Services 1</a></li>
                                        <li><a class="waves" href="services-2.html">Services 2</a></li>
                                    </ul> -->
                                <!-- </li> -->
                            </ul>

                        </nav>

                    </div><!-- col -->
                    <div class="col-md-4">

                        <!-- LOGO -->
                        <div id="logo">
                            <a href="/">
                                <img src="{{ asset ('assets/images/logo-trans.png')}}" alt="" style="margin-top:-35px">
                            </a>
                        </div><!-- LOGO -->

                    </div><!-- col -->
                    <div class="col-md-4">

                        <!-- MENU -->
                        <nav>

                            <ul class="menu clearfix" id="menu-right">
                                <!-- <li class="dropdown">
                                    <a href="team.html">Team</a> -->
                                    <!-- <ul>
                                        <li><a class="waves" href="team.html">Chris Martin</a></li>
                                        <li><a class="waves" href="team.html">Marisa Carter</a></li>
                                        <li><a class="waves" href="team.html">John William</a></li>
                                        <li><a class="waves" href="team.html">Martha Davis</a></li>
                                    </ul> -->
                                <!-- </li> -->
                                <li class="dropdown">
                                    <a href="news">News</a>
                                    <!-- <ul>
                                        <li><a class="waves" href="news.html">News right sidebar</a></li>
                                        <li><a class="waves" href="news-2.html">News left sidebar</a></li>
                                        <li><a class="waves" href="news-3.html">News no sidebar</a></li>
                                        <li><a class="waves" href="news-single.html">News single</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="contact.html">Contact</a>
                                    <ul>
                                        <li><a class="waves" href="contact.html">Contact 1</a></li>
                                        <li><a class="waves" href="contact-2.html">Contact 2</a></li>
                                    </ul>
                                </li> -->

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a href="/home"> My profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                        </nav>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </header><!-- HEADER -->

        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div class="main-slider-container">
                <div class="owl-carousel main-slider">
                    <div class="item" style="background-image:url(assets/images/index/main-slider/bg-slide-1.jpg);">

                        <div class="slide-overlay"></div>

                        <div class="slide-description">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <h1>The best team of doctors</h1>

                                        <p> At Clinica, we got the best available doctors for you. <br>
                                            So that we cater your issues in the best way possible.</p>

                                        <a class="btn btn-default waves" href="search">Make an appointment</a>

                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- container -->

                        </div><!-- slider-description -->

                    </div><!-- item -->
                    <div class="item" style="background-image:url(assets/images/index/main-slider/bg-slide-2.jpg);">

                        <div class="slide-description">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <h1>We are here for you</h1>

                                        <p> You will always find us here for you. <br>
                                            We give the best solutions possible for our esteemed customers.</p>

                                        <a class="btn btn-default waves" href="search">Make an appointment</a>

                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- container -->

                        </div><!-- slider-description -->

                    </div><!-- item -->
                    <div class="item" style="background-image:url(assets/images/index/main-slider/bg-slide-3.jpg);">

                        <div class="slide-overlay"></div>

                        <div class="slide-description">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <h1>Best medical healthcare solutions</h1>

                                        <p>Whether you want to book appointments, get medical reports or online prescriptions.<br>
                                            Do it at your own ease.</p>

                                        <a class="btn btn-default waves" href="search">Make an appointment</a>

                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- container -->

                        </div><!-- slider-description -->

                    </div><!-- item -->
                </div><!-- main-slider -->
            </div><!-- main-slider-container -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>Best medical solutions</h6>
                            <h2>Welcome to Clinica</h2>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container mb-4">
                <div class="row">
                    <div class="col-md-6 ml-auto">

                        <p class="text-md-right"> Clinica - Patient and clinic management system is an online platform for both patients and doctors where they can interact with each other and perform several different activities according to their needs. In this one stop solution,Doctors can manage their clinics and keep, manage and access their clinic's data online.
                        </p>

                    </div><!-- col -->
                    <div class="col-md-6 mr-auto">

                        <p>On the other hand, patients can book online appointments, search doctors in their area, city, by specialization or by their names. In short, this project has the potential to be a standalone useful product and it provides an opportunity to bring both the stakeholders i.e doctors and regular patients on a single platform to perform their inter-related activities.</p>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12">

                        <p class="text-center"><a class="btn btn-default waves" href="#">Read more</a></p>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->


            <section class="full-section dark-section parallax" id="section-3" data-stellar-background-ratio="0.3">

                <div class="full-section-overlay-color"></div>

                <div class="full-section-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="headline text-center">

                                    <h6>What we do</h6>
                                    <h2>Our Services</h2>

                                </div><!-- headline -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp">

                                    <i class="smartmed-icon-first-aid-kit-2"></i>

                                    <div class="service-box-content">

                                        <h4>Doctor and Clinic Registeration</h4>

                                        <p>On our site, you can register yourself as doctor and can work for a registered clinic at the same time.
                                            </p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.1s">

                                    <i class="smartmed-icon-cardiogram-4"></i>

                                    <div class="service-box-content">

                                        <h4>Search facilities</h4>

                                        <p>As a patient or a visitor of the site you can search and view doctors and clinics registered on Clinica.
                                            </p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.2s">

                                    <i class="smartmed-icon-bones"></i>

                                    <div class="service-box-content">

                                        <h4>Online Appointment Scheduling</h4>

                                        <p>As a patient account, you can search and book different appointments from our registered clinics online.
                                            </p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp">

                                    <i class="smartmed-icon-first-aid-kit-2"></i>

                                    <div class="service-box-content">

                                        <h4>Electronic medical records</h4>

                                        <p>With a patient account you can always have your records updated and saved on Clinica and you can acces sthem anytime, anywhere.
                                            </p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.1s">

                                    <i class="smartmed-icon-cardiogram-4"></i>
                                    

                                    <div class="service-box-content">

                                        <h4>Clinic Management services</h4>

                                        <p>Registered clinics can have a space where they can manage scheduled appointments, patient histories and much more easily.
                                            </p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.2s">

                                    <i class="smartmed-icon-bones"></i>

                                    <div class="service-box-content">

                                        <h4>Shared Patient History</h4>

                                        <p> At Clinica, all users have access to a shared patient history so that they can be used for better medical decisions at any time easily.
                                            </p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                </div><!-- full-section-container -->
            </section><!-- full-section -->

           
           
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>Be up to date</h6>
                            <h2>Latest medical news</h2>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="blog-article sticky-post">

                            <div class="blog-article-thumbnail">

                                <a class="date" href="#">
                                    <small>Jan</small>
                                    <span>15</span>
                                    <small>2019</small>
                                </a>
                                <a href="single"><img src="{{ asset ('assets/images/blog/image-1.jpg')}}" alt=""></a>

                            </div><!-- blog-article-thumbnail -->

                            <h4 class="blog-article-title"><a href="single">Causes and treatment of gingivitis</a></h4>

                            <div class="blog-article-details">
                                by <a class="author" href="#">Admin</a>
                                in <a class="category" href="#">Stomatology</a>
                                <a class="comments" href="#">2 comments</a>
                            </div><!-- blog-article-details -->

                            <div class="blog-article-content">

                                <p>Donec aliquam lorem quis nibh viverra sed vehicula. Donec pharetra lacus in dolor duis
                                    ultricies mollis eget sit amet ipsum non omis amet...</p>

                                <a href="single">Read More</a>

                            </div><!-- blog-article-content -->

                        </div><!-- blog-article -->

                    </div><!-- col -->
                    <div class="col-lg-6">

                        <div class="blog-article style-2">

                            <div class="row">
                                <div class="col-md-3">

                                    <div class="blog-article-thumbnail">

                                        <a href="single"><img src="{{ asset ('assets/images/blog/image-2.jpg')}}" alt=""></a>

                                    </div><!-- blog-article-thumbnail -->

                                </div>
                                <div class="col-md-9 pt-3 pt-md-0">

                                    <h4 class="blog-article-title"><a href="single">Brain Activity Predicts Fear of Pain</a></h4>

                                    <div class="blog-article-details">
                                        in <a class="date" href="#">Jan 12, 2019</a>
                                        by <a class="author" href="#">Admin</a>
                                        in <a class="category" href="#">Neurology</a>
                                        <a class="comments" href="#">4 comments</a>
                                    </div><!-- blog-article-details -->

                                    <div class="blog-article-content">

                                        <p>Proin aliquet auctor elit in mattis. Donec dui sapien, lacinia a neque eget, consequat
                                            malesuada tortor...</p>

                                    </div><!-- blog-article-content -->

                                </div>
                            </div>

                        </div><!-- blog-article -->

                        <div class="blog-article style-2">

                            <div class="row">
                                <div class="col-md-3">

                                    <div class="blog-article-thumbnail">

                                        <a href="single"><img src="{{ asset ('assets/images/blog/image-3.jpg')}}" alt=""></a>

                                    </div><!-- blog-article-thumbnail -->

                                </div>
                                <div class="col-md-9 pt-3 pt-md-0">

                                    <h4 class="blog-article-title"><a href="single">Is Chemotherapy on the Way Out?</a></h4>

                                    <div class="blog-article-details">
                                        in <a class="date" href="#">Jan 11, 2019</a>
                                        by <a class="author" href="#">Admin</a>
                                        in <a class="category" href="#">Oncology</a>
                                        <a class="comments" href="#">3 comments</a>
                                    </div><!-- blog-article-details -->

                                    <div class="blog-article-content">

                                        <p>Morbi consectetur ex dolor, quis bibendum ipsum lacinia sit amet. Duis sollicitudin
                                            condimentum libero...</p>

                                    </div><!-- blog-article-content -->

                                </div>
                            </div>

                        </div><!-- blog-article -->

                        <div class="blog-article">

                            <div class="row">
                                <div class="col-md-3">

                                    <div class="blog-article-thumbnail">

                                        <a href="single"><img src="{{ asset ('assets/images/blog/image-4.jpg')}}" alt=""></a>

                                    </div><!-- blog-article-thumbnail -->

                                </div>
                                <div class="col-md-9 pt-3 pt-md-0">

                                    <h4 class="blog-article-title"><a href="single">Developing a 'universal' blood test</a></h4>

                                    <div class="blog-article-details">
                                        in <a class="date" href="#">Jan 10, 2019</a>
                                        by <a class="author" href="#">Admin</a>
                                        in <a class="category" href="#">Cardiology</a>
                                        <a class="comments" href="#">2 comments</a>
                                    </div><!-- blog-article-details -->

                                    <div class="blog-article-content">

                                        <p>Nunc congue rutrum nunc, eget convallis mauris malesuada viverra. Curabitur lobortis
                                            tristique pulvinar...</p>

                                    </div><!-- blog-article-content -->

                                </div>
                            </div>

                        </div><!-- blog-article -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <br><br>

        </div><!-- PAGE CONTENT -->


        @include('include/footer')
