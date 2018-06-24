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
        <h2 class="account-header hidden-xs hidden-sm">Ticket #1014441</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
            <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">Ticket #1014441</h2>
                <div id="ajax-content">

                    <div class="ticketList block-style">
                        <div class="ticket">
                            <div class="left-part go_back">
                                <input type="button" class="yBtn hidden-xs hidden-sm" value="Go back" onclick="history.back()">
                                <h3>Brien Dabson</h3>
                                <div class="ticketpostbarbadgeblue">
                                </div>
                            </div>
                            <div class="right-part">
                                <div class="date">
                                    24 June 2018 08:20 PM </div>
                                <div class="email">
                                    Email: support@sca.auction
                                </div>
                            </div>
                        </div>
                        <div class="post">
                            testing </div>
                        <div class="ticket">
                            <div class="left-part go_back">
                                <input type="button" class="yBtn hidden-xs hidden-sm" value="Go back" onclick="history.back()">
                                <h3>Brien Dabson</h3>
                                <div class="ticketpostbarbadgeblue">
                                </div>
                            </div>
                            <div class="right-part">
                                <div class="date">
                                    24 June 2018 04:26 PM </div>
                                <div class="email">
                                    Email: support@sca.auction
                                </div>
                            </div>
                        </div>
                        <div class="post">
                            testing
                            <div class="file">
                                <a target="_blank" href="/en/account/downloadTicketAttachment/347522?ticket_id=1014441">32814705-close-up-portrait-of-a-scary-bloody-zombie-girl-horror-halloween-.jpg</a>
                            </div>
                        </div>
                    </div>

                    <div class="ticketList-answer block-style">
                        <div class="group-title">
                            <span style="text-align: center">Add answer</span>
                        </div>
                        <form id="repost-form" action="/en/account/viewTicket/1014441" method="post">
                            <textarea name="RepostTicketForm[message]" id="RepostTicketForm_message"></textarea> <input class="yBtn_24" type="submit" name="yt0" value="Add"> </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>