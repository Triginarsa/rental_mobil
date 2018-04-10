<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_login extends CI_Model {

		public function cek_user($user_email,$user_pass) {
			$this->db->where('email',$user_email);
			$this->db->where('password',md5($user_pass));
			$cek = $this->db->get('tb_pengguna');
			if($cek->num_rows()>0){
				foreach ($cek->result() as $row) {
					$sess = array('id' => $row->id,
									'nama' => $row->nama,
									'status' => $row->status,
									'email'	=> $row->email,
									'password' => $row->password
					);
					$this->session->set_userdata($sess);
				}
				$this->session->get_userdata($sess);
				if($this->session->userdata('status')=='user'){
					redirect('c_beranda_login');
				}elseif($this->session->userdata('status')=='admin'){
					redirect('welcome');
				}
			}
			else{
				$this->session->set_flashdata('info','Maaf Username dan Password Salah');
				redirect('auth');
			}
		}

		public function cek_user_join($user_email,$user_pass) {
			$this->db->where('email',$user_email);
			$this->db->where('password',md5($user_pass));
			$cek = $this->db->get('tb_pemilik_mobil');
			if($cek->num_rows()>0){
				foreach ($cek->result() as $row) {
					$sess = array('id' => $row->id,
									'nama' => $row->nama,
									'status' => $row->status,
									'email'	=> $row->email,
									'password' => $row->password
					);
					$this->session->set_userdata($sess);
				}
				$this->session->get_userdata($sess);
					redirect('c_beranda_mitra');//halaman user join
			}
			else{
				$this->session->set_flashdata('info','Maaf Username dan Password Salah');
				redirect('auth/mitra_login');
			}
		}
	}
?>