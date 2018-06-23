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
        <h2 class="account-header hidden-xs hidden-sm">Custom Shipping Quote
</h2>
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
                
                  <div class="form-1">
                      <form>
                                <center><h1 class="g-tittle">Vehicle Information</h1></center>
                              <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputEmail4">Vehicle type *</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Vehicle type *">
                                </div>
                                 <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputEmail4">Make*</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Make*">
                                </div>
                                 <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputEmail4">Model*</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Model*">
                                </div>
                                <div class="form-group col-md-3">
                                  <label for="inputPassword4">Year*</label>
                                  <input type="password" class="form-control" id="inputPassword4" placeholder="Year*">
                                </div>
                              </div>
                             <div class="form-group col-md-3">
                                  <label for="inputState">Drivable *</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                   <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-3">
                                  <label for="inputState">Keys*</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                </div>
                             </div>
                             <table>
                                 <tbody>
                                    <tr>
                        <td class="sho-form-textarea" style="padding-left: 15px" colspan="4">
                            <label for="ShippingCustomForm_vehicle_comments">Comments / Special Request </label>                            <textarea style="resize:none;width:100%;height:100px!important;border-radius: 3px;box-shadow:none !important;" name="ShippingCustomForm[vehicle_comments]" id="ShippingCustomForm_vehicle_comments"></textarea>                        </td>
                    </tr>
                                 </tbody>
                             </table>
                             <center><button type="submit" class="btn validate btn-primary">Validate</button></center> 
</form>
                      </div>


             </div>

                

                   <!---Form2-->
                   <div class="form-2">
                      <form>
                                <center><h1 class="g-tittle">Pickup Location</h1></center>
                              
                            <div class="form-group col-md-4">
                                  <label for="inputState">Auction *</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                   <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="inputState">Auction Location *</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                  <label for="inputEmail4">Buyer Number</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Buyer Number">
                                </div>
                             </div>
                             <table>
                                 <tbody>
                                    <tr>
                        <td class="sho-form-textarea" style="padding-left: 15px" colspan="4">
                            <label for="ShippingCustomForm_vehicle_comments">Comments / Special Request </label>                            <textarea style="resize:none;width:100%;height:100px!important;border-radius: 3px;box-shadow:none !important;" name="ShippingCustomForm[vehicle_comments]" id="ShippingCustomForm_vehicle_comments"></textarea>                        </td>
                    </tr>
                                 </tbody>
                             </table>
                             <center><button type="submit" class="btn validate btn-primary">Validate</button></center> 
</form>
                      </div>

             
              <div class="form-2">
                      <form>
                                <center><h1 class="g-tittle">Delivery information</h1></center>
                              <div class="form-group col-md-3">
                                  <label for="inputState">Country *</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                   <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                </div>
                                 <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputEmail4">City*</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="City*">
                                </div>
                                 <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputEmail4">Address *</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Address *">
                                </div>
                                <div class="form-group col-md-3">
                                  <label for="inputState">state / Province *</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                   <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                </div>
                             <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputEmail4">Zip *</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Zip *">
                                </div>
                                 <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputEmail4">Contact Name *</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Contact Name *">
                                </div>
                                 <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputEmail4">Contact Number *</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Contact Number *">
                                </div>
                                 <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputEmail4">Contact Email *</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Contact Email *">
                                </div>
                             </div>
                             <table>
                                 <tbody>
                                    <tr>
                        <td class="sho-form-textarea" style="padding-left: 15px" colspan="4">
                            <label for="ShippingCustomForm_vehicle_comments">Comments / Special Request </label>                            <textarea style="resize:none;width:100%;height:100px!important;border-radius: 3px;box-shadow:none !important;" name="ShippingCustomForm[vehicle_comments]" id="ShippingCustomForm_vehicle_comments"></textarea>                        </td>
                    </tr>
                                 </tbody>
                             </table>
                             <center><button type="submit" class="btn validate btn-primary">Validate</button></center> 
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