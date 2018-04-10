<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_mobil extends CI_Model {

	public function insert_data($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
	

}

/* End of file model_mobil.php */
/* Location: ./application/models/model_mobil.php */