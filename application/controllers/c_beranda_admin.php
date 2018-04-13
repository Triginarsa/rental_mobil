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
}
?>
