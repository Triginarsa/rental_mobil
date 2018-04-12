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
		$this->load->view('/after_login/admin/halaman_beranda_admin');// halaman beranda admin
	}
}
?>
