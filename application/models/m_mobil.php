<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_mobil extends CI_Model {

	public function tambah_mobil($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
	

}
