<html>
<head>

    <title>Traffic Data</title>

    <?php $this->load->view('all_style'); ?>  

</head>

<body>
    <div id="wrapper">
     <?php $this->load->view('navBar'); ?>

     <div style="margin-bottom: -23px; margin-top: -22px;">
      <?php $this->load->view('navBar2'); ?>
      </div>
   
    <div class="panel-body">
        <div class="col-lg-12">
                    <br><br>
                    <h4>&nbsp;&nbsp;Search Traffic Data</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search Traffic Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Location</th>
                                        <th>Data Type</th>
                                        <th>Year</th>
                                        <th>Dicription</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                            <tr>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing Tesing Tesing Tesing Tesing</td>
                                            </tr>

                                            <tr>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing Tesing Tesing Tesing Tesing</td>
                                            </tr> 

                                            <tr>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing</td>
                                                <td>Tesing Tesing Tesing Tesing Tesing</td>
                                            </tr>                                       
                                    
                                </tbody>
                            </table>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <br><br>
                </div>
    </div>







    <?php $this->load->view('footer'); ?> 

    <?php $this->load->view('all_script'); ?> 



     <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    </div>   
  
   

</body>
</html>


