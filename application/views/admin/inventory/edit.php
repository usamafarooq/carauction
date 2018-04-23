
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
                <h1>Edit Inventory</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Inventory</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/inventory/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $inventory["id"] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Inventory</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Name<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Name = explode(",", $inventory["Name"]) ?>
                                        <input class="form-control" name="Name" type="text" value="<?php echo $inventory["Name"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Images<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Images = explode(",", $inventory["Images"]) ?>
                                        <input class="form-control" name="Images" type="file" value="" id="example-text-input" placeholder=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Make<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Make" required="">
                                                <option>Select Make</option><?php foreach ($table_makes as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>" <?php if($t["id"] == $inventory["Make"]) echo "selected" ?>><?php echo $t["Name"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Year<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Year = explode(",", $inventory["Year"]) ?>
                                        <input class="form-control" name="Year" type="text" value="<?php echo $inventory["Year"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Model<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="Model" required="">
                                                <option>Select Model</option><?php foreach ($table_models as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>" <?php if($t["id"] == $inventory["Model"]) echo "selected" ?>><?php echo $t["Name"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Location</label>
                                        <div class="col-sm-9">
<?php $Sale_Location = explode(",", $inventory["Sale_Location"]) ?>
                                        <input class="form-control" name="Sale_Location" type="text" value="<?php echo $inventory["Sale_Location"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Vehicle Location</label>
                                        <div class="col-sm-9">
<?php $Vehicle_Location = explode(",", $inventory["Vehicle_Location"]) ?>
                                        <input class="form-control" name="Vehicle_Location" type="text" value="<?php echo $inventory["Vehicle_Location"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Status</label>
                                        <div class="col-sm-9">
<?php $Sale_Status = explode(",", $inventory["Sale_Status"]) ?>
                                        <input class="form-control" name="Sale_Status" type="text" value="<?php echo $inventory["Sale_Status"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Date<span class="required">*</span></label>
                                        <div class="col-sm-9">
<?php $Sale_Date = explode(",", $inventory["Sale_Date"]) ?>
                                        <input class="form-control" name="Sale_Date" type="date" value="<?php echo $inventory["Sale_Date"] ?>" id="example-text-input" placeholder="" required=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Item</label>
                                        <div class="col-sm-9">
<?php $Item = explode(",", $inventory["Item"]) ?>
                                        <input class="form-control" name="Item" type="text" value="<?php echo $inventory["Item"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Destination</label>
                                        <div class="col-sm-9">
<?php $Destination = explode(",", $inventory["Destination"]) ?>
                                        <input class="form-control" name="Destination" type="text" value="<?php echo $inventory["Destination"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Shipping Price</label>
                                        <div class="col-sm-9">
<?php $Shipping_Price = explode(",", $inventory["Shipping_Price"]) ?>
                                        <input class="form-control" name="Shipping_Price" type="text" value="<?php echo $inventory["Shipping_Price"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Stock ID</label>
                                        <div class="col-sm-9">
<?php $Stock_ID = explode(",", $inventory["Stock_ID"]) ?>
                                        <input class="form-control" name="Stock_ID" type="text" value="<?php echo $inventory["Stock_ID"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9">
<?php $Type = explode(",", $inventory["Type"]) ?>
                                        <input class="form-control" name="Type" type="text" value="<?php echo $inventory["Type"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Series</label>
                                        <div class="col-sm-9">
<?php $Series = explode(",", $inventory["Series"]) ?>
                                        <input class="form-control" name="Series" type="text" value="<?php echo $inventory["Series"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Odometer</label>
                                        <div class="col-sm-9">
<?php $Odometer = explode(",", $inventory["Odometer"]) ?>
                                        <input class="form-control" name="Odometer" type="text" value="<?php echo $inventory["Odometer"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Document</label>
                                        <div class="col-sm-9">
<?php $Sale_Document = explode(",", $inventory["Sale_Document"]) ?>
                                        <input class="form-control" name="Sale_Document" type="text" value="<?php echo $inventory["Sale_Document"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Document Notes</label>
                                        <div class="col-sm-9">
<?php $Sale_Document_Notes = explode(",", $inventory["Sale_Document_Notes"]) ?>
                                        <input class="form-control" name="Sale_Document_Notes" type="text" value="<?php echo $inventory["Sale_Document_Notes"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Loss</label>
                                        <div class="col-sm-9">
<?php $Loss = explode(",", $inventory["Loss"]) ?>
                                        <input class="form-control" name="Loss" type="text" value="<?php echo $inventory["Loss"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Damage Type</label>
                                        <div class="col-sm-9">
<?php $Damage_Type = explode(",", $inventory["Damage_Type"]) ?>
                                        <input class="form-control" name="Damage_Type" type="text" value="<?php echo $inventory["Damage_Type"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">ACV</label>
                                        <div class="col-sm-9">
<?php $ACV = explode(",", $inventory["ACV"]) ?>
                                        <input class="form-control" name="ACV" type="text" value="<?php echo $inventory["ACV"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Estimated Repair Coast</label>
                                        <div class="col-sm-9">
<?php $Estimated_Repair_Coast = explode(",", $inventory["Estimated_Repair_Coast"]) ?>
                                        <input class="form-control" name="Estimated_Repair_Coast" type="text" value="<?php echo $inventory["Estimated_Repair_Coast"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">VIN</label>
                                        <div class="col-sm-9">
<?php $VIN = explode(",", $inventory["VIN"]) ?>
                                        <input class="form-control" name="VIN" type="text" value="<?php echo $inventory["VIN"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Exterior Color</label>
                                        <div class="col-sm-9">
<?php $Exterior_Color = explode(",", $inventory["Exterior_Color"]) ?>
                                        <input class="form-control" name="Exterior_Color" type="text" value="<?php echo $inventory["Exterior_Color"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Interior Color</label>
                                        <div class="col-sm-9">
<?php $Interior_Color = explode(",", $inventory["Interior_Color"]) ?>
                                        <input class="form-control" name="Interior_Color" type="text" value="<?php echo $inventory["Interior_Color"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Body Style</label>
                                        <div class="col-sm-9">
<?php $Body_Style = explode(",", $inventory["Body_Style"]) ?>
                                        <input class="form-control" name="Body_Style" type="text" value="<?php echo $inventory["Body_Style"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Vehicle Class</label>
                                        <div class="col-sm-9">
<?php $Vehicle_Class = explode(",", $inventory["Vehicle_Class"]) ?>
                                        <input class="form-control" name="Vehicle_Class" type="text" value="<?php echo $inventory["Vehicle_Class"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Engine</label>
                                        <div class="col-sm-9">
<?php $Engine = explode(",", $inventory["Engine"]) ?>
                                        <input class="form-control" name="Engine" type="text" value="<?php echo $inventory["Engine"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Cylinder</label>
                                        <div class="col-sm-9">
<?php $Cylinder = explode(",", $inventory["Cylinder"]) ?>
                                        <input class="form-control" name="Cylinder" type="text" value="<?php echo $inventory["Cylinder"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Fuel Type</label>
                                        <div class="col-sm-9">
<?php $Fuel_Type = explode(",", $inventory["Fuel_Type"]) ?>
                                        <input class="form-control" name="Fuel_Type" type="text" value="<?php echo $inventory["Fuel_Type"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Transmission</label>
                                        <div class="col-sm-9">
<?php $Transmission = explode(",", $inventory["Transmission"]) ?>
                                        <input class="form-control" name="Transmission" type="text" value="<?php echo $inventory["Transmission"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Driver Type </label>
                                        <div class="col-sm-9">
<?php $Driver_Type_ = explode(",", $inventory["Driver_Type_"]) ?>
                                        <input class="form-control" name="Driver_Type_" type="text" value="<?php echo $inventory["Driver_Type_"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Manufactured In</label>
                                        <div class="col-sm-9">
<?php $Manufactured_In = explode(",", $inventory["Manufactured_In"]) ?>
                                        <input class="form-control" name="Manufactured_In" type="text" value="<?php echo $inventory["Manufactured_In"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Key item</label>
                                        <div class="col-sm-9">
<?php $Key_item = explode(",", $inventory["Key_item"]) ?>
                                        <input class="form-control" name="Key_item" type="text" value="<?php echo $inventory["Key_item"] ?>" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Start Code</label>
                                        <div class="col-sm-9">
<?php $Start_Code = explode(",", $inventory["Start_Code"]) ?>
                                        <input class="form-control" name="Start_Code" type="text" value="<?php echo $inventory["Start_Code"] ?>" id="example-text-input" placeholder="" ></div>

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
