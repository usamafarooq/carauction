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
        <h2 class="account-header hidden-xs hidden-sm">CLoseTickets (<?php echo sizeof($tickets) ?>)</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
            <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">OpenTickets (<?php echo sizeof($tickets) ?>)</h2>
                <div id="ajax-content">

                    <div class="searchResult tickets">
                        <div class="sorter">
                            <table>
                                <tbody>
                                    <tr>
                                        <td width="30%">Subject</td>
                                        <td width="20%">Ticket Id</td>
                                        <td width="10%">Priority</td>
                                        <td width="25%">Last Activity</td>
                                        <td width="45%">Last Replier</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="items">
                            <div id="yw0" class="list-view">
                                <div class="items">
                                    <?php if (empty($tickets)) {?>
                                    <span class="empty">Your tickets is currently empty.</span>
                                    <?php } else{ ?>
                                    <table class="searchList listView">
                                        <tbody>
                                            <?php foreach ($tickets as $t) {?>
                                            <tr>
                                                <td width="30%">
                                                    <div class="h">Subject</div>
                                                    <a class="open-tickets" href="<?php echo base_url('my_account/single_ticket/'.$t['id']) ?>"><?php echo $t['Subject'] ?></a>            
                                                </td>
                                                <td width="20%">

                                                    <div class="h">Ticket Id</div>
                                                    <?php echo $t['id'] ?>
                                                </td>
                                                <td width="10%">

                                                    <div class="h">Priority</div>
                                                    <?php echo $t['Priority'] ?>            
                                                </td>
                                                <td width="25%">

                                                    <div class="h">Last Activity</div>
                                                    <?php echo $t['created_at'] ?>
                                                </td>
                                                <td width="45%">

                                                    <div class="h">Last Replier</div>
                                                    <?php echo $t['first_name'] ?> <?php echo $t['last_name'] ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <?php } ?>
                                </div>
                                <div class="keys" style="display:none" title="/en/account/openTickets"></div>
                            </div>
                        </div>

                        <div class="paging">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                        </td>
                                        <td style="text-align:center">

                                            <div class="pagination">
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

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