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
                <h3><i class="fa fa-paper-plane"></i> Contact Our Company</h3><br>
                 <div class="form-group">
                    <label>Name </label>
                    <input class="form-control" placeholder="Enter Your Name" required="">
                </div>

                 <div class="form-group">
                    <label>Email </label>
                    <input class="form-control" type="Email" placeholder="Enter Your Email" required="">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>

                <button type="button" class="btn btn-primary btn-lg btn-block">Submit Your Message</button>
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


