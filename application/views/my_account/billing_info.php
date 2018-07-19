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
        <h2 class="account-header hidden-xs hidden-sm">Billing Information</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
            <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">Transactions </h2>

                <div id="ajax-content">

                    <div class="billing_information">


                        <div class="empty text-center">You don't have a saved credit card</div>
                        <div class="text-center button_cards">
                            <a class="button yBtn_24" href="#"><span class="plus"></span>Add a New Card</a>
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
</div>
</div>