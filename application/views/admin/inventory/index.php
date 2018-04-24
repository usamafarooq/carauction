		<!-- /.Navbar  Static Side -->
			<div class="control-sidebar-bg"></div>
			<!-- Page Content -->
			<div id="page-wrapper">
				<!-- main content -->
				<div class="content">
					<!-- Content Header (Page header) -->
					<div class="content-header">
						<div class="header-icon">
							<i class="pe-7s-box1"></i>
						</div>
						<div class="header-title">
							<h1>View Inventory</h1>
							<small> </small>
							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/"><i class="pe-7s-home"></i> Home</a></li>

								<li class="active">View Inventory</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Inventory</h4>
										<?php 
											if ($permission["created"] == "1") {
										?>
										<a href="<?php echo base_url("admin/inventory/create") ?>"><button class="btn btn-info pull-right">Add Inventory</button></a>
										<?php } ?>
									</div>
								</div>
								<div class="panel-body">
									
									<div class="table-responsive">
										<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Id</th><th>Name</th><th>Name</th><th>Year</th><th>Name</th><th>Sale Location</th><th>Vehicle Location</th><th>Sale Status</th><th>Sale Date</th><th>Item</th><th>Destination</th><th>Shipping Price</th><th>Stock ID</th><th>Type</th><th>Series</th><th>Odometer</th><th>Sale Document</th><th>Sale Document Notes</th><th>Loss</th><th>Damage Type</th><th>ACV</th><th>Estimated Repair Coast</th><th>VIN</th><th>Exterior Color</th><th>Interior Color</th><th>Body Style</th><th>Vehicle Class</th><th>Engine</th><th>Cylinder</th><th>Fuel Type</th><th>Transmission</th><th>Driver Type </th><th>Manufactured In</th><th>Key item</th><th>Start Code</th><?php 
														if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
													?>
													<th>Action</th>
													<?php } ?>
												</tr>
											</thead>
										    <tbody>
										    	<?php
										    		foreach ($inventory as $module) {
										    	?>
												<tr>
													<td><?php echo $module["id"] ?></td><td><?php echo $module["Name"] ?></td><td><?php echo $module["Name"] ?></td><td><?php echo $module["Year"] ?></td><td><?php echo $module["Name"] ?></td><td><?php echo $module["Sale_Location"] ?></td><td><?php echo $module["Vehicle_Location"] ?></td><td><?php echo $module["Sale_Status"] ?></td><td><?php echo $module["Sale_Date"] ?></td><td><?php echo $module["Item"] ?></td><td><?php echo $module["Destination"] ?></td><td><?php echo $module["Shipping_Price"] ?></td><td><?php echo $module["Stock_ID"] ?></td><td><?php echo $module["Type"] ?></td><td><?php echo $module["Series"] ?></td><td><?php echo $module["Odometer"] ?></td><td><?php echo $module["Sale_Document"] ?></td><td><?php echo $module["Sale_Document_Notes"] ?></td><td><?php echo $module["Loss"] ?></td><td><?php echo $module["Damage_Type"] ?></td><td><?php echo $module["ACV"] ?></td><td><?php echo $module["Estimated_Repair_Coast"] ?></td><td><?php echo $module["VIN"] ?></td><td><?php echo $module["Exterior_Color"] ?></td><td><?php echo $module["Interior_Color"] ?></td><td><?php echo $module["Body_Style"] ?></td><td><?php echo $module["Vehicle_Class"] ?></td><td><?php echo $module["Engine"] ?></td><td><?php echo $module["Cylinder"] ?></td><td><?php echo $module["Fuel_Type"] ?></td><td><?php echo $module["Transmission"] ?></td><td><?php echo $module["Driver_Type_"] ?></td><td><?php echo $module["Manufactured_In"] ?></td><td><?php echo $module["Key_item"] ?></td><td><?php echo $module["Start_Code"] ?></td><?php 
														if ($permission["edit"] == "1" || $permission["deleted"] == "1"){
													?>
													<td>
														<?php 
															if ($permission["edit"] == "1") {
														?>
														<a href="<?php echo base_url() ?>admin/inventory/edit/<?php echo $module["id"] ?>"><button class="btn btn-info btn-circle material-ripple"><i class="material-icons">mode_edit</i></button></a>
														<?php } ?>
														<?php 
															if ($permission["deleted"] == "1") {
														?>
		                                                <a href="<?php echo base_url() ?>admin/inventory/delete/<?php echo $module["id"] ?>"><button class="btn btn-danger btn-circle material-ripple"><i class="material-icons">delete_forever</i></button></a>
		                                                <?php } ?>
	                                                </td>
	                                                <?php } ?>
												</tr>
												<?php } ?>
											</tbody>
										</table>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="height: 450px;"></div>
				</div> <!-- /.main content -->
			</div><!-- /#page-wrapper -->
		</div><!-- /#wrapper -->
		<!-- START CORE PLUGINS -->






