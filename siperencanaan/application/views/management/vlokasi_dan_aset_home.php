<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Sistem Informasi Pemrograman Tersinkronisasi</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>" type="text/css">
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-theme.min.css'); ?>" type="text/css">
    
    <link rel="stylesheet" href="<?php echo base_url('asset/css/theme.css'); ?>" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">
      
      <?php $this->view('template/vmenu'); ?>

    <div class="container theme-showcase" role="main">

<!-- 
      <div class="jumbotron">
        <h1>Managemen Data - Master</h1>
        <p>Sistem Informasi Perencanaan Tersinkronisasi Pembangunan Infrastruktur PUPR(SIP)</p>
      </div>
-->	  
	<div class="panel panel-default">
            <div class="panel-heading">Lokasi Dan Aset</div>
            
          </div>  
	<div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="<?php echo base_url('index.php/Cmanagement/Desa') ?>">Desa</a>
                        </h4>
                    </div>
					
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="<?php echo base_url('index.php/Cmanagement/Kecamatan') ?>">Kecamatan</a>
                        </h4>
                    </div>
					
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="<?php echo base_url('index.php/Cmanagement/Kota') ?>">Kabupaten/Kota</a>
                        </h4>
                    </div>
					
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="<?php echo base_url('index.php/Cmanagement/Propinsi') ?>">Propinsi</a>
                        </h4>
                    </div>
					
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="<?php echo base_url('index.php/Cmanagement/Pulau') ?>">Pulau</a>
                        </h4>
                    </div>
						
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="<?php echo base_url('index.php/Cmanagement/Aset') ?>">Aset</a>
                        </h4>
                    </div>
					
                </div>
                
                
                
              				
								
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
                <h1>Manajemen Data Lokasi dan Aset</h1>
                Sistem Informasi Perencanaan Tersinkronisasi Pembangunan Infrastruktur PUPR(SIP)
            </div>
            <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="tab1default"><div class="well well-sm">CRUD Data Desa, merefer kecamatan</div></div>
                        <div class="tab-pane fade" id="tab2default"><div class="well well-sm">CRUD data Kelurahan, merefer  kecamatan</div></div>
                        <div class="tab-pane fade" id="tab3default"><div class="well well-sm">CRUD data kecamatan, merefer kab /Kota</div></div>
                        <div class="tab-pane fade" id="tab4default"><div class="well well-sm">CRUD data kabupaten, merefer propinsi</div></div>
                        <div class="tab-pane fade" id="tab5default"><div class="well well-sm">CRUD data Kota, merefer propinsi</div></div>
                        <div class="tab-pane fade" id="tab6default"><div class="well well-sm">CRUD data Propinsi</div></div>
                        <div class="tab-pane fade" id="tab7default"><div class="well well-sm">CRUD data Pulau, merefer Propinsi. Bisa many to many</div></div>
                        <div class="tab-pane fade" id="tab8default"><div class="well well-sm">Aset</div></div>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="row feature">
            <div >
                <!--<img width="100%" src="<?php echo base_url('asset/images/DATA_MASTER.jpg'); ?>">-->
            </div>
      </div>


      

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/docs.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/svg.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/ie10-viewport-bug-workaround.js'); ?>"></script>
  </body>
</html>
