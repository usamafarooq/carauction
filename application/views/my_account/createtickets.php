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
        <h2 class="account-header hidden-xs hidden-sm">Create Tickets</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
            <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">Create tickets </h2>

                <div id="ajax-content">

                    <div class="form-group create_ticket block-style">
                        <!--    <div class="group-title">-->
                        <!--</div>-->
                        <form enctype="multipart/form-data" id="kaykao-form" action="" method="post">
                            <div class="form-row1">
                                <div class="kayako_left">
                                    <label class="select-label1">
                                        <select name="Priority" id="KaykaoForm_priority" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 187.563px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                            <option value="" selected="selected">Select Priority</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Medium">Medium</option>
                                            <option value="High">High</option>
                                            <option value="Urgent">Urgent</option>
                                            <option value="Emegrency">Emegrency</option>
                                            <option value="Critical">Critical</option>
                                        </select>
                                        <span class="custom-select" style="display: inline-block;">
                                            <span class="custom-selectInner" style="width: 160px; display: inline-block;">Select Priority</span>
                                        </span>            
                                    </label>
                                </div>
                                <div class="kayako_right">
                                    <input placeholder="Subject" name="Subject" id="KaykaoForm_subject" type="text"> </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-row1">
                                <div class="message-input">
                                    <textarea placeholder="Message" name="Message" id="KaykaoForm_message"></textarea> 
                                </div>
                            </div>
                            <div class="form-row1">
                                <input id="ytKaykaoForm_file" type="hidden" value="" name="FIle"><input name="FIle" id="KaykaoForm_file" type="file"> 
                            </div>
                            <div class="form-row1 send">
                                <input class="button yBtn_24" type="submit" value="Send"> 
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
</div>