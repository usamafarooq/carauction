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
        <h2 class="account-header hidden-xs hidden-sm">Login & Password</h2>
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
             <div id="ajax-content">


    <div class="block-style">
        <form id="login-password-form" class="site-form c-ajax" action="/en/account/login_and_password" method="post">
            <div class="group-title">
                <span>Change Your Password</span>
            </div>
            <div class="text-center text">
                <span>Youll receive notifications of current bid increases, sale date changes </span>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div>
                        <input disabled="disabled" style="color: #b9b9b9;" autocomplete="off" name="AccountLoginPasswordForm[email]" id="AccountLoginPasswordForm_email" type="text" value="skpathan250@gmail.com"> </div>
                    <div class="warning" id="AccountLoginPasswordForm_email_em_"></div>
                </div>
                <div class="form-row">
                    <div>
                        <label class="text" style="font-size: 14px" for="AccountLoginPasswordForm_new_password">Enter your new password</label> <br>
                        <input placeholder="New Password" autocomplete="off" name="AccountLoginPasswordForm[new_password]" id="AccountLoginPasswordForm_new_password" type="password">
                        <div class="warning" id="AccountLoginPasswordForm_new_password_em_"></div>
                    </div>
                </div>
                <div class="form-row">
                    <input placeholder="Retype New Password" autocomplete="off" name="AccountLoginPasswordForm[new_password2]" id="AccountLoginPasswordForm_new_password2" type="password">
                    <div class="warning" id="AccountLoginPasswordForm_new_password2_em_"></div>

                    <input type="submit" style="position: absolute; left: -10000px;top: -10000px;">
                </div>
                <div class="form-row text-center">
                    <a class="button yBtn_24" id="update-button" href="javascript:void(0);">Save</a>
                </div>
            </div>

        </form>
    </div>
</div>
                
                  
           </div>
            
      



        </div>
    </div>
</div>
        </div>
    </div>
</div>
