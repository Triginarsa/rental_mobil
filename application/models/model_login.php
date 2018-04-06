<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	public function proseslogin($user_email,$user_pass){
		$this->db->where('email',$user_email);
		$this->db->where('password',$user_pass);
		return $this->db->get('tb_pengguna')->row();
	}

	public function proseslogin_pemilik($user_email,$user_pass){
		$this->db->where('email',$user_email);
		$this->db->where('password',$user_pass);
		return $this->db->get('tb_pemilik_mobil')->row();
	}

	public function get_status($user_email,$user_pass){
		$query = $this->db->get_where('tb_pengguna', array('email'=>$user_email, 'password'=>$user_pass));
		return $query->row();
	}
}
