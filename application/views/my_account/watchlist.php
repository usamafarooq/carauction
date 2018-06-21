<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="top-notify top-notify-activate">
                <div class="top-notify__item__desc">
                    <span class="top-notify__attention-icon"></span>
                    <strong>Dear saim, in order to BID please activate your membership!</strong>
                    <a class="button yBtn_24 yBtn_h32" href="<?php echo base_url('account_activation') ?>">Activate</a>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <h2 class="account-header hidden-xs hidden-sm">My Account</h2>
        <div class="account-table row">
            <div class="col-sm-12 col-md-3 side-menu account-menu">
                <div id="profile-side-menu" class="searchBox">
                    <div class="group-title block_header responsive_header">
                        Account Menu </div>
                    <div class="responsive_box">
                        <ul class="level1">
                            <li class="active">
                                <a href="<?php echo base_url('My_account') ?>">My Account</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/Watchlist') ?>"> Watchlist (0)</a>
                            </li>
                            <li>
                                <a href="/en/account/saved_search">Saved Searches (0)</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Tickets </div>
                        <ul class="level2 ">
                            <li>
                                <a href="/en/account/openTickets">Open Tickets</a>
                            </li>
                            <li>
                                <a href="/en/account/closedTickets">Closed Tickets</a>
                            </li>
                            <li>
                                <a href="/en/account/tickets">Submit New Ticket</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Bids </div>
                        <ul class="level2">
                            <li>
                                <a href="/en/account/current_bids">Current Bids (0)</a>
                            </li>
                            <li>
                                <a href="/en/account/won_bids">Won Bids (0)</a>
                            </li>
                            <li>
                                <a href="/en/account/lost_bids">Lost Bids (0)</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Transactions </div>
                        <ul class="level2">
                            <li>
                                <a href="/en/account/transactionList">Transaction List (0)</a>
                            </li>
                            <li>
                                <a href="/en/account/deposits">Deposits (0)</a>
                            </li>
                            <li>
                                <a href="/en/account/refunds">Refunds (0)</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Document Center </div>
                        <ul class="level2">
                            <li>
                                <a href="/en/account/esign">Waiting for e-signature</a>
                            </li>
                            <li>
                                <a href="/en/account/esign_processing">Processing</a>
                            </li>
                            <li>
                                <a href="/en/account/esign_completed">Completed</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Shipping </div>
                        <ul class="level2">
                            <li>
                                <a href="/en/account/shipping_in_process">In Process (0)</a>
                            </li>
                            <li>
                                <a href="/en/account/shipping_delivered">Completed (0)</a>
                            </li>
                            <li>
                                <a href="/en/account/shipping_custom">Custom Shipping Quote</a>
                            </li>
                        </ul>
                        <ul class="level1">
                            <li>
                                <a href="/en/account/bidding_limit">Bidding Limit</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Profile </div>
                        <ul class="level2">
                            <li>
                                <a href="/en/account/personal_information">Personal Information</a>
                            </li>
                            <li>
                                <a href="/en/account/billing_information">Billing Information</a>
                            </li>
                            <li>
                                <a href="/en/account/login_and_password">Login and Password</a>
                            </li>
                            <li>
                                <a href="/en/account/documents">Documents</a>
                            </li>
                            <li>
                                <a href="/en/account/membership">Membership</a>
                            </li>
                        </ul>
                        <ul class="level1">
                            <li>
                                <a href="/en/account/logout">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">My Account </h2>
                <div id="ajax-content">
        


    <div class="watchlist-notification-header">
        <div class="wnh-not-link">

            <span>Default Notification Mode: </span>
                        <a class="notification-link-simple n-off" href="/en/account/watchlist_notifications">
                <span class="notify-icon"></span>
                Off            </a>

        </div>
        <div>
            <span>Email: </span>
            <strong>skpathan250@gmail.com</strong>
        </div>
        <div>
            <span>Phone: </span>
                            <a href="/en/account/watchlist_notifications">+ add your phone number</a>
                    </div>
    </div>


    <div class="searchResult watchlist">

        <div class="menu" style="display: none">
            
<ul id="yw0">
<li class="active"><a href="/en/vehicle/watchlist/index">Current listings (0)</a></li>
<li><a href="/en/vehicle/watchlist/index?completed=1">Comleted listings (0)</a></li>
</ul>        </div>

        <div class="top-toolbar">
            
