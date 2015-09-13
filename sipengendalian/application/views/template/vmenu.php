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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Management Data<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('index.php/Cmanagement_data/tp/0'); ?>">Upload Data Emon</a></li>
                    <li><a href="<?php echo base_url('index.php/Cmanagement_data/tp/1'); ?>">Setting Bobot Indikator Oucome</a></li>
                    <li><a href="<?php echo base_url('index.php/Cmanagement_data/tp/2'); ?>">Setting Relasi Output dg Indikator Outcome</a></li>
                    <li><a href="<?php echo base_url('index.php/Cmanagement_data/tp/3'); ?>">Setting Mode Penghitungan</a></li>
                    <li><a href="<?php echo base_url('index.php/Cmanagement_data/tp/4'); ?>">Setting Definisi Anomali /Kategori Temuan</a></li>
                  </ul>		
                </li>
                
                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Input<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('index.php/Cmanagement_data/tp/5'); ?>">Monitoring Outcome</a></li>
                  </ul>		
                </li>
                
                
                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reporting<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('index.php/Report/Trend'); ?>">Trend Capaian Fisik dan Serapan Dana Kegiatan</a></li>
                    <li><a href="<?php echo base_url('index.php/Report/CapaianOutput'); ?>">Capaian Output</a></li>
                    <li><a href="<?php echo base_url('index.php/Report/CapaianOutcome'); ?>">Capaian Outcome</a></li>
                    <li><a href="<?php echo base_url('index.php/Cmanagement_data/tp/9'); ?>">Konsistensi Output terhadap Outcome</a></li>
                  </ul>		
                </li>
             
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>