<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('id')){
			redirect('auth_user');
		}elseif($this->session->userData('status')!== 'admin'){
			echo "<script>;history.go(-1);</script>";
		}
	}

	public function index(){
		$data = array(
			'tb_mobil' => $this->db->get('tb_mobil'),
			'tb_pengguna' => $this->db->get('tb_pengguna'),
			'tb_pemilik_mobil' => $this->db->get('tb_pemilik_mobil'),
			'tb_pemesanan' => $this->db->get('tb_pemesanan')
		);
		$this->load->view('/after_login/admin/halaman_beranda_admin', $data);// halaman beranda admin
	}

	public function dataUser(){
		$this->load->model('m_admin');
		$user= $this->m_admin->get_dataUser();
		$this->load->view('/after_login/admin/halaman_data_user', array('user' => $user)); //halaman data mobil mitra
	}

	public function dataMitra(){
		$this->load->model('m_admin');
		$mitra= $this->m_admin->get_dataMitra();
		$this->load->view('/after_login/admin/halaman_data_mitra', array('mitra' => $mitra)); //halaman data mobil mitra
	}

	public function dataOrder(){
		$this->load->model('m_admin');
		$order= $this->m_admin->get_dataOrder();
		$this->load->view('/after_login/admin/halaman_data_order', array('order' => $order)); //halaman data mobil mitra
	}

	public function dataMobil(){
		$this->load->model('m_admin');
		$mobil= $this->m_admin->get_dataMobil();
		$this->load->view('/after_login/admin/halaman_data_mobil', array('mobil' => $mobil)); //halaman data mobil mitra
	}

	public function detailMobil($id){
		$this->load->model('m_admin');
		$mobil= $this->m_admin->get_detailMobil($id);
		$this->load->view('/after_login/admin/halaman_detail_mobil', array('mobil' => $mobil)); //halaman data mobil mitra
	}

	public function validasiMobil(){
		$this->load->model('m_admin');
		$valid= $this->m_admin->get_validasiMobil();
		$this->load->view('/after_login/admin/halaman_validasi', array('valid' => $valid)); //halaman data mobil mitra
	}

	public function detailValidMobil($id){
		$this->load->model('m_admin');
		$mobil= $this->m_admin->get_detValidasiMobil($id);
		$this->load->view('/after_login/admin/halaman_detail_validasi', array('mobil' => $mobil)); //halaman data mobil mitra
	}

	public function get_verified($id){ //pasang pemberitahuan, verified di hlm validasi
		$this->load->model('m_admin');
		$hasil = $this->m_admin->get_verify($id);
		redirect(base_url('c_beranda_admin/validasiMobil/'));
	}

	public function get_verifiedBlok($id){ //pasang pemberitahuan, verified di hlm data Mobil dari status blokir
		$this->load->model('m_admin');
		$hasil = $this->m_admin->get_verify($id);
		redirect(base_url('c_beranda_admin/dataMobil/'));
	}

	public function get_blokir($id){ //blokir halaman data mobil
		$this->load->model('m_admin');
		$hasil = $this->m_admin->get_blok($id);
		redirect(base_url('c_beranda_admin/dataMobil/'));
	}

	public function delete($id){ //delete hlm detail mobil
		$this->load->model('m_admin');
		$hasil = $this->m_admin->delete($id);
		redirect(base_url('c_beranda_admin/dataMobil/'));
	}

	public function delete_validasi($id){ //delete hlm validasi
		$this->load->model('m_admin');
		$hasil = $this->m_admin->delete($id);
		redirect(base_url('c_beranda_admin/validasiMobil/'));
	}
}
?>
