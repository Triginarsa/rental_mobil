<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_logout extends CI_Controller {
	
	public function index(){
		$this->session->sess_destroy();
		redirect('welcome'); //maunya dibuatin controller terpisah
	}
}
?>