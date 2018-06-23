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
        <h2 class="account-header hidden-xs hidden-sm">Bidding Limit</h2>
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
        

<form action="/en/account/increase_bidding_limit" method="post" id="bidding-limit-form">
    <div class="bidding-limit">
        <div class="bidding-grid hidden-xs">
            <div class="title">Move slider to adjust Bidding Limit</div>
            <table class="grid-caption">
                <tbody>
                <tr class="grid-numbers">
                    <td colspan="4"><span>$0</span></td>
                    <td colspan="4"><span>10k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>20k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>30k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>40k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>50k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>60k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>70k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>80k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>90k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>100k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>110k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="4"><span>120k</span> <div class="grid_numbers--division"></div></td>
                    <td colspan="2" style="width:20px !important;"><span>130k+</span> <div class="grid_numbers--division"></div></td>
                </tr>
                <tr class="grid">
                    <td class="big"><span>&nbsp;</span></td>
                                                                        <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="med"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                                                                <td class="big"><span>&nbsp;</span></td>
                                                                                                <td class="small"><span>&nbsp;</span></td>
                                                            </tr>
                </tbody>
            </table>
        </div>
        <table class="slider-table hidden-xs">
            <tbody>
            <tr>
                <td class="slider-used" style="display:none;">
                    <div></div>
                </td>
                <td class="slider-current" style="display:none;">
                    <div></div>
                </td>
                <td class="slider-main" style="width: 100%;">
                    <div id="bidding-slider" class="big-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 5%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 5%;"></span></div>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="bidding-numbers">
            <table>
                <tbody>
                <tr>
                    <td>
                        <span class="new-bidding-limit-yellow"></span>
                        Used Bidding Limit <strong id="use-bidding-limit">$0</strong></td>
                    <td>
                        <span class="remaining-bidding-limit-green"></span>
                        Remaining Bidding Limit <strong id="bl-remaining">$0</strong></td>
                    <td>
                        <span class="use-bidding-limit-red"></span>
                        My New Bidding Limit <strong id="bl-new">$6,600</strong>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    
    <div class="bidding-limit-summary bidding-limit-summary2 proxy">
        <table>
            <tbody>
            <tr>
                <td class="bl-limit bl-limit-account">
                    <div>
                        <div class="title">
                            Bidding Limit                        </div>
                        <div>
                            <table class="increase-input2" id="nbli-wrapper">
                                <tbody><tr>
                                    <td><span class="subtract"></span></td>
                                    <td><input type="text" id="bl-new-input" value="$0"></td>
                                    <td><span class="add"></span></td>
                                </tr>
                            </tbody></table>

                        </div>
                    </div>
                </td>
                <td class="bl-number-lots bl-limit-account">
                    <div>
                        <div class="title">
                            Number of lots to bid at a time                        </div>
                        <div>
                            <table class="increase-input2 two-digit" id="nlc-wrapper">
                                <tbody><tr>
                                    <td><span class="subtract"></span></td>
                                    <td><input type="text" id="bl-count" value="0"></td>
                                    <td><span class="add"></span></td>
                                </tr>
                            </tbody></table>

                        </div>
                    </div>
                </td>
                <td class="bl-required-deposit bl-limit-account">

                    
                    <div class="title">
                        Required Security Deposit                        <span class="question-ico-separate" id="question_tooltip_deposit" data-toggle="popover" data-placement="bottom" title="" data-content="Security deposits may be paid with a debit/credit card or wire transfer.

The minimum amount for a security deposit is $1,000. A $1,000 deposit allows you to place a bid up to $6,600. If you wish to place a bid higher than $6,600 then your deposit must be 15% of your maximum bid for that vehicle. For example, if you wish to place a maximum bid of $10,000, you must make a security deposit of $1,500.

Security deposits act as protection if you win your bid but fail to pay for your vehicle.&nbsp; Security deposits must be paid in full before you can bid on a vehicle. Security deposits are non-refundable if you fail to pay for your vehicle within 8 business days of the sale of the vehicle.

Security deposits are 100% refundable if you do not win an auction.
" data-original-title="">
                        </span>
                    </div>

                    <hr>
                    <div class="deposit">
                        <strong id="bl-required-deposit">+$1,000</strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="bl-required-btn">
                    <a class="yBtn_24 button" id="increase-btn">Increase My Bidding Limit</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <input type="hidden" id="deposit-input" name="deposit" value="1000">
</form>
<div class="bidding_limit_payment_wrapper" style="display:none">
    



<div class="payment-form-container ">

    
        <div class="content-notification">
            <div class="content-notification__title content-notification__title--red">Dear saim, in order to BID please activate your membership!</div>
            <div class="content-notification__controls">
                <a class="button yBtn_24 yBtn_h32" href="/en/account/account_activation">Activate</a>
            </div>
        </div>

    </div>
</div>


        
       

       </div>












            </div>
            
        </div>
    </div>
</div>
        </div>
    </div>
</div>