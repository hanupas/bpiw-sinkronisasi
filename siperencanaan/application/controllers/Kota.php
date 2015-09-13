<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

        public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null,$data)
	{
                $this->load->view('management/vlokasi_dan_aset_table',$output);
	}


	public function Crud()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('mst_kabupaten_kota');
			$crud->set_subject('KABUPATEN/KOTA');
			$crud->required_fields('table_id');
			$crud->columns('table_id','kabupaten_kota_id','kabupaten_kota_nama');

			$output = $crud->render();
                        $data['link'] = 'index.php/Cmanagement/LokasidanAset';
			$this->_example_output($output,$data);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}    
}