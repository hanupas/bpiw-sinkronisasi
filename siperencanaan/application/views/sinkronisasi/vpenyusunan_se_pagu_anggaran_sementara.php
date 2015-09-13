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
            <div class="panel-heading">Penyusunan SE Pagu ANGGARAN SEMENTARA</div>
            
          </div>   
	<div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="tab" data-parent="#accordion" href="#tab1default">Simulasi And Save</a>
                        </h4>
                    </div>
                    
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="tab" data-parent="#accordion" href="#tab2default">Load Hasil Simulasi</a>
                        </h4>
                    </div>
		
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="tab" data-parent="#accordion" href="#tab3default">Analisis Hasil Kegiatan Simulasi</a>
                        </h4>
                    </div>
                    
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="tab" data-parent="#accordion" href="#tab4default">Penetapan</a>
                        </h4>
                    </div>
                    
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="tab" data-parent="#accordion" href="#tab5default">Cetak Hasil Penetapan</a>
                        </h4>
                    </div>
                    
                     <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="tab" data-parent="#accordion" href="#tab6default">Close RKA-K/L Sementara</a>
                        </h4>
                    </div>
                    
                     <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="tab" data-parent="#accordion" href="#tab7default">View Fstok indikatif</a>
                        </h4>
                    </div>
                </div>
                
              				
								
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
                <h1>PENYUSUNAN SE PAGU ANGGARAN SEMENTARA</h1>
                Sistem Informasi Perencanaan Tersinkronisasi Pembangunan Infrastruktur PUPR(SIP)
            </div>
            <div class="tab-content">
                        <div class="tab-pane fade" id="tab1default"><div class="well well-sm">
                            <ol >
                                <li>Sistem akan mengurutkan RENJA K/L  berdasarkan perhitungan prioritas hasil assesment BPIW </li>
                                <li>Sistem meminta untuk memasukkan nilai pagu anggaran </li>
                                <li>Sistem akan menampilkan usulan kegiatan yang diterima untuk diproses lebih lanjut, berdasarkan pagu anggaran yang ditetapkan </li>
                                <li>Sistem mempersilahkan  pengambil keputusan untuk melakukan adjustment terhadap approval usulan yang diterima untuk mendekatkan dengan pagu anggaran dan untuk melakukan penyesuaian yang diperlukan </li>
                                <li>Hasil simulasi versi  X bisa disimpan untuk dilihat lagi dilain waktu </li>
                            </ol>
                        </div></div>
                        <div class="tab-pane fade" id="tab2default"><div class="well well-sm">Me load kembali sebuah versi simulasi</div></div>
                        <div class="tab-pane fade" id="tab3default"><div class="well well-sm">Menampilkan hasil analisis usulan kegiatan yang diterima di SEB Pagu Anggaran, agar pengambil keputusan bisa melihat rekap hasil simulasi</div></div>
                        <div class="tab-pane fade" id="tab4default"><div class="well well-sm">Sistem mempersilahkan pengguna untuk menetapkan sebuah versi simulasi menjadi legal sebagai SEB Pagu Anggaran ( RKA-K/L Sementara)</div></div>
                        <div class="tab-pane fade" id="tab5default"><div class="well well-sm">Menyediaan fasilitas untuk mendownload hasil ketetapan ke dalam file Excel atau cetak PDF</div></div>
                        <div class="tab-pane fade" id="tab6default"><div class="well well-sm">Pengguna mengklik menu Close RKA K/L Sementara</div></div>
                        <div class="tab-pane fade" id="tab7default"><div class="well well-sm">Berisi usulan kegiatan di tahap pagu Indikatif yang ditolak untuk masuk ke RKA K/L Sementara</div></div>
                    </div>
        </div>
    </div>
    <div class="row feature">
            <div >
                <!--<img width="100%" src="<?php echo base_url('asset/images/Penyusunan_SE_Pagu_ANGGARAN_SEMENTARA.jpg'); ?>">-->
            </div>
      </div>
      
      <div class="row feature">
            <div >
                <!--<img width="100%" src="<?php echo base_url('asset/images/Penyusunan-SE-PaguAnggaran-SimulasiSave.jpg'); ?>">-->
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
