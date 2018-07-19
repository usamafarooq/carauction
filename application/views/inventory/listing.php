    <!-- Featured Car start -->
    <section class="featured-area">
      <div class="container">
        <div class="col-md-3">
          <div class="searchBox" id="fixed">

                <div class="block_box responsive_box">

                    <form method="post" action="<?php echo base_url('listing/search') ?>" id="search-form">
                        <label class="select-label">
                            <select name="type" id="type" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 232.5px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                <option value="0">All Vehicle Types</option>
                                <?php 
                                  foreach ($vehicle_type as $v) {
                                ?>
                                <option value="<?php echo $v['Name'] ?>"><?php echo $v['Name'] ?></option>
                                <?php $con++; } ?>
                              </select>
                              <span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 205px; display: inline-block;">All Vehicle Types</span></span>
                        </label>

                        <label class="select-label">
                            <select id="make_search" name="make" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 232.5px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                <option value="0">All Makes</option>
                                <?php 
                                  foreach ($make as $v) {
                                ?>
                                <option value="<?php echo $v['Name'] ?>" data-id="<?php echo $v['id'] ?>"><?php echo $v['Name'] ?></option>
                                <?php } ?>
                            </select>
                            <span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 205px; display: inline-block;">All Makes</span></span> </label>


                        <label class="select-label">
                            <select name="model" id="model_search" style="margin-bottom: 0px; -webkit-appearance: menulist-button; width: 232.5px; position: absolute; opacity: 0; height: 40px; font-size: 14px;" class="hasCustomSelect">
                                <option value="0">All Models</option>
                            </select><span class="custom-select" style="margin-bottom: 0px; display: inline-block;"><span class="custom-selectInner" style="width: 205px; display: inline-block;">All Models</span></span>
                        </label>

                        <label>
                            <table>
                                <tbody>
                                    <tr>
                                        <td width="50%" style="padding:0">

                                            <label class="select-label">
                                                <select name="start_year" id="year-from" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 113px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
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
                                                  <span class="custom-select custom-selectChanged" style="display: inline-block;"><span class="custom-selectInner" style="width: 86px; display: inline-block;">1900</span></span>
                                            </label>

                                        </td>
                                        <td style="padding:0">&nbsp;&nbsp;</td>
                                        <td width="50%" style="padding:0">

                                            <label class="select-label">
                                                <select name="end_year" id="year-to" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 113px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
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
                                                <span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 86px; display: inline-block;"><?php echo date('Y') ?></span></span>
                                            </label>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </label>



                        <div class="advanced-search-link-wr"><a href="#" class="advanced-search-link " id="advanced-search">Advanced Search</a></div>

                        <div id="advanced-search-block" class="advanced-search-block responsive_box hide">


                            <label class="search-label">
                                <input name="sale_date" type="text" class="input-date " id="sale-date" value="" placeholder="Sale From">
                            </label>

                            <label class="search-label">
                                <input name="sale_date_to" type="text" class="input-date " id="sale-date-to" value="" placeholder="Sale To">
                            </label>



                            <label for="posType" class="search-label">Auction Location</label>

                            <div class="pos-types pos-types--first">
                                <input id="pos-type-1" type="radio" class="pos-type" name="posType" value="1" checked="checked"> <label for="pos-type-1">Location</label>
                                <input id="pos-type-2" type="radio" class="pos-type" name="posType" value="2"> <label for="pos-type-2">State</label>
                            </div>


                            <div id="pos-type-block-1" style="">
                                <label class="select-label">
                                    <select name="location" id="location" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                        <option value="0">Any Location</option>
                                        <?php 
                                          foreach ($locations as $l) {
                                            echo '<option value="'.$l['Location'].'">'.$l['Location'].'</option>';
                                          }
                                        ?>
                                      </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Location</span></span>
                                </label>
                            </div>

                            <div id="pos-type-block-2" style="display:none">
                                <label class="select-label">
                                    <select name="state" id="state" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                        <option value="">Any State</option>
                                        <?php 
                                          foreach ($states as $s) {
                                            echo '<option value="'.$s['State'].'">'.$s['State_Full'].'</option>';
                                          }
                                        ?>
                                    </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any State</span></span>
                                </label>
                            </div>

                            <!-- <div id="pos-type-block-3" style="display:none">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="padding: 0 10px 0 0; vertical-align: top;">
                                                <input type="text" name="zip" maxlength="12" id="zip" style="width:100%;margin-top:0;" value="">
                                            </td>
                                            <td align="right" style="padding: 0">
                                                <label class="arrow">
                                                    <select name="zip_distance" id="zip-distance" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                                        <option value="50">50 miles</option>
                                                        <option value="100">100 miles</option>
                                                        <option value="200">200 miles</option>
                                                        <option value="250">250 miles</option>
                                                        <option value="500">500 miles</option>
                                                        <option value="1000">1000 miles</option>
                                                        <option value="2000">2000 miles</option> </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">50 miles</span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> -->



                            <label for="auctionType" class="search-label">Auction Type</label>
                            <div class="auction-types">
                                <input id="auction-type-1" type="radio" class="auction-type" name="auctionType" value="" checked="checked"> <label for="auction-type-1">All</label>
                                <input id="auction-type-2" type="radio" class="auction-type" name="auctionType" value="auction"> <label for="auction-type-2">Auction</label>
                                <input id="auction-type-3" type="radio" class="auction-type" name="auctionType" value="buy_now"> <label for="auction-type-3">I-Buy Fast</label>
                            </div>


                            <label class="select-label">
                                <select name="saleDocument" id="sale-document" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="0">Any Sale Document</option>
                                    <?php 
                                      foreach ($sales_document as $s) {
                                        echo '<option value="'.$s['Sale_Document'].'">'.$s['Sale_Document'].'</option>';
                                      }
                                    ?>
                                  </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Sale Document</span></span>
                            </label>


                            <label class="select-label">
                                <select name="primary" id="primary" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="">Any Primary Damage</option>
                                    <?php 
                                      foreach ($primary_damage as $s) {
                                        echo '<option value="'.$s['Damage_Type'].'">'.$s['Damage_Type'].'</option>';
                                      }
                                    ?>
                                  </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Primary Damage</span></span>
                            </label>

                            <!-- <label class="select-label">
                                <input name="milesFrom" type="text" class="input-miles" id="miles-from" value="" placeholder="Miles From">
                                <input name="milesTo" type="text" class="input-miles" id="miles-to" value="" placeholder="Miles To">
                            </label> -->

                            <label class="select-label">
                                <select name="odometerStatus" id="odometer-status" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="0">Any Odometer Status</option>
                                    <?php 
                                      foreach ($odometer as $s) {
                                        echo '<option value="'.$s['Odometer'].'">'.$s['Odometer'].'</option>';
                                      }
                                    ?>
                                  </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Odometer Status</span></span>
                            </label>


                            <label class="select-label">
                                <select name="color" id="color" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="">Any Color</option>
                                    <?php 
                                      foreach ($color as $s) {
                                        echo '<option value="'.$s['Exterior_Color'].'">'.$s['Exterior_Color'].'</option>';
                                      }
                                    ?>
                                </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Color</span></span>
                            </label>


                            <label class="select-label">
                                <select name="fuel" id="fuel" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="">Any Fuel Type</option>
                                    <?php 
                                      foreach ($fuel_type as $s) {
                                        echo '<option value="'.$s['Fuel_Type'].'">'.$s['Fuel_Type'].'</option>';
                                      }
                                    ?>
                                  </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Fuel Type</span></span>
                            </label>


                            <label class="select-label">
                                <select name="engineType" id="engine-type" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="">Any Engine Type</option>
                                    <?php 
                                      foreach ($engine_type as $s) {
                                        echo '<option value="'.$s['Engine'].'">'.$s['Engine'].'</option>';
                                      }
                                    ?>
                                  </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Engine Type</span></span>
                            </label>


                            <label class="select-label">
                                <select name="cylinders" id="cylinders" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="">Any Cylinders</option>
                                    <?php 
                                      foreach ($cylinder as $s) {
                                        echo '<option value="'.$s['Cylinder'].'">'.$s['Cylinder'].'</option>';
                                      }
                                    ?>
                                  </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Cylinders</span></span>
                            </label>


                            <label class="select-label">
                                <select name="transmission" id="transmission" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="">Any Transmission</option>
                                    <?php 
                                      foreach ($transmission as $s) {
                                        echo '<option value="'.$s['Transmission'].'">'.$s['Transmission'].'</option>';
                                      }
                                    ?>
                                  </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Transmission</span></span>
                            </label>


                            <label class="select-label">
                                <select name="driveType" id="drive-type" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="">Any Drive Type</option>
                                    <?php 
                                      foreach ($drive_type as $s) {
                                        echo '<option value="'.$s['Driver_Type_'].'">'.$s['Driver_Type_'].'</option>';
                                      }
                                    ?>
                                  </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Drive Type</span></span>
                            </label>


                            <label class="select-label">
                                <select name="bodyStyle" id="body-style" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                    <option value="">Any Body Style</option>
                                    <?php 
                                      foreach ($body_style as $s) {
                                        echo '<option value="'.$s['Body_Style'].'">'.$s['Body_Style'].'</option>';
                                      }
                                    ?>
                                  </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Any Body Style</span></span>
                            </label>


                        </div>
                        <input type="submit" value="Find Vehicles" class="yBtn_24">

                    </form>

                </div>
            </div>
            <div class="searchBox filter-bottom hidden-xs hidden-sm" style="display: none;">
                <div class="block_box responsive_box">
                    <div class="filterTop">
                        <div class="line">
                            <table class="line">
                                <tbody>
                                    <tr>
                                        <td class="en">
                                            <a href="<?php echo base_url('listing/search') ?>">Clear All</a>
                                        </td>
                                        <td class="en">
                                            <a href="javascript:;" id="save-search-link">Save Search</a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
          <div class="row bg-opt-result">
          <div class="bg-opt">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <?php 
                $start = ($result * ($current_page - 1));
                $on = $start + 1;
                $end = $start + sizeof($listing);
                if ($total_rows >= 0) {
                  $num = $on .' - '.$end;
                }
                else{
                  $num = '0';
                }
                //echo $start;
              ?>

              
              <div class="result-detail"><h4>Showing results  ( <?php echo $num ?> ) of <span>  <?php echo $total_rows ?>+ </span></h4></div>  
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <form method="get" action="<?php echo current_url() ?>" class="sorting-form">
                <div class="dropdown-result">
                  <?php 
                    $sort = '';
                    $type = '';
                    $pagination = '';
                    if (isset($sorting)) {
                      if (isset($sorting['sort'])) {
                        $sort = $sorting['sort'];
                      }
                      if (isset($sorting['type'])) {
                        $type = $sorting['type'];
                      }
                      if (isset($sorting['pagination'])) {
                        $pagination = $sorting['pagination'];
                      }
                    }
                  ?>
                  <select id="auc-date" name="sort">
                    <option value="auctions.Date" <?php if($sort == 'auctions.Date') echo 'selected' ?>>Auction Date</option>
                    <option value="Year" <?php if($sort == 'Year') echo 'selected' ?>>Year</option>
                    <option value="makes.Name" <?php if($sort == 'makes.Name') echo 'selected' ?>>Make</option>
                    <option value="models.Name" <?php if($sort == 'models.Name') echo 'selected' ?>>Model</option>
                    <!-- <option value="saab">Mielage</option> -->
                    <option value="Damage_Type" <?php if($sort == 'Damage_Type') echo 'selected' ?>>Damage</option>
                    <option value="locations.Location" <?php if($sort == 'locations.Location') echo 'selected' ?>>Action Location</option>
                    <option value="inventory_bids.bid" <?php if($sort == 'inventory_bids.bid') echo 'selected' ?>>Current Bid (USD)</option>
                    <option value="Item" <?php if($sort == 'Item') echo 'selected' ?>>Item#</option>
                  </select>
                  <select id="auc-date" name="type">
                    <option value="ASC" <?php if($type == 'ASC') echo 'selected' ?>>ASC</option>
                    <option value="DESC" <?php if($type == 'DESC') echo 'selected' ?>>DESC</option>
                  </select>
                  <select id="auc-date" name="pagination">
                    <option value="10" <?php if($pagination == '10') echo 'selected' ?>>10</option>
                    <option value="20" <?php if($pagination == '20') echo 'selected' ?>>20</option>
                    <option value="30" <?php if($pagination == '30') echo 'selected' ?>>30</option>
                    <option value="40" <?php if($pagination == '40') echo 'selected' ?>>40</option>
                  </select>                             
                </div>  
              </form>
            </div>
          </div>
        </div>
        <?php if(isset($search) && $search && $this->session->userdata('user_id')){ ?>
        <div class="row"><div class="col-lg-12"><button class="btn btn-info pull-right save-search">Save Search</button></div></div><br>
        <?php } ?>
        <div class="row">
          <?php foreach ($listing as $l) {?>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="featured-col">
              <div class="box">
                <?php 
                  if (strpos($l['images'], 'http') !== false) {
                    $image = $l['images'];
                  }
                  else{
                    $image = base_url($l['images']);
                  }
                ?>
                <img src="<?php echo base_url('front_assets/images/ajax-loader-gif.gif') ?>" class="ajax-img" data-src="<?php echo $image ?>" alt="">
                <h3 class="price">$<?php echo number_format($l['amount'], 2) ?></h3>
                <div class="box-content">
                  <ul class="icon">
                    
                    <li><a href="<?php echo $image ?>" data-lightbox="lightbox-1" data-title="<?php echo $l['Name'] ?>"><i class="fa fa-search"></i></a></li>
                    <li><a href="<?php echo base_url('listing/detail/'.$l['id']) ?>"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="featured-info clearfix">
                <p>launched: <a href="#"><?php echo date('d M Y', strtotime($l['created_at'])) ?></a></p>
                <p>/</p>
                <p>Brand: <a href="#"><?php echo substr($l['make'], 0, 10) ?></a></p>
              </div>
              <div class="featured-content">
                <h4><a href="<?php echo base_url('listing/detail/'.$l['id']) ?>"><?php echo substr($l['Name'], 0, 20)  ?></a></h4>
                <p><?php echo substr($l['Damage_Type'], 0, 10)?></p>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <ul>
                      <li>Location: <span><?php echo $l['Location'] ?></span></li>
                      <li>Date: <span><?php echo date('d / m / Y', strtotime($l['Sale_Date'])) ?></span></li>
                      <li>Time Left: <span><?php echo get_difrreance($l['Sale_Date']); ?></span></li>
                    </ul>
                    <button class="btn btn-deafult bid-btn">Bid Now</button><br><br>
                    <?php 
                      // $url = base_url('listing/watch/');
                      // $se_url = base_url('listing/unwatch/');
                      // $class = 'add-watch';
                      // $text = '+Watch';
                      // if ($l['watch'] > 0) {
                      //   $class = 'add-unwatch';
                      //   $text = '-Unwatch';
                      // }
                    ?>
                    <button <?php if(isset($l['watch']) && $l['watch'] > 0) echo 'style="display: none"' ?> class="btn btn-deafult watchlist open-model <?php if ($this->session->userdata('user_id')) echo 'add-watch' ?>" data-model="watch<?php echo $l['id'] ?>-model" <?php if ($this->session->userdata('user_id')) echo 'data-id="'.$l['id'].'"' ?> <?php if ($this->session->userdata('user_id')) echo 'data-url="'.base_url('listing/watch/').'"' ?> >+Watch</button>
                    <?php if ($this->session->userdata('user_id')) { ?>
                    <button <?php if(isset($l['watch']) && $l['watch'] == 0) echo 'style="display: none"' ?>  class="btn btn-deafult watchlist open-model <?php if ($this->session->userdata('user_id')) echo 'add-unwatch' ?>" data-model="watch-model" <?php if ($this->session->userdata('user_id')) echo 'data-id="'.$l['id'].'"' ?> <?php if ($this->session->userdata('user_id')) echo 'data-url="'.base_url('listing/unwatch/').'"' ?> >-Unwatch</button>
                    <?php } ?>
                    <?php if ($this->session->userdata('user_id')) { ?>
                    <a class="notification-link-simple open-model pull-right n-<?=($l['watch_status'] != '2' && $l['watch'] > 0) ?'on':'off'?>" href="javascrip:;" data-model="noti<?php echo $l['id'] ?>-model">
                      <span class="notify-icon"></span><?=($l['watch_status'] != '2' && $l['watch'] > 0) ?'On':'Off'?>
                    </a>
                    <!-- <button class="btn btn-deafult  open-model pull-right" data-model="noti<?php echo $l['id'] ?>-model">Notification</button> -->
                    <?php } ?>
                    <?php if (!$this->session->userdata('user_id')) { ?>
                    <div class="glue-modal watch<?php echo $l['id'] ?>-model" id="fpc-bid-info-modal">
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
                    <div class="glue-modal noti<?php echo $l['id'] ?>-model" id="fpc-bid-info-modal" style="width: 370px !important;">
                      <div class="title">
                        Watchlist Notifications                           
                        <span class="modal-arrow-up"></span>
                        <div class="close-modal"></div>
                      </div>
                      <div class="content">
                        <form class="site-form watchlist_notification" action="<?php echo base_url('listing/watchlist_notification/') ?>" method="post" id="watchlist_notification">
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
                          <input type="hidden" name="inventory_id" value="<?php echo $l['id'] ?>">
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
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="inner-pagination text-center">
            <nav aria-label="Page navigation">
              <ul class="pagination m0">
                <?php 
                  $total = $total_rows;
                  $per_page = $result;
                  $adjacent_links = 4;
                  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  $pages = Pagination($total, $per_page, $current_page, $adjacent_links);
                  $currentURL = $actual_link;
                  $num = $total_rows;
                  $num = $num / 10;
                  if (strpos($num,'.')) {
                    $num = explode('.', $num);
                    $num = $num[0] + 1;
                  }
                ?>
                
                <?php 
                  if ($num > 1 && $current_page != 1) {
                    $url = '';
                    if ($this->input->get()) {
                      $symbol = '&';
                    }
                    else{
                      $symbol = '?';
                    }
                    if ($this->input->get('page')) {
                      $url = str_replace('page='.$this->input->get('page'), 'page='.($current_page - 1), $currentURL);
                    }
                    else{
                      $url = $actual_link.''.$symbol.'page='.($current_page - 1);
                    }
                    echo '<li><a href="'.$url.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                  }
                  // for ($i=0; $i < $num; $i++) { 
                  //   $class = '';
                  //   $page = ($i + 1);
                  //   if ($page == $current_page) {
                  //     $class = 'active';
                  //   }
                  //   echo '<li class="page-item"><a class="page-link '.$class.'" href="'.$currentURL.'?page='.$page.'">'.$page.'</a></li>';
                  // }
                  if ($total_rows > 0) {
                    for ($i=0; $i < sizeof($pages); $i++) { 
                      $class = '';
                      $page = $pages[$i];
                      if ($page == $current_page) {
                        $class = 'active';
                      }
                      $url = '';
                      if ($this->input->get()) {
                        $symbol = '&';
                      }
                      else{
                        $symbol = '?';
                      }
                      if ($this->input->get('page')) {
                        $url = str_replace('page='.$this->input->get('page'), 'page='.$pages[$i], $currentURL);
                      }
                      else{
                        $url = $actual_link.''.$symbol.'page='.$pages[$i];
                      }
                      echo '<li class="page-item"><a class="page-link '.$class.'" href="'.$url.'">'.$page.'</a></li>';
                    }
                  }
                    
                  if ($num > 1 && $current_page != $num) {
                    $url = '';
                    if ($this->input->get()) {
                      $symbol = '&';
                    }
                    else{
                      $symbol = '?';
                    }
                    if ($this->input->get('page')) {
                      $url = str_replace('page='.$this->input->get('page'), 'page='.($current_page + 1), $currentURL);
                    }
                    else{
                      $url = $actual_link.''.$symbol.'page='.($current_page + 1);
                    }
                    echo '<li><a href="'.$url.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                  }
                ?>
                
              </ul>
            </nav>
        </div>
        </div>
      </div>
    </section>


<?php if(isset($search) && $search && $this->session->userdata('user_id')){ ?>

<div class="global-overlay" style="display: none;">
    <div id="global-modal" class="savesearch-modal" style="display: block;">
        <div>
            <div class="title">Save your Search <span class="close-modal"></span>
            </div>
            <div class="content">

                <table class="table-savesearch">
                    <tbody>
                        <tr>
                            <td>
                                <div class="filter">

                                    Filters:
                                    <div class="filterbox"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <div style="color:#c00;padding-bottom:10px;display:none" id="error_text">
                                    Please fill the name of your search </div>

                                <form class="form-vertical" id="saved-search-update-from" action="<?php echo base_url('listing/save_search') ?>" method="post">
                                  <?php 
                                    foreach ($search as $key => $value) {
                                      echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
                                    }
                                  ?>
                                  <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id') ?>">
                                    <label for="SaveSearch_name" class="required">Search Name<span class="required">*</span></label>
                                    <input name="title" id="SaveSearch_name" type="text" maxlength="255" placeholder="My Search">


                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="SaveSearch_notify">Notify</label>
                                                    <label class="radio">
                                                      <input id="SaveSearch_notify_0" value="0" type="radio" checked="checked" name="type">
                                                      <label for="SaveSearch_notify_0">None</label>
                                                          </label>
                                                          <label class="radio">
                                                      <input id="SaveSearch_notify_1" value="1" type="radio" name="type">
                                                      <label for="SaveSearch_notify_1">Email</label>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label for="SaveSearch_notify_days" class="required">Notify Days <span class="required">*</span></label>
                                                    <label class="select-label">
                                                      <select name="days" id="SaveSearch_notify_days" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                                          <option value="30">30 Days</option>
                                                          <option value="14">14 Days</option>
                                                          <option value="7">7 Days</option>
                                                          <option value="3">3 Days</option>
                                                          <option value="1">Once</option>
                                                          <option value="0">Never</option>
                                                      </select>
                                                      <span class="custom-select" style="display: inline-block;">
                                                        <span class="custom-selectInner" style="width: 100px; display: inline-block;">30 Days</span>
                                                      </span>
                                                  </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div style="text-align: center;margin-top: 10px"><button class="yBtn_24">Save</button></div>

                                </form>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php } ?>