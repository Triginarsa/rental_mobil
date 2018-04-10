<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_user extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('id')){
			redirect('auth_user');
		}
	}

	public function index(){
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/after_login/user/halaman_beranda_user',array('provinsi' => $provinsi));//halaman beranda user setelah login
	}
}
?>
