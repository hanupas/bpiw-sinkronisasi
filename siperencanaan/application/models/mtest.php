<?php

class Mtest extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }
    
    public function insert($table, $data){
        $this->db->insert($table, $data);
    }

    public function     update($table, $data, $par, $var){
    
        $this->db->update($table, $data, array($par => $var));
    }
    
    public function delete($table, $par, $var){
        $this->db->where($par,$var);
        $this->db->delete($table);
    }
    
    public function myTable(){
        //insert
        $insert = array(
            'character_varying' => $this->input->post('ucv'),
            'value' => $this->input->post('uv')
        );
        $this->db->insert('myTable', $insert);
    }
}

?>