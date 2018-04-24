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

	public function dataMobil($id){
		$this->load->model('m_mobil');
		$mobil = $this->m_mobil->get_dataMobil($id);
		$this->load->view('/after_login/mitra/halaman_dataMobil_mitra', array('mobil' => $mobil));  //halaman data mobil mitra
	}

	public function tambahMobil(){
		$this->load->model('m_merk');
		$merk= $this->m_merk->get_merk_query();
		$this->load->view('/after_login/mitra/halaman_tambahMobil_mitra', array('merk' => $merk));
	}

	public function editMobil($id){
		$this->load->model('m_mobil');
		// $this->load->model('m_merk');
		// $merk= $this->m_merk->get_merk_query();	
		$data['mobils'] = $this->m_mobil->getMobilById($id);
		$this->load->view('/after_login/mitra/halaman_editMobil_mitra', $data);
	}

	public function updateMobil($id){
		$config['upload_path']          = './uploads';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('val-gambarMobil')) //jika gagal upload
      	{
        	$error = $this->upload->display_errors();
			echo "<script>alert('$error');history.go(-1);</script>";
      	} else{
      		$upload_data = $this->upload->data();
      		$image = $upload_data['file_name'];
      		$data = array(
      			"gbr_mobil" => $this->input->post('val-gambarMobil'),
      			"gbr_mobil" =>$image,
      			"biaya" => $this->input->post('val-biayaSewa')
      		);
      	}
		$this->load->model('m_mobil');
		$this->m_mobil->m_update($id, $data);
		
		redirect(base_url('c_beranda_mitra/dataMobil/'.$this->session->userdata('id')));
	}

	public function deleteMobil($id){
		$this->load->model('m_mobil');
		$res = $this->m_mobil->delete($id);
		if($res){
			$this->session->set_flashdata('success_msg', 'Data Berhasil Dihapus');
		}else{
			$this->session->set_flashdata('error_msg', 'Gagal Menghapus Data');
		}
		redirect(base_url('c_beranda_mitra/dataMobil/'.$this->session->userdata('id')));
	}

	public function validasiOrder($id){
		$this->load->model('m_mitra');
		$dvalid= $this->m_mitra->get_dataOrder($id);
		$this->load->view('/after_login/mitra/halaman_validasi_order', array('dvalid' => $dvalid)); //halaman data mobil mitra
	}


}
