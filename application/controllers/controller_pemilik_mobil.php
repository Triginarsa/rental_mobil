<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_pemilik_mobil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('/after_login/pemilik_mobil/beranda_pemilik_mobil');
	}

	public function hlm_data_mobil()
	{
		$this->load->view('/after_login/pemilik_mobil/halaman_data_mobil');
	}

}

/* End of file controller_pemilik_mobil.php */
/* Location: ./application/controllers/controller_pemilik_mobil.php */