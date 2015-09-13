<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CRenstra extends CI_Controller {

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
    
    
    
    /* @@@@@@@@@@@@@@@@@@@@@ PROGRAM AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function Program(){
        $data['md'] = $this->moap->table('mst_program');
        $this->load->view('renstra/vprogram',$data);
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ PROGRAM BPIW AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /* @@@@@@@@@@@@@@@@@@@@@ SELF ASSESMENT AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function IndikatorOutcome(){
        $this->load->view('renstra/vindikator_outcome');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ SELF ASSESMENT AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
  
}