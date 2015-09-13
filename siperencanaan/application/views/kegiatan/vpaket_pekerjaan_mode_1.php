<!DOCTYPE html>
<html lang="en" data-ng-app="todoApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="description" content="Create Todo App with CodeIgniter 3 + AngularJS">
		<meta name="author" content="Pisyek Kumar">
                <link rel="icon" href="<?php echo base_url('asset/images/icon-pu.jpg') ?>">

		<title>BPIW</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="<?php echo base_url('asset/css/app.css') ?>" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body data-ng-controller="TodoCtrl">
            <?php $this->view('template/vmenu'); ?>
            <br /><br /><br />
		<!-- Begin page content -->
		<div class="container">
                    <div>
			<div style="text-align:left">
				<h4>Entry Usulan Paket Pekerjaan</h4>
				<hr/>
				
			</div>
                            
                            <div class="form-group col-md-12">
                                <div>
                                    <label class="col-md-4 control-label" >Unit Organisasi</label>
                                </div>
                                <div class="col-md-6 " >
                                    <label class="radio-inline" ><input type="radio" name="sda"/>SDA</label>
                                    <label class="radio-inline" ><input type="radio" name="sda"/>CK</label>
                                    <label class="radio-inline" ><input type="radio" name="sda"/>BM</label>
                                    <label class="radio-inline" ><input type="radio" name="sda"/>PERA</label>
                                    <label class="radio-inline" ><input type="radio" name="sda"/>AIL</label>
                                    
                                </div>
                                                               
                            </div>    
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="textinput">Balai Satker</label>
                                <select name="satker" style="width: 350px;">
                                    <?php foreach ($satker as $row) { ?>
                                    <option value="<?php echo $row->unit_id ?>"><?php echo $row->nama ?></option>
                                    <?php } ?>    
                               </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="textinput">Tahuh Anggaran</label>
                                <select name="tahun_anggaran" style="width: 350px;">
                                    <?php foreach ($tahun as $row) { ?>
                                        <option value="<?php echo $row ?>"><?php echo $row ?></option>
                                    <?php } ?>
                               </select>
                            </div>
                                    
                            <div class="form-group col-md-12">
                                <hr/>   
				<h4>Pagu Indikatif</h4>
                            </div>  
			 
                               <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label" for="textinput">Total Nilai Paket</label>
					<input class="col-md-4" type="text" class="form-control" name="title" ng-model="taskTitle" placeholder="Approved Submit">
                                    <label class="col-md-4 control-label">Analisis Nilai Pekerjaan</label>
				</div>
                            
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label" for="textinput">Total Nilai Draft</label>
					<input class="col-md-4" type="text" class="form-control" name="title" ng-model="taskTitle" placeholder="Not Approved">
                                        <div class="col-md-2"></div>
                                </div>
                                
                            
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label" for="textinput">Total  Nilai Submit</label>
					<input class="col-md-4" type="text" class="form-control" name="title" ng-model="taskTitle" placeholder="Total">
                                    <div class="col-md-2"></div>
                                   
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label" for="textinput">Total Nilai Accepted</label>
					<input class="col-md-4" type="text" class="form-control" name="title" ng-model="taskTitle" placeholder="Nilai Accepted">
                                    <div class="col-md-2"></div>
                                    
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label" for="textinput">Total Nilai Rejected</label>
					<input class="col-md-4" type="text" class="form-control" name="title" ng-model="taskTitle" placeholder="Nilai Rejected">
                                    <div class="col-md-2"></div>
                                    
                                </div>
				
                               <div class="form-group col-md-12">
                                    <label class="col-md-4 control-label" for="textinput">Total Nilai Revisi</label>
					<input class="col-md-4" type="text" class="form-control" name="title" ng-model="taskTitle" placeholder="Nilai Revisi">
                                    <div class="col-md-2"></div>
                                    
                                </div>
                        
                            <div class="form-group col-md-12">
                                <hr/>   
                            </div>  
			 
                            <?php echo form_open('Ckegiatan/PaketPekerjaanAdd'); ?>
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="selectbasic">Nama Program</label>
                                <select name="program" style="width: 350px;">
                                    <?php foreach ($program as $row) { ?>
                                    <option value="<?php echo $row->rpjmid ?>"><?php echo $row->program_nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="selectbasic">Nama Kegiatan</label>
                                <select name="kegiatan" style="width: 350px;">
                                    <?php foreach ($kegiatan as $row) { ?>
                                    <option maxlength="10" value="<?php echo $row->kegiatan_id ?>"><?php echo $row->kegiatan_nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="selectbasic">Nama Output</label>
                               <select name="output" style="width: 350px;">
                                    <?php foreach ($output as $row) { ?>
                                    <option value="<?php echo $row->output_id ?>"><?php echo $row->output_nama ?></option>
                                    <?php } ?>    
                               </select>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="selectbasic">Jenis Dana</label>
                               <select name="jenis_dana">
                                    <option value="rpm">RPM</option>
                                    <option value="phln">PHLN</option>
                                    <option value="sbsn">SBSN</option>
                                </select>
                            </div>
                        
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="selectbasic">Jenis Paket</label>
                               <select name="jenis_paket">
                                    <option value="my_baru">MY BARU</option>
                                    <option value="my_lanjutan">MY LANJUTAN</option>
                                    <option value="sy">SY</option>
                                </select>
                            </div>
                        
                             <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="selectbasic">Jenis Kontrak</label>
                               <select name="jenis_kontrak" style="width: 350px;">
                                    <?php foreach ($jenis_kontrak as $row) { ?>
                                    <option value="<?php echo $row->jenis_kontrakID ?>"><?php echo $row->nama ?></option>
                                    <?php } ?>    
                               </select>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="textinput">Paket Nama</label>
                                    <input class="col-md-4" type="text"  name="paket_nama" placeholder="Wajib Diisi">
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="textinput">Paket Dana</label>
                                    <input class="col-md-4" type="text"  name="paket_dana" placeholder="Wajib Diisi">
                            </div>
                        
                            <div class="form-group col-md-12">
                                <label class="col-md-4 control-label" for="selectbasic">Lokasi</label>
                               <select name="output" style="width: 350px;">
                                    <?php foreach ($lokasi as $row) { ?>
                                    <option value="<?php echo $row->lokasiID ?>"><?php echo $row->namaLokasi ?></option>
                                    <?php } ?>    
                               </select>
                            </div>
                         
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-default">Tambah</button>
                            </div>
                            <?php echo form_close();?>
                        </div>
                    
                    <!--table start-->
                        <h2 data-ng-show="tasks.length == 0">No task yet!</h2>
			<div class="col-md-12" data-ng-show="tasks.length > 0">
				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width:50px" rowspan="2">#</th>
							<th rowspan="2">Kode</th>
                                                        <th style="width:80px; text-align:center" rowspan="2">Kegiatan</th>
							<th style="width:80px; text-align:center" rowspan="2">Paket/Sub Paket</th>
                                                        <th style="width:80px; text-align:center" rowspan="2">Lokasi Asett</th>
                                                        <th style="width:80px; text-align:center" rowspan="2">Nilai(Rupiah)</th>
<!--                                                        <th style="width:80px; text-align:center">Edit Row</th>-->
<!--                                                        <th style="width:80px; text-align:center">NA</th>-->
                                                        <th style="width:80px; text-align:center" colspan="3">Biaya</th>
<!--                                                        <th style="width:80px; text-align:center">Wewenang</th>
                                                        <th style="width:80px; text-align:center">Konstribusi</th>-->
                                                        <th style="width:80px; text-align:center" colspan="3">SDM </th>
                                                        <th style="width:80px; text-align:center" rowspan="2">Jenis Kontrak</th>
                                                        <th style="width:80px; text-align:center" rowspan="2">Jenis Paket</th>
                                                        <th style="width:80px; text-align:center" rowspan="2">Status</th>
						</tr>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
					</thead>
					<tbody>
                                            <?php foreach ($paket_pekerjaan as $row) { ?>
                                                <tr>
							<td>{{ $index + 1 }}</td>
                                                        <td><?php echo $row->pake_kode ?></td>
                                                        <td><?php echo $row->nama ?></td>
                                                        <td><?php echo $row->subpaket ?></td>
                                                        <td><?php echo $row->lokasiID.'/'.$row->asetID ?></td>
                                                        <td><?php echo $row->pagu ?></td>
                                                        <td>-</td>
                                                        <td>-</td>
<!--                                                        <td>-</td>
                                                        <td>-</td>-->
<!--                                                        <td>-</td>-->
                                                        <td><?php echo $row->sdm_prof_orang ?></td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td ><select class="col-md-4" id="selectbasic" name="selectbasic" class="form-control">
                                                                <option value="1">Approved</option>
                                                                <option value="2">Not Approved</option>
                                                              </select>
                                                        </td>
                                                        
						</tr>
                                            <?php } ?>
					</tbody>
				</table>
			</div>
	
			
			
		</div>

		<footer class="footer">
			<div class="container">
			<p class="text-muted">&copy; <?php echo date('Y')?> </p>
			</div>
		</footer>
                <script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo base_url('asset/js/angular.min.js') ?>"></script>
		<script src="<?php echo base_url('asset/js/app.js') ?>"></script>
	</body>
</html>