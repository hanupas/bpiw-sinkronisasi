<html>
    <head>
        <title>TAMBAH AKTIVITAS</title>
    </head>
    <body>
        
        <?php
        // Open form and set URL for submit form
        echo form_open('cmanagement/ProgramAddAction');

        // Show Name Field in View Page
        echo form_label('JENIS PROGRAM :', 'program_name');
        $data= array(
        'prog1' => 'Pembebasan Tanah',
        'prog2' => 'Pembuatan Waduk',
        'prog3' => 'Pembangunan Pemukiman'
        );
        echo form_dropdown('program',$data,'prog1');
        
        echo "<br />";
        echo "<br />";
        
        echo form_label('NAMA AKTIVITAS :', 'program_name');
        $data= array(
        'name' => 'program_name',
        'placeholder' => 'Please Enter Program Name',
        'class' => 'input_box'
        );
        echo form_input($data);
        
        echo "<br />";
        echo "<br />";
        // Show Email Field in View Page
        echo form_label('BUDGET:', 'budget');
        $data= array(
        'name' => 'budget',
        'placeholder' => 'Please Enter Budget',
        'class' => 'input_box'
        );
        echo form_input($data);
        ?>
        </div>
        <br />
        <br />
        <div id="form_button">
        <?php
        $data = array(
        'type' => 'submit',
        'value'=> 'TAMBAH',
        'class'=> 'submit'
        );
        echo form_submit($data); ?>
        </div>

        <?php echo form_close();?>
    </body>
</html>