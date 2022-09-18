<?php 

/**
 * 
 */
class Model_login extends CI_Model
{
	public function cek_login($username,$password)
	{
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		return $this->db->get('admin');
	}
	public $table = 'admin';
	public $id    = 'id';

	public function ambil_data($id)
	{
		$this->db->where('username', $id);
		return	$this->db->get('admin')->row();

	}
	public function get_login_data($user,$pass)
	{
		$u 		=	$user;
		$p 		=	md5($pass);

		$query_cekLogin	=	$this->db->get_where('admin',array('username' => $u,'password' =>$p));

		if (count($query_cekLogin->result()) > 0) {
			foreach ($query_cekLogin->result() as $qck) {
				foreach ($query_cekLogin->result() as $ck ) {
					$sess_data	['logged_in']	=	TRUE;
					$sess_data	['username']	=	$ck->username;
					$sess_data	['password']	=	$ck->password;
					$sess_data	['level']		=	$ck->level;
					$this->session->set_userdata($sess_data);
					redirect('admin/dashboard');
				}
			}
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 						 <strong>Username atau Password Salah!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/auth');
		}
	}
}

 ?>