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
     <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">

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
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- ALTERNATIVE STYLES -->
    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" href="{{ asset ('assets/styles/css/themes/lite-purple.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/styles/vendor/perfect-scrollbar.css')}}">



</head>

<body class="sticky-header header-classic footer-parallax" >

    <div id="main-container">

        <!-- HEADER -->
        <header id="header" >

            <div class="container" style="height: 00px;">
                <div class="row">
                    <div class="col-md-3">

                        <!-- LOGO -->
                        <div id="logo">
                            <a href="/">
                                <img src="{{ asset ('assets/images/logo-trans.png')}}" alt="">
                            </a>
                        </div><!-- LOGO -->

                    </div><!-- col -->
                    <div class="col-md-9">

                        <!-- MENU -->
                        <nav>

                            <a class="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>

                            <ul class="menu clearfix" id="menu">
                                <li class="dropdown active">
                                    <a href="/">Home</a>
                                    <!-- <ul>
                                        <li><a class="waves" href="index.html">Home 1</a></li>
                                        <li><a class="waves" href="index-2.html">Home 2</a></li>
                                        <li><a class="waves" href="index-3.html">Home 3</a></li>
                                    </ul> -->
                                </li>
                            <!--     <li class="dropdown">
                                    <a href="contact">Contact</a>
 -->                                    <!-- <ul>
                                        <li><a class="waves" href="about.html">About 1</a></li>
                                        <li><a class="waves" href="about-2.html">About 2</a></li>
                                    </ul> -->
                              <!--   </li>
                                <li class="dropdown">
                                    <a href="services.html">Services</a>
 -->                                    <!-- <ul>
                                        <li><a class="waves" href="services.html">Services 1</a></li>
                                        <li><a class="waves" href="services-2.html">Services 2</a></li>
                                    </ul> -->
                                <!-- </li>
                                <li class="dropdown">
                                    <a href="team.html">Team</a>
 -->                                   <!--  <ul>
                                        <li><a class="waves" href="team.html">Chris Martin</a></li>
                                        <li><a class="waves" href="team.html">Marisa Carter</a></li>
                                        <li><a class="waves" href="team.html">John William</a></li>
                                        <li><a class="waves" href="team.html">Martha Davis</a></li>
                                    </ul> -->
                             <!--    </li>
                                <li class="dropdown">
                                    <a href="news">News</a>
 -->                                    <!-- <ul>
                                        <li><a class="waves" href="news.html">News right sidebar</a></li>
                                        <li><a class="waves" href="news-2.html">News left sidebar</a></li>
                                        <li><a class="waves" href="news-3.html">News no sidebar</a></li>
                                        <li><a class="waves" href="news-single.html">News single</a></li>
                                    </ul> -->
                                <!-- </li> -->
                               <!--  <li class="dropdown">
                                    <a href="contact.html">Contact</a>
                                    <ul>
                                        <li><a class="waves" href="contact.html">Contact 1</a></li>
                                        <li><a class="waves" href="contact-2.html">Contact 2</a></li>
                                    </ul>
                                </li> -->
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
                                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/home">My profile</a>
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
