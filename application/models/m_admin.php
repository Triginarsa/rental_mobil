<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	public function get_dataMitra(){
		$this->db->SELECT('id, nama, nik, email, no_hp, alamat, tb_kota.`kota`, tb_provinsi.`provinsi`');
		$this->db->FROM('tb_pemilik_mobil');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_pemilik_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_dataUser(){
		$this->db->SELECT('id, nama, email, no_hp, alamat, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pengguna.`status`');
		$this->db->FROM('tb_pengguna');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_pengguna.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_dataOrder(){
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, tgl_rental, tgl_pengembalian, tb_merk.`merk`, `tb_pemilik_mobil`.`nama` AS pemilik, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`, tb_kota.`kota`,tb_provinsi.`provinsi`, tb_pemesanan.`created_at`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` = tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_dataMobil(){
		$this->db->SELECT('id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka,jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`');
		$this->db->FROM('tb_mobil');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('tb_mobil.`status` !=','unverified');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_detailMobil($id){ //oasang $id dan where
		$this->db->SELECT('id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka,jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`,tb_pemilik_mobil.`nik`, tb_pemilik_mobil.`no_hp`, tb_pemilik_mobil.`alamat`');
		$this->db->FROM('tb_mobil');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('id_mobil' , $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_validasiMobil(){ 
		$this->db->SELECT('id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka,jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`,tb_pemilik_mobil.`nik`, tb_pemilik_mobil.`no_hp`, tb_pemilik_mobil.`alamat`');
		$this->db->FROM('tb_mobil');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('tb_mobil.`status`','unverified');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_detValidasiMobil($id){ //oasang $id dan where
		$this->db->SELECT('id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka,jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`,tb_pemilik_mobil.`nik`, tb_pemilik_mobil.`no_hp`, tb_pemilik_mobil.`alamat`');
		$this->db->FROM('tb_mobil');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('id_mobil' , $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_verify($id){ //validasi
		$this->db->set('tb_mobil.`status`', 'verified');
		$this->db->where('id_mobil' , $id);
		$this->db->update('tb_mobil');
	}

	public function get_blok($id){ //validasi
		$this->db->set('tb_mobil.`status`', 'blokir');
		$this->db->where('id_mobil' , $id);
		$this->db->update('tb_mobil');
	}
	
	public function delete($id){ //delete untuk hlm validasi dan data mobil
		$this->db->where('id_mobil' , $id);
		$this->db->delete('tb_mobil');
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
}
?>
