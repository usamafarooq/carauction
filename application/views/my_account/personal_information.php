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
        <h2 class="account-header hidden-xs hidden-sm">Personal Information
        </h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
            <div class="col-sm-12 col-md-9">
                <div id="ajax-content">


                    
                    <div class="block-style">





                        <form id="account-contact-form" class="site-form c-ajax" action="" method="post">
                            <div class="form-hider" style="display:none"></div>

                            <div class="form-group" style="">
                                <div class="group-title group-title-account-info"><span></span>Account Information</div>
                                <div class="form-row account-info">
                                    <div class="account-info__block">
                                        <input autocomplete="off" placeholder="First Name" name="first_name" id="AccountContactForm_name" type="text" maxlength="30" value="<?php echo $user['first_name'] ?>">
                                        <div class="warning" id="AccountContactForm_name_em_"></div>
                                    </div>
                                    <div class="account-info__block">
                                        <input autocomplete="off" placeholder="Last Name" name="last_name" id="AccountContactForm_lastname" type="text" maxlength="30" value="<?php echo $user['first_name'] ?>">
                                        <div class="warning" id="AccountContactForm_lastname_em_"></div>
                                    </div>
                                    <div class="account-info__block">
                                        <input autocomplete="off" placeholder="Company" name="company" id="AccountContactForm_company" type="text" maxlength="255" value="<?php echo $user['company'] ?>">
                                        <div class="warning" id="AccountContactForm_company_em_"></div>
                                    </div>

                                    <div class="account-info__input account-info__block--last">
                                        <div class="account-info__input--distance">
                                            <label class="input-redcross" for="AccountContactForm_use_company_name">
                                                <input id="ytAccountContactForm_use_company_name" type="hidden" value="0" name="use_company_name" <?php if($user['use_company_name'] != 1) echo 'checked' ?>><input name="use_company_name" id="AccountContactForm_use_company_name" value="1" type="checkbox" <?php if($user['use_company_name'] == 1) echo 'checked' ?>>                        <span></span>
                                            </label>
                                        </div>
                                        <div>
                                            I understand that by selecting this option all my invoices will be issued to my company name </div>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group">
                                <div class="group-title group-title-mailing"><span></span>Notifications Language<b></b></div>
                                <div class="form-group-container">
                                    <div class="form-row account-info">
                                        <label class="select-label">
                                            <select name="language" id="AccountContactForm_lang" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 407.75px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                                                <?php foreach ($language as $l) {?>
                                                <option value="<?php echo $l['id'] ?>" <?php if($user['language'] == $l['id'] ) echo 'selected' ?>><?php echo $l['Name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php 
                                                $key = array_search($user['language'], array_column($language, 'id'));
                                                $lan = $language[0]['Name'];
                                                if ($key > -1) {
                                                    if (array_key_exists($key, $language)) {
                                                        $lan = $language[$key]['Name'];
                                                    }
                                                } 
                                            ?>
                                            <span class="custom-select" style="display: inline-block;">
                                                <span class="custom-selectInner" style="width: 380px; display: inline-block;"><?php echo $lan ?></span>
                                            </span>                
                                        </label>
                                        <div class="warning" id="AccountContactForm_lang_em_"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="group-title group-title-contact-info"><span></span>Physical address</div>
                                <div class="form-row account-info">
                                    <div id="country-form-row" class="account-info__block">
                                        <label class="select-label">
                                            <select name="country" id="countryId" class="hasCustomSelect countries presel-byip" data-id="<?php echo $user['country'] ?>" style="-webkit-appearance: menulist-button; width: 407.75px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                                                    
                                            </select>
                                            <span class="custom-select" style="display: inline-block;">
                                                <span class="custom-selectInner" style="width: 380px; display: inline-block;"> - Select Country - </span>
                                            </span>                
                                        </label>
                                        <div class="warning" id="AccountContactForm_country_em_"></div>
                                    </div>

                                    <div class="account-info__block">
                                        <input autocomplete="off" placeholder="Address" name="address" id="AccountContactForm_address" type="text" maxlength="255" value="<?php echo $user['address'] ?>">
                                        <div class="warning" id="AccountContactForm_address_em_"></div>
                                    </div>

                                    <div class="account-info__block">
                                        <label class="select-label">
                                            <select name="city" id="cityId" class="hasCustomSelect cities" data-id="<?php echo $user['city'] ?>" style="-webkit-appearance: menulist-button; width: 407.75px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
                                                    
                                            </select>
                                            <span class="custom-select" style="display: inline-block;">
                                                <span class="custom-selectInner" style="width: 380px; display: inline-block;"> - Select City - </span>
                                            </span>                
                                        </label>
                                        <!-- <input autocomplete="off" placeholder="City" name="AccountContactForm[city]" id="AccountContactForm_city" type="text" maxlength="255" value=""> -->
                                        <div class="warning" id="AccountContactForm_city_em_"></div>
                                    </div>
                                    <div class="form__zip-state">
                                        <div id="zip-form-row" class="account-info__block">
                                            <input autocomplete="off" placeholder="ZIP" name="zip" id="AccountContactForm_zip" type="text" maxlength="255" value="<?php echo $user['zip'] ?>">
                                            <div class="warning" id="AccountContactForm_zip_em_"></div>
                                        </div>

                                        <div id="state-form-row" class="account-info__block--last">
                                            <label class="select-label">
                                                <select name="state" id="stateId" class="hasCustomSelect states" data-id="<?php echo $user['state'] ?>" style="-webkit-appearance: menulist-button; position: absolute; opacity: 0; height: 40px; font-size: 13px; width: 199.422px;">
                                                    <option value="">Select State</option>
                                                </select>
                                                <span class="custom-select" style="display: inline-block;">
                                                    <span class="custom-selectInner" style="width: 172px; display: inline-block;">Select State</span>
                                                </span>                    
                                            </label>
                                            <div class="warning" id="AccountContactForm_state_em_"></div>
                                        </div>
                                    </div>
                                    <div class="account-info__block">
                                        <input autocomplete="off" placeholder="Phone" name="phone" id="AccountContactForm_phone" type="text" maxlength="255" value="<?php echo $user['phone'] ?>">
                                        <div class="warning" id="AccountContactForm_phone_em_"></div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="group-title group-title-mailing"><span></span>Mailing Information<b></b></div>
                                <div class="form-group-container account-info">

                                    <div class="form-row">
                                        <div class="account-info__block">
                                            <div class="mailing_same">
                                                <div class="account-info__input--distance">
                                                    <label class="input-redcross" for="AccountContactForm_mailing_same">
                                                        <input id="ytAccountContactForm_mailing_same" type="hidden" value="0" name="mailing_same" <?php if($user['mailing_same'] != 1) echo 'checked' ?>>
                                                        <input name="mailing_same" id="AccountContactForm_mailing_same" value="1" <?php if($user['mailing_same'] == 1) echo 'checked' ?> type="checkbox">                                <span></span>
                                                    </label>
                                                </div>
                                                <div>
                                                    My mailing address is the same as profile address. </div>
                                            </div>
                                        </div>

                                        <div id="mailinig-contents" class="" style="display: none;">
                                            <!-- <div id="country-form-row" class="account-info__block">
                                                <label class="select-label">
                                                    <select name="AccountContactForm[mailing_country]" id="AccountContactForm_mailing_country" class="hasCustomSelect" disabled="disabled" style="-webkit-appearance: menulist-button; width: 407.75px; position: absolute; opacity: 0; height: 40px; font-size: 13px;">
    
                                                    </select>
                                                    <span class="custom-select" style="display: inline-block;">
                                                        <span class="custom-selectInner" style="width: 380px; display: inline-block;"> - Select Country - </span>
                                                    </span>                        
                                                </label>
                                                <div class="warning" id="AccountContactForm_mailing_country_em_"></div>
                                            </div>
                                            <div class="account-info__block">
                                                <input autocomplete="off" placeholder="Address" name="AccountContactForm[mailing_address]" id="AccountContactForm_mailing_address" type="text" maxlength="255" disabled="disabled">
                                                <div class="warning" id="AccountContactForm_mailing_address_em_"></div>
                                            </div>
                                            <div class="account-info__block">
                                                <input autocomplete="off" placeholder="City" name="AccountContactForm[mailing_city]" id="AccountContactForm_mailing_city" type="text" maxlength="255" disabled="disabled">
                                                <div class="warning" id="AccountContactForm_mailing_city_em_"></div>
                                            </div>
                                            <div class="form__zip-state account-info__block--last">
                                                <div id="zip-form-row" class="">
                                                    <input autocomplete="off" placeholder="ZIP" name="AccountContactForm[mailing_zip]" id="AccountContactForm_mailing_zip" type="text" maxlength="255" disabled="disabled">
                                                    <div class="warning" id="AccountContactForm_mailing_zip_em_"></div>
                                                </div>
                                                <div id="state-form-row" class="">
                                                    <label class="select-label">
                                                        <select name="AccountContactForm[mailing_state]" id="AccountContactForm_mailing_state" class="hasCustomSelect" disabled="disabled" style="-webkit-appearance: menulist-button; position: absolute; opacity: 0; height: 40px; font-size: 13px; width: 100px;">
                                                            <option value="">Select State</option>
                                                        </select>
                                                        <span class="custom-select custom-selectDisabled" style="display: inline-block;">
                                                            <span class="custom-selectInner" style="width: 100px; display: inline-block;">Select State</span>
                                                        </span>                            
                                                    </label>
                                                    <div class="warning" id="AccountContactForm_mailing_state_em_"></div>
                                                </div>
                                            </div> -->
                                        </div>

                                    </div>

                                </div>

                                <div style="margin: 20px 0; text-align: center">
                                    <!-- <input type="submit" style="position: absolute; left: -10000px;top: -10000px;">
                                    <a class="btn button validate btn-primary" id="save-button" href="javascript:void(0);">Save</a> -->
                                    <button class="btn button validate btn-primary" id="save-button" type="submit">Save</button>
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