<html>
<head>


    <title>Vacancies</title>

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
            <div class="col-md-12 col-lg-12 col-sm-12 ">     
                <h3>Vacancies</h3><br>
                    

                <div class="col-md-4 col-sm-12 col-xs-9">
                <div class="thumbnail">
                  <a href="<?php echo base_url(); ?>source/img/gallery/gallery2.png" targrt="_blank">
                    <img src="<?php echo base_url(); ?>source/img/vacancies/job1.png" alt="Lights" style="width:100%">
                    <div class="caption">
                      <h3 class="text-center"><a href="#">Apply Now</a></h3>
                    </div>
                  </a>
                </div>
                </div>


                <div class="col-md-4 col-sm-12 col-xs-9">
                <div class="thumbnail">
                  <a href="<?php echo base_url(); ?>source/img/gallery/gallery2.png" targrt="_blank">
                    <img src="<?php echo base_url(); ?>source/img/vacancies/job1.png" alt="Lights" style="width:100%">
                    <div class="caption">
                      <h3 class="text-center"><a href="#">Apply Now</a></h3>
                    </div>
                  </a>
                </div>
                </div>


                <div class="col-md-4 col-sm-12 col-xs-9">
                <div class="thumbnail">
                  <a href="<?php echo base_url(); ?>source/img/gallery/gallery2.png" targrt="_blank">
                    <img src="<?php echo base_url(); ?>source/img/vacancies/job1.png" alt="Lights" style="width:100%">
                    <div class="caption">
                      <h3 class="text-center"><a href="#">Apply Now</a></h3>
                    </div>
                  </a>
                </div>
                </div>   


                <br><br>


            </div>
        </div>
    </div>







    <?php $this->load->view('footer'); ?> 
    </div>   
    <!-- /#wrapper -->

      <?php $this->load->view('all_script'); ?> 

   

</body>
</html>


