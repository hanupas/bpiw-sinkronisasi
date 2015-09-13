<?php

class Mmodifier extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function login()
        {
            $ntv = false;
            $query = $this->db->get_where('user',array('username' => $this->input->post('username'), 'password' => $this->input->post('password')),1);
            foreach ($query->result() as $row) {
                $ntv = true;
            }
            return $ntv;
        }

}
?>
