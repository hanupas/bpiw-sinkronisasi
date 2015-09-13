<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmanagement_data extends CI_Controller {

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
            $this->load->view('login/vlogin');
        }
        
        public function tp(){
            switch($this->uri->segment(3)){
                case 0: 
                    $data['page'] = 'Upload data Emon';
                    $data['detail'] = 'Mengambil data Monitoring Realisasi Pekerjaan <br /> Mengambil data Monitoring Capaian Output Kegiatan';
                    $data['image'] = '';
                    break;
                case 1: 
                    $data['page'] = 'Setting Bobot Indikator Oucome';
                    $data['detail'] = 'Mengatur bobot kontribusi indikator outcome terhadap Hitungan Outcome';
                    $data['image'] = '';
                    break;
                case 2: 
                    $data['page'] = 'Setting Relasi Output dg Indikator Outcome';
                    $data['detail'] = 'Mengatur output mana mendukung outcome yang mana';
                    $data['image'] = '';
                    break;
                case 3: 
                    $data['page'] = 'Setting Mode Penghitungan';
                    $data['detail'] = 'AVERAGE <br /> Berdasarkan Bobot <br /> Kumpulan Output terhadap sebuah variabel Outcome  <br /> Kumpulan Indikator Outcome terhadap sebuah variabel Outcome';
                    $data['image'] = '';
                    break;
                case 4: 
                    $data['page'] = 'Setting Definisi Anomali /Kategori Temuan';
                    $data['detail'] = 'Karena kegiatan atau capaian output banyak , maka pengawasan difokuskan terhadap fakta yang extrem ( temuan). Akan digali kriteria temuan terhadap realisasi kegiatan dan capaian output sebagai dasar membuat report tentang temuan';
                    $data['image'] = '';
                    break;
                case 5: 
                    $data['page'] = 'Monitoring Outcome';
                    $data['detail'] = 'Memasukkan data capaian indikator Outcome. Siapakah yang memasukkan? Apakah BalaiSatker ? Apakah BPIW? Survey pengukuran outcome tidak mudah';
                    $data['image'] = '';
                    break;
                case 6: 
                    $data['page'] = 'Trend Capaian Fisik dan Serapan Dana Kegiatan';
                    $data['detail'] = 'Seperti Emon, bedanya ditampilkan per tahun dalam 1 RPJM  sekarang, pada agregasi Kegiatan  ( bukan paket pekerjaan)';
                    $data['image'] = 'trend.jpg';
                    break;
                case 7: 
                    $data['page'] = 'Capaian Output';
                    $data['detail'] = 'Capaian output, dalam rentang tahun 1 RPJM, (2015,2016,2017,2018,2019), agregasi output dan breakdown per balaisatker pengkontribusi , per WPS';
                    $data['image'] = 'capaian_output.jpg';
                    break;
                case 8: 
                    $data['page'] = 'Capaian Outcome';
                    $data['detail'] = 'Capaian output, dalam rentang tahun 1 RPJM, (2015,2016,2017,2018,2019), agregasi output dan breakdown per balaisatker pengkontribusi, per WPS';
                    $data['image'] = 'capaian_outcome.jpg';
                    break;
                case 9: 
                    $data['page'] = 'Konsistensi Output terhadap Outcome';
                    $data['detail'] = 'Output kegiatan dalam masanya akan menyebabkan outcome tercapai. Jika Outputnya tercapai harusnya outcome juga tercapai, jika ada anomali maka perlu dicermati kemudian lebih detil';
                    $data['image'] = 'konsistensi_outcome_hr.jpg';
                    break;
                default:break;
            }
            $this->load->view('template/vtemplate1',$data);
        }
    
}
