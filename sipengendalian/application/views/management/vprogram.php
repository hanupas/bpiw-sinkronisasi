<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>" type="text/css">
    </head>
    <body>
         <div id="header">
            
		<?php $this->view('template/vheader'); ?>
		<?php $this->view('template/vmenu'); ?>
	</div>
        <h3><?php echo anchor('cmanagement/ProgramAdd', 'TAMBAH PROGRAM', 'title="Menambah Program Baru"'); ?></h3>
        
        <table border='1'>
            <tr>
                <th>NO</th>
                <th>NAMA PROGRAM</th>
                <th>BUDGET</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($info as $row) { ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row->program_name ?></td>
                <td><?php echo $row->program_budget ?></td>
                <td><?php echo anchor('cmanagement/ProgramEdit/'.$row->id_program, 'Edit', 'title="Edit Program"'); ?></td>
                <td><?php echo anchor('cmanagement/ProgramDelete/'.$row->id_program, 'Delete', 'title="Delete Program"'); ?></td>
            </tr>    
            <?php } ?>
        </table>
    </body>
</html>