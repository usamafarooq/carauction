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
        <h2 class="account-header hidden-xs hidden-sm">Login & Password</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
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
                                        <input disabled="disabled" style="color: #b9b9b9;" autocomplete="off" name="" id="AccountLoginPasswordForm_email" type="text" value="<?php echo $user['email'] ?>"> 
                                    </div>
                                    <div class="warning" id="AccountLoginPasswordForm_email_em_"></div>
                                </div>
                                <div class="form-row">
                                    <div>
                                        <label class="text" style="font-size: 14px" for="AccountLoginPasswordForm_new_password">Enter your new password</label> <br>
                                        <input placeholder="New Password" autocomplete="off" name="password" id="AccountLoginPasswordForm_new_password" type="password">
                                        <div class="warning" id="AccountLoginPasswordForm_new_password_em_"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <input placeholder="Retype New Password" autocomplete="off" name="confirm_password" id="AccountLoginPasswordForm_new_password2" type="password">
                                    <div class="warning" id="AccountLoginPasswordForm_new_password2_em_"></div>

                                </div>
                                <div class="form-row text-center">
                                    <button type="submit" class="button yBtn_24" id="update-button">Save</button>
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