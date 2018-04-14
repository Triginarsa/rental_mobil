<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_register_mitra extends CI_Controller {
	public function __contruct(){
		parent::__contruct();
	}

	public function index(){ //halaman daftar mitra
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_daftar_mitra', array('provinsi' => $provinsi));
	}

	public function insert_data(){ //insert data mitra
		$nama		= $_POST['val-nama'];
		$nik		= $_POST['val-nik'];
		$email		= $_POST['val-email'];
		$pass		= md5($_POST['val-password']);
		$hp			= $_POST['val-phone'];
		$alamat		= $_POST['val-alamat'];
		$kota_id	= $_POST['val-kota'];
		$data_insert = array(
			'nama' => $nama,
			'nik' => $nik,
			'email' => $email,
			'password' => $pass,
			'no_hp' => $hp,
			'alamat' => $alamat,
			'id_kota' =>$kota_id
		);
		$res = $this->m_register->insert_data('tb_pemilik_mobil',$data_insert);
		if($res>0){
			$this->session->set_flashdata('success_msg', 'Data Berhasil Disimpan');
			redirect(base_url('auth_mitra'));
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menyimpan Data');
			redirect(base_url('c_register_mitra'));
		}
	}

	public function insert_data_mobil(){ //insert data mobil oleh mitra
		$this->load->model('m_mobil'); 
		$nomor_polisi		= $_POST['val-nomorPolisi'];
		$merk_mobil			= $_POST['val-merkMobil'];
		$tipe_mobil			= $_POST['val-tipeMobil'];
		$tahun_rakit		= $_POST['val-tahunRakit'];
		$nomor_rangka		= $_POST['val-nomorRangka'];
		$nomor_mesin		= $_POST['val-nomorMesin'];
		$bahan_bakar		= $_POST['val-bahanBakar'];
		$jumlah_cc			= $_POST['val-jumlahCC'];
		$transmisi			= $_POST['val-transmisi'];
		$biaya_sewa			= $_POST['val-biayaSewa'];
		$jumlah_penumpang	= $_POST['val-jumlahPenumpang'];
		$gambar_mobil		= $_POST['val-gambarMobil'];
		$gambar_STNK		= $_POST['val-gambarSTNK'];
		$gambar_BPKB		= $_POST['val-gambarBPKB'];
		$id_pemilik			= $this->session->userdata('id'); 
		$id_kota			= $this->session->userdata('id_kota');  

		$data_insert 		= array(
			'nomor_polisi' 	=> $nomor_polisi,
			'id_merk' 			=> $merk_mobil,
			'tipe_mobil'	=> $tipe_mobil,
			'tahun_rakit'	=> $tahun_rakit,
			'nomor_rangka'	=> $nomor_rangka,
			'nomor_mesin'	=> $nomor_mesin,
			'bahan_bakar'	=> $bahan_bakar,
			'jlh_cc' 		=> $jumlah_cc,
			'transmisi'		=> $transmisi,
			'biaya' 		=>$biaya_sewa,
			'jlh_penumpang' =>$jumlah_penumpang,
			'gbr_mobil' 	=>$gambar_mobil,
			'gbr_stnk' 		=>$gambar_STNK,
			'gbr_bpkb' 		=>$gambar_BPKB,
			'id_pemilik'	=>$id_pemilik,
			'id_kota'		=>$id_kota,
		);
		
		$res = $this->m_mobil->insert_data('tb_mobil', $data_insert);
		if($res){
			$this->session->set_flashdata('success_msg', 'Data Berhasil Disimpan');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menyimpan Data');
		}
		redirect(base_url('c_beranda_mitra/dataMobil'));
	}
}
