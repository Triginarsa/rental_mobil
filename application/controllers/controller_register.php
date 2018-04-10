<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_register extends CI_Controller {
	// public function __contruct(){
	// 	parent::__contruct();
	// }

	// public function hlm_daftar(){
	// 	$provinsi= $this->model_register->get_provinsi_query();
	// 	$this->load->view('halaman_daftar_user', array('provinsi' => $provinsi));
	// }

	// public function hlm_daftar_join(){
	// 	$provinsi= $this->model_register->get_provinsi_query();
	// 	$this->load->view('halaman_daftar_join', array('provinsi' => $provinsi));
	// }

	// public function get_kota(){
	// 	$id_provinsi = $this->input->post('id_provinsi');
	// 	$tb_kota = $this->model_register->get_kota_query($id_provinsi);
	// 	if(count($tb_kota)>0){
	// 		$pro_select_box = '';
	// 		$pro_select_box .= '<option value="">Pilih kota Anda</option>';
	// 		foreach ($tb_kota as $kota) {
	// 			$pro_select_box .='<option value="'.$kota->id_kota.'">'.$kota->kota.'</option>';
	// 		}
	// 		echo json_encode($pro_select_box);
	// 	}
	// }

	// public function insert_data(){
	// 	$nama		= $_POST['val-nama'];
	// 	$email		= $_POST['val-email'];
	// 	$pass		= md5($_POST['val-password']);
	// 	$hp			= $_POST['val-phone'];
	// 	$alamat		= $_POST['val-alamat'];
	// 	$kota_id	= $_POST['val-kota'];
	// 	$data_insert = array(
	// 		'nama' => $nama,
	// 		'email' => $email,
	// 		'password' => $pass,
	// 		'no_hp' => $hp,
	// 		'alamat' => $alamat,
	// 		'id_kota' =>$kota_id
	// 	);
	// 	$res = $this->model_register->insert_data('tb_pengguna',$data_insert);
	// 	if($res){
	// 		echo "<h2>Insert Data Berhasil </h2>";
	// 	}else{
	// 		echo "GAGAL";
	// 	}
	// }

	// public function insert_data_join(){
	// 	$nama		= $_POST['val-nama'];
	// 	$nik		= $_POST['val-nik'];
	// 	$email		= $_POST['val-email'];
	// 	$pass		= md5($_POST['val-password']);
	// 	$hp			= $_POST['val-phone'];
	// 	$alamat		= $_POST['val-alamat'];
	// 	$kota_id	= $_POST['val-kota'];
	// 	$data_insert = array(
	// 		'nama' => $nama,
	// 		'nik' => $nik,
	// 		'email' => $email,
	// 		'password' => $pass,
	// 		'no_hp' => $hp,
	// 		'alamat' => $alamat,
	// 		'id_kota' =>$kota_id
	// 	);
	// 	$res = $this->model_register->insert_data('tb_pemilik_mobil',$data_insert);
	// 	if($res>=1){
	// 		echo "<h2>Insert Data sukses </h2>";
	// 	}else{
	// 		echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
	// 	}
	// }
}
