<?php

class Moap extends CI_Model {

    /*
        public $title;
        public $content;
        public $date;
    */
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function table($table)
        {
                $query = $this->db->get($table);
                return $query->result();
        }
        
        public function delete($table, $par, $var){
            $this->db->where($par,$var);
            $this->db->delete($table);
        }
        
        public function update($table, $data, $par, $var){
            $this->db->update($table, $data, array($par => $var));
        }
        
        public function select($table, $par, $var){
        
            $this->db->where($par,$var);
            $query = $this->db->get($table);
            return $query->result();
        }

}
?>
