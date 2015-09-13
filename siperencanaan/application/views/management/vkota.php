<table class="table table-bordered table-hover">
	<thead>
	  <tr>
	    <th>Kabupaten/Kota ID</th>
	    <th>Nama Kabupaten</th>
	    <th>Propinsi ID</th>
	    <th>Action</th>
	  </tr>
	</thead>
	<tbody>
<?php
foreach ($md as $row) {
?>
    
	  <tr>
	    <td><?php echo $row->kabkotId ?></td>
	    <td><?php echo $row->Nama ?></td>
	    <td><?php echo $row->propinsiID ?></td>
	    <td>
	    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row->kabkotId; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	    <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row->kabkotId; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> 



<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row->kabkotId; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row->kabkotId; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row->kabkotId; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="nm">Propinsi</label>
    <input type="text" class="form-control" id="u1" value="<?php echo $row->propinsiID; ?>">
  </div>
  <div class="form-group">
    <label for="gd">Nama Kota</label>
    <input type="text" class="form-control" id="u2" value="<?php echo $row->Nama; ?>">
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updatedata('<?php echo $row->kabkotId; ?>')" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	    
	    </td>
	  </tr>
<?php
}
?>
	</tbody>
      </table>