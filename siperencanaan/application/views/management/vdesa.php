<table class="table table-bordered table-hover">
	<thead>
	  <tr>
	    <th>Lokasi ID</th>
	    <th>Nama Desa</th>
	    <th>Nama Kecamatan</th>
	    <th>Action</th>
	  </tr>
	</thead>
	<tbody>
<?php
foreach ($md as $row) {
?>
    
	  <tr>
	    <td><?php echo $row->lokasiID ?></td>
	    <td><?php echo $row->namaLokasi ?></td>
	    <td><?php echo $row->kecamatanID ?></td>
	    <td>
	    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row->lokasiID; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
	    <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row->lokasiID; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> 



<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row->lokasiID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row->lokasiID; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row->lokasiID; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="nm">KecamatanB</label>
    <input type="text" class="form-control" id="u1" value="<?php echo $row->kecamatanID; ?>">
  </div>
  <div class="form-group">
    <label for="gd">Nama Desa</label>
    <input type="text" class="form-control" id="u2" value="<?php echo $row->namaLokasi; ?>">
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="updatedata('<?php echo $row->lokasiID; ?>')" class="btn btn-primary">Save changes</button>
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