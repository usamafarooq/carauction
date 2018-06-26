<div class="container">
    <?php 
        $set = 0;
        foreach ($user as $key => $value) {
            if (empty($value)) {
                $set = 1;
            }
        }
    ?>
    <?php if($set == 1){ ?>
    <div class="row">
        <div class="col-md-12">
            <div class="top-notify top-notify-activate">
                <div class="top-notify__item__desc">
                    <span class="top-notify__attention-icon"></span>
                    <strong>Dear <?php echo $user['first_name'] ?>, in order to BID please activate your membership!</strong>
                    <a class="button yBtn_24 yBtn_h32" href="<?php echo base_url('account_activation') ?>">Activate</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div id="content">
        <h2 class="account-header hidden-xs hidden-sm">My Account</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
            <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">My Account </h2>
                <div id="ajax-content">
                    <div class="watchlist-notification-header">
                        <div class="wnh-not-link">
                            <span>Default Notification Mode: </span>
                            <a class="notification-link-simple n-<?=($user['status'] != '2') ?'on':'off'?>" href="<?php echo base_url('my_account/add_notification') ?>">
                                <span class="notify-icon"></span><?=($user['status'] != '2') ?'On':'Off'?>         
                            </a>
                        </div>
                        <div>
                            <span>Email: </span>
                            <strong><?php echo $user['email'] ?></strong>
                        </div>
                        <div>
                            <span>Phone: </span>
                            <a href="<?php echo base_url('my_account/add_notification') ?>"><?=($user['notify_phone'] != '' && $user['notify_phone'] != null) ? $user['notify_phone']:'+ add your phone number'?> </a>
                        </div>
                    </div>
                    <div class="searchResult watchlist">
                        <div class="menu" style="display: none">
                            <ul id="yw0">
                                <li class="active"><a href="/en/vehicle/watchlist/index">Current listings (0)</a></li>
                                <li><a href="/en/vehicle/watchlist/index?completed=1">Comleted listings (0)</a></li>
                            </ul>
                        </div>

                        <div class="top-toolbar">
                            <div class="toolbar">
                                <div class="pagination">
                                </div>
                                <div class="sort">
                                    <label class="select-label">
                                    <select name="sort" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 115px; position: absolute; opacity: 0; height: 32px; font-size: 13px;">
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
                                    <span class="custom-select custom-selectHover" style="display: inline-block;">
                                        <span class="custom-selectInner" style="width: 219px; display: inline-block;"><?php if($sort) echo $sort; else echo 'Auction Date'; ?></span>
                                    </span>
                                </label>
                                <label class="select-label">
                                    <select name="type" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 115px; position: absolute; opacity: 0; height: 32px; font-size: 13px;">
                                        <option value="ASC" <?php if($type == 'ASC') echo 'selected' ?>>ASC</option>
                                        <option value="DESC" <?php if($type == 'DESC') echo 'selected' ?>>DESC</option>
                                    </select>
                                    <span class="custom-select" style="display: inline-block;">
                                        <span class="custom-selectInner" style="width: 142px; display: inline-block;"><?php if($type) echo $type; else echo 'ASC'; ?></span>
                                    </span>
                                </label>
                                </div>
                            </div>
                        </div>
                        <div id="yw2" class="list-view">
                            <?php if (!$watchlist) {?>
                            <div class="hidden-xs"></div>
                            <div class="items">
                                <span class="empty">Your watchlist is currently empty.</span>
                            </div>
                            <div class="keys" style="display:none" title="/en/account/watchlist"></div>
                            <?php } else{ ?>
                            <br>
                            <div class="row">
                                  <?php foreach ($watchlist as $l) {?>
                                  <div class="col-lg-6 col-md-6 col-sm-12">
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
                                            <button <?php if($l['watch'] > 0) echo 'style="display: none"' ?> class="btn btn-deafult watchlist open-model <?php if ($this->session->userdata('user_id')) echo 'add-watch' ?>" data-model="watch-model" <?php if ($this->session->userdata('user_id')) echo 'data-id="'.$l['id'].'"' ?> <?php if ($this->session->userdata('user_id')) echo 'data-url="'.base_url('listing/watch/').'"' ?> >+Watch</button>
                                            <button <?php if($l['watch'] == 0) echo 'style="display: none"' ?>  class="btn btn-deafult watchlist open-model <?php if ($this->session->userdata('user_id')) echo 'add-unwatch' ?>" data-model="watch-model" <?php if ($this->session->userdata('user_id')) echo 'data-id="'.$l['id'].'"' ?> <?php if ($this->session->userdata('user_id')) echo 'data-url="'.base_url('listing/unwatch/').'"' ?> >-Unwatch</button>
                                            <?php if ($this->session->userdata('user_id')) { ?>
                                            <a class="notification-link-simple open-model pull-right n-<?=($l['watch_status'] != '2') ?'on':'off'?>" href="javascrip:;" data-model="noti<?php echo $l['id'] ?>-model">
                                              <span class="notify-icon"></span><?=($l['watch_status'] != '2') ?'On':'Off'?>         
                                            </a>
                                            <!-- <button class="btn btn-deafult  open-model pull-right" data-model="noti<?php echo $l['id'] ?>-model">Notification</button> -->
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
                                            <div class="glue-modal noti<?php echo $l['id'] ?>-model" id="fpc-bid-info-modal" style="width: 370px !important;">
                                              <div class="title">
                                                Watchlist Notifications                           
                                                <span class="modal-arrow-up"></span>
                                                <div class="close-modal"></div>
                                              </div>
                                              <div class="content">
                                                <form class="site-form" action="#" method="post">
                                                  <label class="select-label select-label--first">
                                                    <select class="wn-notify_status hasCustomSelect" name="notify_status" id="notify_status" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                                                      <option value="2">Always</option>
                                                      <option value="1">Never</option>
                                                    </select>
                                                    <span class="custom-select wn-notify_status" style="display: inline-block;">
                                                      <span class="custom-selectInner" style="width: 100px; display: inline-block;">Always</span>
                                                    </span>                                
                                                  </label>
                                                  <label class="select-label">
                                                    <select class="wn-notify_method hasCustomSelect" name="notify_method" id="notify_method" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                                                      <option value="1">Email</option>
                                                      <option value="2">SMS</option>
                                                      <option value="3">Email + SMS</option>
                                                    </select>
                                                    <span class="custom-select wn-notify_method custom-selectOpen" style="display: inline-block;">
                                                      <span class="custom-selectInner" style="width: 100px; display: inline-block;">Email</span>
                                                    </span>                                
                                                  </label>
                                                  <input type="hidden" name="auction" value="iaai">
                                                  <input type="hidden" name="lot" value="21613741">
                                                  <div class="caption">
                                                    <span>Email:</span> 
                                                    <strong>brien.dabson@gmail.com</strong>
                                                  </div>
                                                  <a class="button yBtn_24" href="#" id="shc-submit" style="margin-top: 5px;">Save Settings</a>
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
                                </div><br>
                            <?php } ?>
                        </div>
                        <div class="bottom-toolbar">
                            <div class="toolbar">
                                <div class="pagination">
                                </div>
                                <div class="sort">
                                    <label class="select-label">
                                        <select name="sort" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 115px; position: absolute; opacity: 0; height: 32px; font-size: 13px;">
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
                                        <span class="custom-select" style="display: inline-block;">
                                            <span class="custom-selectInner" style="width: 219px; display: inline-block;"><?php if($sort) echo $sort; else echo 'Auction Date'; ?></span>
                                        </span>
                                    </label>
                                    <label class="select-label">
                                        <select name="type" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 115px; position: absolute; opacity: 0; height: 32px; font-size: 13px;">
                                            <option value="ASC" <?php if($type == 'ASC') echo 'selected' ?>>ASC</option>
                                            <option value="DESC" <?php if($type == 'DESC') echo 'selected' ?>>DESC</option>
                                        </select>
                                        <span class="custom-select" style="display: inline-block;">
                                            <span class="custom-selectInner" style="width: 142px; display: inline-block;"><?php if($type) echo $type; else echo 'ASC'; ?></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glue-modal" id="shc-destination-modal" style="display:none">
                        <div class="title">Destination <span class="modal-arrow-up"></span>
                            <span class="close-modal"></span>
                        </div>
                        <div class="content">
                            <form class="site-form" id="shc-form" action="/en/shipping/setUserDestination" method="post">
                                <p>Indicate the destination to calculate the estimated shipping price.</p>

                                <div class="box-1">
                                    <label>Country of destination:</label>
                                    <select id="shc-country_to" name="country_to" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                        <option value="">Select a Country</option><option value="US">United States</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AO">Angola</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BO">Bolivia (Plurinational State of)</option><option value="BR">Brazil</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="CV">Cabo Verde</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CL">Chile</option><option value="CN">China</option><option value="CO">Colombia</option><option value="CG">Congo</option><option value="CD">Congo (Democratic Republic of the)</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="CI">Côte d'Ivoire</option><option value="DK">Denmark</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="EE">Estonia</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="PF">French Polynesia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GR">Greece</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HU">Hungary</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KR">Korea (Republic of)</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LT">Lithuania</option><option value="MK">Macedonia (the former Yugoslav Republic of)</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MX">Mexico</option><option value="MN">Mongolia</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NL">Netherlands</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NG">Nigeria</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestine, State of</option><option value="PA">Panama</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RE">Réunion</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="ZA">South Africa</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SR">Suriname</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom of Great Britain and Northern Ireland</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VE">Venezuela (Bolivarian Republic of)</option><option value="VN">Viet Nam</option><option value="YE">Yemen</option>
                                    </select>
                                    <span class="custom-select" style="display: inline-block;">
                                        <span class="custom-selectInner" style="width: 100px; display: inline-block;">Select a Country</span>
                                    </span>
                                    <div class="warning" id="shc-country_to-em_" style="display:none;"></div>
                                </div>

                                <div class="switch-box box-2" style="display:none">
                                    <label>Port of destination:</label>
                                    <select id="shc-port_to" name="port_to" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;"><option value="">Select a Port</option><option value="284">UNDEFINED</option><option value="285">UNKNOWN</option></select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">&nbsp;</span></span>
                                    <div class="warning" id="shc-port_to-em_" style="display:none;"></div>
                                </div>

                                <div class="switch-box box-3" style="display:none">
                                    <label for="sh-port-from">From USA Port:</label>
                                    <select id="shc-port_from" name="port_from" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                        <option value="0">Select USA Port</option>
                                        <option value="1">NJ - Newark</option>
                                        <option value="2">FL - Miami</option>
                                        <option value="3">IL - Chicago</option>
                                        <option value="4">CA - Los Angeles</option>
                                        <option value="5">GA - Savannah</option>
                                        <option value="6">TX - Houston</option>
                                    </select>
                                    <span class="custom-select" style="display: inline-block;">
                                        <span class="custom-selectInner" style="width: 100px; display: inline-block;">Select USA Port</span>
                                    </span>
                                    <span class="sh-check"></span>
                                    <div class="warning" id="shc-port_from-em_" style="display:none;"></div>
                                </div>

                                <div class="switch-box box-4" style="">
                                    <label>Zip code: <span id="shc-zip_to-detail"></span></label>
                                    <input name="zip_to" id="shc-zip_to" value=""><span class="sh-check"></span>
                                    <div class="warning" id="shc-zip_to-em_" style="display:none;"></div>
                                    <span class="spinner"></span>
                                </div>

                                <div class="switch-box box-5" style="display:none">
                                    <label>To US Border Crossing:</label>
                                    <select id="shc-to_us_border" name="to_us_border" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                        <option value="0">Select US Border</option>
                                        <option value="1">ME - Calais</option>
                                        <option value="2">ME - Houlton</option>
                                        <option value="3">MI - Detroit</option>
                                        <option value="4">MI - Port Huron</option>
                                        <option value="5">MI - Sault Ste. Marie</option>
                                        <option value="6">MN - International Falls</option>
                                        <option value="7">MT - Sweet Grass</option>
                                        <option value="8">ND - Pembina</option>
                                        <option value="9">ND - Portal</option>
                                        <option value="10">NY - Alexandria Bay</option>
                                        <option value="11">NY - Buffalo</option>
                                        <option value="12">NY - Champlain</option>
                                        <option value="13">NY - Lewiston</option>
                                        <option value="14">NY - Niagara Falls</option>
                                        <option value="15">NY - Rooseveltown</option>
                                        <option value="16">VT - Derby Line</option>
                                        <option value="17">VT - Highgate Springs</option>
                                        <option value="18">WA - Blaine</option>
                                    </select>
                                    <span class="custom-select" style="display: inline-block;">
                                        <span class="custom-selectInner" style="width: 100px; display: inline-block;">Select US Border</span>
                                    </span>
                                    <div class="warning" id="shc-to_us_border-em_" style="display:none;"></div>
                                    <span class="sh-check"></span>
                                </div>


                                <a class="button yBtn" href="#" style="margin-top: 5px;">OK</a>
                                <img class="spinner" src="/img/ajax-loader.gif" style="display:none" alt="Please Wait">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>