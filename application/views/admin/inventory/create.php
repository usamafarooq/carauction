
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
                <h1>Add Inventory</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Add Inventory</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/inventory/insert" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Add Inventory</h4>
                            </div>
                        </div>
                        <div class="panel-body"><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Name<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Name" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Images<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Images[]" type="file" value="" id="example-text-input" placeholder=""  multiple=""></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Make<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control make_id" name="Make" >
                                                <option>Select Make</option><?php foreach ($table_makes as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Year<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Year" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Model<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="model_dropdown" name="Model" >
                                                <option>Select Model</option><?php foreach ($table_models as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                               <?php } ?></select>
                                        </div>


                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Auction<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="model_dropdown" name="Model" >
                                                <option>Select Auction</option><?php foreach ($table_auction as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>"><?php echo $t["Auction"] ?></option>
                                               <?php } ?></select>
                                        </div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Location</label>
                                        <div class="col-sm-9"><input class="form-control" name="Sale_Location" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Vehicle Location</label>
                                        <div class="col-sm-9"><input class="form-control" name="Vehicle_Location" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Status</label>
                                        <div class="col-sm-9"><input class="form-control" name="Sale_Status" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Date<span class="required">*</span></label>
                                        <div class="col-sm-9"><input class="form-control" name="Sale_Date" type="date" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Item</label>
                                        <div class="col-sm-9"><input class="form-control" name="Item" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Destination</label>
                                        <div class="col-sm-9"><input class="form-control" name="Destination" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Shipping Price</label>
                                        <div class="col-sm-9"><input class="form-control" name="Shipping_Price" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Stock ID</label>
                                        <div class="col-sm-9"><input class="form-control" name="Stock_ID" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9"><select class="form-control" name="Type" >
                                                <option>Select Type</option><?php foreach ($table_type as $t) {?>
                                                    <option value="<?php echo $t["id"] ?>"><?php echo $t["Name"] ?></option>
                                               <?php } ?></select><!-- <input class="form-control" name="Type" type="text" value="" id="example-text-input" placeholder="" > --></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Series</label>
                                        <div class="col-sm-9"><input class="form-control" name="Series" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Odometer</label>
                                        <div class="col-sm-9"><input class="form-control" name="Odometer" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Document</label>
                                        <div class="col-sm-9"><input class="form-control" name="Sale_Document" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Sale Document Notes</label>
                                        <div class="col-sm-9"><input class="form-control" name="Sale_Document_Notes" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Loss</label>
                                        <div class="col-sm-9"><input class="form-control" name="Loss" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Damage Type</label>
                                        <div class="col-sm-9"><input class="form-control" name="Damage_Type" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">ACV</label>
                                        <div class="col-sm-9"><input class="form-control" name="ACV" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Estimated Repair Coast</label>
                                        <div class="col-sm-9"><input class="form-control" name="Estimated_Repair_Coast" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">VIN</label>
                                        <div class="col-sm-9"><input class="form-control" name="VIN" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Exterior Color</label>
                                        <div class="col-sm-9"><input class="form-control" name="Exterior_Color" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Interior Color</label>
                                        <div class="col-sm-9"><input class="form-control" name="Interior_Color" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Body Style</label>
                                        <div class="col-sm-9"><input class="form-control" name="Body_Style" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Vehicle Class</label>
                                        <div class="col-sm-9"><input class="form-control" name="Vehicle_Class" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Engine</label>
                                        <div class="col-sm-9"><input class="form-control" name="Engine" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Cylinder</label>
                                        <div class="col-sm-9"><input class="form-control" name="Cylinder" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Fuel Type</label>
                                        <div class="col-sm-9"><input class="form-control" name="Fuel_Type" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Transmission</label>
                                        <div class="col-sm-9"><input class="form-control" name="Transmission" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Driver Type </label>
                                        <div class="col-sm-9"><input class="form-control" name="Driver_Type_" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Manufactured In</label>
                                        <div class="col-sm-9"><input class="form-control" name="Manufactured_In" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Key item</label>
                                        <div class="col-sm-9"><input class="form-control" name="Key_item" type="text" value="" id="example-text-input" placeholder="" ></div>

                                    </div><div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Start Code</label>
                                        <div class="col-sm-9"><input class="form-control" name="Start_Code" type="text" value="" id="example-text-input" placeholder="" ></div>

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
<script>
    jQuery(document).ready(function($) {
        $('.make_id').on('change', function() {
            var make_id = $(this).val();

            get_model(make_id);
        });

        function get_model(make_id) 
        {
            var base_url = $('#base_url').val();
            $.ajax({
                url: base_url+'admin/models/get_by_make_id',
                type: 'POST',
                dataType: 'JSON',
                data: {make_id: make_id},
            })
            .done(function(response) {
                var res = response.data;
                var row = '<option value="">Select Model</option>';
                $.each(res, function(index, el) {
                    row += createRow(el);
                });

                $('#model_dropdown').html(row);
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        }


        var createRow = function ( obj ) {
            var row =  '<option value="'+obj.id+'">'+obj.Name+'</option>';
            return row;
        }
    });
</script>