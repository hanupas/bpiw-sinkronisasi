<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cmanagement extends CI_Controller {

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
        echo "INI MANAGEMENT LOH";
    }
    
    /* @@@@@@@@@@@@@@@@@@@@@ PROGRAM AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    public function Program(){
        $data['info'] = $this->moap->table('program');
        $this->load->view('management/vprogram', $data);
    }
    
    public function ProgramAdd(){
        $this->load->view('management/vprogram_add');
    }

    public function ProgramAddAction(){
        $this->load->model('mprogram');
        $this->mprogram->program_add();
        redirect('cmanagement/program');
    }
    
    public function ProgramDelete(){
        $this->moap->delete('program','id_program',  $this->uri->segment(3));
        redirect('cmanagement/program');
    }
    
    public function ProgramEdit(){
        $data['info'] = $this->moap->select('program','id_program',  $this->uri->segment(3));
        $this->load->view('management/vprogram_edit', $data);
    }
    
    public function ProgramEditAction(){
        $data = array(
            'program_name' => $this->input->post('program_name'),
            'program_budget' => $this->input->post('program_budget')
        );
        
        $this->moap->update('program',$data,'id_program',  $this->input->post('id_program'));
        redirect('cmanagement/program');
    }
    
    /* @@@@@@@@@@@@@@@@@@@@@ PROGRAM AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /* @@@@@@@@@@@@@@@@@@@@@ ACTIVITY AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function Activity(){
        $data['info'] = $this->moap->table('program');
        $this->load->view('management/vactivity', $data);
    }
    
    public function ActivityAdd(){
        $this->load->view('management/vactivity_add');
    }
    
    /* @@@@@@@@@@@@@@@@@@@@@ ACTIVITY AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
}