<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('home/vhome');
    }

    public function Fisik(){
        $this->load->view('monitoring/vmonitoring_fisik');
    }
    
    public function NonFisik(){
        $this->load->view('monitoring/vmonitoring_non_fisik');
    }
    
    public function Aset(){
        $this->load->view('monitoring/vmonitoring_aset');
    }
    
    public function EntryFisik(){
        $this->load->view('monitoring/vmonitoring_entry_fisik');
    }
    
    public function EntryNonFisik(){
        $this->load->view('monitoring/vmonitoring_entry_non_fisik');
    }
    
    public function EntryAset(){
        $this->load->view('monitoring/vmonitoring_entry_aset');
    }

}