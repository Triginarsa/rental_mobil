<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mitra extends CI_Model {
	public function get_dataValOrder($id){ //halaman validasi order
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, DAYNAME(tgl_rental)AS hari_r,DAY(tgl_rental)AS tgl_r,MONTHNAME(tgl_rental)AS bulan_r,YEAR(tgl_rental)AS tahun_r, DAYNAME(tgl_pengembalian) AS hari_p, DAY(tgl_pengembalian)AS tgl_p, MONTHNAME(tgl_pengembalian) AS bulan_p, YEAR(tgl_pengembalian) AS tahun_p, tb_merk.`merk`, `tb_pemilik_mobil`.`nama` AS pemilik, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`, tb_kota.`kota`,tb_provinsi.`provinsi`, tb_pemesanan.`created_at`, tb_pengguna.`alamat`, tb_pengguna.`no_hp`,tb_mobil.`tipe_mobil`, tb_mobil.`biaya`,DATEDIFF(tgl_pengembalian,tgl_rental) AS selisih, DATEDIFF(tgl_pengembalian,tgl_rental)*biaya AS total, tb_mobil.`id_mobil`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` = tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$this->db->where('tb_mobil.`id_pemilik`' , $id);
		$this->db->where('tb_pemesanan.`status`' , 'Masih di proses');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_validasiAgree($id, $pesan){ //update
		$this->db->set('tb_pemesanan.`ket`', $pesan);
		$this->db->set('tb_pemesanan.`status`', 'Berhasil');
		$this->db->where('id_pemesanan' , $id);
		$res = $this->db->update('tb_pemesanan');
		if($res){
			$this->session->set_flashdata('success_msg', 'Data Order telah disetujui, data dipindahkan ke Data Order');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menyimpan Data');
		}
	}

	public function get_validasiDisagree($id, $pesan){ //update
		$this->db->set('tb_pemesanan.`ket`', $pesan);
		$this->db->set('tb_pemesanan.`status`', 'Ditolak');
		$this->db->where('id_pemesanan' , $id);
		$res = $this->db->update('tb_pemesanan');
		if($res){
			$this->session->set_flashdata('warning_msg', 'Data Order tidak disetujui, akan disampaikan kepada Pemesan');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menyimpan Data');
		}
	}

	public function get_dataOrder($id){ //halaman data order
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, DAYNAME(tgl_rental)AS hari_r,DAY(tgl_rental)AS tgl_r,MONTHNAME(tgl_rental)AS bulan_r,YEAR(tgl_rental)AS tahun_r, DAYNAME(tgl_pengembalian) AS hari_p, DAY(tgl_pengembalian)AS tgl_p, MONTHNAME(tgl_pengembalian) AS bulan_p, YEAR(tgl_pengembalian) AS tahun_p, tb_merk.`merk`, `tb_pemilik_mobil`.`nama` AS pemilik, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`, tb_kota.`kota`,tb_provinsi.`provinsi`, tb_pemesanan.`created_at`, tb_pengguna.`alamat`, tb_pengguna.`no_hp`,tb_mobil.`tipe_mobil`, tb_mobil.`biaya`,DATEDIFF(tgl_pengembalian,tgl_rental) AS selisih, DATEDIFF(tgl_pengembalian,tgl_rental)*biaya AS total, tb_mobil.`id_mobil`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` = tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$this->db->where('tb_mobil.`id_pemilik`' , $id);
		$this->db->where('tb_pemesanan.`status`!=' , 'Masih di proses');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_detDataOrder($id){
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, tb_pengguna.`email`, tb_pengguna.`no_hp` AS no_hp_pengguna, tb_pengguna.`alamat`,tb_kota.`kota`,tb_provinsi.`provinsi`, DAYNAME(tgl_rental)AS hari_r,DAY(tgl_rental)AS tgl_r,MONTHNAME(tgl_rental)AS bulan_r,YEAR(tgl_rental)AS tahun_r, DAYNAME(tgl_pengembalian) AS hari_p, DAY(tgl_pengembalian)AS tgl_p, MONTHNAME(tgl_pengembalian) AS bulan_p, YEAR(tgl_pengembalian) AS tahun_p, tb_merk.`merk`, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`,  DAYNAME(tb_pemesanan.`created_at`) AS hari_b, DAY(tb_pemesanan.`created_at`) AS tgl_b, MONTHNAME(tb_pemesanan.`created_at`) AS bulan_b, YEAR(tb_pemesanan.`created_at`) AS tahun_b,TIME(tb_pemesanan.`created_at`) AS waktu, tb_pengguna.`no_hp`,tb_mobil.`tipe_mobil`, tb_mobil.`biaya`,DATEDIFF(tgl_pengembalian,tgl_rental) AS selisih, DATEDIFF(tgl_pengembalian,tgl_rental)*biaya AS total, tb_mobil.`id_mobil`, tb_mobil.`gbr_mobil`, tb_pemesanan.`ket`, tb_mobil.`bahan_bakar`, tb_mobil.`jlh_cc`, tb_mobil.`jlh_penumpang`,tb_mobil.`transmisi`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` = tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_pengguna.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->where('tb_pemesanan.`id_pemesanan`' , $id);
		$query = $this->db->get();
		return $query->row();
	}
}
?>
