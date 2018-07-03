<html>
<head>

    

    <title>Gallary</title>

    <?php $this->load->view('all_style'); ?>  

</head>

<body>
    <div id="wrapper">
     <?php $this->load->view('navBar'); ?>

     <div style="margin-bottom: -23px; margin-top: -22px;">
      <?php $this->load->view('navBar2'); ?>
      </div>




    <div class="panel-body">
        <h3><i class="fa fa-file-image-o "></i> Our Company Gallary</h3><br>
          <div class="row">

<!-- 
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="#" targrt="_blank">
                <img src="#" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula </p>
                </div>
              </a>
            </div>
          </div> -->




            <?php 

            //$idmax=max($getPhotoID->photo_id);
            $idmax=max($getPhotoData)->photo_id;
            //var_dump($idmax);
            foreach ($getPhotoData as $photo) {

              
              if($photo->photo_id>($idmax-4)){

                echo '
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="#" targrt="_blank">
                    <img src="'.base_url().$photo->album_photo.'" alt="Loading" style="height:30%">
                  <div class="caption">
                    <p>'.$photo->Discription.'</p>
                   </div>
                    </a>
                  </div>
                </div>
             
                ';}
            }
            ?>


        </div>
    </div>






    <?php $this->load->view('footer'); ?> 
    </div>   
    <!-- /#wrapper -->

    <?php $this->load->view('all_script'); ?> 

   

</body>
</html>


