<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        // Open form and set URL for submit form
        echo form_open('croot/data_submitted');

        // Show Name Field in View Page
        echo form_label('Character Varying :', 'ucv');
        $data= array(
        'name' => 'ucv',
        'placeholder' => 'Please Enter User Name',
        'class' => 'input_box'
        );
        echo form_input($data);

        // Show Email Field in View Page
        echo form_label('Value:', 'uv');
        $data= array(
        'name' => 'uv',
        'placeholder' => 'Please Enter Email Address',
        'class' => 'input_box'
        );
        echo form_input($data);
        ?>
        </div>

        <div id="form_button">
        <?php
        $data = array(
        'type' => 'submit',
        'value'=> 'Submit',
        'class'=> 'submit'
        );
        echo form_submit($data); ?>
        </div>

        <?php echo form_close();?>
    </body>
</html>