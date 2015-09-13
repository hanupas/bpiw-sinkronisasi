<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Ajax Bootstrap</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('asset/crud/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="viewdata()">
    <p><br/></p>
    <div class="container">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add Data
</button>
<br/>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Data</h4>
      </div>
      <div class="modal-body">
        
<form>
  <div class="form-group">
    <label for="nm">Nama</label>
    <input type="text" class="form-control" id="nm">
  </div>
  <div class="form-group">
    <label for="gd">Gender</label>
    <input type="text" class="form-control" id="gd">
  </div>
  <div class="form-group">
    <label for="pn">Phone</label>
    <input type="text" class="form-control" id="pn">
  </div>
  <div class="form-group">
    <label for="al">Alamat</label>
    <input type="text" class="form-control" id="al">
  </div>
</form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="save" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>    
<div id="info"></div>
      <br/>
      <div id="viewdata"></div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('asset/crud/js/jquery.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/crud/js/bootstrap.min.js') ?>"></script>
    <script>
    function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "<?php echo base_url('index.php/Desa/getData') ?>"
      }).done(function( data ) {
	  $('#viewdata').html(data);
      });
    }
    
    $('#save').click(function(){
	alert('Haloha');
	var nm = $('#nm').val();
	var gd = $('#gd').val();
	var pn = $('#pn').val();
	var al = $('#al').val();
	
	var datas="nm="+nm+"&gd="+gd+"&pn="+pn+"&al="+al;
      
	$.ajax({
	   type: "POST",
	   url: "<?php echo base_url('index.php/Desa/newData') ?>",
	   data: datas
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    });
    
    function updatedata(str){
	
	var id = str;
	var nm = $('#nm'+str).val();
	var gd = $('#gd'+str).val();
	var pn = $('#pn'+str).val();
	var al = $('#al'+str).val();
	
	var datas="nm="+nm+"&gd="+gd+"&pn="+pn+"&al="+al;
      
	$.ajax({
	   type: "POST",
	   url: "<?php echo base_url('index.php/Desa/updateData') ?>"+"/"+id,
	   data: datas
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    }
    
    function deletedata(str){
	
	var id = str;
      
	$.ajax({
	   type: "GET",
	   url: "<?php echo base_url('index.php/Desa/deleteData') ?>"+"/"+id,
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    }
    </script>
  </body>
</html> 
