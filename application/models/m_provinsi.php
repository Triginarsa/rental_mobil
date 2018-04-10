<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_provinsi extends CI_Model {
	
	public function get_provinsi_query(){
		$query = $this->db->query('SELECT * FROM tb_provinsi');
		return $query->result_array();
	}
}
?>
