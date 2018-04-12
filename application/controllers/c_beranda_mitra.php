<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_mitra extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('id')){
			redirect('auth_mitra');
		}elseif($this->session->userData('status') == 'user'){
			echo "<script>;history.go(-1);</script>";
		}elseif($this->session->userData('status') == 'admin'){
			echo "<script>;history.go(-1);</script>";
		}
	}
	
	public function index(){
		$this->load->view('/after_login/mitra/halaman_beranda_mitra'); //halaman beranda mitra
	}

	public function dataMobil(){
		$this->load->view('/after_login/mitra/halaman_dataMobil_mitra'); //halaman data mobil mitra
	}

	public function tambahMobil(){

		$this->load->model('m_merk');
		$merk= $this->m_merk->get_merk_query();
		$this->load->view('/after_login/mitra/halaman_tambahMobil_mitra', array('merk' => $merk));
		
	}
}
