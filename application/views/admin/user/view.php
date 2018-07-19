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
                <h1>View User Detail</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View User Detail</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View User Detail</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <tbody>
                                   <?php foreach ($user as $key => $value) {?>
                                   <tr>
                                   		<td><strong><?php echo str_replace('_', ' ', $key) ?></strong></td>
                                   		<td>
                                   			<?php 
                                   				if ($key != 'Document') {
                                   					echo $value;
                                   				}
                                   				else{
                                   					$files = explode(',', $value);
                                   					for ($i=0; $i < sizeof($files); $i++) { 
                                   						echo '<a href="'.base_url($files[$i]).'" download>'.str_replace('/uploads/', '', $files[$i]).'</a><br>';
                                   					}
                                   				}
                                   			?>
                                   		</td>
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
    </div>
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->