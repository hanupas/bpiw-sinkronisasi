<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CAssesment extends CI_Controller {

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
    
    
    
    /* @@@@@@@@@@@@@@@@@@@@@ ASSESMENT BPIW AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function AssesmentBPIW(){
        $this->load->view('assesment/vassesment');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ ASSESMENT BPIW AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /* @@@@@@@@@@@@@@@@@@@@@ SELF ASSESMENT AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function SelfAssesment(){
        $this->load->view('assesment/vself_assesment');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ SELF ASSESMENT AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     /* @@@@@@@@@@@@@@@@@@@@@ CLOSE ASSESMENT AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function CloseAssesment(){
        $this->load->view('assesment/vclose_assesment');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ CLOSE ASSESMENT AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
}