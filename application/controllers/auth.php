<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	// public function index(){
	// 	$provinsi= $this->model_register->get_provinsi_query();
	// 	$this->load->view('halaman_login',array('provinsi' => $provinsi));
	// }

	// public function mitra_login(){
	// 	$this->load->view('halaman_login_join');
	// }

	// public function cek_login(){
	// 	$user_email = $this->input->post('val-email',true);
	// 	$user_pass = $this->input->post('val-password',true);
	// 	$this->load->model('model_login');
	// 	$cek = $this->model_login->cek_user($user_email,$user_pass);
	// }

	// public function cek_login_join(){
	// 	$user_email = $this->input->post('val-email',true);
	// 	$user_pass = $this->input->post('val-password',true);
	// 	$this->load->model('model_login');
	// 	$cek = $this->model_login->cek_user_join($user_email,$user_pass);
	// }
	
	// public function logout(){
	// 	$this->session->sess_destroy();
	// 	redirect('welcome');
	// }
}
