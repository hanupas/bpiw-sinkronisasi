<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cmanagement extends CI_Controller {

        public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

        public function index(){
            $this->load->view('management/vlokasi_dan_aset_home');
        }
        
        public function WPS(){
            $this->load->view('management/vwps_home');
        }
        
        public function Pengguna(){
            $this->load->view('management/vpengguna_home');
        }
        
        public function ProgramStrategis(){
            $this->load->view('management/vprogram_strategis_home');
        }
        
	public function _example_output($output = null,$data)
	{
                $this->load->view('management/vlokasi_dan_aset',$output);
	}

        public function _example_output_wps($output = null,$data)
	{
                $this->load->view('management/vwps',$output);
	}

        public function _example_output_pengguna($output = null,$data)
	{
                $this->load->view('management/vpengguna',$output);
	}
        
        public function Desa()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mst_lokasi');
			$crud->set_subject('DESA');
			$crud->required_fields('table_id');
			$crud->columns('table_id','lokasi_id','lokasi_nama');

			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/LokasidanAset';
			$this->_example_output($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	} 
        
        public function Kecamatan()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mst_kecamatan');
			$crud->set_subject('KECAMATAN');
			$crud->required_fields('table_id');
			$crud->columns('table_id','kecamatan_id','kecamatan_nama');

			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/LokasidanAset';
			$this->_example_output($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        
        
        
        public function Kota()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mst_kabupaten_kota');
			$crud->set_subject('KABUPATEN/KOTA');
			$crud->required_fields('table_id');
			$crud->columns('table_id','propinsi_id','kabupaten_kota_id','kabupaten_kota_nama');
                        $crud->display_as('propinsi_id','Propinsi');
                        $crud->set_relation('propinsi_id','mst_propinsi','propinsi_nama');
			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/LokasidanAset';
			$this->_example_output($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        
	public function Propinsi()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mst_propinsi');
			$crud->set_subject('Propinsi');
			$crud->required_fields('table_id');
			$crud->columns('table_id','propinsi_id','propinsi_nama');
                        
			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/LokasidanAset';
			$this->_example_output($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    
        public function Pulau()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mst_pulau');
			$crud->set_subject('PULAU');
			$crud->required_fields('table_id');
			$crud->columns('table_id','pulau_id','pulau_nama');

			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/LokasidanAset';
			$this->_example_output($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    
        public function Aset()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mst_aset');
			$crud->set_subject('ASET');
			$crud->required_fields('table_id');
			$crud->columns('table_id','aset_id','aset_nama','aset_jenis_id');
                        $crud->display_as('aset_jenis_id','Jenis Aset')
                             ->display_as('aset_nama','Nama Aset');
			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/LokasidanAset';
			$this->_example_output($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        
        public function ReffWPS()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('reff_wps');
			$crud->set_subject('WPS');
			$crud->required_fields('wps_id');
			$crud->columns('wps_id','wps_detail');

			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/WPS';
			$this->_example_output_wps($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        
        public function MasterWPS()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('reff_wps');
			$crud->set_subject('WPS');
			$crud->required_fields('wps_id');
			$crud->columns('wps_id','wps_detail');

			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/WPS';
			$this->_example_output_wps($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        
        public function Departement()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mst_departement');
			$crud->set_subject('DEPARTEMEN');
			$crud->required_fields('department_id');
			$crud->columns('department_id','department_nama');

			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/WPS';
			$this->_example_output_pengguna($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        
        public function Unit()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mst_unit');
			$crud->set_subject('UNIT ORGANISASI');
			$crud->required_fields('unit_id');
			$crud->columns('unit_id','department_id','unit_kode','unit_nama');
                        $crud->display_as('department_id','Departemen');
                        $crud->set_relation('department_id','mst_departement','department_nama');
			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/WPS';
			$this->_example_output_pengguna($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    
}