<div class="toolbar">
    <div class="pagination">
            </div>

    <div class="sort">
        
        <label class="select-label">
            <select name="attribute" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 115px; position: absolute; opacity: 0; height: 32px; font-size: 13px;">
                                    <option value="/en/vehicle/watchlist/index?sort=sale_date">Auction Date</option>
                                    <option value="/en/vehicle/watchlist/index?sort=year">Year</option>
                                    <option value="/en/vehicle/watchlist/index?sort=make">Make</option>
                                    <option value="/en/vehicle/watchlist/index?sort=model">Model</option>
                                    <option value="/en/vehicle/watchlist/index?sort=odometer">Mileage</option>
                                    <option value="/en/vehicle/watchlist/index?sort=primary">Damage</option>
                                    <option value="/en/vehicle/watchlist/index?sort=location">Auction Location</option>
                                    <option value="/en/vehicle/watchlist/index?sort=bid">Current Bid (USD)</option>
                            </select><span class="custom-select custom-selectHover" style="display: inline-block;"><span class="custom-selectInner" style="width: 219px; display: inline-block;">Auction Date</span></span>
        </label>

        <label class="select-label">
            <select name="desc" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 115px; position: absolute; opacity: 0; height: 32px; font-size: 13px;">
                <option value="">ASC</option>
                <option value="DESC">DESC</option>
            </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 142px; display: inline-block;">ASC</span></span>
        </label>
    </div>
</div>        

          </div>

     <div class="bottom-toolbar">
            
<div class="toolbar">
    <div class="pagination">
            </div>

    <div class="sort">
        
        <label class="select-label">
            <select name="attribute" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 115px; position: absolute; opacity: 0; height: 32px; font-size: 13px;">
                                    <option value="/en/vehicle/watchlist/index?sort=sale_date">Auction Date</option>
                                    <option value="/en/vehicle/watchlist/index?sort=year">Year</option>
                                    <option value="/en/vehicle/watchlist/index?sort=make">Make</option>
                                    <option value="/en/vehicle/watchlist/index?sort=model">Model</option>
                                    <option value="/en/vehicle/watchlist/index?sort=odometer">Mileage</option>
                                    <option value="/en/vehicle/watchlist/index?sort=primary">Damage</option>
                                    <option value="/en/vehicle/watchlist/index?sort=location">Auction Location</option>
                                    <option value="/en/vehicle/watchlist/index?sort=bid">Current Bid (USD)</option>
                            </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 219px; display: inline-block;">Auction Date</span></span>
        </label>

        <label class="select-label">
            <select name="desc" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 115px; position: absolute; opacity: 0; height: 32px; font-size: 13px;">
                <option value="">ASC</option>
                <option value="DESC">DESC</option>
            </select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 142px; display: inline-block;">ASC</span></span>
        </label>
    </div>
</div>        </div>
    </div>



<div class="glue-modal" id="shc-destination-modal" style="display:none">
    <div class="title">Destination        <span class="modal-arrow-up"></span>
        <span class="close-modal"></span>
    </div>
    <div class="content">
        <form class="site-form" id="shc-form" action="/en/shipping/setUserDestination" method="post">
            <p>Indicate the destination to calculate the estimated shipping price.</p>

            <div class="box-1">
                <label>Country of destination:</label>
                <select id="shc-country_to" name="country_to" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;"><option value="">Select a Country</option><option value="US">United States</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AO">Angola</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BO">Bolivia (Plurinational State of)</option><option value="BR">Brazil</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="CV">Cabo Verde</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CL">Chile</option><option value="CN">China</option><option value="CO">Colombia</option><option value="CG">Congo</option><option value="CD">Congo (Democratic Republic of the)</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="CI">Côte d'Ivoire</option><option value="DK">Denmark</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="EE">Estonia</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="PF">French Polynesia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GR">Greece</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HU">Hungary</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KR">Korea (Republic of)</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LT">Lithuania</option><option value="MK">Macedonia (the former Yugoslav Republic of)</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MX">Mexico</option><option value="MN">Mongolia</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NL">Netherlands</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NG">Nigeria</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestine, State of</option><option value="PA">Panama</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RE">Réunion</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="ZA">South Africa</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SR">Suriname</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom of Great Britain and Northern Ireland</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VE">Venezuela (Bolivarian Republic of)</option><option value="VN">Viet Nam</option><option value="YE">Yemen</option></select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Select a Country</span></span>                <div class="warning" id="shc-country_to-em_" style="display:none;"></div>
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
</select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Select USA Port</span></span><span class="sh-check"></span>
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
</select><span class="custom-select" style="display: inline-block;"><span class="custom-selectInner" style="width: 100px; display: inline-block;">Select US Border</span></span>                <div class="warning" id="shc-to_us_border-em_" style="display:none;"></div>
                <span class="sh-check"></span>
            </div>


            <a class="button yBtn" href="#" style="margin-top: 5px;">OK</a>
            <img class="spinner" src="/img/ajax-loader.gif" style="display:none" alt="Please Wait">
        </form>
    </div>
</div>        </div>
            </div>
        </div>
    </div>
</div>