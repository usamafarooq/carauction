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
        <h2 class="account-header hidden-xs hidden-sm">Lost Bid</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
               <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">Current Bid </h2>
               <div id="ajax-content">
             
                         <div class="searchResult">

    <div class="menu" style="display: none">

        
<ul id="yw0">
<li class="active"><a href="/en/account/current_bids">Current bids (0)</a></li>
<li><a href="/en/account/won_bids">Won bids (0)</a></li>
<li><a href="/en/account/lost_bids">Lost bids (0)</a></li>
</ul>
        <div>
                    </div>
    </div>

    <div class="account-bids-list-toolbar">
        <div id="yw1" class="select-sorter">
    
    <label class="select-label">
        <select name="sort_field" class="inline-render hasCustomSelect" style="-webkit-appearance: menulist-button; width: 266px; position: absolute; opacity: 0; height: 32px; font-size: 12px;">
                            <option value="year">Year</option>
                            <option value="make">Make</option>
                            <option value="model">Model</option>
                            <option value="odometer">Odometer</option>
                            <option value="primary">Primary Damage</option>
                            <option value="location">Auction Location</option>
                            <option value="sale_date">Sale Date</option>
                            <option value="final_price">Final Price</option>
                    </select><span class="custom-select inline-render" style="display: inline-block;"><span class="custom-selectInner" style="width: 244px; display: inline-block;">Year</span></span>
    </label>

    <label class="select-label">
        <select name="sort_direction" class="inline-render hasCustomSelect" style="-webkit-appearance: menulist-button; width: 194px; position: absolute; opacity: 0; height: 32px; font-size: 12px;">
                            <option value="" selected="selected">ASC</option>
                            <option value="DESC">DESC</option>
                    </select><span class="custom-select inline-render" style="display: inline-block;"><span class="custom-selectInner" style="width: 172px; display: inline-block;">ASC</span></span>
    </label>
</div>
    </div>

    <div id="yw2" class="list-view">
<div class="hidden-xs"></div><div class="items">
<span class="empty">Your vehicle list is currently empty.</span></div><div class="keys" style="display:none" title="/en/account/current_bids"></div>
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
</div>
          </div>
            </div>
            
        </div>
    </div>
</div>
        </div>
    </div>
</div>