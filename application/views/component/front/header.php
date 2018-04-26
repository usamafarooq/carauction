<?php 
function get_difrreance($date)
{
  $then = $date;

  $then = new DateTime($then);
  $now = new DateTime();
  $sinceThen = $then->diff($now);
  $minutes = '';
  if ($sinceThen->y) {
    $minutes .=  $sinceThen->y. ' Years ';
  }
  if ($sinceThen->m) {
    $minutes .=  $sinceThen->m. ' months ';
  }
  if ($sinceThen->d) {
    $minutes .=  $sinceThen->d. ' days ';
  }
  if ($sinceThen->h) {
    $minutes .=  $sinceThen->h. ' hours ';
  }
  if ($sinceThen->i) {
    $minutes .=  $sinceThen->i. ' minutes ';
  }
  return $minutes;
}

function get_single_difrreance($date)
{
  $then = $date;

  $then = new DateTime($then);
  $now = new DateTime();
  $sinceThen = $then->diff($now);
  $minutes = '';
  if ($sinceThen->y) {
    $minutes .=  $sinceThen->y. 'Y : ';
  }
  if ($sinceThen->m) {
    $minutes .=  $sinceThen->m. 'M : ';
  }
  if ($sinceThen->d) {
    $minutes .=  $sinceThen->d. 'D : ';
  }
  if ($sinceThen->h) {
    $minutes .=  $sinceThen->h. 'H : ';
  }
  if ($sinceThen->i) {
    $minutes .=  $sinceThen->i. 'M';
  }
  return $minutes;
}
?>

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
                            <?php if (!$this->session->userdata('user_id')) { ?>
                            <li><a href="<?php echo base_url('login') ?>"><button class="btn btn-default btn-login">Login</button></a></li>
                            <li><a href="<?php echo base_url('register') ?>"><button class="btn btn-default btn-register">Register</button></a></li>
                            <?php } else{ ?>
                            <li><a href="<?php echo base_url('home/logout') ?>"><button class="btn btn-default btn-login">Logout</button></a></li>
                            <?php } ?>
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
                                              <div class="col-md-9">
                                                <?php 
                                                  foreach ($vehicle_type as $v) {
                                                ?>
                                                <div class="col-md-3">
                                                  <li><a href="<?php echo base_url('listing/category/'.$v['id']) ?>"><?php echo $v['Name'] ?></a></li>
                                                </div>
                                                <?php } ?>
                                              </div>
                                              <!-- <div class="col-md-3 col-sm-3">
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
                                              </div> -->
                                              <div class="col-md-3 col-sm-3">
                                                <img src="<?php echo base_url('front_assets/images/car.png') ?>" alt="">
                                              </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Auctions <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url('live_auctions') ?>">Live Aucitons</a></li>
                                            <li><a href="<?php echo base_url('locations') ?>">Locations</a></li>
                                            <li><a href="<?php echo base_url('sales_calender') ?>">Sales Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url('car_shipping') ?>">Car Shipping</a></li>
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
                                            <?php if (!$this->session->userdata('user_id')) { ?>
                                            <li><a href="<?php echo base_url('register') ?>">Registration</a></li>
                                            <?php } ?>
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

    <?php if(isset($home)){ ?>
    <!-- Banner start -->
    <section class="banner-area parallax overlay-black">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner-box">
              <h2>Search, Bid, Win! </br> The#1 Online Insurance </br> Auto Auction Site in North America </h2>
              <h3 class="typewrite" data-period="2000" data-type='[ "165 Locations nationwide with more than 300,000+ Salvage and Clean Title Vehicles in stock featuring over 150 Weekly Open to the Public Live Auctions that have something for everyone.", "We have latest models", "Get your new car today" ]'> 
              </h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php } else{ ?>

    <!-- Page Title bar -->
    <section class="defult-page-title overlay-black">
      <div class="angle-overlay"></div>
      <div class="container clearfix">
          <div class="row">
              <div class="col-md-6">
                  <div class="page-title-box center991">
                      <h2>Salvage, Repairable and Clean Title Vehicles for Sale</h2>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="page-title-box center991 clearfix">
                  <img src="<?php echo base_url('front_assets/images/car.png') ?>" alt="">
                </div>
              </div>
          </div>
      </div>
    </section>
    <?php } ?>

    <!-- welcome start -->
    <section class="car-search-bar mt0">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Any Brand</option>
                <option value="1">Audi</option>
                <option value="2">BMW</option>
                <option value="3">Mercedes-Benz</option>
                <option value="4">Opel</option>
                <option value="5">Porsche</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Any Type</option>
                <option value="1">F01 ActiveHybrid 7</option>
                <option value="2">Mercedes-Benz SLC-Class</option>
                <option value="3">BMW badge on a 1931 Dixi</option>
                <option value="4">Porsche 911</option>
                <option value="5">Volkswagen Golf</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Select Year</option>
                <option value="1">2014</option>
                <option value="2">2015</option>
                <option value="3">2016</option>
                <option value="4">2017</option>
                <option value="5">2018</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Choose Color</option>
                <option value="1">Black</option>
                <option value="2">Blue</option>
                <option value="3">Green</option>
                <option value="4">Red </option>
                <option value="5">Matt Black</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="search-col">
              <select>
                <option value="0" selected>Mileage Per Litter</option>
                <option value="1">12 Km</option>
                <option value="2">10 Km</option>
                <option value="3">8 Km</option>
                <option value="4">16 Km</option>
                <option value="5">5 Km</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="search-col">
              <p class="car-price">
                Price Range: <span id="amount"></span>
              </p>
              <div id="slider-range"></div>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="search-col">
              <button class="btn btn-default my-btn" type="submit">Search Car</button>
            </div>
          </div>
        </div>
      </div>
    </section>