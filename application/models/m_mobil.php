<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mobil extends CI_Model {

	public function insert_data($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function get_dataMobil($id){ //mitra
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

	public function get_dataMobil_beranda(){ //user
		$this->db->SELECT('id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka, jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`');
		$this->db->FROM('tb_mobil');
		$this->db->join('tb_merk','tb_merk.`id_merk` =  tb_mobil.`id_merk`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('tb_mobil.`status`','verified');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_dataMobil_beranda_user($ids){ //user
		$this->db->SELECT('id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka, jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`');
		$this->db->FROM('tb_mobil');
		$this->db->join('tb_merk','tb_merk.`id_merk` =  tb_mobil.`id_merk`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('tb_mobil.`status`','verified');
		$this->db->where('tb_mobil.`id_kota`', $ids);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function get_OrderMobil($id){ //user
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

	public function get_DataPesanan($id){ //user
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, DAYNAME(tgl_rental)AS hari_r,DAY(tgl_rental)AS tgl_r,MONTHNAME(tgl_rental)AS bulan_r,YEAR(tgl_rental)AS tahun_r, DAYNAME(tgl_pengembalian) AS hari_p, DAY(tgl_pengembalian)AS tgl_p, MONTHNAME(tgl_pengembalian) AS bulan_p, YEAR(tgl_pengembalian) AS tahun_p, tb_merk.`merk`, tb_mobil.`id_mobil`, tb_pemesanan.`status`,tb_mobil.`gbr_mobil`,tb_mobil.`nomor_polisi`,tb_mobil.`biaya`,tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama` AS pemilik, tb_mobil.`tipe_mobil`,
			tb_pemilik_mobil.`alamat`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` =  tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('id_pengguna' , $id);
		$this->db->where('tb_pemesanan.`status`' , 'Masih di proses');
		$this->db->order_by('tb_pemesanan.`id_pemesanan`', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_RiwayatPesanan($id){ //user
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, DAYNAME(tgl_rental)AS hari_r,DAY(tgl_rental)AS tgl_r,MONTHNAME(tgl_rental)AS bulan_r,YEAR(tgl_rental)AS tahun_r, DAYNAME(tgl_pengembalian) AS hari_p, DAY(tgl_pengembalian)AS tgl_p, MONTHNAME(tgl_pengembalian) AS bulan_p, YEAR(tgl_pengembalian) AS tahun_p, tb_merk.`merk`, `tb_pemilik_mobil`.`nama` AS pemilik, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`, tb_kota.`kota`,tb_provinsi.`provinsi`, DAYNAME(tb_pemesanan.`created_at`) AS hari_b, DAY(tb_pemesanan.`created_at`) AS tgl_b, MONTHNAME(tb_pemesanan.`created_at`) AS bulan_b, YEAR(tb_pemesanan.`created_at`) AS tahun_b, tb_pengguna.`alamat`, tb_pengguna.`no_hp`,tb_mobil.`tipe_mobil`, tb_mobil.`biaya`,DATEDIFF(tgl_pengembalian,tgl_rental) AS selisih, DATEDIFF(tgl_pengembalian,tgl_rental)*biaya AS total, tb_mobil.`id_mobil`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` =  tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('id_pengguna' , $id);
		$this->db->where('tb_pemesanan.`status`!=' , 'Masih di proses');
		$this->db->order_by('tb_pemesanan.`id_pemesanan`', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_detRiwayatPesanan($id){ //user
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, tb_pengguna.`email`, tb_pengguna.`no_hp` AS no_hp_pengguna, DAYNAME(tgl_rental)AS hari_r,DAY(tgl_rental)AS tgl_r,MONTHNAME(tgl_rental)AS bulan_r,YEAR(tgl_rental)AS tahun_r, DAYNAME(tgl_pengembalian) AS hari_p, DAY(tgl_pengembalian)AS tgl_p, MONTHNAME(tgl_pengembalian) AS bulan_p, YEAR(tgl_pengembalian) AS tahun_p, tb_merk.`merk`, `tb_pemilik_mobil`.`nama` AS pemilik, tb_pemilik_mobil.`alamat`,tb_pemilik_mobil.`no_hp`, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`, tb_kota.`kota`,tb_provinsi.`provinsi`, DAYNAME(tb_pemesanan.`created_at`) AS hari_b, DAY(tb_pemesanan.`created_at`) AS tgl_b, MONTHNAME(tb_pemesanan.`created_at`) AS bulan_b, YEAR(tb_pemesanan.`created_at`) AS tahun_b, TIME(tb_pemesanan.`created_at`) AS waktu, tb_pengguna.`no_hp`,tb_mobil.`tipe_mobil`, tb_mobil.`biaya`,DATEDIFF(tgl_pengembalian,tgl_rental) AS selisih, DATEDIFF(tgl_pengembalian,tgl_rental)*biaya AS total, tb_mobil.`id_mobil`, tb_mobil.`gbr_mobil`, tb_pemesanan.`ket`, tb_mobil.`bahan_bakar`, tb_mobil.`jlh_cc`, tb_mobil.`jlh_penumpang`,tb_mobil.`transmisi`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` =  tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('id_pemesanan' , $id);
		$this->db->where('tb_pemesanan.`status`!=' , 'Masih di proses');
		$this->db->order_by('tb_pemesanan.`id_pemesanan`', 'DESC');
		$query = $this->db->get();
		return $query->row();
	}

	public function get_buatOrder($tableName,$data){ //user
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function getMobilById($id){
		$this->db->SELECT('id_mobil, nomor_polisi, tb_merk.`merk`, tipe_mobil, tahun_rakit, bahan_bakar, nomor_mesin, nomor_rangka, jlh_cc, jlh_penumpang, gbr_mobil, gbr_bpkb, gbr_stnk, transmisi, biaya, tb_kota.`kota`, tb_provinsi.`provinsi`, tb_pemilik_mobil.`nama`, tb_mobil.`status`');
		$this->db->FROM('tb_mobil');
		$this->db->join('tb_merk','tb_merk.`id_merk` =  tb_mobil.`id_merk`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->where('id_mobil' , $id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function m_update($id, $data){
		$this->db->where('id_mobil', $id);
		$res= $this->db->update('tb_mobil',$data);
		if($res){
			$this->session->set_flashdata('success_msg', 'Data Berhasil Di Update');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Mengupdate Data');
		}
	}

	public function delete($id){ //oleh mitra sendiri
		$this->db->where('id_mobil' , $id);
		$this->db->delete('tb_mobil');
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	public function deletePesanan($id){ //oleh user
		$this->db->where('id_pemesanan' , $id);
		$this->db->delete('tb_pemesanan');
		if ($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	public function get_MobilByKota($kota, $tgl_mulai, $tgl_kembali){
		$query = $this->db->query('SELECT tb_pemesanan.`id_pemesanan`,tb_mobil.`id_mobil`, tb_mobil.`nomor_polisi`, tb_mobil.`id_kota`, tb_kota.`kota`, tb_provinsi.`provinsi`,
			tb_mobil.`tipe_mobil`, tb_mobil.`transmisi`, tb_mobil.`bahan_bakar`, tb_mobil.`jlh_penumpang`, 
			tb_mobil.`gbr_mobil`, tb_pemilik_mobil.`nama`, tb_merk.`merk`, tb_pemesanan.`tgl_rental`, tb_pemesanan.`tgl_pengembalian`, tb_mobil.`status` AS s_mobil, tb_pemesanan.`status`, tb_mobil.`biaya`
			FROM tb_mobil
			LEFT JOIN tb_pemesanan ON tb_pemesanan.`id_mobil` = tb_mobil.`id_mobil`
			LEFT JOIN tb_merk ON tb_merk.`id_merk` = tb_mobil.`id_merk`
			LEFT JOIN tb_pemilik_mobil ON tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`
			LEFT JOIN tb_kota ON tb_kota.`id_kota` = tb_pemilik_mobil.`id_kota`
			LEFT JOIN tb_provinsi ON tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`
			WHERE tb_mobil.`id_kota` = '.$kota.' AND tb_mobil.`status` = "verified" AND tb_mobil.`id_mobil` NOT IN (SELECT id_mobil FROM tb_pemesanan 
			WHERE tb_pemesanan.`tgl_rental` BETWEEN "'.$tgl_mulai.'" AND "'.$tgl_kembali.'"
			OR tb_pemesanan.`tgl_pengembalian`  BETWEEN "'.$tgl_mulai.'" AND "'.$tgl_kembali.'")GROUP BY tb_mobil.`id_mobil`
					');
		return $query->result_array();
	}

}
