<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_get_kota extends CI_Controller {
	public function __contruct(){
		parent::__contruct();
	}

	public function index(){
		$id_provinsi = $this->input->post('id_provinsi');
		$this->load->model('m_kota');
		$tb_kota = $this->m_kota->get_kota_query($id_provinsi);
		if(count($tb_kota)>0){
			$pro_select_box = '';
			$pro_select_box .= '<option value="">Pilih kota Anda</option>';
			foreach ($tb_kota as $kota) {
				$pro_select_box .='<option value="'.$kota->id_kota.'">'.$kota->kota.'</option>';
			}
			echo json_encode($pro_select_box);
		}
	}
}
