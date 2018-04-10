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
		if($res>=1){
			echo "<h2>Insert Data sukses </h2>";
		}else{
			echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
		}
	}
}
