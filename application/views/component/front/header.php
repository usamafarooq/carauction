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
function Pagination($data, $limit = null, $current = null, $adjacents = null)
{
    $result = array();

    if (isset($data, $limit) === true)
    {
        $result = range(1, ceil($data / $limit));

        if (isset($current, $adjacents) === true)
        {
            if (($adjacents = floor($adjacents / 2) * 2 + 1) >= 1)
            {
                $result = array_slice($result, max(0, min(count($result) - $adjacents, intval($current) - ceil($adjacents / 2))), $adjacents);
            }
        }
    }

    return $result;
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

    <title>Car Hut</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/bootstrap.min-v3.3.7.css') ?>">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/default.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin_assets/assets/plugins/fullcalendar/fullcalendar.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/jquery-ui.min.css') ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front_assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front_assets/css/models.css') ?>">

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
                            <div id="google_translate_element"></div>
                            <!-- <select class="language-tab">
                              <?php 
                                foreach ($language as $l) {
                                  echo '<option value="'.$l['Short_Name'].'">'.$l['Name'].'</option>';
                                }
                              ?>
                            </select> -->
                          </li>
                          <li><p><i class="fa fa-phone" aria-hidden="true"></i> 6157077286</p></li>
                          <li><p><i class="fa fa-envelope"></i>   <a href="#">info@auctionglauto.com</a></p></li>
                      </ul>
                      <div id="google_translate_element"></div>
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
                                <a class="navbar-brand" href="<?php echo base_url() ?>">
                                  <img class="logo-white" src="<?php echo base_url('front_assets/images/logo/logo.png') ?>" alt="">
                                </a>
                                <a class="navbar-brand" href="<?php echo base_url() ?>">
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
                                            <li><a href="<?php echo base_url('pages/page/how-it-work') ?>">How It Work</a></li>
                                            <li><a href="<?php echo base_url('pages/page/faqs') ?>">FAQs</a></li>
                                            <li><a href="<?php echo base_url('pages/page/contact-us') ?>">Contact Us</a></li>
                                            <li><a href="<?php echo base_url('pages/page/e-contact') ?>">E-Contact Form</a></li>
                                            <li><a href="<?php echo base_url('pages/page/call-back') ?>">Have Us To Call You</a></li>
                                            <li><a href="<?php echo base_url('pages/page/about-us') ?>">About Us</a></li>
                                            <li><a href="<?php echo base_url('reviews') ?>">Member Reviews</a></li>
                                            <?php if (!$this->session->userdata('user_id')) { ?>
                                            <li><a href="<?php echo base_url('register') ?>">Registration</a></li>
                                            <?php } ?>
                                        </ul>
                                    </li> 
                                    <?php if ($this->session->userdata('user_id')) { ?>
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('my_account') ?>">Dashboard</a></li>
                                        <li><a href="<?php echo base_url('account_activation') ?>">Account Activation</a></li>
                                        <li><a href="<?php echo base_url('save-search') ?>">Save Search</a></li>
                                        <li><a href="<?php echo base_url('watchlist') ?>">Watchlist</a></li>
                                        <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Document center</a>
                                          <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url('document_center/waiting') ?>">Waiting for e-Signature</a></li>
                                            <li><a href="<?php echo base_url('document_center/processing') ?>">Processing</a></li>
                                            <li><a href="<?php echo base_url('document_center/completed') ?>">Completed</a></li>
                                          </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('bidding_limit') ?>">Bidding Limit</a></li>
                                        <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                                          <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url('profile/personal') ?>">Personal Information</a></li>
                                            <li><a href="<?php echo base_url('profile/billing') ?>">Billing Information</a></li>
                                            <li><a href="<?php echo base_url('profile/account') ?>">Login and Password</a></li>
                                            <li><a href="<?php echo base_url('profile/membership') ?>">Membership</a></li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>
                                    <?php } ?>
                                    <!--<li><a href="contact.html">Contact</a>
                                    </li>-->
                                    <li><div class="tobar-searchbox">
                                      <form class="searchbox" method="post" action="<?php echo base_url('listing/search') ?>">
                                          <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp(event)" required>
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
          <form method="post" action="<?php echo base_url('listing/search') ?>">
            <div class="col-md-3 col-sm-6">
              <div class="search-col">
                <select name="type">
                  <option selected>All Vehicle Types</option>
                  <?php 
                    foreach ($vehicle_type as $v) {
                  ?>
                  <option value="<?php echo $v['Name'] ?>"><?php echo $v['Name'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="search-col">
                <select name="start_year">
                  <?php 
                    for($i=date('Y');$i<=date('Y');$i--)
                    {
                      $selected = '';
                      if($i == 1900){

                        $selected = 'selected';
                      }
                        echo '<option value='.$i.' '.$selected.'>'.$i.'</option>';
                        if($i == 1900){break;}
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="search-col">
                <select name="end_year">
                  <?php 
                    for($i=date('Y');$i<=date('Y');$i--)
                    {
                      $selected = '';
                      if($i == date('Y')){

                        $selected = 'selected';
                      }
                        echo '<option value='.$i.' '.$selected.'>'.$i.'</option>';
                        if($i == 1900){break;}
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="search-col">
                <select name="make" class="make_id">
                  <option value="" selected>All Makes</option>
                  <?php 
                    foreach ($make as $v) {
                  ?>
                  <option value="<?php echo $v['Name'] ?>" data-id="<?php echo $v['id'] ?>"><?php echo $v['Name'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="search-col">
                <select name="model" id="model_dropdown">
                  <option value="" selected>All Model</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="search-col">
                <p class="car-price">
                  Price Range: <span id="amount"></span>
                </p>
                <div id="slider-range"></div>
                <input type="hidden" name="min" id="amount1" value="10000">
                <input type="hidden" name="max" id="amount2" value="50000">
              </div>
            </div>
            <div class="col-md-3 col-sm-12">
              <div class="search-col">
                <button class="btn btn-default my-btn" type="submit">Search Car</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>