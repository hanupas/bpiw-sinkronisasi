<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo base_url('asset/images/LogoPU.jpg'); ?>" width="50px"></img></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
                <li class="active" ><a href="<?php echo base_url('index.php/home'); ?>">Home</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manajemen Data<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('index.php/Cmanagement'); ?>">Lokasi dan Aset</a></li>
                    <li><a href="<?php echo base_url('index.php/cmanagement/WPS'); ?>">WPS</a></li>
                    <li><a href="<?php echo base_url('index.php/cmanagement/WPS'); ?>">NonWPS</a></li>
                    <li><a href="<?php echo base_url('index.php/cmanagement/Pengguna'); ?>">Pengguna</a></li>
                    <li><a href="<?php echo base_url('index.php/cmanagement/KalenderProsesBisnis'); ?>">Kalender Proses Bisnis</a></li>
                    <li><a href="<?php echo base_url('index.php/cmanagement/SettingVariabelSinkronisasi'); ?>">Setting Variabel Sinkronisasi</a></li>
                    <li><a href="<?php echo base_url('index.php/cmanagement/ProgramStrategis'); ?>">Program Strategis BPIW</a></li>
                    <li><a href="<?php echo base_url('index.php/cmanagement/Refference'); ?>">Refference</a></li>
                  </ul>		
                </li>
                
                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Renstra<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('index.php/crenstra/Program'); ?>">Program</a></li>
                    <li><a href="<?php echo base_url('index.php/crenstra/IndikatorOutcome'); ?>">Indikator Outcome</a></li>
                  </ul>		
                </li>
                
                
                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usulan Kegiatan<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('index.php/ckegiatan'); ?>">Entry Kegiatan</a></li>
                    <li><a href="<?php echo base_url('index.php/ckegiatan/PaketPekerjaan'); ?>">Entry Usulan Paket Pekerjaan</a></li>
                    <li><a href="<?php echo base_url('index.php/ckegiatan/PaketPekerjaan'); ?>">Pra Konreg</a></li>
                    <li><a href="<?php echo base_url('index.php/ckegiatan/Sinkronisasi'); ?>">Sinkronisasi</a></li>
                  </ul>		
                </li>
                
                
                
                
                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Assessment BPIW<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('index.php/cassesment/AssesmentBPIW'); ?>">Assesment BPIW</a></li>
                    <li><a href="<?php echo base_url('index.php/cassesment/SelfAssesment'); ?>">Verifikasi Self Assesment vs BPIW</a></li>
                    <li><a href="<?php echo base_url('index.php/cassesment/CloseAssesment'); ?>">Close Assement</a></li>
                  </ul>		
                </li>
                
                
                
                
                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sinkronisasi<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('index.php/csinkronisasi/PenyusunanSebPaguIndikatif'); ?>">Penyusunan SEB Pagu Indikatif</a></li>
                    <li><a href="<?php echo base_url('index.php/csinkronisasi/PenyusunanSePaguAnggaranSementara'); ?>">Penyusunan SE Pagu Anggaran Sementara</a></li>
                    <li><a href="<?php echo base_url('index.php/csinkronisasi/PenyusunanSePaguAnggaranDefinitif'); ?>">Penyusunan SE Pagu Definitif</a></li>
                    <li><a href="<?php echo base_url('index.php/csinkronisasi/PenyusunanDipa'); ?>">Penyusunan DIPA</a></li>
                  </ul>		
                </li>
             
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>