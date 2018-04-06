<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->view('welcome_message');
		echo base_url();
		// $data1= $this->mymodel->get_provinsi_query();
		// $this->load->view('tabel', array('data1' => $data1));
	}

	public function hlm_login(){
		$this->load->view('halaman_login');
	}

	public function hlm_login_join(){
		$this->load->view('halaman_login_join');
	}

	public function beranda(){
		$this->load->view('welcome_message');
	}
}
