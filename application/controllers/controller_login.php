<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {
	public function ceklogin(){
		if(isset($_POST['login'])){
			$user_email = $this->input->post('val-email',true);
			$user_pass = $this->input->post('val-password',true);
			$cek = $this->model_login->proseslogin($user_email,$user_pass);
			$hasil = count($cek);
			if($hasil >0){
				$login = $this->model_login->get_status($user_email,$user_pass);
				if($login->status == 'user'){
					$this->load->view('after_login/pengguna/beranda_pengguna', array('login' => $login));
				}elseif($login->status == 'admin'){
					$this->load->view('welcome_message');
				}else{
					redirect('welcome/hlm_login');
				}
			}
		}
	}

	public function ceklogin_pemilik(){
		if(isset($_POST['login'])){
			$user_email = $this->input->post('val-email',true);
			$user_pass = $this->input->post('val-password',true);
			$cek = $this->model_login->proseslogin_pemilik($user_email,$user_pass);
			$hasil = count($cek);
			if($hasil >0){
				echo "berhasil";
			}else{
				echo "gagal";
			}
		}
	}

}
