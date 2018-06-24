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
        <h2 class="account-header hidden-xs hidden-sm">Bidding Limit</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
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
                                                        <td colspan="4"><span>10k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>20k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>30k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>40k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>50k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>60k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>70k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>80k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>90k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>100k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>110k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="4"><span>120k</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
                                                        <td colspan="2" style="width:20px !important;"><span>130k+</span>
                                                            <div class="grid_numbers--division"></div>
                                                        </td>
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
                                                    <td class="slider-main">
                                                        <div id="bidding-slider" class="big-slider"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="bidding-numbers">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="new-bidding-limit-yellow"></span> Used Bidding Limit <strong id="use-bidding-limit">$0</strong></td>
                                                        <td>
                                                            <span class="remaining-bidding-limit-green"></span> Remaining Bidding Limit <strong id="bl-remaining">$0</strong></td>
                                                        <td>
                                                            <span class="use-bidding-limit-red"></span> My New Bidding Limit <strong id="bl-new">$0</strong>
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
                                                                Bidding Limit </div>
                                                            <div>
                                                                <table class="increase-input2" id="nbli-wrapper">
                                                                    <tr>
                                                                        <td><span class="subtract"></span></td>
                                                                        <td><input type="text" id="bl-new-input" value="$0"></td>
                                                                        <td><span class="add"></span></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="bl-number-lots bl-limit-account">
                                                        <div>
                                                            <div class="title">
                                                                Number of lots to bid at a time </div>
                                                            <div>
                                                                <table class="increase-input2 two-digit" id="nlc-wrapper">
                                                                    <tr>
                                                                        <td><span class="subtract"></span></td>
                                                                        <td><input type="text" id="bl-count" value="0"></td>
                                                                        <td><span class="add"></span></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="bl-required-deposit bl-limit-account">


                                                        <div class="title">
                                                            Required Security Deposit <span class="question-ico-separate" id="question_tooltip_deposit" data-toggle="popover" data-placement="bottom" title="" data-content="Security deposits may be paid with a debit/credit card or wire transfer.

The minimum amount for a security deposit is $1,000. A $1,000 deposit allows you to place a bid up to $6,600. If you wish to place a bid higher than $6,600 then your deposit must be 15% of your maximum bid for that vehicle. For example, if you wish to place a maximum bid of $10,000, you must make a security deposit of $1,500.

Security deposits act as protection if you win your bid but fail to pay for your vehicle.&nbsp; Security deposits must be paid in full before you can bid on a vehicle. Security deposits are non-refundable if you fail to pay for your vehicle within 8 business days of the sale of the vehicle.

Security deposits are 100% refundable if you do not win an auction.
">
                        </span>
                                                        </div>

                                                        <hr>
                                                        <div class="deposit">
                                                            <strong id="bl-required-deposit">+$0</strong>
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
                                    <input type="hidden" id="deposit-input" name="deposit" value="0">
                                </form>
                                <div class="bidding_limit_payment_wrapper" style="display:none">




                                    <div class="payment-form-container ">


                                        <div class="content-notification">
                                            <div class="content-notification__title content-notification__title--red">Dear Brien, in order to BID please activate your membership!</div>
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
</div>