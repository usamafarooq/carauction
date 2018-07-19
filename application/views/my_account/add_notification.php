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
                    <div class="">
                      <form id="watchlist-notifications-form" class="site-form c-ajax" action="" method="post">
                          <div class="form-group">
                              <div id="get-auction-updates">
                                  <table>
                                      <tbody>
                                          <tr>
                                              <td style="padding: 15px; display: none">
                                                  <img src="/img/notify-icon-big.png" alt="">
                                              </td>
                                              <td style="text-align: center">
                                                  <p>Register today and receive real-time updates via email or SMS notifications. You’ll receive updates on sale date changes, auction cancellations and bid increases. You’ll also receive alerts regarding vehicles saved on your Watch List.</p>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <div id="when-to-notify">
                                  <div class="form-row email">
                                      <div>
                                          <input disabled="disabled" type="text" value="<?php echo $user['email'] ?>" name="" id="email"> </div>
                                      <div class="clr"></div>
                                  </div>

                                  <div class="form-row to-notify">
                                      <table>
                                          <tbody>
                                              <tr>
                                                  <td>
                                                      <div>
                                                          <label class="select-label">
                                                            <select name="status" id="notify_status" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 199px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                                                              <option value="2">Always</option>
                                                              <option value="1" selected="selected">Never</option>
                                                              <option value="3">Just for auctions I select</option>
                                                            </select>
                                                            <span class="custom-select" style="display: inline-block;">
                                                              <span class="custom-selectInner" style="width: 172px; display: inline-block;">Never</span>
                                                            </span>                                
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>
                                                      <div>
                                                          <label class="select-label">
                                                            <select name="type" id="notify_method" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 198px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                                                              <option value="1" selected="selected">Email</option>
                                                              <option value="2">SMS</option>
                                                              <option value="3">Email + SMS</option>
                                                            </select>
                                                            <span class="custom-select" style="display: inline-block;">
                                                              <span class="custom-selectInner" style="width: 171px; display: inline-block;">Email</span>
                                                            </span>                                
                                                          </label>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                      <!--                <div class="clr"></div>-->
                                  </div>

                                  <div>
                                      <!--                    <label>-->
                                      <!--</label>-->
                                      <div id="notify-phone-wrapper">
                                          <input id="notify-phone-input" name="notify_phone" value="<?php echo $user['notify_phone'] ?>" placeholder="Phone number to Send SMS">
                                          <!-- <div style="display:inline-block;width:33%; vertical-align: top">
                                              <a class="button yBtn_24" id="verify-button" href="javascript:void(0);" style="">Verify</a>
                                          </div> -->
                                          <div class="warning" id="notify_phone_em_" style="display:none"></div>
                                      </div>
                                  </div>
                                  <div class="save-settings">
                                      <button type="submit" class="button yBtn_24" id="save-button">Save Settings</button>
                                      <!-- <a class="button yBtn_24 disabled" id="save-button" href="javascript:void(0);" onlick="" style="">Save Settings</a> -->
                                  </div>

                              </div>
                          </div>

                      </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>