<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_beranda', array('provinsi' => $provinsi)); //'provinsi' -->sesuai field tb_provinsi
		
		//redirect('controller_beranda/hlm_beranda');
		//echo base_url();
		// $data1= $this->mymodel->get_provinsi_query();
		// $this->load->view('tabel', array('data1' => $data1));
	}

	public function hlm_login(){
		redirect('auth');
	}

	public function hlm_data_user(){
		$this->load-view('/after_login/admin/halaman_data_user');
	}

	public function hlm_login_join(){
		$this->load->view('halaman_login_join');
	}

	public function beranda(){
		$this->load->view('welcome_message');
	}
}
