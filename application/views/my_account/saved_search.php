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
        <h2 class="account-header hidden-xs hidden-sm">Saved Searches (0)</h2>
        <div class="account-table row">
            <?php $this->load->view('my_account/menu') ?>
            <div class="col-sm-12 col-md-9">
                <h2 class="account-header hidden-md hidden-lg">My Account </h2>
                <div id="ajax-content">


                    <div class="searchResult">

                        <div id="yw0" class="list-view">
                            <div class="sorter">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="width:27%" class="r-border">Search Name</td>
                                            <td style="width:15%" class="r-border"></td>
                                            <td style="width:10%" class="r-border">Total</td>
                                            <td style="width:10%" class="r-border">Changes</td>
                                            <td style="width:15%" class="r-border">Notifications</td>
                                            <td style="width:15%" class="r-border">Expires On</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="items">
                                <span class="empty">Your seave search is currently empty.</span>
                                <table class="savedSearchResTable">
                                    <tbody>
                                        <tr>
                                            <td class="savedSearchResTable--first">
                                                <div class="h">Transaction Date:</div>
                                                <a class="sv-name" href="/en/search/type-cars">Save Search</a>
                                            </td>
                                            <td class="savedSearchResTable--second">
                                                <div class="saved-search-controls">
                                                    <div style="display: none">AUTOMOBILE</div>
                                                    <a data-notify="0" data-notify_days="30" data-id="886" href="#" class="search-save-link">Edit</a>&nbsp;&nbsp;
                                                    <a href="/en/account/saved_search_delete/886">Delete</a>
                                                </div>
                                            </td>
                                            <td class="savedSearchResTable--third">
                                                <div class="h">Total:</div>
                                                50000 </td>
                                            <td class="savedSearchResTable--fourth">

                                            </td>
                                            <td class="savedSearchResTable--fifth">
                                                <div class="h">Notifications:</div>
                                                <a href="#" class="search-notify-link n-off" data-id="886">
                                                    <span class="notify-icon"></span>
                                                    <span class="text">Off</span>
                                                </a>
                                            </td>
                                            <td class="savedSearchResTable--sixth">
                                                <div class="h">Expires On:</div>
                                                07/21/2018 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="keys" style="display:none" title="/en/account/saved_search"><span>886</span></div>
                        </div>

                        <div class="paging saved-search__paging">

                            <table>
                                <tbody>
                                    <tr>
                                        <td>

                                            Showing 1 - 1 of 1
                                        </td>
                                        <td style="text-align:center">

                                            <div class="pagination">
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                    <div id="bid-modal-savesearch" style="display: none">
                        <div class="title">Save your Search <span class="close-modal"></span>
                        </div>
                        <div class="content">

                            <table class="table-savesearch">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="filter">

                                                Filters:
                                                <div class="filterbox"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                            <div style="color:#c00;padding-bottom:10px;display:none" id="error_text">
                                                Please fill the name of your search </div>

                                            <form class="form-vertical" id="saved-search-update-from" action="/en/vehicle/search/save" method="post">

                                                <label for="SaveSearch_name" class="required">Search Name<span class="required">*</span></label>
                                                <input name="SaveSearch[name]" id="SaveSearch_name" type="text" maxlength="255" placeholder="My Search">


                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label for="SaveSearch_notify">Notify</label>
                                                                <label class="radio">
                                                                    <input id="SaveSearch_notify_0" value="0" type="radio" checked="checked" name="SaveSearch[notify]">
                                                                    <label for="SaveSearch_notify_0">None</label>
                                                                </label>
                                                                <label class="radio">
                                                                    <input id="SaveSearch_notify_1" value="1" type="radio" name="SaveSearch[notify]">
                                                                    <label for="SaveSearch_notify_1">Email</label>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label for="SaveSearch_notify_days" class="required">Notify Days <span class="required">*</span></label>
                                                                <label class="select-label">
                                                                    <select name="SaveSearch[notify_days]" id="SaveSearch_notify_days" class="hasCustomSelect" style="-webkit-appearance: menulist-button; width: 100px; position: absolute; opacity: 0; height: 40px; font-size: 14px;">
                                                                        <option value="30">30 Days</option>
                                                                        <option value="14">14 Days</option>
                                                                        <option value="7">7 Days</option>
                                                                        <option value="3">3 Days</option>
                                                                        <option value="1">Once</option>
                                                                        <option value="0">Never</option>
                                                                    </select>
                                                                    <span class="custom-select" style="display: inline-block;">
                                                                        <span class="custom-selectInner" style="width: 100px; display: inline-block;">30 Days</span>
                                                                    </span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div style="text-align: center;margin-top: 10px"><button class="yBtn_24">Save</button></div>

                                            </form>

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