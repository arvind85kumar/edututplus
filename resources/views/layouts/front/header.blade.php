<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Medicio landing page template for Health niche</title>

  <!-- css -->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}">
  <link href="{{ asset('assets/css/nivo-lightbox.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/owl.carousel.css')}}" rel="stylesheet" media="screen" />
  <link href="{{ asset('assets/css/owl.theme.css')}}" rel="stylesheet" media="screen" />
  <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">
  <!-- boxed bg -->
  <link id="bodybg" href="{{ asset('assets/bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="{{ asset('assets/color/default.css')}}" rel="stylesheet">
  @stack('css')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">Call us now +62 008 65 001</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index-2.html">
                    <img src="{{ asset('assets/img/logo.png')}}" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#doctor">Doctors</a></li>
            <li><a href="#facilities">Facilities</a></li>
            <li><a href="#pricing">Signup/ SignIn</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index-2.html">Home CTA</a></li>
                <li><a href="index-form.html">Home Form</a></li>
                <li><a href="index-video.html">Home video</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>