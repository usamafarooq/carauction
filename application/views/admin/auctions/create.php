
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
                <h1>Add Auctions</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Auctions</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/auctions/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Auctions</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Auction<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Auction" type="text" value="" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Live<span class="required">*</span></label>
                                        <div class="col-sm-9"><div class="radio radio-info radio-inline">
            <input type="radio"  name="Live" id="inlineCheckbox1" value="Yes">
            <label for="inlineCheckbox1"> Yes </label>
        </div><div class="radio radio-info radio-inline">
            <input type="radio"  name="Live" id="inlineCheckbox2" value="No">
            <label for="inlineCheckbox2">  No </label>
        </div></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Location<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Location" required="">
                                                <option>Select Location</option><?php foreach ($table_locations as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>"><?php echo $t["Address"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Date<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Date" type="datetime-local" value="" id="example-text-input" placeholder="" required="" min="<?php echo date('Y-m-d\TH:i') ?>"></div>

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
