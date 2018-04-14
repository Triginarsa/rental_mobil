<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mobil extends CI_Model {

	public function insert_data($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function get_dataMobil($id){
		$this->db->where('id_pemilik' , $id);
		// $query = $this->db->get('tb_mobil');
		// return $query->result_array();

		$query = $this->db->query('SELECT id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka, jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`
			FROM tb_mobil
			INNER JOIN tb_merk ON tb_merk.`id_merk` = tb_mobil.`id_merk`
			INNER JOIN tb_kota ON tb_kota.`id_kota` = tb_mobil.`id_kota`
			INNER JOIN tb_provinsi ON tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`
			INNER JOIN tb_pemilik_mobil ON tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`
		');
		return $query->result_array();
	}

		public function get_dataMobil_beranda(){
		$query = $this->db->query('SELECT id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka, jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`
			FROM tb_mobil
			INNER JOIN tb_merk ON tb_merk.`id_merk` = tb_mobil.`id_merk`
			INNER JOIN tb_kota ON tb_kota.`id_kota` = tb_mobil.`id_kota`
			INNER JOIN tb_provinsi ON tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`
			INNER JOIN tb_pemilik_mobil ON tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`
		');
		return $query->result_array();
	}
	

	public function getMobilById($id){
		$this->db->where('id_mobil' , $id);
		$query = $this->db->get('tb_mobil');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	public function delete($id){
		$this->db->where('id_mobil' , $id);
		$this->db->delete('tb_mobil');
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

}
