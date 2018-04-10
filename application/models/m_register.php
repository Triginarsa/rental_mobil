<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {
	
	public function insert_data($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
}
