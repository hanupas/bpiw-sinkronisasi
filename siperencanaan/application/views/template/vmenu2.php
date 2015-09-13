<link rel="stylesheet" href="<?php echo base_url('asset/css/menu_style1.css') ?>"> 

<table>
    <tr>
        <td>
            <a class="navbar-brand" href="#"><img src="<?php echo base_url('asset/images/LogoPU.jpg'); ?>" width="50px"></img></a>
        </td>
        <td>
            <div id='cssmenu'>
                <ul>
                   <li class="active" ><a href="<?php echo base_url('index.php/home'); ?>">Home</a></li>
                   <li class='has-sub'><a href='#'><span>Manajemen Data</span></a>
                      <ul>
                        <li><a href="<?php echo base_url('index.php/cmanagement/LokasiDanAset'); ?>">Lokasi dan Aset</a></li>
                        <li><a href="<?php echo base_url('index.php/cmanagement/WPS'); ?>">WPS</a></li>
                        <li><a href="<?php echo base_url('index.php/cmanagement/NonWPS'); ?>">NonWPS</a></li>
                        <li><a href="<?php echo base_url('index.php/cmanagement/Pengguna'); ?>">Pengguna</a></li>
                        <li><a href="<?php echo base_url('index.php/cmanagement/KalenderProsesBisnis'); ?>">Kalender Proses Bisnis</a></li>
                        <li><a href="<?php echo base_url('index.php/cmanagement/SettingVariabelSinkronisasi'); ?>">Setting Variabel Sinkronisasi</a></li>
                        <li class='last'><a href="<?php echo base_url('index.php/cmanagement/Refference'); ?>">Refference</a></li>
                      </ul>
                   </li>
                   <li class='has-sub'><a href='#'><span>About</span></a>
                      <ul>
                         <li><a href='#'><span>Company</span></a></li>
                         <li class='last'><a href='#'><span>Contact</span></a></li>
                      </ul>
                   </li>
                   <li class='last'><a href='#'><span>Contact</span></a></li>
                </ul>
            </div>
        </td>
    </tr>
</table>