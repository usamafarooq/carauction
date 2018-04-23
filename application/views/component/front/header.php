<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url('front_assets/images/apple-favicon.png') ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('front_assets/images/favicon.png') ?>">

    <title>Car Hut - Car Dealer And Business HTML Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/bootstrap.min-v3.3.7.css') ?>">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/default.css') ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front_assets/css/style.css') ?>">

    <!-- Responsive stylesheet  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front_assets/css/responsive.css') ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- Main Header Start -->
    <header class="main-navbar"><!-- (main-herader-two) This is the original topbar class --> 
        <div class="topbar-area">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <ul class="topbar-info">
                          <li>
                            <select class="language-tab">
                              <?php 
                                foreach ($language as $l) {
                                  echo '<option value="'.$l['Short_Name'].'">'.$l['Name'].'</option>';
                                }
                              ?>
                                  <!-- <option value="eng">English</option>
                                  <option value="saab">Franch</option>
                                  <option value="opel">Japanies</option>
                                  <option value="audi">Arabic</option> -->
                            </select>
                          </li>
                          <li><p><i class="fa fa-phone" aria-hidden="true"></i> +99 123 123 123</p></li>
                          <li><p><i class="fa fa-envelope"></i>   <a href="#">info@yourmail.com</a></p></li>
                      </ul>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="topbar-right-content clearfix">
                        <div class="topbar-login">
                          <ul>
                            <li><button class="btn btn-default btn-login">Login</button></li>
                            <li><button class="btn btn-default btn-register">Register</button></li>
                          </ul>
                        </div>
                    </div> 
                  </div>
              </div>
          </div>
        </div>
        <!-- Header navbar start -->
        <div class="header-navbar" id="navbar-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index-one.html">
                                  <img class="logo-white" src="#" alt="">
                                </a>
                                <a class="navbar-brand" href="index-one.html">
                                  <img class="logo-black" src="<?php echo base_url('front_assets/images/logo/logo.png') ?>" alt="">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu mega-menu">
                                            <div class="row">
                                              <div class="col-md-3 col-sm-3">
                                                <li><a href="cars.html">All Vehicles</a></li>
                                                <li><a href="#">Automobile</a></li>
                                                <li><a href="#">Motor Cycle</a></li>
                                                <li><a href="#">Truck</a></li>
                                              </div>
                                              <div class="col-md-3 col-sm-3">
                                                <li><a href="#">Trailer</a></li>
                                                <li><a href="#">Recreation Vehicle (rv)</a></li>
                                                <li><a href="#">Boat</a></li>
                                                <li><a href="#">Industrial Equipments</a></li>
                                              </div>
                                              <div class="col-md-3 col-sm-3">
                                                <li><a href="#">Snowmobile</a></li>
                                                <li><a href="#">Bus</a></li>
                                                <li><a href="#">Jet Ski</a></li>
                                                <li><a href="#">Other Vehicles</a></li>
                                              </div>
                                              <div class="col-md-3 col-sm-3">
                                                <img src="<?php echo base_url('front_assets/images/car.png') ?>" alt="">
                                              </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Auctions <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Live Aucitons</a></li>
                                            <li><a href="#">Locations</a></li>
                                            <li><a href="#">Sales Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Car Shipping</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Support<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">How It Work</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">E-Contact Form</a></li>
                                            <li><a href="#">Have Us To Call You</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Member Reviews</a></li>
                                            <li><a href="#">Registration</a></li>
                                        </ul>
                                    </li> 
                                    <!--<li><a href="contact.html">Contact</a>
                                    </li>-->
                                    <li><div class="tobar-searchbox">
                                      <form class="searchbox">
                                          <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
                                          <input class="searchbox-submit">
                                          <span class="searchbox-icon">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                          </span>
                                      </form>
                                    </div></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>