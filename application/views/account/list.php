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


  <section id="container" >
<!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>INVENTORY</b></a>
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
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url()?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
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
<section id="main-content">
          <section class="wrapper">
             <h3><i class="fa fa-angle-right"></i> List inventory</h3> 	
				<div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>LIST Account</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> ID User</th>
                                  <th><i class="fa fa-bullhorn"></i> Nama</th>
                                  <th ><i class="fa fa-question-circle"></i> Username</th>
                                  <th><i class="fa fa-bookmark"></i> Level</th>
                                  <th><a  class="btn btn-success" data-toggle="modal" data-target="#myModal1">Create</a></th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php foreach ($Account as $cst) {?>
                              <tr>
                                  <td><?php echo $cst->id_user; ?></td>
                                  <td><?php echo $cst->nama; ?></td>
                                  <td><?php echo $cst->username; ?></td>
                                  <td><?php echo $cst->level; ?></td> 
                                  <td>
                                      <a href="<?php echo site_url('account/edit/'.$cst->id_user);?>">  <button class="btn btn-primary btn-x" ><i class="fa fa-pencil"></i></button></a>
                                      <button class="btn btn-danger btn-x" data-toggle="modal" data-target="#myModal2" onclick="hapus(<?php echo $cst->id_user;?>, '<?php echo $cst->nama;?>');"><i class="fa fa-trash-o"></i></button>
                                  </td>
                              </tr><?php }?>
                             
                              
                              </tbody>
                          </table>

                                <!-- Modal -->
						<div class="modal fade" id="myModal1" tabindex="-10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Form Add User</h4>
						      </div>
						        <div class="modal-body">
                                                <form class="form-horizontal style-form" action='<?php echo site_url('barang/store');?>' method='POST'>                                            
                                                        <div class="form-group">
                                                            <label class="col-sm-3 col-sm-3 control-label">Nama</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control round-form" name ="nama" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 col-sm-3 control-label">Username</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control round-form" name="username" required>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-sm-3 col-sm-3 control-label">Password</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control round-form" name="password" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 col-sm-3 control-label">Password</label>
                                                            <div class="col-sm-5">
                                                                <select class="form-control" name="level" required>
                                                                <option class="hide" value="0">Level</option>
                                                                <option>Kasir</option>
                                                                <option>Kepala Bagian Keuangan</option>
                                                                <option>Direktur</option>
                                                                <option>Admin</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Add User</button>
                                                        </div>
                                                </form>
						        </div>
						    </div>
						  </div>
						</div>      				
      				</div><!-- /showback -->
                    
                    <!-- Modal2 -->
                      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
						      </div>
						      <div class="modal-body">
                              <div id="nama_barang"></div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-danger" onclick="konfirmasi();">Delete</button>
						      </div>
						    </div>
						  </div>
						</div>      				
      				</div><!-- /showback -->

                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
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
    
  <script type="text/javascript">
      //custom select box
      $(function(){
          $('select.styled').customSelect();
      });

            //delete data
            var id_user = null;
          function hapus(id, nama_barang) {
            id_user = id;
            $('#nama_barang').text('');
            $('#nama_barang').append("Apakah anda yakin ingin menghapus data "+nama_barang+" ?");
          }
          function konfirmasi() {
            $.ajax({
              url:"<?php echo site_url('barang/delete/');?>",
              type:"POST",
              data:{id:id_user},
              cache:false,
              success:function(result) {
                location.reload();
              }
            });
          }
  </script>

  </body>
</html>

