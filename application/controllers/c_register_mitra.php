<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_register_mitra extends CI_Controller {
	public function __contruct(){
		parent::__contruct();
		$this->load->helper(array('form', 'url'));

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
		
		$config['upload_path']          = './uploads';
        $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);


      if (!$this->upload->do_upload('val-gambarMobil','val-gambarBPKB','val-gambarSTNK' )) //jika gagal upload
      {
          $error = $this->upload->display_errors();
			echo "<script>alert('$error');history.go(-1);</script>";
      } else
      //jika berhasil upload
      {
          //dapatkan data file yg d upload
				$upload_data = $this->upload->data();
				$upload_data1 = $this->upload->data();
				$upload_data2 = $this->upload->data();
 
				//dapatkan nama file
				$image = $upload_data['file_name'];
				$image1 = $upload_data1['file_name'];
				$image2 = $upload_data2['file_name'];

				$data = array(
				  "nomor_polisi" => $this->input->post('val-nomorPolisi'),
				  "id_merk" => $this->input->post('val-merkMobil'),
				  "tipe_mobil" => $this->input->post('val-tipeMobil'),
				  "tahun_rakit" => $this->input->post('val-tahunRakit'),
				  "nomor_rangka" => $this->input->post('val-nomorRangka'),
				  "nomor_mesin" => $this->input->post('val-nomorMesin'),
				  "bahan_bakar" => $this->input->post('val-bahanBakar'),
				  "jlh_cc" => $this->input->post('val-jumlahCC'),
				  "transmisi" => $this->input->post('val-transmisi'),
				  "biaya" => $this->input->post('val-biayaSewa'),
				  "jlh_penumpang" => $this->input->post('val-jumlahPenumpang'),
				  "id_pemilik" => $this->session->userdata('id'),
				  "id_kota" => $this->session->userdata('id_kota'),
				  "gbr_stnk" => $this->input->post('val-gambarSTNK'),
				  "gbr_stnk" => $image1,
				  "gbr_mobil" => $this->input->post('val-gambarMobil'),
				  "gbr_mobil" => $image,
				  "gbr_bpkb" => $this->input->post('val-gambarBPKB'),
				  "gbr_bpkb" => $image2
				);

         $this->load->model('m_mobil'); 
          $res = $this->m_mobil->insert_data('tb_mobil', $data);
		if($res){
			$this->session->set_flashdata('success_msg', 'Data Berhasil Disimpan');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menyimpan Data');
		}
		//redirect(site_url('c_beranda_mitra/dataMobil'));
		$id = $this->session->userdata('id');
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_dataMobil($id);
		$this->load->view('/after_login/mitra/halaman_dataMobil_mitra', array('mobil' => $mobil));

      }



		// $this->load->model('m_mobil'); 
		// $nomor_polisi		= $_POST['val-nomorPolisi'];
		// $merk_mobil			= $_POST['val-merkMobil'];
		// $tipe_mobil			= $_POST['val-tipeMobil'];
		// $tahun_rakit		= $_POST['val-tahunRakit'];
		// $nomor_rangka		= $_POST['val-nomorRangka'];
		// $nomor_mesin		= $_POST['val-nomorMesin'];
		// $bahan_bakar		= $_POST['val-bahanBakar'];
		// $jumlah_cc			= $_POST['val-jumlahCC'];
		// $transmisi			= $_POST['val-transmisi'];
		// $biaya_sewa			= $_POST['val-biayaSewa'];
		// $jumlah_penumpang	= $_POST['val-jumlahPenumpang'];
		// $gambar_mobil		= $_POST['val-gambarMobil'];
		// $gambar_STNK		= $_POST['val-gambarSTNK'];
		// $gambar_BPKB		= $_POST['val-gambarBPKB'];
		// $id_pemilik			= $this->session->userdata('id'); 
		// $id_kota			= $this->session->userdata('id_kota');  

		// $data_insert 		= array(
		// 	'nomor_polisi' 	=> $nomor_polisi,
		// 	'id_merk' 			=> $merk_mobil,
		// 	'tipe_mobil'	=> $tipe_mobil,
		// 	'tahun_rakit'	=> $tahun_rakit,
		// 	'nomor_rangka'	=> $nomor_rangka,
		// 	'nomor_mesin'	=> $nomor_mesin,
		// 	'bahan_bakar'	=> $bahan_bakar,
		// 	'jlh_cc' 		=> $jumlah_cc,
		// 	'transmisi'		=> $transmisi,
		// 	'biaya' 		=>$biaya_sewa,
		// 	'jlh_penumpang' =>$jumlah_penumpang,
		// 	'gbr_mobil' 	=>$gambar_mobil,
		// 	'gbr_stnk' 		=>$gambar_STNK,
		// 	'gbr_bpkb' 		=>$gambar_BPKB,
		// 	'id_pemilik'	=>$id_pemilik,
		// 	'id_kota'		=>$id_kota,
		// );
		
		// $res = $this->m_mobil->insert_data('tb_mobil', $data_insert);
		// if($res){
		// 	$this->session->set_flashdata('success_msg', 'Data Berhasil Disimpan');
		// }else{
		// 	$this->session->set_flashdata('error_msg', 'Gagal Menyimpan Data');
		// }
		// //redirect(site_url('c_beranda_mitra/dataMobil'));
		// $id = $this->session->userdata('id');
		// $this->load->model('m_mobil');
		// $mobil = $this->m_mobil->get_dataMobil($id);
		// $this->load->view('/after_login/mitra/halaman_dataMobil_mitra', array('mobil' => $mobil));
	}
}
