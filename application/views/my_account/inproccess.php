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
        <h2 class="account-header hidden-xs hidden-sm">In Proccess (0)</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
               <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">Transactions </h2>
                
                   <div id="ajax-content">
       

<div class="clr"></div>


<div class="searchResult transactions">

    <div class="menu" style="display: none">

        <ul id="yw0">
<li class="active"><a href="/en/account/transactionList">Transaction List (0)</a></li>
<li><a href="/en/account/deposits">Deposits (0)</a></li>
<li><a href="/en/account/refunds">Refunds (0)</a></li>
</ul>
        <div>
                    </div>
    </div>

    <div id="yw1" class="list-view">
<div class="items">
<span class="empty">Your list is currently empty.</span></div><div class="keys" style="display:none" title="/en/account/transactionList"></div>
</div>
    <div class="paging">
        <table>
            <tbody><tr><td>
                                    </td><td style="text-align:center">

                    <div class="pagination">
                                            </div>
                </td><td>

                </td></tr>
        </tbody></table>

    </div>
</div>        </div>
            </div>
            
        </div>
    </div>
</div>
        </div>
    </div>
</div>