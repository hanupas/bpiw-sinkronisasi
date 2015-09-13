<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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
    
        public function CapaianOutcome(){
            $this->load->view('report/vcapaian_outcome');
        }
        
        
        public function CapaianOutput(){
            $this->load->view('report/vcapaian_output_home');
        }
        
        public function CapaianOutputBar(){
            $this->load->view('report/vcapaian_output');
        }
        
        public function Trend(){
            $this->load->view('report/vtrend_home');
        }
        
        public function Bar(){
            $this->load->view('report/vtrend');
        }
        
        
    
}
