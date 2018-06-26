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
        <h2 class="account-header hidden-xs hidden-sm">Ticket #<?php echo $ticket['id'] ?></h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
            <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">Ticket #<?php echo $ticket['id'] ?></h2>
                <div id="ajax-content">

                    <div class="ticketList block-style">
                        <div class="ticket">
                            <div class="left-part go_back">
                                <input type="button" class="yBtn hidden-xs hidden-sm" value="Go back" onclick="history.back()">
                                <h3><?php echo $user['first_name'] ?> <?php echo $user['last_name'] ?></h3>
                                <div class="ticketpostbarbadgeblue">
                                </div>
                            </div>
                            <div class="right-part">
                                <div class="date">
                                    <?php echo date('d F Y h:m A', strtotime($ticket['created_at'])) ?></div>
                                <div class="email">
                                    Email: support@auctionglauto.com
                                </div>
                            </div>
                        </div>
                        <?php for($i=sizeof($thread) - 1; $i>=1; $i--){?>
                        <div class="post">
                            <?php echo $thread[$i]['message'] ?> 
                        </div>
                        <div class="ticket">
                            <div class="left-part go_back">
                                <input type="button" class="yBtn hidden-xs hidden-sm" value="Go back" onclick="history.back()">
                                <h3><?php echo $thread[$i]['first_name'] ?> <?php echo $thread[$i]['last_name'] ?></h3>
                                <div class="ticketpostbarbadgeblue">
                                </div>
                            </div>
                            <div class="right-part">
                                <div class="date">
                                    <?php echo date('d F Y h:m A', strtotime($thread[$i]['created_at'])) ?> </div>
                                <div class="email">
                                    Email: support@auctionglauto.com
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="post">
                            <?php echo $ticket['Message'] ?>
                            <div class="file">
                                <a target="_blank" href="<?php echo base_url($ticket['FIle']) ?>"><?php echo str_replace('/uploads/', '', $ticket['FIle']) ?></a>
                            </div>
                        </div>
                    </div>
                    <?php if ($ticket['status'] == 1) {?>
                    <div class="ticketList-answer block-style">
                        <div class="group-title">
                            <span style="text-align: center">Add answer</span>
                        </div>
                        <form id="repost-form" action="" method="post">
                            <textarea name="message" id="RepostTicketForm_message"></textarea> 
                            <input class="yBtn_24" type="submit"  value="Add"> </form>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
