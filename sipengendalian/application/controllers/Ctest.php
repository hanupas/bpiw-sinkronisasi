<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctest extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function index(){
            $this->load->view('template/vtemplate3');
        }
        
	public function testFunctional()
	{
            $this->load->model('mgeneral');
            $this->load->model('mtest');
            
            //select
            $data = $this->mgeneral->table('myTable');
            foreach ($data as $row) {
                echo "Ini jalanku ".$row->character_varying.  "<br />";
                echo "Ini jalanku ".$row->value.  "<br />";
            }
            
            $val = 12;
            
            //insert
            $insert = array(
                'character_varying' => $val,
                'value' => $val + 100
            );
            $this->mtest->insert('myTable',$insert);
            
            //update
            $update = array(
                'value' => $val + 777
            );
            $this->mtest->update('myTable',$update,'character_varying',$val-1);
            
            //delete
            $this->mtest->delete('myTable','character_varying',$val-2);
	}
        
        public function data_submitted(){
            $this->load->model('mtest');
            $this->mtest->myTable();
        }
        
        public function chart(){
            $this->load->view('test/vchart');
        }
}
