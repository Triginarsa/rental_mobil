<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda extends CI_Controller {

	public function index(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_dataMobil_beranda();
		$this->load->view('/before_login/halaman_beranda',array('provinsi' => $provinsi, 'mobil' => $mobil));//halaman beranda user setelah login
	}

	public function dataMobil(){
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_dataMobil_beranda();
		$this->load->view('/after_login/mitra/halaman_dataMobil_mitra', array('mobil' => $mobil));  //halaman data mobil mitra
	}
}
?>
