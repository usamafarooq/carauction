
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
                <h1>Edit Tickets</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Tickets</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/tickets/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $tickets["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Tickets</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Priority<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Priority = explode(",", $tickets["Priority"]) ?>
                                        <select class="form-control" name="Priority" required="">
        <option>Select Priority</option><option value="Normal" <?php if("Normal" == $tickets["Priority"]) echo "selected" ?>>Normal</option><option value="Medium" <?php if("Medium" == $tickets["Priority"]) echo "selected" ?>>Medium</option><option value="High" <?php if("High" == $tickets["Priority"]) echo "selected" ?>>High</option><option value="Urgent" <?php if("Urgent" == $tickets["Priority"]) echo "selected" ?>>Urgent</option><option value="Emegrency" <?php if("Emegrency" == $tickets["Priority"]) echo "selected" ?>>Emegrency</option><option value="Critical" <?php if("Critical" == $tickets["Priority"]) echo "selected" ?>>Critical</option></select></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Subject<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Subject = explode(",", $tickets["Subject"]) ?>
                                        <input class="form-control" name="Subject" type="text" value="<?php echo $tickets["Subject"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Message</label>
                                        <div class="col-sm-9">
<?php $Message = explode(",", $tickets["Message"]) ?>
                                        <textarea class="form-control" name="Message" ><?php echo $tickets["Message"] ?></textarea></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">FIle</label>
                                        <div class="col-sm-9">
<?php $FIle = explode(",", $tickets["FIle"]) ?>
                                        <input class="form-control" name="FIle" type="file" value="" id="example-text-input" placeholder=""></div>

                                    </div><div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
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
