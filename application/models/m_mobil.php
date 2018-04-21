<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mobil extends CI_Model {

	public function insert_data($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function get_dataMobil($id){
		$this->db->SELECT('id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka, jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`');
		$this->db->FROM('tb_mobil');
		$this->db->join('tb_merk','tb_merk.`id_merk` =  tb_mobil.`id_merk`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('id_pemilik' , $id);
		$query = $this->db->get();
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
	
	public function get_OrderMobil($id){
		$this->db->SELECT('id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka, jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`');
		$this->db->FROM('tb_mobil');
		$this->db->join('tb_merk','tb_merk.`id_merk` =  tb_mobil.`id_merk`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('id_mobil' , $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_DataPesanan($id){
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, tgl_rental, tgl_pengembalian, tb_merk.`merk`, tb_mobil.`id_mobil`, tb_pemesanan.`status`,tb_mobil.`gbr_mobil`, tb_mobil.`nomor_polisi`,tb_mobil.`biaya`,
			tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama` AS pemilik, tb_mobil.`tipe_mobil`,
			tb_pemilik_mobil.`alamat`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` =  tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('id_pengguna' , $id);
		$this->db->order_by('tb_pemesanan.`id_pemesanan`', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_buatOrder($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
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

	public function deletePesanan($id){
		$this->db->where('id_pemesanan' , $id);
		$this->db->delete('tb_pemesanan');
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

}
