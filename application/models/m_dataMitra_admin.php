<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dataMitra_admin extends CI_Model {
	
	public function get_mitra_query(){
		$query = $this->db->query('SELECT id, nama, nik, email, no_hp, alamat, tb_kota.`kota`, tb_provinsi.`provinsi`
			FROM tb_pemilik_mobil
			INNER JOIN tb_kota ON tb_kota.`id_kota` = tb_pemilik_mobil.`id_kota`
			INNER JOIN tb_provinsi ON tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`
		');
		return $query->result_array();
	}
}
?>
