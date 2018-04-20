<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_user extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('id')){
			redirect('auth_user');
		}elseif($this->session->userData('status')!== 'user'){
			echo "<script>;history.go(-1);</script>";
		}
	}

	public function index(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_dataMobil_beranda();
		$this->load->view('/after_login/user/halaman_beranda_user',array('provinsi' => $provinsi,'mobil' => $mobil));//halaman beranda user setelah login
	}

	public function orderMobil($id){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_OrderMobil($id);
		$this->load->view('/after_login/user/halaman_order_user',array('mobil' => $mobil,'provinsi' => $provinsi));
	}
}
?>
