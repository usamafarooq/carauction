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
                   
                    <div class="form-p">
                                              <form>
                                            <center><h3 class="g-tittle">Change Your Password</h3>
                                            <p style="margin-top: -15px;margin-bottom: 5px;">Youll receive notifications of current bid increases, sale date changes</p>
                                            </center>    

                          <div class="form-group">
                            <label for="inputAddress2">Email</label>
                            <input class="form-control" type="text" placeholder="skpathan250@gmail.com" readonly>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">New Password</label>
                              <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">Retype Password</label>
                              <input type="text" class="form-control" id="inputCity">
                            </div>
                           
                          <center><button type="submit" class="btn validate btn-primary">Save</button></center>
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
