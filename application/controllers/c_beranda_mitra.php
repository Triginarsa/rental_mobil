<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_mitra extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(! $this->session->userdata('id')){
			redirect('auth_mitra');
		}elseif($this->session->userData('status') == 'user'){
			echo "<script>;history.go(-1);</script>";
		}elseif($this->session->userData('status') == 'admin'){
			echo "<script>;history.go(-1);</script>";
		}
	}
	
	public function index(){
		$this->load->view('/after_login/mitra/halaman_beranda_mitra'); //halaman beranda mitra
	}

	public function dataMobil(){
		$this->load->model('m_mobil');
		$data['mobils'] = $this->m_mobil->get_dataMobil();
		// $datamerk[mobils] = $this->m_mobil->get_merkMobil_query();
		// $datatipe[mobils] = $this->m_mobil->get_tipeMobil_query();
		// $databiaya[mobils] = $this->m_mobil->get_biayaSewa_query();
		// $datatransmisi[mobils] = $this->m_mobil->get_transmisi_query();
		// $databahanbakar[mobils] = $this->m_mobil->get_bahanBakar_query();
		// $datajumlahpenumpang[mobils] = $this->m_mobil->get_jumlahPenumpang_query();
		$this->load->view('/after_login/mitra/halaman_dataMobil_mitra', $data);  //halaman data mobil mitra
	}

	public function tambahMobil(){

		$this->load->model('m_merk');
		$merk= $this->m_merk->get_merk_query();
		$this->load->view('/after_login/mitra/halaman_tambahMobil_mitra', array('merk' => $merk));
		 
	}

	public function insert_data(){
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
			'merk' 			=> $merk_mobil,
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


	public function editMobil($id){
		$this->load->model('m_mobil');
		// $this->load->model('m_merk');
		// $merk= $this->m_merk->get_merk_query();	
		$data['mobils'] = $this->m_mobil->getMobilById($id);
		$this->load->view('/after_login/mitra/halaman_editMobil_mitra', $data);

	}

	public function deleteMobil($id){
		$this->load->model('m_mobil');
		$res = $this->m_mobil->delete($id);
		if($res){
			$this->session->set_flashdata('success_msg', 'Data Berhasil Dihapus');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menghapus Data');
		}
		redirect(base_url('c_beranda_mitra/dataMobil'));
	}


}
