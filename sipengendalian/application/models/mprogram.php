<?php

class Mprogram extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
    
    
    
    public function program_add(){
        $insert = array(
            'program_name' => $this->input->post('program_name'),
            'program_budget' => $this->input->post('budget')
        );
        $this->db->insert('program', $insert);
    }

}

?>