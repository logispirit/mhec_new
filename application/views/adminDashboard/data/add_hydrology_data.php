<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add New Hydrology</title>

    <!-- style -->
    <?php $this->load->view('adminDashboard/admin_all_style'); ?> 
</head>

<body>

    <div id="wrapper">

<!-- Navigation -->
<?php $this->load->view('adminDashboard/admin_nav_bar'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add to Hydrology data table</h1>

                        <div class="col-md-9 col-md-offset-1">
                        <form action="<?php echo base_url(); ?>index.php/Project_controller/addProject" enctype="multipart/form-data" method="post" accept-charset="utf-8" method="POST">

							<div class="form-group">
	                            <label>Name</label>
	                            <input class="form-control" placeholder="Enter the project name" name="#" required="">
	                        </div>

	                        <div class="form-group">
                                <label>Type</label>
                                <input class="form-control" type="text" name="#" required="">
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <input class="form-control" type="text" name="#" required="">
                            </div>

                            <div class="form-group">
	                            <label>Data type</label>
	                            <input class="form-control" type="text" name="#" required="">
	                        </div>

	                        <div class="form-group">
	                            <label>Year</label>
	                            <input class="form-control" type="text" name="#" required="">
	                        </div>

                            <div class="form-group">
                                <label>Location</label>
                                <input class="form-control" placeholder="Location" name="#" required="">
                            </div>
	                        
	                        <div class="form-group">
	                            <label>Discription (20 chars min, 500 max) :</label>
	                            <textarea class="form-control" rows="3" name="#"></textarea>
	                        </div>
	                       
	                        <button type="submit" class="btn btn-success btn-lg btn-block">Submit New Project</button>
	                        <br><br><br><br>
                        </form>
                        </div>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- script -->
    <?php $this->load->view('adminDashboard/admin_all_script'); ?>

</body>

</html>
