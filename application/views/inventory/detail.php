

    <!-- Car Details start -->
    <section class="car-details-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if ($this->session->userdata('user_id')) { ?>
            <a class="notification-link-simple open-model pull-right n-<?=($detail['watch_status'] != '2' && $detail['watch'] > 0) ?'on':'off'?>" href="javascrip:;" data-model="noti<?php echo $detail['id'] ?>-model">
              <span class="notify-icon"></span><?=($detail['watch_status'] != '2' && $detail['watch'] > 0) ?'On':'Off'?>
            </a>
            <!-- <button class="btn btn-deafult  open-model pull-right" style="margin-left: 10px" data-model="noti<?php echo $detail['id'] ?>-model">Notification</button> -->
            <?php } ?>
            <button <?php if(isset($detail['watch']) && $detail['watch'] > 0) echo 'style="display: none"' ?> class="btn btn-deafult watchlist pull-right open-model <?php if ($this->session->userdata('user_id')) echo 'add-watch' ?>" data-model="watch-model" <?php if ($this->session->userdata('user_id')) echo 'data-id="'.$detail['id'].'"' ?> <?php if ($this->session->userdata('user_id')) echo 'data-url="'.base_url('listing/watch/').'"' ?> >+Watch</button>
            <?php if ($this->session->userdata('user_id')) { ?>
            <button <?php if(isset($detail['watch']) && $detail['watch'] == 0) echo 'style="display: none"' ?>  class="btn btn-deafult watchlist pull-right open-model <?php if ($this->session->userdata('user_id')) echo 'add-unwatch' ?>" data-model="watch-model" <?php if ($this->session->userdata('user_id')) echo 'data-id="'.$detail['id'].'"' ?> <?php if ($this->session->userdata('user_id')) echo 'data-url="'.base_url('listing/unwatch/').'"' ?> >-Unwatch</button>
            <?php } ?>
            <?php if (!$this->session->userdata('user_id')) { ?>
            <div class="glue-modal watch-model" id="fpc-bid-info-modal">
              <div class="title">
                Please Enter to the Site                            
                <span class="modal-arrow-up"></span>
                <div class="close-modal"></div>
              </div>
              <div class="content">
                <p>You must be logged in or registered in order to be able to bid</p>
                <p><a href="<?php echo base_url('login') ?>">Login to account</a> or <a href="<?php echo base_url('register') ?>">Register for FREE</a></p>                        
              </div>
            </div>
            <?php }else{ ?>
            <div class="glue-modal noti<?php echo $detail['id'] ?>-model" id="fpc-bid-info-modal" style="width: 370px !important;">
              <div class="title">
                Watchlist Notifications                           
                <span class="modal-arrow-up"></span>
                <div class="close-modal"></div>
              </div>
              <div class="content">
                <form class="site-form" action="<?php echo base_url('listing/watchlist_notification/') ?>" method="post" id="watchlist_notification">
                  <label class="select-label select-label--first">
                    <select class="wn-notify_status hasCustomSelect" name="status" id="notify_status" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                      <option value="1">Always</option>
                      <option value="2">Never</option>
                    </select>
                    <span class="custom-select wn-notify_status" style="display: inline-block;">
                      <span class="custom-selectInner" style="width: 100px; display: inline-block;">Always</span>
                    </span>                                
                  </label>
                  <label class="select-label">
                    <select class="wn-notify_method hasCustomSelect" name="type" id="notify_method" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                      <option value="1">Email</option>
                      <option value="2">SMS</option>
                      <option value="3">Email + SMS</option>
                    </select>
                    <span class="custom-select wn-notify_method custom-selectOpen" style="display: inline-block;">
                      <span class="custom-selectInner" style="width: 100px; display: inline-block;">Email</span>
                    </span>                                
                  </label>
                  <input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
                  <input type="hidden" name="inventory_id" value="<?php echo $detail['id'] ?>">
                  <div class="caption">
                    <span>Email:</span> 
                    <strong><?php echo $user['email'] ?></strong>
                  </div>
                  <!-- <a class="button yBtn_24" href="#" id="shc-submit" style="margin-top: 5px;">Save Settings</a> -->
                  <button type="submit" class="button yBtn_24" href="#" id="shc-submit">Save Settings</button>
                  <img class="spinner" src="/img/ajax-loader.gif" style="display:none" alt="Please Wait">
                </form>                    
              </div>
            </div>
            <?php } ?>
          </div>
        </div><br>
        <div class="row">
            <div class="col-lg-6 col-md-8">
              <div class="car-details-col">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false"> 
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <?php 
                      $images = explode(',', $detail['images']);
                      $active = 0;
                      for ($i=0; $i < sizeof($images); $i++) { 
                        if (strpos($images[$i], 'http') !== false) {
                          $image = $images[$i];
                        }
                        else{
                          $image = base_url(str_replace(' ', '', $images[$i]));
                        }
                    ?>
                    <div class="item <?php echo ($active == 0 ) ? 'active' : NULL ?> ">
                      <img src="<?php echo base_url('front_assets/images/ajax-loader-gif.gif') ?>" class="ajax-img" data-src="<?php echo $image ?>" alt="">
                       <!-- <div class="carousel-caption">
                        <h3>Best Features</h3>
                      </div> -->
                    </div>
                    <?php 
                        if ($active == 0) {
                          $active = 1;
                        }
                      } 
                    ?>
                    <!-- End Item -->  
                  </div><!-- End Carousel Inner -->
                  <ul class="nav nav-pills nav-justified">
                    <?php 
                      for ($i=0; $i < sizeof($images); $i++) { 
                        if (strpos($images[$i], 'http') !== false) {
                          $image = $images[$i];
                        }
                        else{
                          $image = base_url(str_replace(' ', '', $images[$i]));
                        }
                        echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"><a href="#"><img src="'.base_url('front_assets/images/ajax-loader-gif.gif').'" class="ajax-img" data-src="'.$image.'" alt=""></a></li>';
                      }
                    ?>
                  </ul>
                </div><!-- End Carousel -->
                <div class="car-description">
                  <h3>few description about <span><?php echo $detail['Name'] ?></span></h3>
                <div class="specification-box">
                  <h3>Sale Information</h3>
                  <div class="specification-content">
                    <div class="row">
                        <ul class="specification-list">
                          <li><strong>Bid Status:</strong> <span>Bid Status</span></li>
                          <li><strong>Sale Location:</strong><span>  <?php echo $detail['Sale_Location'] ?> <a href="javascript:;" class="open-model" data-model="map-model">Show on map</a></span></li>
                          <div class="glue-modal map-model" id="lgm-map-modal">
                            <div class="title">
                              <?php echo $detail['Sale_Location'] ?>                            
                              <span class="modal-arrow-up"></span>
                              <div class="close-modal"></div>
                            </div>
                            <div class="content">
                               <div id="location-map"></div>               
                            </div>
                          </div>
                          <li><strong>Vehicle Location:</strong><span> <?php echo $detail['Vehicle_Location'] ?></span></li>
                          <li><strong>Sale Status:</strong><span> <?php echo $detail['Sale_Status'] ?></span></li>
                          <li><strong>Sale Date:</strong><span>  <?php echo date('l, F d, Y', strtotime($detail['Sale_Date'])) ?></span></li>
                          <li><strong>Data Last Updated: </strong><span>  <?php echo date('d/m/Y H:i', strtotime($detail['updated_at'])) ?></span></li>
                          <li><strong>Item#:</strong><span>  <?php echo $detail['Item'] ?></span></li>
                          <h5><strong>SOLD AS IS, WHERE IS - ALL SALES ARE FINAL</strong></h5>
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="specification-box">
                  <h3>Shipping Estimator</h3>
                  <hr class="custo-line">
                  <div class="specification-content">
                    <div class="row">
                        <ul class="specification-list">
                          <li><strong>Shipping price:</strong> <span style="font-weight: 800;color: #a11808;"> Request Custom Quote Change Country</span></li>
                          </ul>
                      </div>
                  </div>
                </div>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere doloremque iure architecto nobis sint rerum nemo consequuntur, maiores voluptatibus dolore quo qui fugiat soluta cumque voluptates exercitationem optio non libero error perspiciatis sequi incidunt. Architecto id explicabo libero aspernatur aperiam voluptatibus doloribus, autem, repudiandae suscipit nisi in sunt ut ipsa error placeat vero quia corporis dolorem iusto porro, ad eos impedit! Fuga dicta modi ipsa, mollitia amet nihil ullam nam quia assumenda nesciunt tempora.</p>
                  <p class="text-hilight">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae minus ipsum, repellendus repellat obcaecati esse quae nisi, consectetur, mollitia provident voluptates doloremque.
                  </p> -->
                </div>

              </div>
            </div>
            <div class="col-lg-6 col-md-4">
              <div class="car-sidebar">
                 <div class="bid-box">
                  <h3>
                    <i class="fa fa-circle"></i>
                  Live Auction is About to Start </br> 
                  CURRENT BID $<?php echo number_format($detail['amount'], 2) ?><br>
                  Enter your maximum bid<br>
                  <div class="increase-input">
                    <div>
                        <table class="bid_input">
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="subtract"></span>
                                    </td>
                                    <td>
                                        <input id="bid-now-value" name="bid" type="text" value="<?php echo number_format($detail['amount']) + 25 ?>">
                                        <input name="lot" type="hidden" value="22360609">
                                        <input name="auction" type="hidden" value="iaai">
                                    </td>
                                    <td>
                                        <span class="add"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                  </div>
                  <button class="btn btn-deafult bid-btn-inner open-model" data-model="login-model">Bid Now</button></h3>
                  <div class="hint">
                      $<span id="bid-increment">25</span> Bid Increments<br>
                  </div>
                  <div class="hint" style="margin-top: 6px">
                    <a href="javascript:void(0);" id="fpc-link" class="open-model" data-model="final-login-model">Final Price Calculator</a>
                    <?php if (!$this->session->userdata('user_id')) { ?>
                    <div class="glue-modal gray final-login-model" id="fpc-modal" style="top: 176px; left: -95px; display: none;">
                        <div class="title">Final Price Calculator                    <span class="modal-arrow-up"></span>
                            <span class="close-modal"></span>
                        </div>
                        <div class="content lot-calc">
                          <p style="padding: 5px 20px;color: #333;">You must be logged in or registered</p>
                          <p style="padding: 5px 20px;color: #333;"><a href="/en/login">Login to account</a> or <a href="/en/registration">Register for FREE</a></p>
                        </div>
                    </div>
                    <?php } else{ ?>
                    <div class="glue-modal gray final-login-model" id="fpc-modal" style="top: 176px; left: -95px; display: none;">
                        <div class="title">Final Price Calculator <span class="modal-arrow-up"></span>
                            <span class="close-modal"></span>
                        </div>
                        <div class="content lot-calc">


                            <div class="fees-calc">

                                <div class="fees-calc__title">
                                    Enter your Final Bid </div>

                                <div class="fees-calc__bid">
                                    <table class="fees-calc__bid__table">
                                        <tbody>
                                            <tr>
                                                <td class="fees-calc__ctd">
                                                    <span class="fees-calc__subtract-wrap">
                                                <a class="fees-calc__subtract" id="fees-calc__subtract" href="javascript:;">–</a>
                                            </span>
                                                </td>
                                                <td>
                                                    <input id="fees-calc__input" class="fees-calc__input" type="text" value="25" name="fees_calc_bid">
                                                </td>
                                                <td class="fees-calc__ctd">
                                                    <span class="fees-calc__add-wrap">
                                                <a class="fees-calc__add" id="fees-calc__add" href="javascript:;">+</a>
                                            </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <table class="table fees-calc-data">
                                <tbody>
                                    <tr id="fees-calc-data__sales_tax-wrap" style="display: none;">
                                        <td class="fees-calc-data__ftd">Sales Tax</td>
                                        <td>$<span id="fees-calc-data__sales_tax">0</span></td>
                                    </tr>
                                    <tr id="fees-calc-data__documentation_fee-wrap">
                                        <td class="fees-calc-data__ftd">Documentation Fee</td>
                                        <td>$<span id="fees-calc-data__documentation_fee">120</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fees-calc-data__ftd">Transaction Fee</td>
                                        <td>$<span id="fees-calc-data__transaction_fee">250</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fees-calc-data__ftd">Auction Fee </td>
                                        <td>$<span id="fees-calc-data__auction-fee">510</span></td>
                                    </tr>
                                    <tr class="fees-calc-data__total-price-wrap">
                                        <td class="fees-calc-data__ftd">Total Price</td>
                                        <td><span id="fees-calc-data__total-price">905</span> USD</td>
                                    </tr>
                                </tbody>
                            </table>




                        </div>
                    </div>
                    <?php } ?>
                </div>
                  <?php if (!$this->session->userdata('user_id')) { ?>
                  <div class="glue-modal login-model" id="fpc-bid-info-modal">
                    <div class="title">
                      Bid Now                            
                      <span class="modal-arrow-up"></span>
                      <div class="close-modal"></div>
                    </div>
                    <div class="content">
                      <p>You must be logged in or registered in order to be able to bid</p>
                      <p><a href="<?php echo base_url('login') ?>">Login to account</a> or <a href="<?php echo base_url('register') ?>">Register for FREE</a></p>                        
                    </div>
                  </div>
                  <?php } ?>
                  <h2>Timer: <?php echo get_single_difrreance($detail['Sale_Date']); ?></h2>
                </div>  
                <div class="car-sidebar-widget car-category clearfix">
                    <div class="car-sidebar-title">
                      <h4>Vehicle Information</h4>
                    </div>
                    <ul class="bid-part-details">
                      <li><strong>Stock#</strong><span><?php echo $detail['Stock_ID'] ?></span></li>
                      <li><strong>Type</strong><span><?php echo $detail['type'] ?></span></li>
                      <li><strong>Year</strong><span><?php echo $detail['Year'] ?></span></li>
                      <li><strong>Make</strong><span><?php echo $detail['make'] ?></span></li>
                      <li><strong>Model</strong><span><?php echo $detail['model'] ?></span></li>
                      <li><strong>Series</strong><span><?php echo $detail['Series'] ?></span></li>
                      <li><strong>Odometer</strong><span><?php echo $detail['Odometer'] ?></span></li>
                      <li><strong>Sale Document</strong><span><?php echo $detail['Sale_Document'] ?></span></li>
                      <li><strong>Sale Document Notes</strong><span><?php echo $detail['Sale_Document_Notes'] ?></span></li>
                      <li><strong>Loss</strong><span><?php echo $detail['Loss'] ?></span></li>
                      <li><strong>Damage Type</strong><span><?php echo $detail['Damage_Type'] ?></span></li>
                      <li><strong>ACV</strong><span>$<?php echo $detail['ACV'] ?></span></li>
                      <!-- <li><strong>Estimated Repair Cost</strong><span>$<?php echo $detail['Estimated_Repair_Coast'] ?></span></li> -->
                      <li><strong>VIN</strong><span><?php echo $detail['VIN'] ?></span></li>
                      <li><strong>Exterior Color</strong><span><?php echo $detail['Exterior_Color'] ?></span></li>
                      <li><strong>Interior Color</strong><span><?php echo $detail['Interior_Color'] ?></span></li>
                      <li><strong>Body Style</strong><span><?php echo $detail['Body_Style'] ?></span></li>
                      <li><strong>Vehicle Class</strong><span><?php echo $detail['Vehicle_Class'] ?></span></li>
                      <li><strong>Engine</strong><span><?php echo $detail['Engine'] ?></span></li>
                      <li><strong>Cylinders</strong><span><?php echo $detail['Cylinder'] ?></span></li>
                      <li><strong>Fuel Type</strong><span><?php echo $detail['Fuel_Type'] ?></span></li>
                      <li><strong>Transmission</strong><span><?php echo $detail['Transmission'] ?></span></li>
                      <li><strong>Drive Type</strong><span><?php echo $detail['Driver_Type_'] ?></span></li>
                      <!-- <li><strong>Manufactured in</strong><span><?php echo $detail['Manufactured_In'] ?></span></li> -->
                      <li><strong>Key</strong><span><?php echo $detail['Key_item'] ?></span></li>
                      <li><strong>Start Code</strong><span><?php echo $detail['Start_Code'] ?></span></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfYi223bynfI12jcbfAGFw9eRYPLISRx0&sensor=false"></script>
