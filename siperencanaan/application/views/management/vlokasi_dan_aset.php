<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        foreach($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
            
    <?php foreach($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    
    <style type='text/css'>
    body
    {
            font-family: Arial;
            font-size: 14px;
    }
    a {
        color: blue;
        text-decoration: none;
        font-size: 14px;
    }
    a:hover
    {
            text-decoration: underline;
    }
    </style>
    
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>" type="text/css">
        <!-- Bootstrap theme -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-theme.min.css'); ?>" type="text/css">
    
    <link rel="stylesheet" href="<?php echo base_url('asset/css/theme.css'); ?>" type="text/css">
    <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
</head>
<body role="document">
    <?php $this->view('template/vmenu') ?>
    
    <div class="container theme-showcase" role="main">
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
                <div style='height:20px;'></div> 
                <div>
                            <?php echo $output; ?>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>