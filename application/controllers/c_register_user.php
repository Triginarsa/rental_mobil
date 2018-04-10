<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_register_user extends CI_Controller {
	public function __contruct(){
		parent::__contruct();
	}

	public function index(){ //halaman daftar user
		$this->load->model('m_provinsi');
		$provinsi= $this->m_provinsi->get_provinsi_query();
		$this->load->view('/before_login/halaman_daftar_user', array('provinsi' => $provinsi));
	}

	public function insert_data(){ //insert data user
		$nama		= $_POST['val-nama'];
		$email		= $_POST['val-email'];
		$pass		= md5($_POST['val-password']);
		$hp			= $_POST['val-phone'];
		$alamat		= $_POST['val-alamat'];
		$kota_id	= $_POST['val-kota'];
		$data_insert = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $pass,
			'no_hp' => $hp,
			'alamat' => $alamat,
			'id_kota' =>$kota_id
		);
		$res = $this->m_register->insert_data('tb_pengguna',$data_insert);
		if($res){
			echo "<h2>Insert Data Berhasil </h2>";
		}else{
			echo "GAGAL";
		}
	}
}
?>
