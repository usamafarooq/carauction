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
        <h2 class="account-header hidden-xs hidden-sm">Memberships</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
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