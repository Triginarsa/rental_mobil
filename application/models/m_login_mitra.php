<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_login_mitra extends CI_Model {

		public function cek_db_mitra($user_email,$user_pass) {
			$this->db->where('email',$user_email);
			$this->db->where('password',md5($user_pass));
			$cek = $this->db->get('tb_pemilik_mobil');
			if($cek->num_rows()>0){
				foreach ($cek->result() as $row) {
					$sess = array('id' => $row->id,
									'nama' => $row->nama,
									'status' => $row->status,
									'email'	=> $row->email,
									'password' => $row->password,
									'id_kota' => $row->id_kota
					);
					$this->session->set_userdata($sess);
				}
				$this->session->get_userdata($sess);
					redirect('c_beranda_mitra');//halaman beranda mitra
			}
			else{
				$this->session->set_flashdata('info','Maaf Email atau Password Salah');
				redirect('auth_mitra'); //halaman login mitra
			}
		}
	}
?>