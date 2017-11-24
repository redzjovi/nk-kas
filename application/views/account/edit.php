<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Edit Account</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/bootstrap-daterangepicker/daterangepicker.css" />        
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

      <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>MY PETTY CASH</b></a>
            <!--logo end-->

            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo site_url('auth/logout');?>">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="<?php echo base_url()?>profile.html"><img src="<?php echo base_url()?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $username;?></h5>
                  <h5 class="centered"><?php echo $level;?></h5>
              	  	
                  <li class="mt">
                      <a href="<?php echo site_url('kas/index'); ?>">
                          <i class="fa fa-desktop"></i>
                          <span>Edit Pengajuan Permintaan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a  href="<?php echo site_url('kas/create'); ?>">
                          <i class="fa fa-tasks"></i>
                          <span>Pengajuan Permintaan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo site_url('kas/pengaccan'); ?>">
                          <i class="fa fa-cogs"></i>
                          <span>PengACCan Permintaan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="<?php echo site_url('account/index'); ?>" >
                          <i class="fa fa-book"></i>
                          <span>Account</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Edit User</h4>
                      <form class="form-horizontal style-form" action='<?php echo site_url('account/editp');?>' method='POST'>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID User</label>
                              <div class="col-sm-2">
                                  <input type="text" id="disabledInput" class="form-control" name ="id_user" value="<?php echo $Account->id_user;?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" id="disabledInput" name ="nama" value="<?php echo $Account->nama;?>" >
                              </div>
                          </div>            
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" name ="username" value="<?php echo $Account->username;?>" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" name ="password" value="<?php echo $Account->password;?>" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Level</label>
                              <div class="col-sm-2">
                                                                      
                                  <select class="form-control" name="level" value="<?php echo $Account->level;?>">
                                    <option class="hide"><?php echo $Account->level;?></option>
                                    <option>Kasir</option>
                                    <option>Kepala Bagian Keuangan</option>
                                    <option>Direktur</option>
                                    <option>Admin</option>
                                  </select>
                              </div>
                          </div>
                                                    
                          <center><button type="submit" class="btn btn-success">Save</button>
                          <a href="<?php echo site_url('Account/index');?>"><button class="btn btn-danger">close</button></a></center>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
              
          </section>    
       </section>        
<!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>s
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
    
    <!--custom checkbox & radio-->	
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="<?php echo base_url()?>assets/js/form-component.js"></script>    
	
    <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>