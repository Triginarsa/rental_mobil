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

	public function dataMobil($id){
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_dataMobil($id);
		$this->load->view('/after_login/mitra/halaman_dataMobil_mitra', array('mobil' => $mobil));  //halaman data mobil mitra
	}

	public function tambahMobil(){
		$this->load->model('m_merk');
		$merk= $this->m_merk->get_merk_query();
		$this->load->view('/after_login/mitra/halaman_tambahMobil_mitra', array('merk' => $merk));
	}

	public function editMobil($id){
		$this->load->model('m_mobil');
		// $this->load->model('m_merk');
		// $merk= $this->m_merk->get_merk_query();	
		$data['mobils'] = $this->m_mobil->getMobilById($id);
		$this->load->view('/after_login/mitra/halaman_editMobil_mitra', $data);
	}

	public function deleteMobil($id){
		$this->load->model('m_mobil');
		$res = $this->m_mobil->delete($id);
		if($res){
			$this->session->set_flashdata('success_msg', 'Data Berhasil Dihapus');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menghapus Data');
		}
		redirect(base_url('c_beranda_mitra/dataMobil/'.$this->session->userdata('id')));
		// $id = $this->session->userdata('id'); //nampilin lagi
		// $this->load->model('m_mobil');
		// $mobil = $this->m_mobil->get_dataMobil($id);
		// $this->load->view('/after_login/mitra/halaman_dataMobil_mitra', array('mobil' => $mobil));
	}


}
