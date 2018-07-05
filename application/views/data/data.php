<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data</title>

    <?php $this->load->view('all_style'); ?> 


</head>

<body>
    <div id="wrapper">
     <?php $this->load->view('navBar'); ?>

     <div style="margin-bottom: -23px; margin-top: -22px;">
      <?php $this->load->view('navBar2'); ?>
      </div>
  




    <div class="panel-body">

      <div class="col-md-4">
            <div class="thumbnail">
              <a href="<?php echo base_url(); ?>index.php/Data/traffic_data_table" targrt="_blank">
                <img src="<?php echo base_url();?>source/img/data/te.jpg" alt="Lights" style="width:100%; height: 30%;" >
              </a>
                <div class="caption">
                    <strong><p align="center">Traffic & Transportaion Data</p></strong>
                </div>              
            </div>
       </div> 

       <div class="col-md-4">
            <div class="thumbnail">
              <a href="<?php echo base_url(); ?>index.php/Data/highway_data_table" targrt="_blank">
                <img src=" <?php echo base_url();?>source/img/data/es.jpg" alt="Lights" style="width:100% ; height: 30%;">
              </a>
                <div class="caption">
                    <strong><p align="center">Highway & Highway Structural Data</p></strong>
                </div>              
            </div>
       </div> 

       <div class="col-md-4">
            <div class="thumbnail">
              <a href="<?php echo base_url(); ?>index.php/Data/hydrology_data_table" targrt="_blank">
                <img src=" <?php echo base_url();?>source/img/data/hs.jpg" alt="Lights" style="width:100% ;height: 30%;">
              </a>
                <div class="caption">
                    <strong><p align="center">Hydrology & Geotechnical Data</p></strong>
                </div>              
            </div>
       </div> 

       <div class="col-md-4">
            <div class="thumbnail">
              <a href="<?php echo base_url(); ?>index.php/Data/enviromental_data_table" targrt="_blank">
                <img src=" <?php echo base_url();?>source/img/data/ss.jpg" alt="Lights" style="width:100%;height: 30%;">
              </a>
                <div class="caption">
                    <strong><p align="center">Environmental Data</p></strong>
                </div>              
            </div>
       </div> 

       <div class="col-md-4">
            <div class="thumbnail">
              <a href="<?php echo base_url(); ?>index.php/Data/social_data_table" targrt="_blank">
                <img src=" <?php echo base_url();?>source/img/data/hd.jpg" alt="Lights" style="width:100%;height: 30%;">
              </a>
                <div class="caption">
                    <strong><p align="center">Social & Resettlement Data</p></strong>
                </div>              
            </div>
       </div> 

       <div class="col-md-4">
            <div class="thumbnail">
              <a href="<?php echo base_url(); ?>index.php/Data/data_collection_data_table" targrt="_blank">
                <img src=" <?php echo base_url();?>source/img/data/fs.jpg" alt="Lights" style="width:100%;height: 30%;">
              </a>
                <div class="caption">
                    <strong><p align="center">Data Collection Survey Data</p></strong>
                </div>              
            </div>
       </div> 

       <div class="col-md-4">
            <div class="thumbnail">
              <a href="<?php echo base_url(); ?>index.php/Data/miscellaneous_data_table" targrt="_blank">
                <img src=" <?php echo base_url();?>source/img/data/dc.png" alt="Lights" style="width:100%;height: 30%;">
              </a>
                <div class="caption">
                    <strong><p align="center">Miscellaneous Data</p></strong>
                </div>              
            </div>
       </div> 
                            


    </div>







    <?php $this->load->view('footer'); ?> 
    </div>   
    <!-- /#wrapper -->

    <?php $this->load->view('all_script'); ?> 

   

</body>
</html>


