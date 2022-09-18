<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	function __construct()
	{
		parent ::__construct();
		if (!isset($this->session->userdata['username'])) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Anda Belum Login!</strong>
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		    	</button>
			</div>');
			redirect('admin/auth');
		}
	}

	public function index()
	{
		$data['users'] = $this->model_users->tampil_data('admin')->result();
		$data['halaman'] = 'admin/users';
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('admin/users',$data);
		$this->load->view('templates/footer');
	}
	public function tambah_users()
	{
		$data = array(
			'username' => set_value('username'),
			'password' => set_value('password'),
			'level'    => set_value('level')
		);
		$data['halaman'] = 'admin/users/tambah';

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('admin/users_form',$data);
		$this->load->view('templates/footer');
	}
	public function tambah_users_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_users();
		}else{
			$data = array(
				'username' 	  => $this->input->post('username',TRUE),
				'password' 	  => md5($this->input->post('password',TRUE)),
				'level' 	  => $this->input->post('level',TRUE),
				'id_sessions' => md5($this->input->post('id_sessions',TRUE))
			);

			$this->model_users->insert_data($data,'admin');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Data Berhasil Ditambah!</h5>
                </div>');
			redirect('admin/users');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('username', 'username', 'required',['required' => 'Username Wajib Diisi']);
		$this->form_validation->set_rules('password', 'password', 'required',['required' => 'Password Wajib Diisi']);
	}
	public function update($id)
	{
		$where = array('id_admin' => $id);
		$data['users'] = $this->model_users->edit_data($where,'admin')->result();
		$data['halaman'] = 'admin/users/update'; 

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('admin/users_update',$data);
		$this->load->view('templates/footer');
	}
	public function update_aksi()
	{
		$id 		= $this->input->post('id_admin');
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$level 		= $this->input->post('level');
		$id_sessions= $this->input->post('id_sessions');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'level'    => $level,
			'id_sessions' => $id_sessions 
		);

		$where = array('id_admin' => $id);

		$this->model_users->update_data($where,$data,'admin');
		$this->session->set_flashdata('pesan',' <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Data Berhasil Diupdate!</h5>
                </div>');
		redirect('admin/users');
	}
	public function delete($id)
	{
		$where = array('id_admin' => $id);
		$this->model_users->hapus_data($where,'admin');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Data Berhasil Dihapus!</h5>
                </div>');
		redirect('admin/users');
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */