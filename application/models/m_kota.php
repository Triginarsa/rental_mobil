<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kota extends CI_Model {

	public function get_kota_query($id_provinsi){
		$query = $this->db->get_where('tb_kota', array('id_provinsi'=>$id_provinsi));
		return $query->result();
	}
}
?>