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
        
        public function table_limit($table,$limit)
        {
                $query = $this->db->get($table,$limit);
                return $query->result();
        }
        
        public function delete($table, $par, $var){
            $this->db->where($par,$var);
            $this->db->delete($table);
        }
        
        public function update($table, $data, $par, $var){
            $this->db->update($table, $data, array($par => $var));
        }
        
        public function insert($table, $data){
            $this->db->insert($table, $data);
        }
    
        public function select($table, $par, $var){
        
            $this->db->where($par,$var);
            $query = $this->db->get($table);
            return $query->result();
        }
        
        public function get($q)
        {
                $query = $this->db->query($q);
                return $query->result();
        }

}
?>
