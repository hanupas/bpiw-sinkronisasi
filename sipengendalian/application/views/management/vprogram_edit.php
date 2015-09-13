<html>
    <head>
        <title>PROGRAM EDIT</title>
    </head>
    <body>
        
        <?php
            $id_program = 0;
            $program_name = '';
            $program_budget = '';
            foreach ($info as $row) {
               $id_program = $row->id_program; 
               $program_name = $row->program_name;
               $program_budget = $row->program_budget;
            } 
        ?>
        <?php
        // Open form and set URL for submit form
        echo form_open('cmanagement/ProgramEditAction');
        
        $data= array('id_program' => $id_program);
        echo form_hidden($data);
        
        // Show Name Field in View Page
        echo form_label('Nama Program :', 'program_name');
        $data= array(
        'name' => 'program_name',
        'placeholder' => 'Please Enter Program Name',
        'class' => 'input_box',
        'value' => $program_name    
        );
        echo form_input($data);
        
        echo "<br />";
        echo "<br />";
        // Show Email Field in View Page
        echo form_label('Budget:', 'budget');
        $data= array(
        'name' => 'program_budget',
        'placeholder' => 'Please Enter Budget',
        'class' => 'input_box',
        'value' => $program_budget      
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
        'value'=> 'EDIT',
        'class'=> 'submit'
        );
        echo form_submit($data); ?>
        </div>

        <?php echo form_close();?>
    </body>
</html>