<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_nilai extends CI_Model {

	public $id    = 'id';
	public $table = 'nilai';

	public function tampil_data($table)
	{
		return $this->db->get($table); 
	}
	public function update_data($kode_pendaftaran,$data)
	{
		$this->db->where('kode_pendaftaran',$kode_pendaftaran);
		$this->db->update('nilai',$data);
	}
	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function ambil_kode_pendaftaran($id)
	{
		$hasil = $this->db->where('kode_pendaftaran',$id)->get('nilai');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		}else{
			return false;
		}
	}

}

/* End of file Model_ppdb.php */
/* Location: ./application/models/Model_ppdb.php */