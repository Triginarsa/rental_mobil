<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_mobil extends CI_Controller {
	public function __contruct(){
		parent::__contruct();
	}


	public function index(){
		$this->load->view('/after_login/pemilik_mobil/halaman_data_mobil');
	}

	public function hlm_tambah(){
		$this->load->view('/after_login/pemilik_mobil/halaman_tambah_mobil');	
	}

	public function insert_data(){
		$this->load->model('model_mobil'); 
		$nomor_polisi		= $_POST['val-nomorpolisi'];
		$merk_mobil			= $_POST['val-merkmobil'];
		$tipe_mobil			= $_POST['val-tipemobil'];
		$tahun_rakit		= $_POST['val-tahunrakit'];
		$nomor_rangka		= $_POST['val-nomorrangka'];
		$nomor_mesin		= $_POST['val-nomormesin'];
		$bahan_bakar		= $_POST['val-bahanbakar'];
		$jumlah_cc			= $_POST['val-jumlahcc'];
		$transmisi			= $_POST['val-transmisi'];
		$fasilitas			=$_POST['val-fasilitas'];
		$jumlah_penumpang	=$_POST['val-fasilitas'];
		$biaya_sewa			=$_POST['val-biayasewa'];
		$gambar_mobil		= $_POST['gambar-mobil'];
		$data_insert 		= array(
			'nomor_polisi' => $nomor_polisi,
			'merk' => $merk_mobil,
			'tipe_mobil' => $tipe_mobil,
			'tahun_rakit' => $tahun_rakit,
			'nomor_rangka' => $nomor_rangka,
			'nomor_mesin' => $nomor_mesin,
			'bahan_bakar' => $bahan_bakar,
			'jlh_cc' => $jumlah_cc,
			'transmisi' => $transmisi,
			'fasilitas' => $fasilitas,
			'jumlah_penumpang' =>$jumlah_penumpang,
			'biaya' =>$biaya_sewa,
			'gambar' =>$gambar_mobil
		);
		$res = $this->model_mobil->insert_data('tb_mobil',$data_insert);
		if($res>=1){
			echo "<h2>Insert Data sukses </h2>";
		}else{
			echo "<h2>Insert Data GAGAL </h2>";
		}
		
		
	}

}
