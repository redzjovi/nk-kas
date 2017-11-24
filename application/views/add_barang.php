<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>ADD Barang</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  
	  	<div class="container">
		    <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Form ADD Barang</h3><br><br>
				<form class="form-horizontal style-form" action='<?php echo site_url('barang/store');?>' method='POST'>
						
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control round-form" name ="nama_barang" required>
                              </div>
                          </div>

						<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah Barang</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control round-form" name="jumlah" required>
                              </div>
                          </div>
						  
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga Barang</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control round-form" name="harga" required>
                              </div>
                          </div>
						  
						  <button type="submit" class="btn btn-success">Add Barang</button>

				</form>
			</section>
		</div>
		
<!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script class="<?php echo base_url()?>include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url()?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url()?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="<?php echo base_url()?>assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="<?php echo base_url()?>assets/js/jquery.tagsinput.js"></script>
	
<script>
      //custom select box

      $(function(){
         // $('select.styled').customSelect();
		  $.backstretch("<?php echo base_url()?>assets/img/login.jpg", {speed: 500});
      });

  </script>

  </body>
</html>