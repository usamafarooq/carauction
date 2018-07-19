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
        <h2 class="account-header hidden-xs hidden-sm">Custom Shipping Quote
</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
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