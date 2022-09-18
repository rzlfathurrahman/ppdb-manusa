<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ppdb extends CI_Model {

	public $id    = 'kode_pendaftaran';
	public $table = 'peserta';

	public function tampil_data($table)
	{
		return $this->db->get($table); 
	}
	public function up_biodata($kode_pendaftaran,$data)
	{
		$this->db->where('kode_pendaftaran',$kode_pendaftaran);
		$this->db->update('peserta',$data);
	}
	public function up_nilai($kode_pendaftaran,$data)
	{
		$this->db->where('kode_pendaftaran',$kode_pendaftaran);
		$this->db->update('peserta',$data);
	}
	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function ambil_kode_pendaftaran($id)
	{
		$hasil = $this->db->where('kode_pendaftaran',$id)->get('peserta');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		}else{
			return false;
		}
	}
	public function kode()
	{
		$this->db->select('RIGHT(peserta.kode_pendaftaran,2) as kode_pendaftaran',FALSE);
		$this->db->order_by('kode_pendaftaran', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('peserta');

		if ($query->num_rows() <> 0) {
			//Cek Kode Jika Tersedia
			$data = $query->row();
			$kode = intval($data->kode_pendaftaran) + 1; 
		}else{
			$kode = 1;
		}
		$batas = str_pad($kode, 3 ,"0", STR_PAD_LEFT);
		$kodeTampil = "PPDB"."MRF-".$batas; //format kode
		return $kodeTampil;
 
	}
	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->like('nama_lengkap',$keyword);
		$this->db->or_like('kode_pendaftaran', $keyword);
		$this->db->or_like('no_hp', $keyword);
		$this->db->or_like('nis', $keyword);
		$this->db->or_like('alamat',$keyword);
		$this->db->or_like('asal_sekolah',$keyword);
		$this->db->or_like('tmp_lahir',$keyword);
		$this->db->or_like('tgl_lahir',$keyword);
		$this->db->or_like('jk',$keyword);
		return $this->db->get()->result();	
	}

}

/* End of file Model_ppdb.php */
/* Location: ./application/models/Model_ppdb.php */