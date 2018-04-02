<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetPengguna(){
		$data = $this->db->query('SELECT * FROM tb_pengguna');
		return $data->result_array();
	}

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

	// public function GetProv(){
	// 	$data1 = $this->db->query('SELECT * FROM tb_provinsi');
	// 	return $data1->result_array();
	// }

	public function get_provinsi_query(){
		$query = $this->db->query('SELECT * FROM tb_provinsi');
		return $query->result_array();
	}

	public function get_kota_query($id_provinsi){
		$query = $this->db->get_where('tb_kota', array('id_provinsi'=>$id_provinsi));
		return $query->result();
	}
}
