<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MasterMonev extends CI_Controller {

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

    public function SettingKalenderMonev(){
        $this->load->view('master/vmaster_setting_kalender_monev');
    }
    
    public function AdObjectMonev(){
        $this->load->view('master/vmaster_ad_objek_monev');
    }
    
    public function PengaturanItemMonev(){
        $this->load->view('master/vmaster_pengaturan_item_monev');
    }
}