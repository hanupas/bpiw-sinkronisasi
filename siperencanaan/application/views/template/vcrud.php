<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPIW PUPR</title>

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
  <?php $this->view('template/vmenu'); ?>
      <br /><br /><br /><br />
    <p><br/></p>
    <div class="container">

<!-- Button trigger modal -->
<a href="<?php echo base_url($link) ?>"><?php echo $lc ?></a><br /><br />
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add Data
</button>
<br/>
<?php $this->view($view) ?>  
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
	   url: "<?php echo base_url($table) ?>"
      }).done(function( data ) {
	  $('#viewdata').html(data);
      });
    }
    
    $('#save').click(function(){
	alert('Proses Insert');
	var p1 = $('#p1').val();
	var p2 = $('#p2').val();
	var p3 = $('#p3').val();
	var p4 = $('#p4').val();
	
	var datas="p1="+p1+"&p2="+p2+"&p3="+p3+"&p4="+p4;
      
	$.ajax({
	   type: "POST",
	   url: "<?php echo base_url($add) ?>",
	   data: datas
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    });
    
    function updatedata(str){
	
	var id = str;
	var u1 = $('#u1').val();
	var u2 = $('#u2').val();
	var u3 = $('#u3').val();
	var u4 = $('#u4').val();
	
	var datas="u1="+u1+"&u2="+u2+"&u3="+u3+"&u4="+u4;
      
	$.ajax({
	   type: "POST",
	   url: "<?php echo base_url($edit) ?>"+"/"+id+"/aaa",
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
	   url: "<?php echo base_url($delete) ?>"+"/"+id,
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    }
    </script>
  </body>
</html> 
