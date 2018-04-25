<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mitra extends CI_Model {
	public function get_dataValOrder($id){ //halaman validasi order
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, tgl_rental, tgl_pengembalian, tb_merk.`merk`, `tb_pemilik_mobil`.`nama` AS pemilik, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`, tb_kota.`kota`,tb_provinsi.`provinsi`, tb_pemesanan.`created_at`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` = tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$this->db->where('tb_mobil.`id_pemilik`' , $id);
		$this->db->where('tb_pemesanan.`status`' , 'Menunggu');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_detValidOrder($id){
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, tgl_rental, tgl_pengembalian, tb_merk.`merk`, `tb_pemilik_mobil`.`nama` AS pemilik, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`, tb_kota.`kota`,tb_provinsi.`provinsi`, tb_pemesanan.`created_at`, tb_pengguna.`alamat`, 
			tb_pengguna.`no_hp`,tb_mobil.`tipe_mobil`, tb_mobil.`biaya`,tb_mobil.`biaya`*(tgl_pengembalian - tgl_rental) AS total');
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
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, tgl_rental, tgl_pengembalian, tb_merk.`merk`, `tb_pemilik_mobil`.`nama` AS pemilik, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`, tb_kota.`kota`,tb_provinsi.`provinsi`, tb_pemesanan.`created_at`');
		$this->db->FROM('tb_pemesanan');
		$this->db->join('tb_mobil','tb_mobil.`id_mobil` = tb_pemesanan.`id_mobil`');
		$this->db->join('tb_merk','tb_merk.`id_merk` = tb_mobil.`id_merk`');
		$this->db->join('tb_pemilik_mobil','tb_pemilik_mobil.`id` = tb_mobil.`id_pemilik`');
		$this->db->join('tb_kota','tb_kota.`id_kota` = tb_mobil.`id_kota`');
		$this->db->join('tb_provinsi','tb_provinsi.`id_provinsi` = tb_kota.`id_provinsi`');
		$this->db->join('tb_pengguna','tb_pengguna.`id` = tb_pemesanan.`id_pengguna`');
		$this->db->where('tb_mobil.`id_pemilik`' , $id);
		$this->db->where('tb_pemesanan.`status`' , 'Berhasil');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_detDataOrder($id){
		$this->db->SELECT('id_pemesanan, tb_pengguna.`nama`, tgl_rental, tgl_pengembalian, tb_merk.`merk`, `tb_pemilik_mobil`.`nama` AS pemilik, tb_mobil.`nomor_polisi`, tb_pemesanan.`status`, tb_kota.`kota`,tb_provinsi.`provinsi`, tb_pemesanan.`created_at`, tb_pengguna.`alamat`, 
			tb_pengguna.`no_hp`,tb_mobil.`tipe_mobil`, tb_mobil.`biaya`,tb_mobil.`biaya`*(tgl_pengembalian - tgl_rental) AS total');
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
