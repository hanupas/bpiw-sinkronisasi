<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Csinkronisasi extends CI_Controller {

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
    
    
    
    /* @@@@@@@@@@@@@@@@@@@@@ PENYUSUNAN SEB PAGU INDIKATIF AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function PenyusunanSebPaguIndikatif(){
        $this->load->view('sinkronisasi/vpenyusunan_seb_pagu_indikatif');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ PENYUSUNAN SEB PAGU INDIKATIF AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /* @@@@@@@@@@@@@@@@@@@@@ PENYUSUNAN SE PAGU ANGGARAN SEMENTARA AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function PenyusunanSePaguAnggaranSementara(){
        $this->load->view('sinkronisasi/vpenyusunan_se_pagu_anggaran_sementara');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ PENYUSUNAN SE PAGU ANGGARAN SEMENTARA AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     /* @@@@@@@@@@@@@@@@@@@@@ PENYUSUNAN SE PAGU ANGGARAN DEFINITIF AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function PenyusunanSePaguAnggaranDefinitif(){
        $this->load->view('sinkronisasi/vpenyusunan_se_pagu_anggaran_definitif');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ PENYUSUNAN SE PAGU ANGGARAN DEFINITIF AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     /* @@@@@@@@@@@@@@@@@@@@@ PENYUSUNAN SE PAGU ANGGARAN DEFINITIF AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function PenyusunanDipa(){
        $this->load->view('sinkronisasi/vpenyusunan_dipa');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ PENYUSUNAN SE PAGU ANGGARAN DEFINITIF AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
}