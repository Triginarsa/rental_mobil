<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_mitra extends CI_Controller {
	public function index(){
		$this->load->view('/before_login/halaman_login_mitra');
	}

	public function cek_login(){
		$user_email = $this->input->post('val-email',true);
		$user_pass = $this->input->post('val-password',true);
		$this->load->model('m_login_mitra');
		$cek = $this->m_login_mitra->cek_db_mitra($user_email,$user_pass);
	}
}
?>