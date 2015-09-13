<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Croot extends CI_Controller {

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

        public function index()
//        $this->load->view('login/vlogin');
//
//
//
//        }

            	{
            $this->template->set('title', 'Sistem Informasi Perencanaan Tersinkronisasi Pembangunan Infrastruktur ');
            if ($this->client_logon){
                    $user              = $this->session->userdata('pcUser');
                    $otoriname         = $this->session->userdata('pcOtoriName');
                    $logintime         = $this->session->userdata('pcLoginTime');
                    //$userlevel       = $$this->session->userdata('pcUserlevel');
                    $thn_ang           = $this->session->userdata('pcThang');
                    //$jaka            = $this->session->userdata('pcJaka');
                    $this->template->load('template','home',$otoriname);
            }
             else
            {
            //$this->welcome->login();
               //redirect('login');
               redirect('/croot/login');
            }
	}

Public function login()
	{

		if($_POST)
		{
                    $username = 'jaka';
                    $password = '9d83066da00b7c7fa9de34117f488653';
                    $pcThang = '2015';
                    $dskpd = $_POST['sskpd'];
                    $dunit = $_POST['sskpdun'];
                    $TES = '1';
                    //$user = $this->login_model->validate($_POST['username'], $_POST['password'],$_POST['pcthang']);
                   // $user = $this->login_model->validate($username,$password,$pcThang,$dskpd,$dunit);

                           // if($user == TRUE)
                            if($TES == 1)
                            {
                                       redirect('home');
                            }
                            else
                            {
                            //$this->template->set('title', 'BAPPENAS');
                            //$data['pesan'] = 'Username atau password salah!';
                            //$this->template->load('template_login', 'login',$data);

                                    redirect('welcome/index');
                                    //echo $dunit;
                            }

		}
		else
		{
                    $this->template->set('title', 'Sistem Informasi Perencanaan');
                    $this->template->load('template_login', 'login');
		}
	}











        public function CheckLogin(){
            $this->load->model('mmodifier');
            if($this->mmodifier->login())redirect('/home');
            redirect('croot');
        }

        public function Test(){
            echo "Masuk sini";
        }

}
