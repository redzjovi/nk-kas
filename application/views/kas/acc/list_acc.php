<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>List ACC</title>

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
                      <a  href="<?php echo site_url('kas/index'); ?>">
                          <i class="fa fa-desktop"></i>
                          <span>List Pengajuan Permintaan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo site_url('kas/create'); ?>">
                          <i class="fa fa-tasks"></i>
                          <span>Pengajuan Permintaan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="<?php echo site_url('kas/pengaccan'); ?>">
                          <i class="fa fa-cogs"></i>
                          <span>PengACCan Permintaan</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a  href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
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

<section id="main-content">
          <section class="wrapper">
				<div class="row mt">
                  <div class="col-lg-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> List Pengajuan Permintaan Kas</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th> ID Kas</th>
                                  <th> Date</th>
                                  <th> Divisi</th>
                                  <th> Status</th>
                                  <th> Action</th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php foreach ($acc as $pc) {?>
                              <tr>
                                  <td><?php echo $pc->id_kas; ?></td>
                                  <td><?php echo $pc->date; ?></td>
                                  <td><?php echo $pc->divisi; ?></td>
                                  <td><span class="label label-info label-mini"><?php echo $pc->status; ?></span></td> 
                                  <td>
                                      <a href="<?php echo site_url('kas/acc/'.$pc->id_kas);?>">  <button class="btn btn-success btn-x" ><i class="fa fa-cogs"></i></button></a>
                                  </td>
                              </tr><?php }?>     
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
    </section>
	  <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url()?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>