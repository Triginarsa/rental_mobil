<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_mitra extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('id')){
			redirect('auth_mitra');
		}
	}
	
	public function index(){
		$this->load->view('/after_login/mitra/halaman_beranda_mitra'); //halaman beranda mitra
	}
}
