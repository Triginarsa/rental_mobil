<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dataUser_admin extends CI_Model {
	
	public function get_user_query(){
		$query = $this->db->query('SELECT id, nama, email, no_hp, alamat, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pengguna.`status`
			FROM tb_pengguna
			INNER JOIN tb_kota ON tb_kota.`id_kota` = tb_pengguna.`id_kota`
			INNER JOIN tb_provinsi ON tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`
			WHERE tb_pengguna.`status` = "user"
		');
		return $query->result_array();
	}
}
?>
