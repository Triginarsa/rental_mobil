<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_merk extends CI_Model {
	
	public function get_merk_query(){
		$query = $this->db->query('SELECT * FROM tb_merk');
		return $query->result_array();
	}
}
?>
