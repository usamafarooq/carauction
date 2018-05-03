
<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>Add Packages</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Packages</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/packages/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Packages</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Name<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Name" type="text" value="" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Create Watchlist and Saved Searches<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="Create_Watchlist_and_Saved_Searches" id="inlineCheckbox1" value="Yes">
            <label for="inlineCheckbox1"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="Create_Watchlist_and_Saved_Searches" id="inlineCheckbox2" value="No">
            <label for="inlineCheckbox2"> No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Watchlist SMS Notifications<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="Watchlist_SMS_Notifications" id="inlineCheckbox3" value="Yes">
            <label for="inlineCheckbox3"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="Watchlist_SMS_Notifications" id="inlineCheckbox4" value="No">
            <label for="inlineCheckbox4"> No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">I Buy Fast<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="I_Buy_Fast" id="inlineCheckbox5" value="Yes">
            <label for="inlineCheckbox5"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="I_Buy_Fast" id="inlineCheckbox6" value="No">
            <label for="inlineCheckbox6"> No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Proxy Bid<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="Proxy_Bid" id="inlineCheckbox7" value="Yes">
            <label for="inlineCheckbox7"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="Proxy_Bid" id="inlineCheckbox8" value="No">
            <label for="inlineCheckbox8"> No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">On Site Vehicle Preview<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="On_Site_Vehicle_Preview" id="inlineCheckbox9" value="Yes">
            <label for="inlineCheckbox9"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="On_Site_Vehicle_Preview" id="inlineCheckbox10" value="No">
            <label for="inlineCheckbox10"> No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Bidder Number<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="Bidder_Number" id="inlineCheckbox11" value="Yes">
            <label for="inlineCheckbox11"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="Bidder_Number" id="inlineCheckbox12" value="No">
            <label for="inlineCheckbox12"> No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">I Bid Live<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="I_Bid_Live" id="inlineCheckbox13" value="Yes">
            <label for="inlineCheckbox13"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="I_Bid_Live" id="inlineCheckbox14" value="No">
            <label for="inlineCheckbox14"> No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Transaction fee<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Transaction_fee" type="text" value="" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Free Car Auction History Reports<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="Free_Car_Auction_History_Reports" id="inlineCheckbox15" value="Yes">
            <label for="inlineCheckbox15"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="Free_Car_Auction_History_Reports" id="inlineCheckbox16" value="No">
            <label for="inlineCheckbox16"> No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Price<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Price" type="text" value="" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Include Deposit<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="Include_Deposit" id="inlineCheckbox17" value="Yes">
            <label for="inlineCheckbox17"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="Include_Deposit" id="inlineCheckbox18" value="No">
            <label for="inlineCheckbox18"> No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Add</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