<script type="text/javascript">
  var map;
  
  var INFOwindow;
  var latitude;
  var longitude;
  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({
    'address': '<?php echo $location['Zip_Code'] ?>'
  }, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      latitude = results[0].geometry.location.lat();
      longitude = results[0].geometry.location.lng();
      map = new google.maps.Map(document.getElementById('location-map'), {
        zoom: 4,
        center: new google.maps.LatLng(latitude, longitude),
        mapTypeId: 'roadmap'
    });
      var position = new google.maps.LatLng(latitude, longitude);
      var marker = new google.maps.Marker({
          position: position,
          // icon: {
          //     url: feature.type,
          //     size: new google.maps.Size(150, 150),
          //     origin: new google.maps.Point(0, 0),
          //     anchor: new google.maps.Point(25, 50)
          // },
          map: map
      });
      var contentString = '<div class="map-info-window"><div class="info-window-title"><a href="#"><?php echo $location['Location'] ?></a></div><div class="address"> <?php echo $location['Address'] ?></div><div class="phone"><span class="block-title">Phone:</span> <?php echo $location['Phone'] ?></div><div class="hours"><span class="block-title">Office Hours:</span> <?php echo $location['Office_Hours'] ?></div><div><br>For more information <a href="<?php echo base_url('listing/location/'.$location['id']) ?>">click here</a></div></div>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });
      marker.addListener('click', function () {
        if (INFOwindow)
        {
            INFOwindow.close();
        }
        INFOwindow = infowindow;
        infowindow.open(map, marker);
        //$('.gm-style-iw').parent().css('margin-left', '-60px')
      });
    }
  });
</script>