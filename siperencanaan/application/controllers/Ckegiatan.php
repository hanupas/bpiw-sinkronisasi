<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ckegiatan extends CI_Controller {

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
        $this->load->view('kegiatan/vkegiatan');
    }
    
    public function Sinkronisasi() {
        $this->load->view('kegiatan/vsinkronisasi');
    }
    
    /* @@@@@@@@@@@@@@@@@@@@@ PAKET PEKERJAAN AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function PaketPekerjaan(){
        $data['program'] = $this->moap->table('mst_program');
        $data['kegiatan'] = $this->moap->table('mst_kegiatan');
        $data['output'] = $this->moap->table('mst_output');
        $data['lokasi'] = $this->moap->table_limit('mst_lokasi',100);
        //$data['jenis_kontrak'] = $this->moap->table('ref_jenis_kontrak');
        $data['paket_pekerjaan'] = $this->moap->get('select * from mst_paket_pekerjaan');
        //$data['satker'] = $this->moap->select('mst_unit_organisasi','jenis_unit_id','10');
        $data['tahun'] = array(date('Y'),date('Y')+1,date('Y')+2,date('Y')+3,date('Y')+4,date('Y')+5,date('Y')+6,date('Y')+7,date('Y')+8,date('Y')+9,date('Y')+10);
                
        $data['unit_organisasi'] = "Direktorat Pembangunan Jalan";
        $data['pagu_indikatif'] = "Rp. 1000.000.000.000,-";
        $this->load->view('kegiatan/vpaket_pekerjaan',$data);
    }
    
    public function PaketPekerjaanTest(){
        $data['program'] = $this->moap->table('mst_program');
        $data['kegiatan'] = $this->moap->table('mst_kegiatan');
        $data['output'] = $this->moap->table('mst_output');
        $this->load->view('kegiatan/vpaket_pekerjaan_origin',$data);
    }
    
    public function PaketPekerjaanAdd(){
        /*
        echo "RPMID =".  $this->input->post('program')  ;
        echo "<br />";
        echo "KEGIATAN ID =".  $this->input->post('kegiatan');
        echo "<br />";
        echo "OUTPUT ID =".  $this->input->post('output');
        echo "<br />";
        echo "PAKET NAMA =".  $this->input->post('paket_nama');
        echo "<br />";
        echo "JENIS DANA =".  $this->input->post('jenis_dana');
        echo "<br />";
        echo "JENIS PAKET =".  $this->input->post('jenis_paket');
        echo "<br />";
        echo "JENIS KONTRAK =". $this->input->post('jenis_kontrak');
        echo "<br />";
        echo "PAKET DANA =".  $this->input->post('paket_dana');
        */
        $insert = array(
                'output_id' => $this->input->post('output'),
                'paket_nama' => $this->input->post('paket_nama'),
                'paket_dana_rpm' => $this->input->post('paket_dana'),
        );
       $this->moap->insert('trn_paket_pekerjaan',$insert);
       redirect('Ckegiatan/PaketPekerjaan');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ PAKET PEKERJAAN AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function MasterKegiatan(){
        $data['md'] = $this->moap->table('mst_kegiatan');
        $this->load->view('kegiatan/vmaster_kegiatan',$data);
    }
    
    /* @@@@@@@@@@@@@@@@@@@@@ KEGIATAN AREA START @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    public function LokasiDanAset(){
        $this->load->view('management/vlokasi_dan_aset');
    }
    

    /* @@@@@@@@@@@@@@@@@@@@@ KEGIATAN AREA END @@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    
    
}