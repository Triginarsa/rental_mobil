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

	public function hlm_bantuan(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_bantuan',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_about(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_about',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_syarat(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_syarat',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_kebijakan(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_kebijakan',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function hlm_cara(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_cara',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}

	public function dataMobil(){
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_dataMobil_beranda();
		$this->load->view('/after_login/mitra/halaman_dataMobil_mitra', array('mobil' => $mobil));  //halaman data mobil mitra
	}

	public function getDataByKota(){
		$kota = $_GET['val-kota'];
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_MobilByKota($kota);
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_pencarian',array('mobil' => $mobil,'provinsi' => $provinsi));
	}
}
?>
