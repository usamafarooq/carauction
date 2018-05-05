 <!-- Featured Car start -->
   <section class="featured-area animatedParent animateOnce" style="padding-bottom:  0px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="section-title">
                <h3>Choose the membership that’s right for you!</h3>
                <p>Upgrade at any time</p>
              </div>
            </div>
          </div>
        </div>
    </section>

        <!-- Car Details start -->
    <section class="car-packages-area" style="padding: 0px 0px 100px 0px;">
      <div class="container">
        <div class="row packages-bg">
            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12" style="width: 30%;">
              <div class="pck-detail">
                <div class="space-det"></div>
                <ul>
                  <li>Registration Fee</li>
                  <li>Create Watchlist and Saved Searches</li>
                  <li>Watchlist SMS Notifications</li>
                  <li>I-Buy Fast</li>
                  <li>Proxy Bid</li>
                  <li>On Site Vehicle Preview</li>
                  <li>Bidder Number</li>
                  <li>I Bid Live</li>
                  <li>Transaction fee *</li>
                  <li>Free Car Auction History Reports</li>
                </ul>
              </div>
            </div>
            <?php $con = 1; foreach ($packages as $p) { ?>
            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12" style="width: <?php if($con >= 3) echo 3; else echo 2; ?>0%;">
              <div class="pck-detail-one">
                <div class="space-det-<?php if($con == 1) echo 'one'; elseif($con == 2) echo 'two'; else echo 'three'; ?>"><?php echo $p['Name'] ?></div>
                <div class="space-det-spec"></div>
                <ul>
                  <?php if($p['Price'] != 0 && $p['Price'] != 'Free') { ?>
                  <li>$<?php echo $p['Price'] ?></li>
                  <?php } else{ ?>
                  <li style="color: red;">Free</li>
                  <?php } ?>
                  <li><i class="fa fa-<?php echo ($p['Create_Watchlist_and_Saved_Searches'] === 'Yes') ? "check" : "times" ?>"></i></li>
                  <li><i class="fa fa-<?php echo ($p['Watchlist_SMS_Notifications'] === 'Yes') ? "check" : "times" ?>"></i></li>
                  <li><i class="fa fa-<?php echo ($p['I_Buy_Fast'] === 'Yes') ? "check" : "times" ?>"></i></li>
                  <li><i class="fa fa-<?php echo ($p['Proxy_Bid'] === 'Yes') ? "check" : "times" ?>"></i></li>
                  <li><i class="fa fa-<?php echo ($p['On_Site_Vehicle_Preview'] === 'Yes') ? "check" : "times" ?>"></i></li>
                  <li><i class="fa fa-<?php echo ($p['Bidder_Number'] === 'Yes') ? "check" : "times" ?>"></i></li>
                  <li><i class="fa fa-<?php echo ($p['I_Bid_Live'] === 'Yes') ? "check" : "times" ?>"></i></li>
                  <li><?php echo ($p['Transaction_fee'] !== '0') ? $p['Transaction_fee'] : '<i class="fa fa-times"></i>' ?></li>
                  <!-- <li>
                    <?php if($p['Transaction_fee'] != '0') echo $p['Transaction_fee']; else echo '<i class="fa fa-times"></i>'; ?>
                  </li> -->
                  <li><i class="fa fa-<?php echo ($p['Free_Car_Auction_History_Reports'] === 'Yes') ? "check" : "times" ?>"></i></li>
                </ul>
                <?php 
                  $current_id = 0;
                  if (isset($current_package['id'])) {
                    $current_id = $current_package['id'];
                  } 
                  if ($current_id == $p['id']) {
                ?>
                <button class="btn btn-default form-control" disabled="">Current Package</button>
                <?php } else{ ?>
                <a href="<?php echo base_url('packages/select/'.$p['id']) ?>"><button class="btn btn-danger form-control">Choose</button></a>
                <?php } ?>
              </div>
            </div>
            <?php $con++; } ?>
            <!-- <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12" style="width: 20%;">
              <div class="pck-detail-one">
                <div class="space-det-two">PREMIER</div>
                <div class="space-det-spec"></div>
                <ul>
                  <li>$150</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>$250 or 5%</li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12" style="width: 30%;">
              <div class="pck-detail-one">
                <div class="space-det-three">GOLD</div>
                <div class="space-det-spec"></div>
                <ul>
                  <li>$250</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>$250</li>
                  <li>5</li>
                </ul>
              </div>
            </div>  -->
            <a href="<?php echo base_url('account_activation') ?>"><button class="btn btn-default agree-btn pull-right">Skip</button></div></a>
        </div>
      </div>

    </section>
