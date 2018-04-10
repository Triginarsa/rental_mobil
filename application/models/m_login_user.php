<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_login_user extends CI_Model {

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
					redirect('c_beranda_login'); //masuk ke halaman beranda user
				}elseif($this->session->userdata('status')=='admin'){
					redirect('c_beranda_admin'); //masuk ke halaman beranda admin
				}
			}
			else{
				$this->session->set_flashdata('info','Maaf Email atau Password Salah');
				redirect('auth_user'); //masuk ke halaman login user/admin
			} 
		}
	}
?>