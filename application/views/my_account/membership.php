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
        <h2 class="account-header hidden-xs hidden-sm">Memberships</h2>
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
                                <a href="<?php echo base_url('my_account/saved_search') ?>">Saved Searches (0)</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Tickets </div>
                        <ul class="level2 ">
                            <li>
                                <a href="<?php echo base_url('my_account/opentickets') ?>">Open Tickets</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/closetickets') ?>">Closed Tickets</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/createtickets') ?>">Submit New Ticket</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Bids </div>
                        <ul class="level2">
                            <li>
                                <a href="<?php echo base_url('My_account/currentbid') ?>">Current Bids (0)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/wonbid') ?>">Won Bids (0)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/lostbid') ?>">Lost Bids (0)</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Transactions </div>
                        <ul class="level2">
                            <li>
                                <a href="<?php echo base_url('My_account/transaction') ?>">Transaction List (0)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/deposit') ?>">Deposits (0)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/refund') ?>">Refunds (0)</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Document Center </div>
                        <ul class="level2">
                            <li>
                                <a href="<?php echo base_url('My_account/waitingforesign') ?>">Waiting for e-signature</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/processing') ?>">Processing</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/completed') ?>">Completed</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Shipping </div>
                        <ul class="level2">
                            <li>
                                <a href="<?php echo base_url('My_account/inProccess') ?>">In Process (0)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/shippingcompleted') ?>">Completed (0)</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/shippingcustom') ?>">Custom Shipping Quote</a>
                            </li>
                        </ul>
                        <ul class="level1">
                            <li>
                                <a href="<?php echo base_url('My_account/biddinglimit') ?>">Bidding Limit</a>
                            </li>
                        </ul>
                        <div class="sublevel droparrow">Profile </div>
                        <ul class="level2">
                            <li>
                                <a href="<?php echo base_url('My_account/personal_information') ?>">Personal Information</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/billing_info') ?>">Billing Information</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/login_and_password') ?>">Login and Password</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/documents') ?>">Documents</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('My_account/memberships') ?>">Membership</a>
                            </li>
                        </ul>
                        <ul class="level1">
                            <li>
                                <a href="<?php echo base_url('My_account/Watchlist') ?>">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
               <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">Transactions </h2>
                
                   <div id="ajax-content">
                      
                      <div id="ajax-content">
        <div class="row">
    <div class="col-md-12">
        <div class="memberships-wrapper block-style">

            <form id="membership-form" action="/en/payment/deposit" method="get">
                            <center><div class="g-tittle"><span></span>Upgrade Your membership</div></center>
                        <div class="form-row">
            <table class="memberships-table" cellspacing="0">
                <tbody><tr class="names">
                    <th></th>
                    <th>
                        <div class="name-block guest">
                            <div class="name">
                                <div class="content">
                                    <span></span> BASIC                                </div>
                            </div>
                            <div class="triangle"></div>
                        </div>
                    </th>
                    <th>
                        <div class="name-block trial active">
                            <div class="name">
                                <div class="content">
                                    <span></span> PREMIER                                </div>
                            </div>
                            <div class="triangle"></div>
                        </div>
                    </th>
                </tr>

                <tr style="background:none;">
                    <td>Registration Fee</td>
                    <td class="">FREE</td>
                    <td class="active">$150</td>
                </tr>
                <tr style="background:none;">
                    <td>Create Watchlist and Saved Searches</td>
                    <td class=""><div class="check"></div></td>
                    <td class="active"><div class="check"></div></td>
                </tr>
                <tr style="background:none;">
                    <td>Watchlist SMS Notifications</td>
                    <td class=""><div class="check"></div></td>
                    <td class="active"><div class="check"></div></td>
                </tr>
                <tr style="background:none;">
                    <td>I-Buy Fast</td>
                    <td class=""><div class="check"></div></td>
                    <td class="active"><div class="check"></div></td>
                </tr>
                <tr style="background:none;">
                    <td>Proxy Bid</td>
                    <td class=""><div class="check"></div></td>
                    <td class="active"><div class="check"></div></td>
                </tr>
                <tr style="background:none;">
                    <td>On Site Vehicle Preview</td>
                    <td class=""><div class="cross"></div></td>
                    <td class="active"><div class="check"></div></td>
                </tr>
                <tr style="background:none;">
                    <td>Bidder Number</td>
                    <td class=""><div class="cross"></div></td>
                    <td class="active"><div class="check"></div></td>
                </tr>
                <tr style="background:none;">
                    <td>I Bid Live</td>
                    <td class=""><div class="cross"></div></td>
                    <td class="active"><div class="check"></div></td>
                </tr>
                <tr style="background:none;">
                    <td>Transaction fee *</td>
                    <td class="">$250 or 5%</td>
                    <td class="active">$250</td>
                </tr>
                <tr>
                    <td>Free Car Auction History Reports</td>
                    <td class=""><div class="cross"></div></td>
                    <td class="active">5</td>
                </tr>
                <tr style="background:none;">
                    <td colspan="4" style="border-bottom: 0; color: #888; font-weight: normal; font-size: 12px; line-height: 17px;">
                        * Florida residents whose purchase will be registered in Florida shall be subject to a Transaction Fee in the amount of Three Hundred Ninety Nine U.S. Dollars and No Cents ($399.00) for Premier members and Four Hundred Ninety Nine U.S. Dollars and No Cents ($499.00) for Basic members.                    </td>
                </tr>

                
                    <tr class="buttons">
                        <td></td>
                        <td>
                                                            <button type="submit" class="btn validate btn-primary active">Current Membership</button>
                                                    </td>
                        <td class="active">
                                                           <button type="submit" class="btn validate btn-primary">Choose</button>
                                                    </td>
                    </tr>

                
            </tbody></table>

             <button type="submit" class="btn validate btn-primary">Continue</button>

            </div>
                        <input type="hidden" id="mbs-type" name="m" value="m2">
            <input type="hidden" name="f" value="account">

            </form>        </div>
    </div>
</div>

        </div>
</div>        </div>
            </div>
            
        </div>
    </div>
</div>
        </div>
    </div>
</div>