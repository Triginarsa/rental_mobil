<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user extends CI_Controller {
	public function index(){
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_login_user',array('provinsi' => $provinsi));//halaman login user/admin
	}

	public function cek_login(){
		$user_email = $this->input->post('val-email',true);
		$user_pass = $this->input->post('val-password',true);
		$this->load->model('m_login_user');
		$cek = $this->m_login_user->cek_user($user_email,$user_pass); //cek email,pass user dan admin
	}
}
?>