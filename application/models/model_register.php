<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model {
	public function get_provinsi_query(){
		$query = $this->db->query('SELECT * FROM tb_provinsi');
		return $query->result_array();
	}

	public function get_kota_query($id_provinsi){
		$query = $this->db->get_where('tb_kota', array('id_provinsi'=>$id_provinsi));
		return $query->result();
	}

	public function insert_data($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
}
