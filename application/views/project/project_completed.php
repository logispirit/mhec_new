<html>
<head>


    <title>Projects</title>

     <?php $this->load->view('all_style'); ?>    



</head>

<body>
    <div id="wrapper">
     <?php $this->load->view('navBar'); ?>

     <div style="margin-bottom: -23px; margin-top: -22px;">
      <?php $this->load->view('navBar2'); ?>
      </div>
     
    <div class="col-lg-12"><br>
        <h2>Completed Projects</h2>
       <!--  <h4>&nbsp;&nbsp;Latest Project</h4> -->
	 	<div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Project Name
                </div>
                <div class="panel-body">
                    <a href="<?php echo base_url(); ?>index.php/Welcome/project_full_page" target="_blank">
                    <img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/project/project1.jpg"></a>
                </div>
                <div class="panel-footer">
                    <strong>Project Started & End Date :</strong><span>#########</span><br>
                    <strong>Submission Date : </strong><span>#########</span><br>
                    <strong>Project Type : </strong><span>#########</span><br>
                    <strong>Sub Category : </strong><span>#########</span><br>
                    <strong>Client : </strong><span>#########</span><br>
                    <strong>Project Handle By : </strong><span>#########</span><br>
                    <strong>Location : </strong><span>#########</span><br>
                    <strong>Discription  : </strong><span>#########</span><br>
                </div>
            </div>
        </div>



        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Project Name
                </div>
                <div class="panel-body">
                    <a href="<?php echo base_url(); ?>index.php/Welcome/project_full_page" target="_blank">
                    <img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/project/project1.jpg"></a>
                </div>
                <div class="panel-footer">
                    <strong>Project Started & End Date :</strong><span>#########</span><br>
                    <strong>Submission Date : </strong><span>#########</span><br>
                    <strong>Project Type : </strong><span>#########</span><br>
                    <strong>Sub Category : </strong><span>#########</span><br>
                    <strong>Client : </strong><span>#########</span><br>
                    <strong>Project Handle By : </strong><span>#########</span><br>
                    <strong>Location : </strong><span>#########</span><br>
                    <strong>Discription  : </strong><span>#########</span><br>
                </div>
            </div>
        </div>




        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Project Name
                </div>
                <div class="panel-body">
                    <a href="<?php echo base_url(); ?>index.php/Welcome/project_full_page" target="_blank">
                    <img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/project/project1.jpg"></a>
                </div>
                <div class="panel-footer">
                    <strong>Project Started & End Date :</strong><span>#########</span><br>
                    <strong>Submission Date : </strong><span>#########</span><br>
                    <strong>Project Type : </strong><span>#########</span><br>
                    <strong>Sub Category : </strong><span>#########</span><br>
                    <strong>Client : </strong><span>#########</span><br>
                    <strong>Project Handle By : </strong><span>#########</span><br>
                    <strong>Location : </strong><span>#########</span><br>
                    <strong>Discription  : </strong><span>#########</span><br>
                </div>
            </div>
        </div>

        
    </div>



    <div class="col-md-6 col-md-offset-5"> <h3><a href="<?php echo base_url(); ?>index.php/Welcome/project_table_page"> Show More</a></h3></div>




    <?php $this->load->view('footer'); ?> 
    </div>   
    <!-- /#wrapper -->
    <?php $this->load->view('all_script'); ?> 

   


</body>
</html>


