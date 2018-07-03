<html>
<head>


    <title>Contact Us</title>

    <?php $this->load->view('all_style'); ?>  

</head>

<body>
    <div id="wrapper">
     <?php $this->load->view('navBar'); ?>

     <div style="margin-bottom: -23px; margin-top: -22px;">
      <?php $this->load->view('navBar2'); ?>
      </div>
   
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">     
                <img class="img-thumbnail" width="100%" src="<?php echo base_url(); ?>source/img/courses/1.jpg">
             </div>
        </div>
    </div>







    <?php $this->load->view('footer'); ?> 
    </div>   
    <!-- /#wrapper -->

    <?php $this->load->view('all_script'); ?> 

   

</body>
</html>


