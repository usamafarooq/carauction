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
                    <div class="welcome_client" id="welcome-client">
                        <span class="welcome_client--close-modal close-modal"></span>
                        <div class="welcome_client--name">Welcome, <?php echo $user['first_name'] ?></div>
                        <p style="text-align:justify">Welcome to Car Hut Online Car Auctions! With over 300,000 vehicles in stock, we guarantee we have what you are looking for.&nbsp; Now that you are member, you can benefit from the ease of bidding with Car Hut. Simply <a href="<?php echo base_url('listing/search') ?>">search</a> our inventory and choose the vehicle you want to bid on. It&rsquo;s that easy. You can choose from cars, trucks, trailers, boats, watercraft, busses, tractor-trailers, motorcycles, jet skis, snowmobiles and more. We have so many vehicles in stock you will never run out of options.</p>

                        <p style="text-align:justify">Once you have chosen the vehicle you want to bid on, place a bid and let Car Hut do the rest. We will notify you as to whether your bid is the winning bid or if you were outbid for that vehicle. Don&rsquo;t worry because there are still hundreds of thousands of other vehicles up for auction giving you over a hundred thousand chances to get the vehicle you need.</p>

                        <p style="text-align:justify">Start browsing and join the fun in searching and bidding on vehicles. If you have any questions please <a href="<?php echo base_url('pages/page/contact-us') ?>">contact</a>&nbsp;our member support team or visit our <a href="<?php echo base_url('pages/page/faqs') ?>">FAQ</a> page for a quick reference to some of the most popular questions asked at Car Hut.&nbsp;</p>

                        <p style="text-align:justify">Once again, welcome! We are happy to have you here.</p>

                        <p style="text-align:justify">Thank You For Doing Business With Us,</p>

                        <p style="text-align:justify">&nbsp;</p>

                        <p style="text-align:justify">-Car Hut</p>
                    </div>
                    <!--<div class="account-boxes">-->
                    <div class="account-boxes">
                        <div class="box box-payments">
                            <h4 class="portlet-header">Payments </h4>
                            
                            <div class="wrapper">
                                <span class="no-result">You do not have any current payment due.</span>
                            </div>
                        </div>
                        <div class="box box-current_bids">
                            <h4 class="portlet-header">Current Bids </h4>
                            
                            <div class="wrapper">
                                <span class="no-result">You do not have any current bids.</span>
                            </div>
                        </div>
                        <div class="box box-won_bids">
                            <h4 class="portlet-header">Won Bids </h4>
                            
                            <div class="wrapper">
                                <span class="no-result">You do not have any won bids.</span>
                            </div>
                        </div>
                    </div>
                    <div class="account-boxes">
                        <div class="box box-shipping_status">
                            <h4 class="portlet-header">Shipping Status </h4>
                            
                            <div class="wrapper">
                                <span class="no-result">You do not have any shipping orders.</span>
                            </div>
                        </div>

                        <div class="box box-watchlist">
                            <h4 class="portlet-header">Watchlist (0) </h4>
                            
                            <div class="wrapper">
                                <span class="no-result">Your watchlist is currently empty.</span>
                            </div>
                        </div>

                        <div class="box box-saved_searches">
                            <h4 class="portlet-header">Saved Searches (0) </h4>
                            
                            <div class="wrapper">
                                <span class="no-result">You do not have any saved searches.</span>
                            </div>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>
        </div>
    </div>
</div>